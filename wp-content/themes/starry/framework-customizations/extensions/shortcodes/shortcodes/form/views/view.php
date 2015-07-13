<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php 
/*
 * CONTACT FORM
 */
//If the form is submitted
if(isset($_POST['submitted'])) { 
    //Check to make sure that the name field is not empty
    if($_POST['contact_name'] === '') { 
            $hasError = true;
    } else {
            $name = sanitize_text_field($_POST['contact_name']);
    }

    //Check to make sure sure that a valid email address is submitted
    if($_POST['contact_email'] === '')  { 
            $hasError = true;
    } else if (!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST['contact_email'])) {
            $hasError = true;
    } else {
            $email = sanitize_email($_POST['contact_email']);
    }

    //Check to make sure comments were entered  
    if($_POST['contact_message'] === '') {
            $hasError = true;
    } else {
            if(function_exists('stripslashes')) {
                    $comments = stripslashes($_POST['contact_message']);
            } else {
                    $comments = esc_textarea($_POST['contact_message']);
            }
    }
    //Check to make sure that the topic field is not empty
    if($_POST['contact_topic'] === '') { 
            $hasError = true;
    } else {
            $topic = $_POST['contact_topic'];
    }

    //If there is no error, send the email
    if(!isset($hasError)) {

            $emailTo = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('email') : '';
            $subject = "(From Your Website)";
            $body = "Name: {$name}\n\nEmail: {$email}\n\nTopic: {$topic}\n\nMessage: {$comments}";
            $headers = 'From : My site <'.$emailTo.'>';

            mail($emailTo, $subject, $body, $headers);

            $emailSent = true; 
    }  
}
?>	
	<!-- PHP ALERTS FROM THE FORMS -->
	<?php if(isset($emailSent) && $emailSent == true) { ?>
	    <div class="alert-success alert" >
	        <strong><?php _e("Thanks","starry"); ?><?php echo', '. $name  .'.';?></strong>
	            <p><?php _e("Your message was sent successfully. You will receive a response shortly.","starry"); ?></p>
	    </div><!-- .alert -->
	<?php } ?>
	<?php if(isset($hasError) && $hasError == true) { ?>
	    <div class="alert-danger alert">
	        <strong><?php _e("Sorry,","starry"); ?></strong>
	        <p><?php _e("Your message can't be send...check if your email is correct otherwise a field is missing...","starry"); ?></p>
	    </div><!-- .alert -->
	<?php } ?>
	<!-- FORMS -->
	<?php
	global $wp;
	$current_url = esc_url(add_query_arg( $wp->query_string, '', home_url( $wp->request ) ));
	?>
	<form id="contact-form" method="post" action="<?php echo $current_url; ?> " class="form-horizontal">
		<!-- NAME -->
		<div class="control-group row">
			<label class="control-label col-md-3"><?php _e('Name','starry'); ?></label>
			<div class="controls col-md-9">
				<input name="contact_name" type="text" class="input-xlarge form-control">
			</div>
		</div>
		<!-- EMAIL -->
		<div class="control-group row">
			<label class="control-label col-md-3"><?php _e('Email','starry'); ?></label>
			<div class="controls col-md-9">
				<input name="contact_email" type="text" class="input-xlarge form-control">
			</div>
		</div>
		<!-- TOPIC -->
		<div class="control-group row">
			<label class="control-label col-md-3"><?php _e('Topic','starry'); ?></label>
			<div class="controls col-md-9">
				<select name="contact_topic" class="input-xlarge form-control">
					<?php 
					$topics = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('formtopics') : '';
		  			foreach($topics as $valuetopic) {
		  				echo '<option value="'. starry_clean($valuetopic) .'">'.$valuetopic.'</option>';
					}
					?>
				</select>
			</div>
		</div>
		<!-- MESSAGE -->
		<div class="control-group row">
			<label class="control-label col-md-3"><?php _e('Message','starry'); ?></label>
			<div class="controls col-md-9">                     
				<textarea name="contact_message" class=" form-control" rows="5"></textarea>
			</div>
		</div>
		<!-- BUTTON -->
		<div class="control-group text-right">
		 	<input type="hidden" name="submitted" value="1" />
		 	<button type="submit" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> <?php _e('Send','starry'); ?></button>
		</div>
	</form>

