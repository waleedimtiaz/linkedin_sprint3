<div class= "signin2-main">
	<div class="signin2-wrapper">
		<div class="signin2-container">
			
      
      <?php 
      if($this->session->userdata('mail_msg')) {   
      $this->session->unset('mail_msg');  	
      	?> 
		    <span id="email-reg-error1">
		    <div class="alert alert-success signin2-thanks-bar" style="margin-bottom: 5px;">
		    <img class="error-icon" src="<?php echo base_url(); ?>images/success.png" /> 
		    <span class="error-text">Email sent.</a></span>
		    </div></span>
      <?php } else { ?>
      	<div class="signin2-heading">
				<h1>not Sent </h1>
				<div class="signin2-heading-right">
					<span class="summary"> Step <strong>2</strong> of <strong>7</strong> </span>
					<span class="progress" title="28% Complete">
						<div class="bar" style="width: 20px;"></div>
					</span>
				</div>
			</div>
     <?php } ?>
      
			
			<div class="signin2-middle">
				<div class="signin2-middle-top">
					<p class="intro"> </p>

					<div class="signin2-box">
						<form id="signin2-form" class="signin2-form"  method="post" action="">
      				<div class="field-wrapper">
        					<label for="email-reg"> </label>
        					<div class="field-error">
         						 <span id="email-reg-error" class="form-error-text"></span>
           					 
        					</div>    
     					 </div>
     					 <button type="submit" class="btn btn-primary">Continue</button>
     					 <span class="signin2-disclaimer"></span>
     				</form>
					</div>
					
				</div>
			</div>
			
			
			
		</div>
	</div>


</div>
