<?php

/* @var $this yii\web\View */

use yii\materialicons\MD;

$this->title = 'My Yii Application';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>On Road To Code!</h1>

        <p class="lead">Follow me on my journey of learning to code...</p>

        <p><a class="btn btn-lg btn-success" href="http://www.deanfriedland.com/index.php/site/story">My Story</a></p>
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

                <p><a class="btn btn-default" href="http://www.deanfriedland.com/index.php/tip/index">Click Me &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>My Code</h2>
                
                <?php echo MD::icon(MD::_CODE)
                    ->size(MD::SIZE_3X) 
                    // ->spin();
                ?>

                <p>Check out what I have done!</p>

                <p><a class="btn btn-default" href="https://github.com/dfmmalaw">Click Me &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>I'm Hiring</h2>
                
                <?php echo MD::icon(MD::_WORK)
                    ->size(MD::SIZE_3X) 
                    // ->spin();
                ?>

                <p>Need a job? View my listings!</p>

                <p><a class="btn btn-default" href="http://www.deanfriedland.com/index.php/site/jobs">Click Me &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Resources</h2>
                
                <?php echo MD::icon(MD::_SCHOOL)
                    ->size(MD::SIZE_3X) 
                    // ->spin();
                ?>

                <p>Some awesome coding tutorials!</p>

                <p><a class="btn btn-default" href="http://www.labnol.org/internet/learn-coding-online/28537/">Click Me &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>The Law</h2>
                
              <i class="material-icons md-gavel">gavel</i>

                <p>Happening in the legal side of tech?</p>

                <p><a class="btn btn-default" href="http://www.lawtechnologytoday.org">Click Me &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                
                <h2>Events</h2>
                
                <?php echo MD::icon(MD::_EVENT)
                    ->size(MD::SIZE_3X) 
                    // ->spin();
                ?>
              
                <p>What's going on in the coding world?</p>

                <p><a class="btn btn-default" href="http://www.meetup.com">Click Me &raquo;</a></p>
            </div>
            
        </div>

    </div>
</div>
