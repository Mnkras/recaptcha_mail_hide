<?php   

/**
 * reCAPTCHA mail hide block
 *
 * @package Blocks
 * @subpackage BlockTypes
 * @author Michael Krasnow <mike@c5rockstars.com>
 * @category Packages
 * @copyright  Copyright (c) 2011 Michael Krasnow. (http://www.c5rockstars.com)
 *
 */
 
defined('C5_EXECUTE') or die("Access Denied.");

class RecaptchaMailHideBlockController extends BlockController {
	
	protected $btName = 'reCAPTCHA Mail Hide';
	protected $btDescription = 'Use reCAPTCHA to hide email addresses';
	protected $btTable = 'btRecaptchaMailHide';
	protected $btInterfaceWidth = "250";
	protected $btInterfaceHeight = "150";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = true;
	protected $btCacheBlockOutputLifetime = 720;
	
	public $mailhide_pubkey = '01Gk1X3cAhhrHCam4o-rgk6g==';
	public $mailhide_privkey = '94001c513dc762fc29aae8cdff4f7865';
		
	/* public function getSearchableContent() {
		//return $this->Email;
		return $this->text;
	}*/

	public function save($args) {
		parent::save($args);
	}

	public function getJavaScriptStrings() {
		return array(
			'email-required' => t('Please enter a valid email address.'),
			'text-required' => t('Please enter some link text.')
		);
	}

}
