<?php

namespace app\models\db;

/**
 * This is the model class for table "posts".
 *
 * @property int         $id
 * @property string      $title
 * @property string      $description
 * @property string|null $image
 * @property int         $views
 * @property int         $likes
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'title',
                    'description',
                ],
                'required',
            ],
            [
                ['description'],
                'string',
            ],
            [
                [
                    'views',
                    'likes',
                ],
                'integer',
            ],
            [
                [
                    'title',
                    'image',
                ],
                'string',
                'max' => 255,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'          => 'ID',
            'title'       => 'Название',
            'description' => 'Описание',
            'image'       => 'Картинка',
            'views'       => 'Просмотры',
            'likes'       => 'Лайки',
        ];
    }
}
