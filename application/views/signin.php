 
<div class="signin-main">
    
          <div class="signin-page-title">
                <h1>Sign in to LinkedIn</h1>

          </div>
          <?php if( isset($msg) && $msg=='error')
          {  ?> 
          <div class="alert alert-error myerrorbar1">
          <img class="error-icon" src="<?php echo base_url(); ?>images/error.png" /> 
          <span class="error-text">Please correct the marked field(s) below.</span>
          </div>
          <?php
          } 
          else if($this->session->userdata('email_e')){ ?>
            <div class="alert alert-error myerrorbar1">
          <img class="error-icon" src="<?php echo base_url(); ?>images/error.png" /> 
          <span class="error-text">Hmm..that's not the right password. Please try again or <a href="<?php echo base_url(); ?>index.php/changepw">request a new one.</a></span>
          </div>
         <?php }
         
          ?>
          <div class="signin-wrapper">
            <div class="signin-box">
             
              <form id="signin-form" class="signin-form"  method="post" action="<?php echo base_url(); ?>index.php/signin/process">
            <div class="field-wrapper">
              <label for="email-reg">Email: </label>
              <div class="field-error">
                <span id="email-reg-error" class="form-error-text"></span>
                  <input type="text" id="email-reg" name="email"  value= <?php echo $this->session->userdata('email_e') ?> >
              </div>    
            </div>
            <div class="field-wrapper">
              <label for="pwd-reg">Password: </label>
              <div class="field-wrapper">
                <span id="pwd-reg-error" class="form-error-text"></span>
                  <input type="password" id="pwd-reg" name="password" />
                  <a href="<?php echo base_url(); ?>index.php/changepw?email=<?php echo $this->session->userdata('email_e')?>" class="forgot-password-link">Forgot password?</a>
              </div>    
            </div>
            
            <button type="submit" class="btn btn-primary">Sign In</button> <span class="join-linkedlin-link"> or <a href="<?php echo base_url(); ?>index.php/joinnow">Join LinkedIn</span>
          </form>
            </div>
          </div>

          
        </div>
        <?php
        $this->session->unset_userdata('email_e');
        ?>