<?php

class Post extends CActiveRecord
{
	/**
     * The followings are the available columns in table 'mb_post':
     * @var integer $id
     * @var string $content
     * @var string $author
     * @var date $date
     */

	/**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
     * @return string the associated database table name
     */
	public function tableName()
	{
		return '{{post}}';
	}

	/**
     * @return array validation rules for model attributes.
     */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content, author, date', 'required'),
			array('content', 'length', 'max'=>1000),
			array('author', 'length', 'max'=>50)
		);
	}

	/**
     * @return array customized attribute labels (name=>label)
     */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'content' => 'Content',
			'author' => 'Author',
			'date' => 'Date Submitted',
		);
	}    
}