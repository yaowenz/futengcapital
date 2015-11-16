	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">Copyright 2015&nbsp;&nbsp;&nbsp;&nbsp;上海复腾资产管理有限公司&nbsp;&nbsp;&nbsp;&nbsp;沪ICP备14052833号-1</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
<div style="position:fixed;bottom:50px;right:30px">
	<div class="shortcut-tooltip shortcut-home"><a href="<?php echo site_url()?>" title="返回首页"><span>返回首页</span></a></div>
	<div class="shortcut-tooltip shortcut-top"><a href="javascript:;" title="返回顶部"><span>返回顶部</span></a></div>
</div>
<script type="text/javascript">
jQuery(function($) {
	$('div.shortcut-top').click(function() {
		$.scrollTo(0, 300);
	});
});
</script>
</body>
</html>
