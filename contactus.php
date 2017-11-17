<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    
    
}
    

/* 
 * subinpvasu coded
 * Each line should be prefixed with  * 
 */

include_once './menu.php';
//include_once("header.php");
include_once("insideheader.php");
?>

<div class="row conatct-bg package-box">
    <div class="col-md-12 text-center">
        <h2>Contact Us</h2>
    </div>
      <div class="col-md-1"></div>
       <div class="col-md-5 text-center visible-sm visible-xs">
        <div class="row">
            <div class="col-md-10" style="margin-top:100px;">
                                <address>
                                    <h3>Head Office</h3>
                                    <b>Mamangalam, Kochin 682 024 <br />Kerala, India</b>
                                </address>

                                <address>
                                    <h3>Contact</h3>                            
                                    <b>Mob : +91 81568 57715 <br>
                                    E-mail : samsonholidaysintl@gmail.com <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info@samsonsholidays.in</b>
                                </address>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <form class="form-horizontal" role="form" method="post" action="contactus.php">
  <div class="form-group height-adjust">
    <label class="control-label col-sm-2" for="email">Name*</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
    </div>
  </div>
  <div class="form-group height-adjust">
    <label class="control-label col-sm-2" for="pwd">Email*</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email" required>
    </div>
  </div>
   <div class="form-group height-adjust">
    <label class="control-label col-sm-2" for="pwd">Phone</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone number">
    </div>
  </div>
   <div class="form-group height-adjust">
    <label class="control-label col-sm-2" for="pwd">Company</label>
    <div class="col-sm-10">
      <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company name">
    </div>
  </div>
   <div class="form-group height-adjust">
    <label class="control-label col-sm-2" for="pwd">Subject*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
    </div>
  </div>
   <div class="form-group height-adjust">
    <label class="control-label col-sm-2" for="pwd">Message*</label>
    <div class="col-sm-10">
        <textarea name="message" class="form-control" required></textarea>
    </div>
  </div>
  
  <div class="form-group height-adjust">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="submit" class="btn-success btn-lg" value="Submit Message"/>
    </div>
  </div>
</form>        
    </div>
      <div class="col-md-1"></div>
    <div class="col-md-1 partition"></div>
    <div class="col-md-5 text-center hidden-sm hidden-xs">
        <div class="row">
            <div class="col-md-10" style="margin-top:100px;">
                                <address>
                                    <h3>Head Office</h3>
                                    <b>Mamangalam, Kochin 682 024 <br />Kerala, India</b>
                                </address>

                                <address>
                                    <h3>Contact</h3>                            
                                    <b>Mob : +91 81568 57715 <br>
                                    E-mail : samsonholidaysintl@gmail.com <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info@samsonsholidays.in</b>
                                </address>
            </div>
        </div>
    </div>
</div>



<?php
include_once './footer.php';