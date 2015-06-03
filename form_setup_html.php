<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
<div>

<h3>Create/Edit Lasso CRM Conversion Form</h3>

<fieldset>
<label><?php echo t('ClientID') ?></label>
<input type="text" name="ClientID" value="<?php echo $ClientID ?>">
</fieldset>

<fieldset>
<label><?php echo t('ProjectID') ?></label>
<input type="text" name="ProjectID" value="<?php echo $ProjectID ?>">
</fieldset>

<fieldset>
<label><?php echo t('LassoUID') ?></label>
<input type="text" name="LassoUID" value="<?php echo $LassoUID ?>">
</fieldset>

<fieldset>
<label><?php echo t('Signup Thank You Link') ?></label>
<textarea id="ccm-SignupThankyouLink" name="SignupThankyouLink" style="width:98%; height:100px;">
<?php echo $SignupThankyouLink ?>
</textarea>
</fieldset>

<h4>How Did You Learn About Us Custom Field</h4>
<fieldset>
<label><?php echo t('Unique Identifier') ?></label>
<input type="text" name="HowDidYouLearnAboutUs" value="<?php echo $HowDidYouLearnAboutUs ?>">
</fieldset>

<fieldset>
<label><?php echo t('Answer IDs') ?></label>
<textarea id="ccm-HowDidYouLearnAboutUsAnswers" name="HowDidYouLearnAboutUsAnswers" style="width:98%; height:100px;">
<?php echo $HowDidYouLearnAboutUsAnswers ?>
</textarea>
</fieldset>

</div>