<?php
$wimtv_plugin_root = plugin_dir_url(__FILE__);
$wimtv_plugin_path = wp_make_link_relative($wimtv_plugin_root);

$username = get_option("wimtvpro_username");
$password = get_option("wimtvpro_password");

?>
<script type="text/javascript">
	wimtv_plugin_path = "<?php echo $wimtv_plugin_path; ?>";
</script>

	<div id="head">
		<!-- Web fonts -->
		<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="<?php echo $wimtv_plugin_root; ?>common/libs/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $wimtv_plugin_root; ?>common/libs/font-awesome/css/font-awesome.min.css">

		<!-- CSS Common libraries -->
		<link rel="stylesheet" href="<?php echo $wimtv_plugin_root; ?>common/libs/toastr.min.css" type="text/css" media="screen">

		<link rel="stylesheet" href="<?php echo $wimtv_plugin_root; ?>private/assets/css/wimtv-admin.css">
		<link rel="stylesheet" href="<?php echo $wimtv_plugin_root; ?>common/css/common.css">

		<!-- JS Plugins -->
		<script type="text/javascript" src="<?php echo $wimtv_plugin_root; ?>common/libs/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $wimtv_plugin_root; ?>common/libs/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- JS Common libraries -->
		<script type="text/javascript" src="<?php echo $wimtv_plugin_root; ?>common/libs/toastr.min.js"></script>
		<script type="text/javascript" src="<?php echo $wimtv_plugin_root; ?>common/libs/jquery-ui/jquery-ui.js"></script>
		<script type="text/javascript" src="<?php echo $wimtv_plugin_root; ?>common/libs/moment/moment.min.js"></script>
		<script type="text/javascript" src="<?php echo $wimtv_plugin_root; ?>common/libs/underscore.min.js"></script>
	</div>

	<div id="body">
		<div class="loading-overlay" ng-class="{'loading-visible': $root.globalLoading}">
			<div class="spinner"></div>
			<div class="loading-text">Loading...</div>
		</div>
		<?php if($_GET['wrong_data']) {
			?>
				<script type="text/javascript">
					toastr['error']("Wrong username and/or password");
				</script>
				<?php
		} ?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-4"></div>
					<div class="col-md-4 text-center">
						<h4>The WimTVPro plugin is no longer maintained. You can use the WimTV website to create your own Web TV</h4>
						<div class="bottom text-center">
						    <hr>
							<h4>Create your Web TV in a few simple steps!</h4>
							<p>
								<a class="btn btn-success btn-lg" href="https://www.wim.tv/#/registrazione" target="_blank">
									<b>Get your free WimTV accout now!</b>
								</a>
							</p>
							<p><a href="https://www.wim.tv" target="_blank">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
