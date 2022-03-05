<?php

namespace app\models;
use app\models\Book;
use Yii;

/**
 * This is the model class for table "Author".
 *
 * @property int $id
 * @property string $name
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }
    
    public function getBooksCount()
    {
        $bookCount = Book::find()
                ->where(['author_id' => $this->id])
                ->count();
        return $bookCount;
    }
    
    public function getBooks()
    {
        $books = Book::find()
                ->where(['author_id' => $this->id])
                ->all();
        return $books;
    }
}
