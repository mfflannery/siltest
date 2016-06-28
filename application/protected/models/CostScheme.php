<?php

class CostScheme extends CostSchemeBase
{
    public function afterDelete()
    {
        parent::afterDelete();
        
        $nameOfCurrentUser = \Yii::app()->user->getDisplayName();
        \Event::log(sprintf(
            'Cost Scheme %s was deleted%s.',
            $this->cost_scheme_id,
            (is_null($nameOfCurrentUser) ? '' : ' by ' . $nameOfCurrentUser)
        ));
    }
    
    public function afterSave()
    {
        parent::afterSave();
        
        $nameOfCurrentUser = \Yii::app()->user->getDisplayName();
        
        \Event::log(sprintf(
            'Cost Scheme %s was %s%s.',
            $this->cost_scheme_id,
            ($this->isNewRecord ? 'created' : 'updated'),
            (is_null($nameOfCurrentUser) ? '' : ' by ' . $nameOfCurrentUser)
        ));
    }
    
    /**
     * Validate that at least one of the price fields has a (non-zero) value.
     * 
     * @param string $attribute The name of the attribute to be validated.
     * @param array $params The options specified in the validation rule.
     */
    public function hasAtLeastOnePrice($attribute, $params)
    {
        if (empty($params['priceFields'])) {
            throw new \Exception(
                'You must specify the list (array) of priceFields to use the hasAtLeastOnePrice validator.',
                1465233329
            );
        }
        
        $foundAtLeastOne = false;
        foreach ($params['priceFields'] as $priceField) {
            if ( ! $this->hasAttribute($priceField)) {
                throw new \Exception(
                    'The hasAtLeastOnePrice validator\'s list of priceFields included "%s", '
                    . 'but there is no such attribute.',
                    1465234845
                );
            }
            
            if (is_numeric($this->$priceField) && ($this->$priceField > 0)) {
                $foundAtLeastOne = true;
            }
        }
        
        if ( ! $foundAtLeastOne) {
            $priceFieldLabels = array();
            foreach ($params['priceFields'] as $priceField) {
                $priceFieldLabels[] = $this->getAttributeLabel($priceField);
            }
            $this->addError($attribute, sprintf(
                'You must provide a price (greater than zero) for at least one of the following: %s',
                "\n" . implode(", \n", $priceFieldLabels)
            ));
        }
    }
    
    /**
     * Validate that either both of the named attributes have a non-null value
     * or neither does.
     * 
     * @param string $attribute The name of the attribute to be validated.
     * @param array $params The options specified in the validation rule.
     */
    public function hasBothOrNeither($attribute, $params)
    {
        if (empty($params['otherAttribute'])) {
            throw new \Exception(
                'You must specify the otherAttribute name to use the hasBothOrNeither validator.',
                1465228147
            );
        } elseif ( ! $this->hasAttribute($params['otherAttribute'])) {
            throw new \Exception(
                'The hasBothOrNeither validator was given an otherAttribute of "%s", '
                . 'but there is no such attribute.',
                1465235006
            );
        }
        
        $otherAttribute = $params['otherAttribute'];
        
        $attributeLabel = $this->getAttributeLabel($attribute);
        $otherAttributeLabel = $this->getAttributeLabel($otherAttribute);
        
        $hasAttributeValue = ( ! empty($this->$attribute));
        $hasOtherAttributeValue = ( ! empty($this->$otherAttribute));
        
        if ($hasAttributeValue && ( ! $hasOtherAttributeValue)) {
            $this->addError($otherAttribute, sprintf(
                'Since you provided a %s, you must also provide a %s.',
                $attributeLabel,
                $otherAttributeLabel
            ));
        } elseif ($hasOtherAttributeValue && ( ! $hasAttributeValue)) {
            $this->addError($attribute, sprintf(
                'Since you provided a(n) %s, you must also provide a(n) %s.',
                $otherAttributeLabel,
                $attributeLabel
            ));
        }
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return CostScheme the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        /* Apply custom validation rules before base class (autogenerated)
         * validation rules.  */
        return \CMap::mergeArray(array(
            array(
                'yearly_commercial_price',
                'hasBothOrNeither',
                'otherAttribute' => 'yearly_commercial_plan_code',
            ),
            array(
                'yearly_nonprofit_price',
                'hasBothOrNeither',
                'otherAttribute' => 'yearly_nonprofit_plan_code',
            ),
            array(
                'monthly_commercial_price',
                'hasBothOrNeither',
                'otherAttribute' => 'monthly_commercial_plan_code',
            ),
            array(
                'monthly_nonprofit_price',
                'hasBothOrNeither',
                'otherAttribute' => 'monthly_nonprofit_plan_code',
            ),
            array(
                'yearly_commercial_price',
                'hasAtLeastOnePrice',
                'priceFields' => array(
                    'yearly_commercial_price',
                    'yearly_nonprofit_price',
                    'monthly_commercial_price',
                    'monthly_nonprofit_price',
                ),
            ),
        ), parent::rules());
    }
}
