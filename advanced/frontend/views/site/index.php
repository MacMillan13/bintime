<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">


    <div class="body-content">

        <div class="row">
            <? foreach($products as $product){ ?>
            <div class="col-lg-4">
                <?=$product->mpn;?>
                <br/>
                <?=$product->shop->price;?>
            </div>
            <? }; ?>
        </div>

        <div class="row">
        </div>
    </div>
</div>
