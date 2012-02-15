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

class RecaptchaMailHidePackage extends Package {

	protected $pkgHandle = 'recaptcha_mail_hide';
	protected $appVersionRequired = '5.4.0';
	protected $pkgVersion = '1.0.1';
	
	public function getPackageDescription() {
		return t("Use reCAPTCHA to hide email addresses.");
	}
	
	public function getPackageName() {
		return t("reCAPTCHA Mail Hide");
	}
	
	public function install() {
		$pkg = parent::install();
		BlockType::installBlockTypeFromPackage("recaptcha_mail_hide", $pkg);
	}

}