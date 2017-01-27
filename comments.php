<?php if ($this->options->duoshuosn){ ?><div id="comments"> 
<?php if($this->allow("comment")): ?>
<!-- Duoshuo Comment BEGIN -->
    <?php if ($this->options->duoshuosn){ ?>
    <style>
#ds-thread #ds-reset a.ds-user-name[data-user-id='<?php $this->options->duoshuoid(); ?>']:after{
	content:"博主";
	color:#fff;
	margin-left:6px;
	font-size:12px;
	border-radius:3px;
	background:#7f919e;
	padding:2px 3px;
	display:inline-block;
	font-weight:300
}
	</style>
    <?php };?>

	<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" 
	data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
	<script type="text/javascript">
	var duoshuoQuery = {short_name:"<?php $this->options->duoshuosn();?>",theme:"none"};
	(function() {
		var ds = document.createElement("script");
		ds.type = "text/javascript";ds.async = true;
		<?php if (!empty($this->options->indexsetup) && in_array('webssl', $this->options->indexsetup)) : ?>
		ds.src = "<?php $this->options->themeUrl('assets/js/embedssl.min.js') ?>";
		<?php else : ?>
		ds.src = "<?php $this->options->themeUrl('assets/js/embed.min.js') ?>";
		<?php endif ;?>
		ds.charset = "UTF-8";
		(document.getElementsByTagName("head")[0] 
		|| document.getElementsByTagName("body")[0]).appendChild(ds);
	})();
	</script>
<!-- Duoshuo Comment END -->

<?php endif; ?> 
</div>

<?php };?>
