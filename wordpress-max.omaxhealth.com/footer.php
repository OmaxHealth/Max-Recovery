<footer>
	<div class="container">
		<nav class="links">
			<a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms & Conditions</a>
			<a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a>
			<a href="<?php bloginfo('url'); ?>/refund-policy/">Refund Policy</a>
			<a href="mailto:contact@omaxhealth.com?subject=Max%20Recovery%20Question">Contact Us</a>
		</nav>
		<p class="disclaimer">These statements have not been evaluated by the Food & Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
		<p>*Discount applicable when you choose our Spartan Package. 60-day money-back guarantee on first box only.</p>
		<p>Customer is responsible for obtaining a return authorization and paying return shipping costs.</p>
		<p>There is an additional cost of $9.95 to ship to Canada, Hawaii, Alaska and Puerto Rico.</p>
		<p class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Omax Health, Inc.</p>
	</div>
</footer>

<?php wp_enqueue_script('plugins',get_bloginfo('template_directory').'/js/plugins.min.js',array('jquery')); ?>
<?php wp_enqueue_script('functions',get_bloginfo('template_directory').'/js/main.min.js',array('jquery','plugins')); ?>
<?php wp_footer(); ?>	

</body>
</html>