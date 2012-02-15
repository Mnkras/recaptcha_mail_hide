ccmValidateBlockForm = function() {

	if (!validateEmail($('#Email').val())) {
		ccm_addError(ccm_t('email-required'));
	}
	
	if ($('#text').val() == '') {
		ccm_addError(ccm_t('text-required'));
	}

	return false;
}

function validateEmail(email) { 
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ 
	return email.match(re) 
}