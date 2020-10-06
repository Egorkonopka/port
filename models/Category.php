<?php

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord{

	public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

	public static function primaryKey()
      {
          return ['id'];
      }

	public static function tableName(){
		return 'category';
	}

	public function getProducts(){
		return $this->hasMany(Product::className(),['category_id' => 'id']);
	}
  // public static function getDb()
  //   {
  //               $s=Yii::$app->request->hostInfo;
  //               $s= substr($s, 7);   

  //       if($s=='192.168.15.15')
  //           return Yii::$app->get('db_pg_dn_energo');
  //       if($s=='192.168.17.1')
  //           return Yii::$app->get('db_pg_gv_energo');
  //   }
}