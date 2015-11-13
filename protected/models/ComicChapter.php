<?php

/**
 * This is the model class for table "comic_chapter".
 *
 * The followings are the available columns in table 'comic_chapter':
 * @property string $id
 * @property integer $comic_id
 * @property integer $status
 * @property integer $audit
 * @property integer $chapter_type
 * @property string $chapter_subject
 * @property double $chapter_order
 * @property string $translator
 * @property integer $hit
 * @property string $create_user
 * @property string $create_time
 * @property string $modify_user
 * @property string $modify_time
 */
class ComicChapter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comic_chapter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comic_id, chapter_subject, chapter_order, translator, hit, create_user, create_time, modify_user, modify_time', 'required'),
			array('comic_id, status, audit, chapter_type, hit', 'numerical', 'integerOnly'=>true),
			array('chapter_order', 'numerical'),
			array('chapter_subject, translator', 'length', 'max'=>255),
			array('create_user, modify_user', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, comic_id, status, audit, chapter_type, chapter_subject, chapter_order, translator, hit, create_user, create_time, modify_user, modify_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'comic_id' => 'Comic',
			'status' => 'Status',
			'audit' => 'Audit',
			'chapter_type' => 'Chapter Type',
			'chapter_subject' => 'Chapter Subject',
			'chapter_order' => 'Chapter Order',
			'translator' => 'Translator',
			'hit' => 'Hit',
			'create_user' => 'Create User',
			'create_time' => 'Create Time',
			'modify_user' => 'Modify User',
			'modify_time' => 'Modify Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('comic_id',$this->comic_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('audit',$this->audit);
		$criteria->compare('chapter_type',$this->chapter_type);
		$criteria->compare('chapter_subject',$this->chapter_subject,true);
		$criteria->compare('chapter_order',$this->chapter_order);
		$criteria->compare('translator',$this->translator,true);
		$criteria->compare('hit',$this->hit);
		$criteria->compare('create_user',$this->create_user,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('modify_user',$this->modify_user,true);
		$criteria->compare('modify_time',$this->modify_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ComicChapter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
