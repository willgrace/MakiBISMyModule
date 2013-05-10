<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>MakiBIS</title>
<?php 
 include 'resources.php';
?>

<link rel="stylesheet" href="<?php echo base_url();?>jquery/autocom/themes/base/jquery.ui.all.css">
	<script src="<?php echo base_url();?>jquery/jquery-1.7.2.js"></script>
	<script src="<?php echo base_url();?>jquery/autocom/ui/jquery.ui.core.js"></script>
	<script src="<?php echo base_url();?>jquery/autocom/ui/jquery.ui.widget.js"></script>
	<script src="<?php echo base_url();?>jquery/autocom/ui/jquery.ui.position.js"></script>
	<script src="<?php echo base_url();?>jquery/autocom/ui/jquery.ui.autocomplete.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>jquery/autocom/demos.css">
</head>
<body>
<?php
include 'body_style.php';
?>

<?php 
 include 'header.php';
?>
<div class="container_12 main">

	<div class="container_12 ">
	<hr>
		<div class="grid_2" >
		<?php
			if ($this->session->userdata('logged_in_admin'))
				include 'v_admin_menu.php';
			else
				include 'v_main_menu.php';
		?>
		<br>
			<div class="" id="datepicker"></div>
		</div>
		
		<div class="grid_9 view_page">
		<div id='taxon_tree' class="" style="overflow:scroll;height:500px">
		<?php include 'search.php';?>
		<?php 
		 
		 include 'taxon_tree.php';

		?>
		</div>
	
		</div>
	</div>
<br>
<hr>
	<div class="container_12">
	<?php 		 include 'main_content.php'; ?>
	
	</div>
<hr>

</div>




<div id="copyright">Copyright &copy; 2012 <a href="http://apycom.com/">Apycom jQuery Menus</a></div>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>
</html>