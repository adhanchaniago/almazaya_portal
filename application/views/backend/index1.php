<?php
	$system_name        =	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	//$system_title       =	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$text_align         =	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
	$skin_colour        =   $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description;
	$running_year 		=   $this->db->get_where('settings' , array('type'=>'running_year'))->row()->description;
	?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl';?>">
<head>

	<title><?php echo $page_title;?> | <?php echo $system_name;?></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="SMA Al-Mazaya Islamic School" />
	<meta name="author" content="Almazaya" />



	<?php include 'includes_top.php';?>

</head>
<body class="page-body <?php if ($skin_colour != '') echo 'skin-' . $skin_colour;?>" >
	<div class="page-container <?php if ($text_align == 'right-to-left') echo 'right-sidebar';?>
		" >
		<?php include 'schedule/navigation.php';?>
		<div class="main-content">
			
			<?php include 'schedule/table.php';?>

			<?php include 'footer.php';?>

		</div>

	</div>
    <?php include 'modal.php';?>
    <?php include 'includes_bottom.php';?>

</body>
</html>
