<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Blog".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $text
 * @property string $url
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'url'], 'required'],
            [['user_id'], 'integer'],
            [['url'], 'unique'],
            [['text'], 'string'],
            [['title', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'url' => 'Ссылка',
        ];
    }
    public function getAuthor() {
        return $this->hasOne(User::className(), ['id'=>'user_id']);
    }

}
