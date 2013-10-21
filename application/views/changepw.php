<style type="text/css">
 body {
        background: white;
      }
      </style>

<div class="pw-main">
          
          <?php 
      if( $this->session->userdata('mail_msg'))
      {  ?> <span id="email-reg-error1">
          <div class="alert alert-error myerrorbar3" >
          <img class="error-icon" src="<?php echo base_url(); ?>images/error.png" /> 
          <span class="error-text">Please check your internet connectivity and try again</span>
          </div></span>
          <?php
          }
          ?>

          <div class="pw-page-title">
                <h1>Changing your password is simple</h1>
          </div>


          
          <div class="pw-wrapper">
            <div class="pw-box">
              <form id="pw-form" class="pw-form"  method="post" action="<?php echo base_url(); ?>index.php/changepw/send_mail">
            <div class="field-wrapper">
              <label for="email-reg">Please enter your email address to get instructions. </label>
              <div class="field-error">
                <span id="email-reg-error" class="form-error-text"></span>
                  <input type="text" id="email-reg" name="email" required value="<?php echo $email ?>"/>
              </div>    
            </div>
            
            
            <button type="submit" class="btn btn-primary">Continue</button> </form>
            </div>
          </div>

          
        </div>
        