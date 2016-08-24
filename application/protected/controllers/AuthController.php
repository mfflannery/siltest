<?php

use Sil\DevPortal\components\AuthManager;
use Stringy\StaticStringy as SS;

class AuthController extends Controller
{
    /**
     * The HybridAuth endpoint, needed for authentications managed by
     * HybridAuth.
     */
    public function actionHybridEndpoint()
    {
        \Hybrid_Endpoint::process();
    }
    
    public function actionLogin($authType = null)
    {
        $authManager = new AuthManager();
        
        /* If there is no return-to already defined and the user came from
         * somewhere (other than the auth controller) on this website, send
         * them back to the page they came from.  */
        if (\Yii::app()->user->getReturnUrl() === '/') {
            $referrer = \Yii::app()->request->getUrlReferrer();
            $absoluteUrlForThisWebsite = SS::ensureRight(\Yii::app()->getBaseUrl(true), '/');
            $authControllerUrl = $absoluteUrlForThisWebsite . 'auth/';
            if ($referrer &&
                SS::startsWith($referrer, $absoluteUrlForThisWebsite) &&
                ( ! SS::startsWith($referrer, $authControllerUrl))) {
                \Yii::app()->user->setReturnUrl($referrer);
            }
        }

        if ($authType === null) {
            if ($authManager->canUseMultipleAuthTypes()) {
                
                // If multiple auth. types are available, ask the user which to
                // use.
                $this->redirect(['auth/login-options']);
                
            } else {
                
                // Otherwise, if there is an obvious default auth. type
                // available, redirect the user as though they had specified
                // that one.
                $defaultAuthType = $authManager->getDefaultAuthType();
                if ($defaultAuthType !== null) {
                    $this->redirect([
                        'auth/login',
                        'authType' => $defaultAuthType,
                    ]);
                }
            }
        }
        
        try {
            $identity = $authManager->getIdentityForAuthType($authType);
        } catch (\InvalidArgumentException $e) {
            \Yii::log($e->getMessage());
            throw new \CHttpException(
                404,
                'Oops! That is not one of the ways we allow people to log in. '
                . 'Please go back to the normal login page and try again.',
                1441909330
            );
        }
        
        /* Attempt to authenticate the user (which may itself involve
        /* redirecting the user to log in somewhere).  */
        if ($identity->authenticate()) {
            \Yii::app()->user->login($identity);
            $this->redirect(\Yii::app()->user->getReturnUrl());
        } else {

            if ($identity->errorMessage) {
                \Yii::app()->user->setFlash(
                    'error',
                    sprintf(
                        '<div><p><b>Error!</b></p></div>'
                        . '<div>%s</div> '
                        . '<div><p>If you believe this is a mistake, please '
                        . '<a href="mailto:%s">contact us</a>.</p></div>',
                        \CHtml::encode($identity->errorMessage),
                        \CHtml::encode(\Yii::app()->params['adminEmail'])
                    )
                );
            }
            $this->redirect(\Yii::app()->homeUrl);
        }
    }
    
    public function actionLoginOptions()
    {
        $authManager = new AuthManager();
        
        $loginOptions = array();
        if ($authManager->isAuthTypeEnabled('saml')) {
            $loginOptions['Insite'] = $this->createUrl('auth/login', array(
                'authType' => 'saml',
            ));
        }
        if ($authManager->isAuthTypeEnabled('hybrid')) {
            $loginOptions['Google'] = $this->createUrl('auth/login', array(
                'authType' => 'hybrid',
            ));
        }
        
        $this->render('login-options', array(
            'loginOptions' => $loginOptions,
        ));
    }

    //public function actionTestLogin()
    //{           
    //
    //    yii::log('actionTestLogin: role1 = ' .Yii::app()->user->getRole() . '<<', 'debug');      
    //    $identity = new TestUserIdentity('guest', '');//, Yii::app()->user);
    //    $identity->authenticate();      
    //    Yii::app()->user->login($identity);
    //    //yii::log('actionTestLogin: role2 = ' .Yii::app()->user->getRole() . '<<', 'debug');
    //
    //    Yii::app()->request->redirect(Yii::app()->user->returnUrl);
    //}
    
    public function actionLogout()
    {
        $webUser = \Yii::app()->user;
        $authType = $webUser->getAuthType();
        $authProvider = $webUser->getAuthProvider();
        
        $authManager = new AuthManager();
        $authManager->logout($webUser);
        
        // If logging out didn't redirect the user, show them a logged out
        // screen with the appropriate message based in which authentication
        // service they used to log in.
        $this->render('logged-out', array(
            'messageHtml' => $authManager->getLoggedOutMessageHtml(
                $authType,
                $authProvider
            ),
        ));
    }
    
    public function actionIdentity()
    {
        if(!Yii::app()->user->isGuest){
            $this->render('identity');
        } else {
            $this->redirect('/');
        }
        
    }
}
