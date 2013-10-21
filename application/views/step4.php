<div class= "signin7-main">
	<div class="signin2-wrapper">
      
			<div class="signin2-heading">
				<h1>Congratulations! You've just created your professional profile.</h1>
				<div class="signin2-heading-right">
					<span class="summary"> Step <strong>4</strong> of <strong>7</strong> </span>
					<span class="progress" title="28% Complete">
						<div class="bar" style="width: 55px;"></div>
					</span>
				</div>
			</div>
			
			<div class="signin7-middle">
				<div class="signin7-mini-profile">
					<h1><?php if($this->session->userdata('fname')){
					echo $this->session->userdata('fname') ." ". $this->session->userdata('lname');?></h1>
					<?php
					if($this->session->userdata('profession')==1)
					{
						$a="Employer at ";
						$b=$this->session->userdata('comp');
					}
					else if($this->session->userdata('profession')==2)
					{
						$a="Job Seeker at ";
						$b=$this->session->userdata('comp');
					}
					else if($this->session->userdata('profession')==3)
					{
						$a="Student at ";
						$b=$this->session->userdata('uni');
					}
					 
					?>
					<span class="title"><?php echo $a; echo $b; ?></span> <br />
					<span class="location"><?php echo $a; echo $b; ?></span>
					<?php } ?>
				</div>
				<div class="signin7-tweet-text">
					<textarea id="tweet-text" disabled>I just joined LinkedIn and created my professional profile. Join my network.</textarea>
				</div>
				<a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">
  Share on Facebook
</a>

				<a id="tweet-btn" href="https://twitter.com/share" class="twitter-share-button" data-text="I just joined LinkedIn and created my professional profile. Join my network." data-size="large" data-count="none" data-dnt="true">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
			
			<p class="signin2-skip">
				<a href="<?php echo base_url(); ?>index.php/page""> Skip this page </a>
			</p>
			
		</div>
	</div>


</div>
