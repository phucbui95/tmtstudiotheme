<?php /* Template Name: Contact */
function get_custom_field($field_name){
	return get_post_meta(get_the_ID(),$field_name,true);
}
	get_header();
?>

<?php

Add_action('init','callback_function');
Function callback_function(){
// manage get and post variables here
	
}

if(isset($_POST)) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(trim($_POST['phone']) === '') {
		$phoneError = 'Please enter a phone.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$phone = stripslashes(trim($_POST['phone']));
		} else {
			$phone = trim($_POST['phone']);
		}
	}


	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}

		echo $emailTo;
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name\n\nPhone number: $phone \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	else {
	}

} ?>

<div class="container-fluid">
	<div class="row row-eq-height">
	<div class="col-md-7" style="padding-left: 0px; padding-right: 15px;">
	<div id="left-side-content" style="width: 100%; height: 500px; padding-left: 0px; "><iframe style="border: 0; width: 100%; height: 100%; margin-bottom: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15676.042927619632!2d106.72887520246418!3d10.810489513562855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752624ebdd6645%3A0x83cf929931a75eee!2sThao+Dien+Village!5e0!3m2!1sen!2s!4v1539441222051" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
	</div>
	<div class="col-md-5">
	<img style="max-height: 40px; padding-top: 5px; padding-bottom: 10px" src="<?php echo get_template_directory_uri() ?>/images/logo-text.png">
	<br/>
	<script type="text/javascript">
		jQuery.fn.autoscroll = function(selector) {  
		  $('html, body').animate(  
		    { scrollTop: $(selector).offset().top },  
		    500  
		  );  
		}  

//Then to scroll to the class/area you wish to get to like this:  

	</script>
	<div class="contact-form" id="cform" onclick="$('#cfrom').autoscroll(); ">
		<p>181/1 Nguyen Van Huong Street, Thao Dien Ward, District 2, HCM City, Viet Nam</p>
		<p>Phone: <?php echo get_custom_field('phone') ?> </p>
		<p>Email: <?php echo get_custom_field('email') ?> </p>
		<p>Website: <?php echo get_custom_field('website') ?> </p>
	<div>
	<br/> 
	<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
	<div class="form-group"><input id="exampleFormControlInput1" class="form-control" type="text" name="contactName" placeholder="Fullname" /></div>
	<div class="form-group"><input id="exampleFormControlInput1" class="form-control" type="email" name="email" placeholder="Email" /></div>
	<div class="form-group"><input id="exampleFormControlInput1" class="form-control" type="number" placeholder="Phone number" /></div>
	<div class="form-group"><textarea class="form-control" rows="5" id="comment" placeholder="Comment" name="comments" ></textarea></div>
	<!-- <div class="form-group"><button type="button" class="btn btn-default" type="submit" name="submitted">Send</button></div> -->
	<button type="submit"  class="btn btn-default" >Submit</button>
	<input type="hidden" name="submitted" id="submitted" value="true" />
	</form>
	</div>
	</div>
</div>