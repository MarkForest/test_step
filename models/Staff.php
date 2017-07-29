<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_of_birth
 * @property string $created_at
 * @property string $updated_at
 * @property integer $status
 *
 * @property StaffCities[] $staffCities
 * @property StaffEmails[] $staffEmails
 * @property Emails[] $emails
 * @property StaffPhones[] $staffPhones
 * @property Phones[] $phones
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created_at', 'updated_at'], 'required'],
            [['date_of_birth', 'created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date_of_birth' => 'Date Of Birth',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffCities()
    {
        return $this->hasMany(StaffCities::className(), ['staff__id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffEmails()
    {
        return $this->hasMany(StaffEmails::className(), ['staff__id' => 'id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmails()
    {
        return $this->hasMany(Emails::className(), ['id' => 'emails__id'])->viaTable('staff_emails', ['staff__id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaffPhones()
    {
        return $this->hasMany(StaffPhones::className(), ['staff__id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhones()
    {
        return $this->hasMany(Phones::className(), ['id' => 'phones__id'])->viaTable('staff_phones', ['staff__id' => 'id']);
    }

    /**
     * Метод оприделяющий связь с таблицей Cities через промежуточную таблицу staff_cities
     */
    public function getCities()
    {
        return $this->hasMany(Cities::className(), ['id' => 'cities__id'])->viaTable('staff_cities', ['staff__id' => 'id']);
    }


    public static function calculate_age($birthday) {
        $birthday_timestamp = strtotime($birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }
        return $age;
    }

}
