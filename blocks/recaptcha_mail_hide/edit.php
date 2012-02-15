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
?>

<div class="ccm-recaptcha_email_block-field-group">
	<h2><?php   echo t('Email')?></h2>
	<?php   echo $form->text('Email', $Email, array('style' => 'width: 95%;')); ?>
	<h2><?php   echo t('Link Text')?></h2>
	<?php   echo $form->text('text', $text, array('style' => 'width: 95%;')); ?>
</div>


