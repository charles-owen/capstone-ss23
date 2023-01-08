<?php

return function($page) {

	$page->after = <<<HTML
<div class="full">
<div class="centerbox primary">
<p>The web server backup starts at 3am every morning. This can bring the site down for several hours. For all
other issues, please contact the instructor to indicate that the site is currently down.</p>
</div>
</div>	
HTML;

};
