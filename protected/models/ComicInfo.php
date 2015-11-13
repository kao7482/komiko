<?php

/**
 * This is the model class for table "comic_info".
 *
 * The followings are the available columns in table 'comic_info':
 * @property string $id
 * @property integer $status
 * @property integer $audit
 * @property integer $type
 * @property string $kind_ids
 * @property string $tag
 * @property integer $tagoc
 * @property string $source
 * @property string $subject_cn
 * @property string $subject_tw
 * @property string $subject_jp
 * @property string $subject_og
 * @property string $subject_en
 * @property string $area
 * @property string $author
 * @property string $translator
 * @property string $date
 * @property string $cover
 * @property string $introduction
 * @property integer $hit
 * @property integer $ghit
 * @property string $memo
 * @property string $create_user
 * @property string $create_time
 * @property string $modify_user
 * @property string $modify_time
 */
class ComicInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comic_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, kind_ids, tag, source, subject_cn, subject_tw, subject_jp, subject_og, subject_en, area, author, translator, date, cover, introduction, hit, ghit, memo, create_user, create_time, modify_user, modify_time', 'required'),
			array('status, audit, type, tagoc, hit, ghit', 'numerical', 'integerOnly'=>true),
			array('kind_ids, source, subject_cn, subject_tw, subject_jp, subject_og, subject_en, cover, memo', 'length', 'max'=>255),
			array('area', 'length', 'max'=>20),
			array('author, translator', 'length', 'max'=>50),
			array('create_user, modify_user', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, status, audit, type, kind_ids, tag, tagoc, source, subject_cn, subject_tw, subject_jp, subject_og, subject_en, area, author, translator, date, cover, introduction, hit, ghit, memo, create_user, create_time, modify_user, modify_time', 'safe', 'on'=>'search'),
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
			'status' => 'Status',
			'audit' => 'Audit',
			'type' => 'Type',
			'kind_ids' => 'Kind Ids',
			'tag' => 'Tag',
			'tagoc' => 'Tagoc',
			'source' => 'Source',
			'subject_cn' => 'Subject Cn',
			'subject_tw' => 'Subject Tw',
			'subject_jp' => 'Subject Jp',
			'subject_og' => 'Subject Og',
			'subject_en' => 'Subject En',
			'area' => 'Area',
			'author' => 'Author',
			'translator' => 'Translator',
			'date' => 'Date',
			'cover' => 'Cover',
			'introduction' => 'Introduction',
			'hit' => 'Hit',
			'ghit' => 'Ghit',
			'memo' => 'Memo',
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
		$criteria->compare('status',$this->status);
		$criteria->compare('audit',$this->audit);
		$criteria->compare('type',$this->type);
		$criteria->compare('kind_ids',$this->kind_ids,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('tagoc',$this->tagoc);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('subject_cn',$this->subject_cn,true);
		$criteria->compare('subject_tw',$this->subject_tw,true);
		$criteria->compare('subject_jp',$this->subject_jp,true);
		$criteria->compare('subject_og',$this->subject_og,true);
		$criteria->compare('subject_en',$this->subject_en,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('translator',$this->translator,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('cover',$this->cover,true);
		$criteria->compare('introduction',$this->introduction,true);
		$criteria->compare('hit',$this->hit);
		$criteria->compare('ghit',$this->ghit);
		$criteria->compare('memo',$this->memo,true);
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
	 * @return ComicInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
