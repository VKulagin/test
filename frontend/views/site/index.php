<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = $data->pagename;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-test">
    <pre>
<? print_r($this->params['breadcrumbs']);?>
    </pre>
    
    <? echo $data->pagecontent;?>
</div>
