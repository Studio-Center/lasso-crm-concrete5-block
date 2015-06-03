<form method="post" action="http://www.mylasso.com/outside_realtor_signup.php">

<!-- Lasso account details -->
<input type="hidden" name="ClientID" value="<?php echo $ClientID ?>" />
<input type="hidden" name="ProjectID" value="<?php echo $ProjectID ?>" />
<input type="hidden" name="LassoUID" value="<?php echo $LassoUID ?>" />
<?php
// thank you page
if(!empty($SignupThankyouLink)){
	echo '<input type="hidden" name="SignupThankyouLink" value="'.$SignupThankyouLink.'" />';
}
?>

<!-- form fields -->
<fieldset>
<label for="FirstName">First Name</label>
<input type="text" name="FirstName" required="required">
</fieldset>

<fieldset>
<label for="LastName">Last Name</label>
<input type="text" name="LastName" required="required">
</fieldset>

<fieldset>
<label for="PrimaryEmail">Email Address</label>
<input type="text" name="PrimaryEmail" required="required">
</fieldset>

<fieldset>
<label for="HomePhone">Phone Number</label>
<input type="text" name="HomePhone">
</fieldset>

<!--<label for="WorkPhone">Work Phone</label>
<input type="text" name="WorkPhone">

<label for="WorkPhoneExt">Work Phone Extension</label>
<input type="text" name="WorkPhoneExt">

<label for="MobilePhone">Mobile Phone</label>
<input type="text" name="MobilePhone">

<label for="Fax">Fax</label>
<input type="text" name="Fax">

<label for="OtherPhone1">Other Phone 1</label>
<input type="text" name="OtherPhone1">

<label for="OtherPhoneExt1">Other Phone 1 Extension</label>
<input type="text" name="OtherPhoneExt1">

<label for="OtherPhone2">Other Phone 2</label>
<input type="text" name="OtherPhone2">

<label for="OtherPhoneExt2">Other Phone 2 Extension</label>
<input type="text" name="OtherPhoneExt2">

<label for="SecondaryEmail">Secondary Email</label>
<input type="text" name="SecondaryEmail">

<label for="TertiaryEmail">Secondary Email</label>
<input type="text" name="TertiaryEmail">-->

<fieldset>
<label for="Address">Address</label>
<input type="text" name="Address">
</fieldset>

<fieldset>
<label for="City">City</label>
<input type="text" name="City">
</fieldset>

<fieldset>
<label for="Province">State</label>
<select name="Province">
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">Dist of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
  <option value="AS">American Samoa</option>
    <option value="GU">Guam</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="PR">Puerto Rico</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="VI">Virgin Islands</option>
    <option value="AA">Armed Forces Americas</option>
    <option value="AP">Armed Forces Pacific</option>
    <option value="AE">Armed Forces Others</option>	
</select>
</fieldset>

<fieldset>
<label for="PostalCode">Zip Code</label>
<input type="text" name="PostalCode" required="required">
</fieldset>

<fieldset>
<label for="<?php echo $HowDidYouLearnAboutUs ?>">How did you learn about us?</label>
<select name="<?php echo $HowDidYouLearnAboutUs ?>">
<?php
$answers = explode("\n",$HowDidYouLearnAboutUsAnswers);
foreach($answers as $answer){
	$answer = substr($answer, 1);
	$answer = explode(']', $answer);
	
	echo '<option value="'.$answer[0].'">'.trim($answer[1]).'</option>';
}
?>
</select>
</fieldset>

<fieldset>
<label>Comments or Questions?</label>
<textarea name="Comments ">
</textarea>
</fieldset>

<input type="submit" name="submit" value="Submit">

<!--<label for="Country">Country</label>
<input type="text" name="Country">

<label for="AgentLicenseNumber">Agent License Number</label>
<input type="text" name="AgentLicenseNumber">

<label for="Affiliatio IdNumber">Agent Affiliation ID Number</label>
<input type="text" name="AffiliatioIdNumber">

<label for="AffiliationType">Agent Affiliation Type </label>
<input type="text" name="AffiliationType">-->

</form>