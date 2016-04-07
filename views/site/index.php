<?php

/* @var $this yii\web\View */

use yii\materialicons\MD;

$this->title = 'My Yii Application';
?>

<div class="site-index">

    <div class="jumbotron">
        
        <img src="ecto.png" alt="HTML5 Icon" style="width:148px;height:148px;">
        
        <h1>On Road To Code!</h1>

        <p class="lead">Follow me on my journey of learning to code...</p>

        <p><a class="btn btn-lg btn-success" href="http://www.tip-it.tech/index.php/site/story">My Story</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Leave a Tip</h2>
                
                <?php echo MD::icon(MD::_FACE)
                    ->size(MD::SIZE_3X) 
                    // ->spin();
                ?>

                <p>Add coding tips to help others!</p>

                <p><a class="btn btn-default" href="http://www.tip-it.tech/index.php/tip/index">Click Me &raquo;</a></p>
            </div>
            
            
        </div>

    </div>
</div>
