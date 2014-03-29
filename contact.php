<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<div id="nav">
	<div class="center">
		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
	</div>
</div>
<div id="content">
	<div class="center twocols">
    <div class="leftcol">
			<?php dynamic_sidebar('contact-sidebar-area')?>
		</div>
		<div  class="rightcol">
			<h2 class="indexintro">Contact Joel</h2>
			<form class="uniForm" action="/fm.php" method="post"><input type="hidden" name="recipient" value="emailaddress" />
			<input type="hidden" name="subject" value=" - from joelf.com" />
			<input type="hidden" name="print_blank_fields" value="flase" />
			<input type="hidden" name="required" value="subject_prefix,email" />
			<input type="hidden" name="alias" value="email=E-mail Address,subject_prefix=Your Name,comments=Comments" />
			<input type="hidden" name="redirect" value="/thankyou/" />
			<input type="hidden" name="frompage" value="contact" />
			<fieldset class="blocklabels">
			<div class="row"><label for="subject_prefix">Name</label><input id="subject_prefix" class="textinput" type="text" name="subject_prefix" /></div>
			<div class="row"><label for="email">Email</label><input id="email" class="textinput" type="text" name="email" /></div>
			<div class="row"><label for="comments">Comments</label><textarea id="comments" name="comments" rows="12" cols="20"></textarea></div>
			</fieldset>
			<div class="buttons"><input type="submit" value="Send" /></div>
			<div class="row invis"><label for="url">To try and stop unwanted email, don't fill these in</label> 
            <input class="textInput" type="text" name="url" id="url" size="35" />
            <input class="textInput" type="text" name="phone" id="phone" size="35" />
            <input class="textInput" type="text" name="altemail" id="altemail" size="35" />
			<p class="formHint">If you can see these fields, please leave it blank. These are here to identify spam; a spam robot will fill it in, a human would not.</p>
			</div>
			</form>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>
