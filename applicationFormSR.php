<?php

include 'include/class_select_year.php';
$select1 = new select_year();
$min_year = date('Y') - 2;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prijava filma na festival Alternative</title>
<link href="../../includes/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.warning
{ color:#F00;}
</style>
<script type="text/javascript">



function ckeckIfEmty(str)
{
//ako je polje prazno upozori
if (str=="")
  {
  document.getElementById("txtHint1").innerHTML="You must fill all required fields .";
  document.getElementById("txtHint2").innerHTML="You must fill all required fields .";
  document.getElementById("txtHint3").innerHTML="You must fill all required fields .";
  return;
  }
  document.getElementById("txtHint1").innerHTML="";
  document.getElementById("txtHint2").innerHTML="";
  document.getElementById("txtHint3").innerHTML="";
}
function validateEmail(str)
{
var x=str;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
</head>
<body style="color:#FFF; font-family:Arial, Helvetica, sans-serif;" bgcolor="#000000">
<form action="aplicationFormResultSR.php"  method="post" enctype="multipart/form-data" name="applicationForm">
  Forma za prijavu filma<br>
  <br/>
  <br/>  
  <br/>
  <table border="0" cellspacing="10px" >
    <tbody>
      <tr>
        <td>Originalni naslov</td>
        <td><input type="text" id="oriTitle" name="oriTitle" onblur="ckeckIfEmty(this.value)" /><div id="txtHint1" class="warning"></div></td>
      </tr>
      <tr>
        <td>Naslov na engleskom</td>
        <td><input type="text" id="engTitle" name="engTitle" onblur="ckeckIfEmty(this.value)" /></td>
      </tr>
      <tr>
        <td>Link na film</td>
        <td><input type="text" id="link" name="link"/></td>
      </tr>
      <tr>
        <td>Šifra za link na film (ako je potrebna)</td>
        <td><input type="text" id="link_password" name="link_password"/></td>
      </tr>
      <tr>
        <td>Režiser/autor</td>
        <td><input type="text" id="autor" name="autor" onblur="ckeckIfEmty(this.value)" /></td>
      </tr>
      <tr>
        <td>Zemlja produkcije</td>
        <td>
         <select name="country"> 
            <option value="" selected="selected">Izaberite zemlju</option> 
            <option value="United States">United States</option> 
            <option value="United Kingdom">United Kingdom</option> 
            <option value="Afghanistan">Afghanistan</option> 
            <option value="Albania">Albania</option> 
            <option value="Algeria">Algeria</option> 
            <option value="American Samoa">American Samoa</option> 
            <option value="Andorra">Andorra</option> 
            <option value="Angola">Angola</option> 
            <option value="Anguilla">Anguilla</option> 
            <option value="Antarctica">Antarctica</option> 
            <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
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
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
            <option value="Botswana">Botswana</option> 
            <option value="Bouvet Island">Bouvet Island</option> 
            <option value="Brazil">Brazil</option> 
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
            <option value="Brunei Darussalam">Brunei Darussalam</option> 
            <option value="Bulgaria">Bulgaria</option> 
            <option value="Burkina Faso">Burkina Faso</option> 
            <option value="Burundi">Burundi</option> 
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
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
            <option value="Cook Islands">Cook Islands</option> 
            <option value="Costa Rica">Costa Rica</option> 
            <option value="Cote D'ivoire">Cote D'ivoire</option> 
            <option value="Croatia">Croatia</option> 
            <option value="Cuba">Cuba</option> 
            <option value="Cyprus">Cyprus</option> 
            <option value="Czech Republic">Czech Republic</option> 
            <option value="Denmark">Denmark</option> 
            <option value="Djibouti">Djibouti</option> 
            <option value="Dominica">Dominica</option> 
            <option value="Dominican Republic">Dominican Republic</option> 
            <option value="Ecuador">Ecuador</option> 
            <option value="Egypt">Egypt</option> 
            <option value="El Salvador">El Salvador</option> 
            <option value="Equatorial Guinea">Equatorial Guinea</option> 
            <option value="Eritrea">Eritrea</option> 
            <option value="Estonia">Estonia</option> 
            <option value="Ethiopia">Ethiopia</option> 
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
            <option value="Faroe Islands">Faroe Islands</option> 
            <option value="Fiji">Fiji</option> 
            <option value="Finland">Finland</option> 
            <option value="France">France</option> 
            <option value="French Guiana">French Guiana</option> 
            <option value="French Polynesia">French Polynesia</option> 
            <option value="French Southern Territories">French Southern Territories</option> 
            <option value="Gabon">Gabon</option> 
            <option value="Gambia">Gambia</option> 
            <option value="Georgia">Georgia</option> 
            <option value="Germany">Germany</option> 
            <option value="Ghana">Ghana</option> 
            <option value="Gibraltar">Gibraltar</option> 
            <option value="Greece">Greece</option> 
            <option value="Greenland">Greenland</option> 
            <option value="Grenada">Grenada</option> 
            <option value="Guadeloupe">Guadeloupe</option> 
            <option value="Guam">Guam</option> 
            <option value="Guatemala">Guatemala</option> 
            <option value="Guinea">Guinea</option> 
            <option value="Guinea-bissau">Guinea-bissau</option> 
            <option value="Guyana">Guyana</option> 
            <option value="Haiti">Haiti</option> 
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
            <option value="Honduras">Honduras</option> 
            <option value="Hong Kong">Hong Kong</option> 
            <option value="Hungary">Hungary</option> 
            <option value="Iceland">Iceland</option> 
            <option value="India">India</option> 
            <option value="Indonesia">Indonesia</option> 
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
            <option value="Iraq">Iraq</option> 
            <option value="Ireland">Ireland</option> 
            <option value="Israel">Israel</option> 
            <option value="Italy">Italy</option> 
            <option value="Jamaica">Jamaica</option> 
            <option value="Japan">Japan</option> 
            <option value="Jordan">Jordan</option> 
            <option value="Kazakhstan">Kazakhstan</option> 
            <option value="Kenya">Kenya</option> 
            <option value="Kiribati">Kiribati</option> 
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
            <option value="Korea, Republic of">Korea, Republic of</option> 
            <option value="Kuwait">Kuwait</option> 
            <option value="Kyrgyzstan">Kyrgyzstan</option> 
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
            <option value="Latvia">Latvia</option> 
            <option value="Lebanon">Lebanon</option> 
            <option value="Lesotho">Lesotho</option> 
            <option value="Liberia">Liberia</option> 
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
            <option value="Liechtenstein">Liechtenstein</option> 
            <option value="Lithuania">Lithuania</option> 
            <option value="Luxembourg">Luxembourg</option> 
            <option value="Macao">Macao</option> 
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
            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
            <option value="Moldova, Republic of">Moldova, Republic of</option> 
            <option value="Monaco">Monaco</option> 
            <option value="Mongolia">Mongolia</option> 
            <option value="Montserrat">Montserrat</option> 
            <option value="Montenegro">Montenegro</option>
            <option value="Morocco">Morocco</option> 
            <option value="Mozambique">Mozambique</option> 
            <option value="Myanmar">Myanmar</option> 
            <option value="Namibia">Namibia</option> 
            <option value="Nauru">Nauru</option> 
            <option value="Nepal">Nepal</option> 
            <option value="Netherlands">Netherlands</option> 
            <option value="Netherlands Antilles">Netherlands Antilles</option> 
            <option value="New Caledonia">New Caledonia</option> 
            <option value="New Zealand">New Zealand</option> 
            <option value="Nicaragua">Nicaragua</option> 
            <option value="Niger">Niger</option> 
            <option value="Nigeria">Nigeria</option> 
            <option value="Niue">Niue</option> 
            <option value="Norfolk Island">Norfolk Island</option> 
            <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
            <option value="Norway">Norway</option> 
            <option value="Oman">Oman</option> 
            <option value="Pakistan">Pakistan</option> 
            <option value="Palau">Palau</option> 
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
            <option value="Panama">Panama</option> 
            <option value="Papua New Guinea">Papua New Guinea</option> 
            <option value="Paraguay">Paraguay</option> 
            <option value="Peru">Peru</option> 
            <option value="Philippines">Philippines</option> 
            <option value="Pitcairn">Pitcairn</option> 
            <option value="Poland">Poland</option> 
            <option value="Portugal">Portugal</option> 
            <option value="Puerto Rico">Puerto Rico</option> 
            <option value="Qatar">Qatar</option> 
            <option value="Reunion">Reunion</option> 
            <option value="Romania">Romania</option> 
            <option value="Russian Federation">Russian Federation</option> 
            <option value="Rwanda">Rwanda</option> 
            <option value="Saint Helena">Saint Helena</option> 
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
            <option value="Saint Lucia">Saint Lucia</option> 
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
            <option value="Samoa">Samoa</option> 
            <option value="San Marino">San Marino</option> 
            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
            <option value="Saudi Arabia">Saudi Arabia</option> 
            <option value="Senegal">Senegal</option> 
            <option value="Serbia">Serbia</option> 
            <option value="Seychelles">Seychelles</option> 
            <option value="Sierra Leone">Sierra Leone</option> 
            <option value="Singapore">Singapore</option> 
            <option value="Slovakia">Slovakia</option> 
            <option value="Slovenia">Slovenia</option> 
            <option value="Solomon Islands">Solomon Islands</option> 
            <option value="Somalia">Somalia</option> 
            <option value="South Africa">South Africa</option> 
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
            <option value="Spain">Spain</option> 
            <option value="Sri Lanka">Sri Lanka</option> 
            <option value="Sudan">Sudan</option> 
            <option value="Suriname">Suriname</option> 
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
            <option value="Swaziland">Swaziland</option> 
            <option value="Sweden">Sweden</option> 
            <option value="Switzerland">Switzerland</option> 
            <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
            <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
            <option value="Tajikistan">Tajikistan</option> 
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
            <option value="Thailand">Thailand</option> 
            <option value="Timor-leste">Timor-leste</option> 
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
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
            <option value="Uruguay">Uruguay</option> 
            <option value="Uzbekistan">Uzbekistan</option> 
            <option value="Vanuatu">Vanuatu</option> 
            <option value="Venezuela">Venezuela</option> 
            <option value="Viet Nam">Viet Nam</option> 
            <option value="Virgin Islands, British">Virgin Islands, British</option> 
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
            <option value="Wallis and Futuna">Wallis and Futuna</option> 
            <option value="Western Sahara">Western Sahara</option> 
            <option value="Yemen">Yemen</option> 
            <option value="Zambia">Zambia</option> 
            <option value="Zimbabwe">Zimbabwe</option>
        </select>      </td>
      </tr>
      <tr>
        <td>Godina Produkcije</td>
        <td><select id="year" name="year">
                     <?php echo $select1->get_select_year_from($min_year);?>          
                </select></td>
      </tr>
      <tr>
        <td>Trajanje (min)</td>
        <td><input type="text" id="duration" name="duration" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td>Format za prikazivanje</td>
        <td><select name="format" id="format" >
            <option value="dvd" selected="selected">DVD</option>
            <option value="min dv">mini DV</option>
            <option value="mini dvcam">mini DVCAM</option>
            <option value="blu-ray">Blu-ray</option>
          </select></td>
      </tr>
      <tr>
        <td> Scenarista</td>
        <td><input type="text" id="screenplay" name="screenplay" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td> Direktor fotografije</td>
        <td><input type="text" id="dop" name="dop" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td> Montaža</td>
        <td><input type="text" id="editing" name="editing" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td> Glumci</td>
        <td><input type="text" id="actors" name="actors" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td> Muzika</td>
        <td><input type="text" id="music" name="music" onblur="ckeckIfEmty(this.value)"/><div id="txtHint2" class="warning"></div></td>
      </tr>
      
      <tr>
        <td> Ostalo</td>
        <td><textarea cols="30" rows="7"   id="other" name="other">
        </textarea></td>
      </tr>
      <tr>
        <td> Produkcija</td>
        <td><input type="text" id="production" name="production" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td> Adresa produkcije</td>
        <td><input type="text" id="paddress" name="paddress" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td> Telefon produkcije (nije obavezno)</td>
        <td><input type="text" id="ptel" name="ptel"/></td>
      </tr>
      <tr>
        <td>  Fax produkcije (nije obavezno)</td>
        <td><input type="text" id="pfax" name="pfax"/></td>
      </tr>
      <tr>
        <td> E-mail Produkcije</td>
        <td><input type="text" id="pemail" name="pemail" onblur="ckeckIfEmty(this.value), validateEmail(this.value)"/></td>
      </tr>
      <tr>
        <td> Adresa </td>
        <td><input type="text" id="address" name="address" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td> Telefon (nije obavezno)</td>
        <td><input type="text" id="tel" name="tel"/></td>
      </tr>
      <tr>
        <td> E-mail </td>
        <td><input type="text" id="email" name="email" onblur="ckeckIfEmty(this.value), validateEmail(this.value)"/><div id="txtHint3" class="warning"></div></td>
      </tr>
      <tr>
        <td> Sinopsis</td>
        <td><textarea cols="30" rows="10"   id="sinopsis" name="sinopsis" onblur="ckeckIfEmty(this.value)">
        </textarea></td>
      </tr>
      <tr>
        <td> Kratka bio/filmografija</td>
        <td><textarea cols="30" rows="10"   id="bio-filmography" name="bio-filmography" onblur="ckeckIfEmty(this.value)">
        </textarea></td>
      </tr>
<tr>
<td>
  </td>
  </tr>
<tr>
<td> Slika reditelja (max  1MB):  
</td>
<td bgcolor="#999999">
<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
<input name="ufile[]" type="file" id="ufile[]" size="50" /></td>
</tr>
<tr>
<td>Slika iz filma 1 (max 1MB):</td>
<td bgcolor="#999999">
<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
<input name="ufile[]" type="file" id="ufile[]" size="50" /></td>
</tr>
<tr>
<td>Slika iz filma 2 (max 1MB):</td>
<td  bgcolor="#999999">
<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
<input name="ufile[]" type="file" id="ufile[]" size="50" /></td>
</tr>
<tr>
<td colspan="2">
  <p>Vaše radove možete poslati na adresu (ukoliko nam ne pošaljete link za preview filma): <br />
    <strong>Festival Alternative  Film / Video<br />
      Dom kulture Studentski grad <br />
      Bulevar Zorana Đinđića 179<br />
      11070 Novi Beograd<br />
      Srbija</strong>  </p>
  <p>Rok za slanje radova<strong>: </strong>20. oktobar 2014.</p>
</td>
</tr>
    </tbody>
  </table>

<table border="0" cellspacing="10px" >
    <tr>
      <td><br />
        Molimo Vas unesite kod sa slike:<br />
        <img src="captcha.php"><br />
        <input type="text" name="vercode" />
        <br>
        <input type="submit" name="Submit" value="Unesi Prijavu" />
        <br />
        <br />
        </td>
        </td>
  </table>
  </form>
</body>
</html>