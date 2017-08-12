<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_lists".
 *
 * @property integer $id
 * @property string $site
 * @property string $product_name
 * @property string $site_url
 * @property string $product_url
 * @property string $content
 * @property double $price
 */
class ProductList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_lists';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['price'], 'number'],
            [['site', 'site_url', 'product_url'], 'string', 'max' => 200],
            [['product_name'], 'string', 'max' => 100],
            [['product_name'], 'validateProductDouble'],
        ];
    }
    
    public function validateProductDouble($attribute,$params,$validator){
    	$isExistBefore = ProductList::findAll([
    		'site'=>$this->site,
    		'product_name'=>$this->product_name
	    ]);
    	if(count($isExistBefore)){
    		$this->addError($attribute, "Exists, Not Going To Add"+count($isExistBefore));
	    }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site' => 'Site',
            'product_name' => 'Product Name',
            'site_url' => 'Site Url',
            'product_url' => 'Product Url',
            'content' => 'Content',
            'price' => 'Price',
        ];
    }
}
