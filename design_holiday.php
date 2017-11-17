<?php
/* 
 * subinpvasu coded
 * Each line should be prefixed with  * 
 */
include_once './menu.php';
//include_once("header.php");
include_once("insideheader.php");
?>
<div class="row  conatct-bg package-box">
    <div class="col-md-12 text-center"><h3>Design your Holiday</h3></div>
    <div class="col-md-12  text-center">
        

        <form action="design_holiday.php" method="post" class="form-horizontal">
           
            <div class="col-md-4 col-sm-6">
  
        <div class="form-group height-adjust">
    <label class="control-label col-sm-3" for="email">Name:</label>
    <div class="col-sm-9">
        <input name="name" class="form-control" type="text" required>
        </div>
  </div>
         <div class="form-group height-adjust">
    <label class="control-label col-sm-3" for="email">Email:</label>
    <div class="col-sm-9">
        <input name="email" class="form-control" type="text">
    </div></div>
        <div class="form-group height-adjust">
    <label class="control-label col-sm-3" for="email">Mobile:</label>
    <div class="col-sm-9">
        <input name="phone" class="form-control" type="text">
    </div></div>
                
         <div class="form-group height-adjust">
    <label class="control-label col-sm-3" for="email">Nationality:</label>
    <div class="col-sm-9">
        <input name="nationality" class="form-control" type="text">
    </div></div>
                
      
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="form-group height-adjust">
    <label class="control-label col-sm-4" for="email">Country:</label>
    <div class="col-sm-8">
  <select name="country" required  class="form-control" style="font-weight: normal">
                      <option value="" selected="selected">Select a country</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Anguilla">Anguilla</option>
                      <option value="Antarctica">Antarctica</option>
                      <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Aruba">Aruba</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Azerbaijan">Azerbaijan</option>
                      <option value="Bahamas">Bahamas</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                     <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
                     <option value="Belize">Belize</option>
                      <option value="Benin">Benin</option>
                      <option value="Bermuda">Bermuda</option>
                     <option value="Bhutan">Bhutan</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Bosnia Hercegovina">Bosnia Hercegovina</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Bouvet Island">Bouvet Island</option>
                     <option value="Brazil">Brazil</option>
                     <option value="Brunei Darussalam">Brunei Darussalam</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                     <option value="Burundi">Burundi</option>
                      <option value="Byelorussian SSR">Byelorussian SSR</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Cayman Islands">Cayman Islands</option>
                      <option value="Central African Republic">Central African Republic</option>
                      <option value="Chad">Chad</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Christmas Island">Christmas Island</option>
                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo">Congo</option>
                      <option value="Cook Islands">Cook Islands</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                      <option value="Croatia">Croatia</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Czechoslovakia">Czechoslovakia</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Djibouti">Djibouti</option>
                      <option value="Dominica">Dominica</option>
                     <option value="Dominican Republic">Dominican Republic</option>
                      <option value="East Timor">East Timor</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Egypt">Egypt</option>
                     <option value="El Salvador">El Salvador</option>
                     <option value="England">England</option>
                     <option value="Equatorial Guinea">Equatorial Guinea</option>
                     <option value="Eritrea">Eritrea</option>
                     <option value="Estonia">Estonia</option>
                     <option value="Ethiopia">Ethiopia</option>
                     <option value="Falkland Islands">Falkland Islands</option>
                     <option value="Faroe Islands">Faroe Islands</option>
                     <option value="Fiji">Fiji</option>
                     <option value="Finland">Finland</option>
                     <option value="France">France</option>
                     <option value="Gabon">Gabon</option>
                     <option value="Gambia">Gambia</option>
                     <option value="Georgia">Georgia</option>
                     <option value="Germany">Germany</option>
                     <option value="Ghana">Ghana</option>
                     <option value="Gibraltar">Gibraltar</option>
                     <option value="Great Britain">Great Britain</option>
                     <option value="Greece">Greece</option>
                     <option value="Greenland">Greenland</option>
                     <option value="Grenada">Grenada</option>
                     <option value="Guadeloupe">Guadeloupe</option>
                     <option value="Guam">Guam</option>
                     <option value="Guatamala">Guatamala</option>
                     <option value="Guernsey">Guernsey</option>
                     <option value="Guiana">Guiana</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                     <option value="Guyana">Guyana</option>
                     <option value="Haiti">Haiti</option>
                     <option value="Heard Islands">Heard Islands</option>
                     <option value="Honduras">Honduras</option>
                     <option value="Hong Kong">Hong Kong</option>
                     <option value="Hungary">Hungary</option>
                     <option value="Iceland">Iceland</option>
                     <option value="India">India</option>
                     <option value="Indonesia">Indonesia</option>
                     <option value="Iran">Iran</option>
                     <option value="Iraq">Iraq</option>
                     <option value="Ireland">Ireland</option>
                     <option value="Isle Of Man">Isle Of Man</option>
                 <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                     <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                     <option value="Jordan">Jordan</option>
                     <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, South">Korea, South</option>
                    <option value="Korea, North">Korea, North</option>
                    <option value="Kuwait">Kuwait</option>
                     <option value="Kyrgyzstan">Kyrgyzstan</option>
                     <option value="Lao People's Dem. Rep">Lao People's Dem. Rep.</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                     <option value="Lesotho">Lesotho</option>
                     <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                     <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                     <option value="Luxembourg">Luxembourg</option>
                     <option value="Macau">Macau</option>
                     <option value="Macedonia">Macedonia</option>
                     <option value="Madagascar">Madagascar</option>
                     <option value="Malawi">Malawi</option>
                     <option value="Malaysia">Malaysia</option>
                     <option value="Maldives">Maldives</option>
                     <option value="Mali">Mali</option>
                     <option value="Malta">Malta</option>
                     <option value="Marshall Islands">Marshall Islands</option>
                     <option value="Martinique">Martinique</option>
                     <option value="Mauritania">Mauritania</option>
                     <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                     <option value="Mexico">Mexico</option>
                     <option value="Micronesia">Micronesia</option>
                     <option value="Moldova">Moldova</option>
                     <option value="Monaco">Monaco</option>
                     <option value="Mongolia">Mongolia</option>
                     <option value="Montserrat">Montserrat</option>
                   <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                     <option value="Myanmar">Myanmar</option>
                     <option value="Namibia">Namibia</option>
                     <option value="Nauru">Nauru</option>
                     <option value="Nepal">Nepal</option>
                     <option value="Netherlands">Netherlands</option>
                     <option value="Netherlands Antilles">Netherlands Antilles</option>
                     <option value="Neutral Zone">Neutral Zone</option>
                     <option value="New Caledonia">New Caledonia</option>
                     <option value="New Zealand">New Zealand</option>
                     <option value="Nicaragua">Nicaragua</option>
                     <option value="Niger">Niger</option>
                     <option value="Nigeria">Nigeria</option>
                     <option value="Niue">Niue</option>
                     <option value="Norfolk Island">Norfolk Island</option>
                     <option value="Mariana Islands">Mariana Islands</option>
                     <option value="Norway">Norway</option>
                     <option value="Oman">Oman</option>
                     <option value="Pakistan">Pakistan</option>
                     <option value="Palau">Palau</option>
                     <option value="Panama">Panama</option>
                     <option value="Papua New Guinea">Papua New Guinea</option>
                     <option value="Paraguay">Paraguay</option>
                     <option value="Peru">Peru</option>
                     <option value="Philippines">Philippines</option>
                     <option value="Pitcairn">Pitcairn</option>
                     <option value="Poland">Poland</option>
                     <option value="Polynesia">Polynesia</option>
                     <option value="Portugal">Portugal</option>
                     <option value="Puerto Rico">Puerto Rico</option>
                     <option value="Qatar">Qatar</option>
                     <option value="Reunion">Reunion</option>
                     <option value="Romania">Romania</option>
                     <option value="Russian Federation">Russian Federation</option>
                     <option value="Rwanda">Rwanda</option>
                     <option value="Saint Helena">Saint Helena</option>
                     <option value="Saint Kitts">Saint Kitts</option>
                     <option value="Saint Lucia">Saint Lucia</option>
                     <option value="Saint Pierre">Saint Pierre</option>
                     <option value="Saint Vincent">Saint Vincent</option>
                     <option value="Samoa">Samoa</option>
                     <option value="San Marino">San Marino</option>
                     <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                     <option value="Saudi Arabia">Saudi Arabia</option>
                     <option value="Senegal">Senegal</option>
                     <option value="Seychelles">Seychelles</option>
                     <option value="Sierra Leone">Sierra Leone</option>
                     <option value="Singapore">Singapore</option>
                     <option value="Slovakia">Slovakia</option>
                     <option value="Slovenia">Slovenia</option>
                     <option value="Solomon Islands">Solomon Islands</option>
                     <option value="Somalia">Somalia</option>
                     <option value="South Africa">South Africa</option>
                     <option value="South Georgia">South Georgia</option>
                     <option value="Spain">Spain</option>
                     <option value="Sri Lanka">Sri Lanka</option>
                     <option value="Sudan">Sudan</option>
                     <option value="Suriname">Suriname</option>
                     <option value="Svalbard">Svalbard</option>
                     <option value="Swaziland">Swaziland</option>
                     <option value="Sweden">Sweden</option>
                     <option value="Switzerland">Switzerland</option>
                     <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                     <option value="Taiwan">Taiwan</option>
                     <option value="Tajikista">Tajikista</option>
                     <option value="Tanzania">Tanzania</option>
                     <option value="Thailand">Thailand</option>
                     <option value="Togo">Togo</option>
                     <option value="Tokelau">Tokelau</option>
                     <option value="Tonga">Tonga</option>
                     <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                     <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                     <option value="Turkmenistan">Turkmenistan</option>
                     <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                     <option value="Tuvalu">Tuvalu</option>
                     <option value="Uganda">Uganda</option>
                     <option value="Ukraine">Ukraine</option>
                     <option value="United Arab Emirates">United Arab Emirates</option>
                     <option value="United Kingdom">United Kingdom</option>
                     <option value="United States">United States</option>
                     <option value="Uruguay">Uruguay</option>
                     <option value="Uzbekistan">Uzbekistan</option>
                     <option value="Vanuatu">Vanuatu</option>
                     <option value="Vatican City State">Vatican City State</option>
                     <option value="Venezuela">Venezuela</option>
                     <option value="Vietnam">Vietnam</option>
                     <option value="Virgin Islands">Virgin Islands</option>
                     <option value="Western Sahara">Western Sahara</option>
                     <option value="Yemen">Yemen</option>
                     <option value="Yugoslavia">Yugoslavia</option>
                     <option value="Zaire">Zaire</option>
                     <option value="Zambia">Zambia</option>
                     <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                          </div></div>
     <div class="form-group height-adjust">
    <label class="control-label col-sm-4" for="email">Date Of Arrival:</label>
    <div class="col-sm-8">
        <input name="in_date" class="form-control" type="date">
    </div></div>
                
         <div class="form-group height-adjust">
    <label class="control-label col-sm-4" for="email">Arrival by time:</label>
    <div class="col-sm-8">
        <input name="time" class="form-control" type="time">
    </div></div>
                
        <div class="form-group height-adjust">
    <label class="control-label col-sm-4" for="email">Date Of Departure:</label>
    <div class="col-sm-8">
        <input name="out_date" class="form-control" type="date">
    </div></div>
                
      
            </div>
            <div class="col-md-4 col-sm-6">
                 <div class="form-group height-adjust">
    <label class="control-label col-sm-5" for="email">Total no.of adults:</label>
    <div class="col-sm-7">
      <select name="adults" required  class="form-control" style="font-weight: normal">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    </select>
      </div></div>
          <div class="form-group height-adjust">
    <label class="control-label col-sm-5" for="email">No. of children:</label>
    <div class="col-sm-7">
      <select name="children" class="form-control" required  style="font-weight: normal">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    </select>
    </div></div>
                
        <div class="form-group height-adjust">
    <label class="control-label col-sm-5" for="email">Age(eg: 4,10,15):</label>
    <div class="col-sm-7">
        <input name="age" class="form-control" type="text">
    </div></div>
                
        <div class="form-group height-adjust">
    <label class="control-label col-sm-5" for="email">No.of rooms required:</label>
    <div class="col-sm-7">
        <select name="no_of_rooms" class="form-control"   required  style="font-weight: normal">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    </select>
    </div></div>
          
                
        
     
     
     </div>
            <div class="col-md-12 col-sm-6 text-center">
                <div class="form-group height-adjust">
    <label class="control-label col-sm-offset-1 col-sm-4" for="email">Hotel Category: </label>
    <div class=" col-sm-7">
        <input type="checkbox" value="Budget" name="hotel[]">Budget
		<input type="checkbox" value="Deluxe Hotel" name="hotel[]">Deluxe Hotel 
		<input type="checkbox" value="3 Star" name="hotel[]">3 Star
		<input type="checkbox" value="4 Star" name="hotel[]">4 Star
		<input type="checkbox" value="5 Star" name="hotel[]">5 Star
		<input type="checkbox" value="Luxury" name="hotel[]">Luxury
		<input type="checkbox" value="Heritage" name="hotel[]">Heritage
		<input type="checkbox" value="Ayurvedic/ Spa resort" name="hotel[]">Ayurvedic/ Spa resort<br>
    </div></div>
                
        <div class="form-group height-adjust">
    <label class="control-label col-sm-offset-1 col-sm-4" for="email">Also Interested In :</label>
    <div class="col-sm-7">
      <input type="checkbox" value="Ayurveda" name="intrested_in[]">
 Ayurveda <input type="checkbox" value="Cultural Show " name="intrested_in[]">
 Cultural Show <input type="checkbox" value="Wildlife Adventure" name="intrested_in[]">
 Wildlife Adventure
 <input type="checkbox" value="Village/Rural Tours" name="intrested_in[]">
 Village / Rural Tours
 <input type="checkbox" value="Houseboats" name="intrested_in[]">
 Houseboats
    </div></div>
                
         <div class="form-group height-adjust">
    <label class="control-label col-sm-offset-1 col-sm-4" for="email">Any Preferences Or Other Requirements*:</label>
    <div class="col-sm-5">
        <textarea name="preference" class="form-control" required></textarea>
    </div></div>
                  
                   
            </div>
            <div class="col-md-12 col-sm-12" style="margin-bottom: 15px;">
                   <input name="b_submit" value="Submit" class="btn-success btn-lg" type="submit">
    </div>
</form>
            </div>
</div>
<?php
include_once './footer.php';