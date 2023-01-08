<?php
/**
 * @file
 * System email configuration file.
 */

return function(\CL\Site\Email $email) {
	$siteName = $email->site->siteName;
	$email->fromName = "$siteName Course Email";
	$email->fromEmail = "no-reply@cse.msu.edu";
};
