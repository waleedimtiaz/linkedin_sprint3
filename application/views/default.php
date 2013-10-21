<?php

$a=$this->session->userdata('userid'); 
$b= $this->session->userdata('fname');
$c= $this->session->userdata('lname');
$d= $this->session->userdata('email');
$e= $this->session->userdata('password');

?>

<h3> User: <?php echo $b ." ". $c ?> with id: <?php echo $a ?> and email: <?php echo $d ?> has logged in </h3>

<a href="<?php echo base_url('index.php/signin/do_logout');?>">Logout</a>


