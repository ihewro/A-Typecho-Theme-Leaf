<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!is_pjax()) { ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="<?php $this->options->ChromeColor(); ?>">
	<link rel="shortcut icon" href="<?php $this->options->ICOlink(); ?>" type="image/x-icon">

 <?php } ?>



    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<?php if (!is_pjax()) { ?>
    <!-- 使用url函数转换相关路径 -->
<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js" type="text/javascript"></script>
<script>
        // Fallback to loading jQuery from a local path if the CDN is unavailable
        (window.jQuery || document.write('<script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"><\/script>'));
</script>
<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
<?php if ($this->options->duoshuosn){ ?>
<?php if ( $this->options->duoshuoStyleswitch =='0' ) : ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/duoshuo-disqus.min.css'); ?>">
<?php elseif($this->options->duoshuoStyleswitch == '1'): ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/duoshuo-qingjianyue.css'); ?>">
<?php endif; ?>
<?php };?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
<script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/player.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/zoom.css') ?>">


    <!-- fonts -->


    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>

</head>
<body class="loaded">
<div id="pop-box">
<div id="pop-box-container" >
<div id="pop-box-icons" >
<p class="icon-music"></p></div>
<div id="pop-box-content"><p class="title"></p>
<p class="secondary"></p></div>
<div id="pop-box-close">X</div></div></div>
<?php } ?>
