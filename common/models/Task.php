<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tasks".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $task
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'confirm'], 'integer'],
            [['name', 'email', 'task'], 'string', 'max' => 255 ],
            [['name', 'email', 'task'], 'required' ],
            ['email', 'email'],
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'confirm' => 'Confirm',
            'task' => 'Task',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function getTasks()
    {
        return Task::find();
    }
}
