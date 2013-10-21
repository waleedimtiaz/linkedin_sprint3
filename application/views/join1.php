  <style type="text/css">
 body {
        padding-top: 0px;
      }
      </style>
      <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '661082463915882', // App ID
     // Channel File
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      //testAPI();
    
    window.location.href = "http://localhost/linkedin3/index.php/page";
    //window.location.href=”http:\\localhost/linkedin1/index.php/control/home”;

    } 
  else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      FB.login();
    } 
  else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
  };

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Good to see you, ' + response.name + '.');
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses the JavaScript SDK to
  present a graphical Login button that triggers the FB.login() function when clicked.

  Learn more about options for the login button plugin:
  /docs/reference/plugins/login/ -->

   <div class="join-main">
          
          <div class="alert alert-error myerrorbar2">
      <img class="error-icon" src="<?php echo base_url(); ?>images/error.png" /> 
      <span class="error-text">Please correct the marked field(s) below.</span>
      </div>

      <?php if( isset($msg))
          {  ?> <span id="email-reg-error1">
          <div class="alert alert-error myerrorbar3" >
          <img class="error-icon" src="<?php echo base_url(); ?>images/error.png" /> 
          <span class="error-text">The email address, <?php echo $this->session->userdata('email_e') ?> , is already registered.</a></span>
          </div></span>
          <?php
          }
          ?>

          <div class="join-page-title">
                <h1>To join LinkedIn, sign up below...it's free!</h1>
          </div>


          
            <div class="join-box">

              <form id="join-form" class="join-form" onsubmit="return reg_validation()" method="post" action="<?php echo base_url(); ?>index.php/register/process">
              <div class="field-wrapper">
                <label for="fname-reg">First Name: </label>
                <div class="field-error">
                  <span id="fname-reg-error" class="form-error-text"></span>
                  <input type="text" id="fname-reg" name="fname" />
                </div>
              </div>
              <div class="field-wrapper">
                <label for="lname-reg">Last Name: </label>
                <div class="field-error">
                  <span id="lname-reg-error" class="form-error-text"></span>
                    <input type="text" id="lname-reg" name="lname" />
                  </div>
              </div>
              <div class="field-wrapper">
                
                <label for="email-reg">Email: </label>
                <div class="field-error1"><span class="form-error-text1" id="email-reg-error1">
                <?php if( isset($msg))
                      { ?> 
                      The email address, <?php echo $this->session->userdata('email_e') ?> , is already registered. Already on LinkedIn?
                      <a href="<?php echo base_url(); ?>index.php/signin">SignIn.</a></span>
                      <?php
                      }
                      $this->session->unset_userdata('email_e');
                      ?>
                    </span>
                    </div>

                <div class="field-error">
                  <span id="email-reg-error" class="form-error-text"></span>
                    <input type="text" id="email-reg" name="email" />
                </div>    
              </div>
              <div class="field-wrapper field-wrapper-password">
                <label for="pwd-reg">Password: </label>
                <div class="field-error">
                  	<span id="pwd-reg-error" class="form-error-text"></span>
                    <input type="password" id="pwd-reg" name="password" />
                    <p style="margin-left: 0px; margin-top: 5px;">6 or more characters</p>
                </div>    
              </div>
              
              <div id="actions">
              <button type="submit" class="btn btn-success">Join Now</button> <span class="asterik">*</span>
              </div>
              <p class="already-on-linkedin-message">Already on LinkedIn?
                <a href="<?php echo base_url(); ?>index.php/signin">Sign in.</a>
              </p>


              </form>


            
             </div>


        <div class="join-today-extra">
          <div class="join-today-sign-in-with">
            <p>Save time by using your Facebook account to sign up for LinkedIn.</p>
            <div class="join-today-actions">              
                
                <div class="fb-login-button" onlogin="<?php echo base_url(); ?>/index.php/page" data-width="300"></div>
               <!-- <a class="fb_button" href="<?php echo base_url(); ?>/index.php/page" > 
                    <p>Sign up with Facebook</p>
                  </a> -->
                  
                  
            </div>
        </div>
     </div>
    <div class="join-today-agreement">
              <strong>*</strong>
            By joining LinkedIn, you agree to linkedIn's
            <div class="agreement-links">
               <a href="<?php echo base_url(); ?>index.php/useragreement">User Agreement</a>
               ,
               <a href="<?php echo base_url(); ?>">Privacy Policy</a>
               and
               <a href="<?php echo base_url(); ?>">Cookie Policy</a>
               .
            </div>
          </div>

          
      </div>

      
