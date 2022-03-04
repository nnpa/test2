<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    

    <div class="body-content">

        <?php foreach($authors as $author):?>
            id: <?php echo $author->id;?> <br>
            name: <?php echo $author->name;?> <br>
            books: 
            <?php foreach($author->getBooks() as $book):?>
                <?php echo $book->name;?>  
            <?php endforeach;?>
            <hr>
        <?php endforeach;?>

    </div>
</div>
