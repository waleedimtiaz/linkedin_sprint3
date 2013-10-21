
<style type="text/css">
 body {
        background: white;
      }
      </style>

<div class="container">
      <div class="alert alert-error myerrorbar">
      <img class="error-icon" src="<?php echo base_url(); ?>images/error.png" /> <span class="error-text">Please correct the marked field(s) below.</span>
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
      <div class="main">
          <div class="static-left">
             <h1>Over 225 million professionals use LinkedIn to exchange information, ideas and opportunities</h1>
        
            <div class="content-box-1">
            <div class="icon-reconnect"></div> <span class="icon-text">Stay informed about your contacts and industry</span>
            </div>
        
            <div class="content-box-2">
            <div class="icon-answers"></div><span class="icon-text">Find the people & knowledge you need to achieve your goals</span>
            </div>
        
            <div class="content-box-1">
            <div class="icon-power"></div><span class="icon-text">Control your professional identity online</span>
            </div>
          </div>
        
          <div class="form-right">
          <div class="form-header">
            <h2>Join LinkedIn Today</h2>
          </div>
          <div class="form-box">
            <form id="reg-form" class="reg-form" onsubmit="return reg_validation()" method="post" action="<?php echo base_url(); ?>index.php/register">
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
                 <?php if( isset($msg))
                      {  ?> 
                      The email address, <?php echo $this->session->userdata('email_e') ?> , is already registered. Already on LinkedIn?
                      <a href="<?php echo base_url(); ?>index.php/signin">SignIn.</a></span>
                      <?php
                      }
                      $this->session->unset_userdata('email_e');
                      ?>
                <label for="email-reg">Email: </label>
                <div class="field-error">
                  <span id="email-reg-error" class="form-error-text"></span>
                    <input type="text" id="email-reg" name="email" />
                </div>    
              </div>
              <div class="field-wrapper field-wrapper-password">
                <label for="pwd-reg">Password: </label>
                <div class="field-wrapper">
                  <span id="pwd-reg-error" class="form-error-text"></span>
                    <input type="password" id="pwd-reg" name="password" />
                </div>    
                <p>6 or more characters</p>
              </div>
              
              <button type="submit" class="btn btn-success">Join Now</button> <span class="asterik">*</span>
              <p class="already-on-linkedin-message">Already on LinkedIn?
                <a href="<?php echo base_url(); ?>index.php/signin">Sign in.</a>
              </p>
            </form>
          </div>
          </div>
      
          <div class="search-browser">
            <div class="search">
            <div class="search-content">
              <h3>Search for someone by name: </h3>
              
              <form id="search-form" class="form-inline" action="#">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <button type="submit" class="btn">Go</button>
              </form>
            </div>
          </div>
          
          <div class="directory">
              <h3>LinkedIn member directory:</h3>
            <div class="directory-links">
                <a href="<?php echo base_url(); ?>">a</a>
              <a href="<?php echo base_url(); ?>">b</a>
              <a href="<?php echo base_url(); ?>">c</a>
              <a href="<?php echo base_url(); ?>">d</a>
              <a href="<?php echo base_url(); ?>">e</a>
              <a href="<?php echo base_url(); ?>">f</a>
              <a href="<?php echo base_url(); ?>">g</a>
              <a href="<?php echo base_url(); ?>">h</a>
              <a href="<?php echo base_url(); ?>">i</a>
              <a href="<?php echo base_url(); ?>">j</a>
              <a href="<?php echo base_url(); ?>">k</a>
              <a href="<?php echo base_url(); ?>">l</a>
              <a href="<?php echo base_url(); ?>">m</a>
              <a href="<?php echo base_url(); ?>">n</a>
              <a href="<?php echo base_url(); ?>">o</a>
              <a href="<?php echo base_url(); ?>">p</a>
              <a href="<?php echo base_url(); ?>">q</a>
              <a href="<?php echo base_url(); ?>">r</a>
              <a href="<?php echo base_url(); ?>">s</a>
              <a href="<?php echo base_url(); ?>">t</a>
              <a href="<?php echo base_url(); ?>">u</a>
              <a href="<?php echo base_url(); ?>">v</a>
              <a href="<?php echo base_url(); ?>">w</a>
              <a href="<?php echo base_url(); ?>">x</a>
              <a href="<?php echo base_url(); ?>">y</a>
              <a href="<?php echo base_url(); ?>">z</a>
              <a href="<?php echo base_url(); ?>">more</a>
              
            </div>
          
              <div class="country-search">
                  <h3>Browse members</h3>
                <div class="link">
                  <a href="<?php echo base_url(); ?>index.php/control/mycountry">by country</a>
                </div>
                
              </div>
          </div>
            <div class="agreement">
              <strong>*</strong>
            By joining LinkedIn, you agree to linkedIn's
            <div class="agreement-links">
               <a href="<?php echo base_url(); ?>index.php/control/useragreement">User Agreement</a>
               ,
               <a href="<?php echo base_url(); ?>">Privacy Policy</a>
               and
               <a href="<?php echo base_url(); ?>">Cookie Policy</a>
               .
            </div>
          </div>
          
      
          </div>
      
        </div>
    </div>