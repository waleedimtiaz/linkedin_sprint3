<div class= "signin2-main">
	<div class="signin2-wrapper">
		<div class="signin2-container">
			<div class="alert alert-error myerrorbar">
      <img class="error-icon" src="<?php echo base_url(); ?>images/error.png" /> <span class="error-text">Please correct the marked field(s) below.</span>
      </div>
      
      <?php 
      $base=base_url();
      if(isset($msg)) { 
      $link="$base/index.php/step3";      	
      	?> 
		    <span id="email-reg-error1">
		    <div class="alert alert-success signin2-thanks-bar" style="margin-bottom: 5px;">
		    <img class="error-icon" src="<?php echo base_url(); ?>images/success.png" /> 
		    <span class="error-text">Thanks for confirming your email address, <?php echo $this->session->userdata('email_e') ?>.</a></span>
		    </div></span>
      <?php } else {
      	$link="$base/index.php/step1/process";
      } ?>
      
			<div class="signin2-heading">
				<h1> Grow your network on LinkedIn </h1>
				<div class="signin2-heading-right">
					<span class="summary"> Step <strong>2</strong> of <strong>7</strong> </span>
					<span class="progress" title="28% Complete">
						<div class="bar" style="width: 20px;"></div>
					</span>
				</div>
			</div>
			<div class="signin2-middle">
				<div class="signin2-middle-top">
					<p class="intro"> Get started by adding your email address.</p>

					<div class="signin2-box">
						<form id="signin2-form" class="signin2-form"  method="post" action="<?php echo $link ?>">
      				<div class="field-wrapper">
        					<label for="email-reg"> Your Email: </label>
        					<div class="field-error">
         						 <span id="email-reg-error" class="form-error-text"></span>
           					 <input type="text" id="email-reg" name="email" value="<?php echo $this->session->userdata('email') ?>">
        					</div>    
     					 </div>
     					 <button type="submit" class="btn btn-primary">Continue</button>
     					 <span class="signin2-disclaimer">We will not store your password or email anyone without your permission.</span>
     				</form>
					</div>
					
				</div>
			</div>
			<p class="signin2-skip">
				<a href="#confirm-skip" data-toggle="modal" data-backdrop="false"> Skip this page </a>
			</p>
			
			<!-- Popup box boostrap -->
			<div id="confirm-skip" class="modal hide fade">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3>Skip seeing who you already know?</h3>
				</div>
				<div class="modal-body">
					<p>If you skip this step, you'll miss out on easily finding people you know on LinkedIn.</p>
				</div>
				<div class="modal-footer">
					<a href="#" data-dismiss="modal" class="btn">Skip</a>
					<a href="#" data-dismiss="modal" class="btn btn-primary">Find Now</a>
				</div>
			</div>
			
			
		</div>
	</div>


</div>
