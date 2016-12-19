/* Contact form */

(function(){
    $("#contact_form").click(function() {
 
        var name = $("#name_contact_form").val();
            email = $("#email_contact_form").val();
            validation_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            message = $("#message_contact_form").val();
 
        if (name == "") {
            $("#name_contact_form").focus();
            return false;
        }else if(email == "" || !validation_email.test(email)){
            $("#email_contact_form").focus();    
            return false;
        }else if(message == ""){
            $("#message_contact_form").focus();
            return false;
        }else{
			$('.ajaxgif').removeClass('hide');
			var datos = 'name_contact_form='+ name + '&email_contact_form=' + email + '&message_contact_form=' + message;
			$.ajax({
			    type: "POST",
			    url: "forms/contact_form.php",
			    data: datos,
			    success: function() {
			        $('.ajaxgif').hide();
			        $('input#contact_form').attr('value','✓ Message sent!'); 
			        $('form#contact input[type="text"]').attr('value',''); 
			        $('form#contact textarea').attr('value',''); 
			    },
			    error: function() {
			        $('.ajaxgif').hide();
			        $('input#contact_form').attr('value','Error!');
			        $('form#contact .button').addClass('animated shake');                 
			    }
			});
			return false;
        }
 
    });
})();

/* Restaurant booking */

(function(){
    $("#book_booking").click(function() {
 
        var name = $("#name_booking").val();
            email = $("#email_booking").val();
            validation_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            phone = $("#phone_booking").val();
            guests = $("#guests_booking").val();
            calendar = $("#calendar_booking").val();
            hour = $("#hour_booking").val();
            requests = $("#requests_booking").val();
 
        if (name == "") {
            $("#name_booking").focus();
            return false;
        }else if(email == "" || !validation_email.test(email)){
            $("#email_booking").focus();    
            return false;
        }else if(phone == ""){
            $("#phone_booking").focus();    
            return false;
        }else if(guests == ""){
            $("#guests_booking").focus();    
            return false;
        }else if(calendar == ""){
            $("#calendar_booking").focus();    
            return false;
        }else if(hour == ""){
            $("#hour_booking").focus();    
            return false;   
        }else{
			$('.ajaxgif').removeClass('hide');
			var datos = 'name_booking='+ name + '&email_booking=' + email + '&phone_booking=' + phone + '&guests_booking=' + guests + '&calendar_booking=' + calendar + '&hour_booking=' + hour + '&requests_booking=' + requests;
			$.ajax({
			    type: "POST",
			    url: "forms/restaurant_booking.php",
			    data: datos,
			    success: function() {
			        $('.ajaxgif').hide();
			        $('input#book_booking').attr('value','✓ Message sent!'); 
			        $('form#booking input[type="text"]').attr('value',''); 
			        $('form#booking textarea').attr('value',''); 
			    },
			    error: function() {
			        $('.ajaxgif').hide();
			        $('input#book_booking').attr('value','Error!');
			        $('form#book_booking .button').addClass('animated shake');                 
			    }
			});
			return false;
        }
 
    });
})();