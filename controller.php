<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
	
class LassoFormsBlockController extends BlockController {
	
	protected $btTable = 'btLMSBlockContent';
	protected $btInterfaceWidth = "600";
    protected $btInterfaceHeight = "400";
		
	public function getBlockTypeDescription() {
        return t("Lasso forms");
    }
    
    public function getBlockTypeName() {
        return t("Lasso forms");
    }  
	
	public function __construct($obj = null) {     
        parent::__construct($obj); 
    }
    
    public function view(){ 
		$this->set('ClientID', $this->ClientID);
        $this->set('ProjectID', $this->ProjectID); 
        $this->set('LassoUID', $this->LassoUID); 
        $this->set('SignupThankyouLink', $this->SignupThankyouLink); 
        $this->set('HowDidYouLearnAboutUs', $this->HowDidYouLearnAboutUs); 
        $this->set('HowDidYouLearnAboutUsAnswers', $this->HowDidYouLearnAboutUsAnswers); 
	}
	
	public function save($data) { 
		$args['ClientID'] = isset($data['ClientID']) ? trim($data['ClientID']) : '';
        $args['ProjectID'] = isset($data['ProjectID']) ? trim($data['ProjectID']) : '';
        $args['LassoUID'] = isset($data['LassoUID']) ? trim($data['LassoUID']) : '';
        $args['SignupThankyouLink'] = isset($data['SignupThankyouLink']) ? trim($data['SignupThankyouLink']) : '';
        $args['HowDidYouLearnAboutUs'] = isset($data['HowDidYouLearnAboutUs']) ? trim($data['HowDidYouLearnAboutUs']) : '';
        $args['HowDidYouLearnAboutUsAnswers'] = isset($data['HowDidYouLearnAboutUsAnswers']) ? trim($data['HowDidYouLearnAboutUsAnswers']) : '';
        parent::save($args);
	}
	
}