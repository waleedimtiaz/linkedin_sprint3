$(document).ready(function(){
  $('#B').hide();
  $('#C').hide();

  $('#r1').click(function () {
  	$('#A').show();
    $('#B').hide();
    $('#C').hide();
    });
  });

  $(document).ready(function(){
  
  $('#r2').click(function () {
  	$('#A').hide();
    $('#B').hide();
    $('#C').show();
    });
  });

   $(document).ready(function(){
  
  $('#r3').click(function () {
  	$('#A').hide();
    $('#B').show();
    $('#C').hide();
    });
  });
  // $('#r2').click(function () {
  // 	$('#A').hide();
  //   $('#B').show();
  //   $('#C').hide();
  //   });
  // $('#r2').click(function () {
  // 	$('#A').hide();
  //   $('#B').hide();
  //   $('#C').show();
  //   });
              //           if ($("#r1").attr("checked")) {
              //               $('#A').show();
              // $('#B').hide();
              // $('#C').hide();
              //           }
              //           else if ($("#r2").attr("checked")){
              //               $('#A').hide();
              // $('#B').show();
              // $('#C').hide();
              //           }
              //           else if ($("#r3").attr("checked")){
              //               $('#A').hide();
              // $('#B').hide();
              // $('#C').show();
              //           }
                        
  // });
$(document).ready(function(){

$('#check1').click(function () {
    if ($('#check1').is(':checked')) {
    
     $("#com").hide();
} else {
    
     $("#com").show();
} 
});
});

$(document).ready(function(){
$("#ind1").hide();
     $("#com1").show();
$('#check2').click(function () {
    if ($('#check2').is(':checked')) {
    $("#ind1").show();
     $("#com1").hide();
} else {
    $("#ind1").hide();
     $("#com1").show();
} 
});
});

// Validates the home page registration form
function reg_validation(){

	// Reset old
	$('span#fname-reg-error').css('display','none');
	$('span#lname-reg-error').css('display', 'none');
	$('span#email-reg-error').css('display', 'none');
	$('span#pwd-reg-error').css('display', 'none');
	$('span#email-reg-error1').css('display', 'none');



	// Get form data
	fname = $("#fname-reg").val().trim();
	lname = $("#lname-reg").val().trim();
	email = $("#email-reg").val().trim();
	password = $("#pwd-reg").val().trim();

	valid = true;
	
	// Empty checks
	if(fname.length == 0)
	{
		$('span#fname-reg-error').text('Please enter a first name.').css('display','inline');
		$('.myerrorbar').css('display','block');
		$('.myerrorbar2').css('display','block');
		valid = false;
	}
	if(lname.length == 0)
	{   
		$('span#lname-reg-error').text('Please enter a last name.').css('display','inline');
		$('.myerrorbar').css('display','block');
		$('.myerrorbar2').css('display','block');
		valid = false;
	}
	if(email.length == 0)
	{   
		$('span#email-reg-error').text('Please enter a valid email address.').css('display','inline');
		$('.myerrorbar').css('display','block');
		$('.myerrorbar2').css('display','block');
		valid = false;
	}
	if(password.length == 0)
	{    
		$('span#pwd-reg-error').text('Please enter a password.').css('display','inline');
		$('.myerrorbar').css('display','block');
		$('.myerrorbar2').css('display','block');
		valid = false;
	}
	
	// Password check
	if(password.length < 6)
	{    
		$('span#pwd-reg-error').text('Please enter a password.').css('display','inline');
		$('.myerrorbar').css('display','block');
		valid = false;
	}
	
	// Email check
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(email) == false)
	{   

		$('span#email-reg-error').text('Please enter a valid email.').css('display','inline');
		$('.myerrorbar').css('display','block');
		valid = false;
	}

	return valid;
}