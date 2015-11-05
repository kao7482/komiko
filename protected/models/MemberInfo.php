<?php

/**
 * This is the model class for table "member_info".
 *
 * The followings are the available columns in table 'member_info':
 * @property integer $uid
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $mgroupid
 * @property integer $sgroupid
 * @property integer $experience1
 * @property integer $experience2
 * @property integer $experience3
 * @property string $introduction
 * @property string $log_ip
 * @property string $log_time
 * @property string $last_log_ip
 * @property string $last_log_time
 * @property string $create_user
 * @property string $create_time
 * @property string $modify_user
 * @property string $modify_time
 */
class MemberInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, mgroupid, sgroupid, experience1, experience2, experience3, introduction, log_ip, log_time, last_log_ip, last_log_time, create_user, create_time, modify_user, modify_time', 'required'),
			array('mgroupid, sgroupid, experience1, experience2, experience3', 'numerical', 'integerOnly'=>true),
			array('username, create_user, modify_user', 'length', 'max'=>15),
			array('password, log_ip, last_log_ip', 'length', 'max'=>32),
			array('email', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, username, password, email, mgroupid, sgroupid, experience1, experience2, experience3, introduction, log_ip, log_time, last_log_ip, last_log_time, create_user, create_time, modify_user, modify_time', 'safe', 'on'=>'search'),
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
			'uid' => 'UID',
			'username' => '用户名',
			'password' => '密码',
			'email' => 'Email',
			'mgroupid' => 'Mgroupid',
			'sgroupid' => 'Sgroupid',
			'experience1' => 'Experience1',
			'experience2' => 'Experience2',
			'experience3' => 'Experience3',
			'introduction' => 'Introduction',
			'log_ip' => '注册IP',
			'log_time' => '注册时间',
			'last_log_ip' => '最后登录IP',
			'last_log_time' => '最后登录时间',
			'create_user' => '创建人',
			'create_time' => '创建时间',
			'modify_user' => '修改人',
			'modify_time' => '修改时间',
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

		$criteria->compare('uid',$this->uid);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mgroupid',$this->mgroupid);
		$criteria->compare('sgroupid',$this->sgroupid);
		$criteria->compare('experience1',$this->experience1);
		$criteria->compare('experience2',$this->experience2);
		$criteria->compare('experience3',$this->experience3);
		$criteria->compare('introduction',$this->introduction,true);
		$criteria->compare('log_ip',$this->log_ip,true);
		$criteria->compare('log_time',$this->log_time,true);
		$criteria->compare('last_log_ip',$this->last_log_ip,true);
		$criteria->compare('last_log_time',$this->last_log_time,true);
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
	 * @return MemberInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
