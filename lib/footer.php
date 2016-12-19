		<footer id="footer">
	
		<!-- two-columns -->
		
			<div class="two-columns">
				<div class="wrapper">
					
					<div class="left-column slide-left">
						
						<h3>Contact with us</h3>
						
						<!-- contact form -->
							<form id="contact" name="contact" method="post">
								<input id="name_contact_form" name="name_contact_form" type="text" placeholder="Your name" />
								<input id="email_contact_form" name="email_contact_form" type="text" placeholder="Type your email" />
								<textarea id="message_contact_form" name="message_contact_form" placeholder="Your message"></textarea>
								
								<input id="contact_form" name="submit" type="submit" class="button alignleft" value="Submit" />
							</form>	
						<!-- contact form -->
					</div>
					
					<div class="right-column slide-right">
						<h3>Phone : 1.604.767.0944 </h3>
						<p><strong>Email : info@canadabroker.biz </strong></p>
						
						<h3>Subscribe</h3>
						<p>If you would like to receive our bi monthly updates in your mailbox, subscribe to our newsletter!</p>
						
						<!-- subscription to newsletter form -->
							<form id="subscribe" action="<?php echo $mailchimp; ?>" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<input type="text" name="EMAIL" value="" placeholder="Type your email" />
								<input type="submit" name="subscribe" id="subscription" class="button" value="Subscribe" />	
							</form>	
						<!-- subscription to newsletter form -->
						
					</div>
					
					<div class="clear"></div>				
				</div>
			</div>
		
		<!-- two-columns -->
	
		<!-- google-maps -->
			<div id="googleMap"></div>
		<!-- google-maps -->
	
		</footer>

<!-- IMPORTANT! Don't change nothing from here  -->
<script type="text/javascript" src="./forms/functions.js"></script>

</body>
</html>