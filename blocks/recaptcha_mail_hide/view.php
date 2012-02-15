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
$c = Page::getCurrentPage();
if (!empty($Email) && !empty($text)) {
	echo '<div class="recaptcha_mail_hide">';
	Loader::library('recaptchalib', 'recaptcha_mail_hide');
	$url = htmlentities(recaptcha_mailhide_url($controller->mailhide_pubkey, $controller->mailhide_privkey, $Email));
	echo "<a href='".$url."' onclick=\"window.open('".$url."', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;\" title=\"".$text."\">".$text."</a>";
	echo '</div>';
} else if ($c->isEditMode()) { ?>
	<div class="ccm-edit-mode-disabled-item">
		<div style="padding:8px 0px;"><?php   echo t('reCAPTCHA Mail Hide.'); ?><br /><?php   echo t('Invalid email or link text.'); ?></div>
	</div>
<?php   } ?>