<?php include_once("loading_logo.php"); ?>

<?php echo form_header("Select the image to upload"); ?>
<?php echo form_open_multipart("base/save_logo"); ?>

<input type="file" id="userfile" name="userfile"/> <p></p>

<?php echo form_submit_custom('upload_button', 'Upload'); ?>
<?php echo form_close(); ?>				                
<?php echo form_footer(); ?>           
