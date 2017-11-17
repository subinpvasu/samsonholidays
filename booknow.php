<?php

/* 
 * subinpvasu coded
 * Each line should be prefixed with  * 
 */

include_once './menu.php';
//include_once("header.php");
include_once("insideheader.php");
?>

<div class="row conatct-bg package-box">
    <div class="col-md-12 height-adjust text-center">
         <h2>Make Your Payment</h2>
    </div>
    
    <div class="col-md-12">
        <form class="contact-form" name="contact-form" method="post" class="form-horizontal" action="http://samsonsholidays.in/make-payment">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" name="amount" class="form-control" required>
                        </div>
                        
                       </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Select Currency</label>
                            <select class="form-control" required name="currency">
                            	<option value="USD">USD</option>
                          		 <option value="GBP">GBP</option>
                            </select>
                            
                        </div>                      
                    </div>
            <div class="col-md-12 text-center" style="margin-bottom: 15px;">
                   <input name="b_submit" value="Proceed to Payment" class="btn-success btn-lg" type="submit">
    </div>
            </div>
                </form> 
    </div>


<?php
include_once './footer.php';