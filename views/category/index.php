<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */


?>
    <section id="advertisement">
        <div class="container">
            <img src="/images/shop/advertisement.jpg" alt="" />
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">              

                                                
                    <!--     <div class="shipping text-center">
                            <img src="/images/home/shipping.jpg" alt="" />
                        </div> -->
                    
                    </div>
                </div>




                
                <div class="col-sm-9 padding-right">
<!--                                         <?php foreach ($res as $rest) {
                                           echo $rest->name;
                                        }
                                        ?> -->

                    <?php foreach($res as $rest): ?>
                        <div class="col-sm-4">
                             <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <p><a href="<?= Url::to(['category','id'=>$rest->id ])?>"><span class="asdqwe"><?=$rest->name?></span></a></p>
                                        </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>    



                </div>
            </div>
        </div>
    </section>
