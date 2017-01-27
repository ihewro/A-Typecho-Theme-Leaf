<?php
/**
 * 就如一片叶子般轻松自如吧
 * 
 * @package Leaf-Mod-lite
 * @author 私語 / ihewro
 * @version 0.1-base2.8
 * @link https://coding.net/u/o0Hugo/p/Leaf-re
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 
 
<div id="pjax-container">
     
     
     
<style>
	 #search {
	display: none;
}

.content2 {
	text-shadow: 1px 2px 3px rgba(0, 0, 0, 0.3);
	letter-spacing: 1px;
	-webkit-font-smoothing: subpixel-antialiased;
	text-align: center;
	color: #fff;
}

.p_part p {
	margin: 0;
}


<?php if (!empty($this->options->indexsetup) && in_array('IndexImage', $this->options->indexsetup)) : ?>
<?php else : ?>

#cover {
	position: relative;
	max-width: 100%;
	height: 100%;
	background-attachment: fixed;
	background-size: cover;
	background-position: center center;
}

<?php endif ;?>

 #nav-menu i,#nav-menu:after,#nav-menu:before {
	background-color: #fff;
}
</style>



<script>
<?php if (!empty($this->options->indexsetup) && in_array('IndexImage', $this->options->indexsetup)): ?>
//首页大图动画效果
var Leaf ={
 F: function(id, w, h) {
        var _height = $(id).parent().height(),
            _width = $(id).parent().width(),
            ratio = h / w;

        if (_height / _width > ratio) {
            id.style.height = _height +'px';
            id.style.width = _height / ratio +'px';
        } else {
            id.style.width = _width +'px';
            id.style.height = _width * ratio +'px';
        }

        id.style.left = (_width - parseInt(id.style.width)) / 2 +'px';
        id.style.top = (_height - parseInt(id.style.height)) / 2 +'px';
    }
}
var imageeffct = function(){
	$(function() {

        var cover = {};
        cover.t = $('#cover');
        cover.w = cover.t.attr('width');
        cover.h = cover.t.attr('height');

        ;(cover.o = function() {
            $('#mark').height(window.innerHeight)
        })();
        if (cover.t.prop('complete')) {
            // why setTimeout ?
            setTimeout(function() { cover.t.load() }, 0)
        }
cover.t.on('load', function() {
	 ;(cover.f = function() {

                var _w = $('#mark').width(), _h = $('#mark').height(), x, y, i, e;

                e = (_w >= 1000 || _h >= 1000) ? 1000 : 500;

                if (_w >= _h) {
                    i = _w / e * 50;
                    y = i;
                    x = i * _w / _h;
                } else {
                    i = _h / e * 50;
                    x = i;
                    y = i * _h / _w;
                }

                $('.layer').css({
                    'width': _w + x,
                    'height': _h + y,
                    'marginLeft': - 0.5 * x,
                    'marginTop': - 0.5 * y
                })

                if (!cover.w) {
                    cover.w = cover.t.width();
                    cover.h = cover.t.height();
                }

                Leaf.F($('#cover')[0], cover.w, cover.h)

            })();
			$('#mark').parallax();
			
})

});
}
imageeffct();
<?php endif; ?>
	
//首页搜索	
$(function(){
var $searchbox = $("#search");
//$searchbox.hide();
$("#search-Button").bind("click",function(event){
	event.preventDefault();
	if($searchbox.is(":visible")){
		$searchbox.fadeOut(100);
	}
	else{
		$searchbox.fadeIn(100);
	}
	
});
});
</script>





<div class="index">
    
	<div id="zhezhao">
	</div>
	
	<?php if (!empty($this->
	options->indexsetup) && in_array('IndexImage', $this->options->indexsetup)): ?>
	<div id="screen">
		<div id="mark">
			<div class="layer" data-depth="<?php $this->
				options->parallaxeffect();?>">
				<img id="cover" src="<?php $this->options->indeximage(); ?>" /> 
			</div>
		</div>
	</div>
	<?php else : ?>
	
	<div id="cover" style="background-image:url("http://mooow/pw/usr/uploads/wallhaven-478124.jpg")">
	</div>
	<?php endif ;?>
	
	<div id="style0">
		<div class="vertical-center-child index-container">
			<h1 class="index-title"><?php $this->
			options->IndexName(); ?></h1>
			<div class="content2">
				<div class="p_part">
					<p>
						<?php $this->
						options->IndexIntroduction(); ?>
					</p>
				</div>
			</div>
			<div class="index-contacts">
				<?php if ($this->
				options->homeButtonLinkA): ?>
				<a class="social" target="_blank" href="<?php $this->options->homeButtonLinkA(); ?>">
				<i class="fa fa-<?php $this->options->homeButtonFaA(); ?>"></i>
				</a>
				<?php endif; ?>
				<?php if ($this->
				options->homeButtonLinkB): ?>
				<a class="social" target="_blank" href="<?php $this->options->homeButtonLinkB(); ?>">
				<i class="fa fa-<?php $this->options->homeButtonFaB(); ?>"></i>
				</a>
				<?php endif; ?>
				<?php if ($this->
				options->homeButtonLinkC): ?>
				<a class="social" href="<?php $this->options->homeButtonLinkC(); ?>">
				<i class="fa fa-<?php $this->options->homeButtonFaC(); ?>"></i>
				</a>
				<?php endif; ?>
				<?php if ($this->
				options->homeButtonLinkD): ?>
				<a class="social" target="_blank" href="<?php $this->options->homeButtonLinkD(); ?>">
				<i class="fa fa-<?php $this->options->homeButtonFaD(); ?>"></i>
				</a>
				<?php endif; ?>
				<a class="social" id="search-Button">
				<i class="fa fa-search"></i>
				</a>
				<div class="site-search col-3 kit-hidden-tb">
					<form id="search" method="post" action="./" role="search">
						<label for="s" class="sr-only"><?php _e('搜索关键字'); ?>
						</label>
						<input id="search-text" type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
						<button type="submit" id="search-submit" class="submit fa fa-search"></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




</div>



<!-- menu -->
<?php $this->need('menu.php'); ?>

