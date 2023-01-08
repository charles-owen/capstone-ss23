<?php

return function($login) {

	$login->before = <<<HTML
<div class="rightbox secondb">
<p class="center">Welcome to the CSE335 website.</p>
<p>Please log in using your normal College of Engineering (DECS) account credentials.</p></div>
HTML;

    $login->after = <<<HTML
<div class="centerbox comp">
<p>Your User ID is the MSU Network ID. That is the part of your email address <em>without</em>
the @msu.edu. Please use your Engineering College (DECS) credentials to log in. If you have not
previously done so, you may need to <a href="https://www.egr.msu.edu/decs/myaccount/?page=activate" target="_blank">activate your DECS account.</a></p>
<p>If you are unable to log in, please contact
<a href="mailto:support@egr.msu.edu">support@egr.msu.edu</a> for help with your DECS account. Course staff have no control over accounts or passwords.</p>
</div>
HTML;

};
