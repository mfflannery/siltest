<?php

use Sil\DevPortal\models\Key;

/* @var $this \Sil\DevPortal\controllers\KeyController */
/* @var $actionLinks \ActionLink[] */
/* @var $key Key */
/* @var $currentUser \Sil\DevPortal\models\User */

// Set up the breadcrumbs.
$this->breadcrumbs += array(
    'Keys' => array('/key/'),
    'Key Details',
);

$this->pageTitle = 'Key Details';

?>
<div class="row">
    <div class="span7">
        <?php
        $this->renderPartial('//partials/key-info', array(
            'key' => $key,
            'currentUser' => $currentUser,
        ));
        ?>
    </div>
    <div class="span4">
        <?php
        
        if ($currentUser->canApproveKey($key)) {
            
            // Provide a way for this admin user to grant/deny the request.
            ?>
            <h3>Actions</h3>
            <p>What do you want to do with this key? </p>
            <?php $form = $this->beginWidget('CActiveForm'); ?>
                <dl>
                    <dd>
                        <?= \CHtml::submitButton('Grant a Key', array(
                            'name' => Key::STATUS_APPROVED,
                            'class' => 'btn btn-primary',
                        )); ?>
                    </dd>
                    <dd>
                        <?= \CHtml::submitButton('Deny the Request', array(
                            'name' => Key::STATUS_DENIED,
                            'class' => 'btn btn-danger',
                        )); ?>
                    </dd>
                </dl>
                <?php //echo \CHtml::errorSummary($key); ?>
            <?php
            $this->endWidget();
            
        } else {
            
            // Otherwise, show any (normal) action links.
            echo LinksManager::generateActionsDropdownHtml($actionLinks);
        }

        ?>
    </div>
</div>
