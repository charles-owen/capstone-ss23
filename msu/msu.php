<?php
/**
 * @file
 * Plugin format components for MSU-style headers and footers
 */

use CL\Site\Appearance;
use CL\Site\View;

class MSUAppearance extends Appearance{
	public function install(View $view) {
		$view->addCSS('msu/msu.css');
	}

	public function header(View $view, $title, $nav='') {
		$root = $view->root;
		$time = date('H');
		$css = $time < 6 || $time > 19 ? 'night' : 'day';

		$html = <<<HTML
<header class="cl-site msu $css">
  <div class="heading">
    <div class="masthead"><a href="https://msu.edu"><img src="$root/msu/img/msu/masthead-helmet-white.png" alt="MSU Masthead"></a></div>
    <h1>$title</h1>
  </div>$nav
</header>
HTML;

		return $html;
	}

	public function footer(View $view) {
		$root = $view->root;

		$html = <<<HTML
<footer class="msu">
<div>

<div>
    <a href="http://www.msu.edu">    <!-- Use green MSU wordmark -->
      <img alt="Michigan State University Wordmark" class="screen-msuwordmark" src="$root/msu/img/msu/msu-wordmark-green-221x47.png" height="47" width="221" />
      <img alt="Michigan State University Wordmark" class="print-msuwordmark" src="$root/msu/img/msu/msu-wordmark-black-221x47.png" height="47" width="221" />
    </a>
</div>
<div>
	<div class="msu-top">
	   <ul>
        <li><a href="$root/">CSE335 Home Page</a></li>
        <li><a href="https://www.cse.msu.edu/~cbowen">Dr. Charles B. Owen</a></li>
        <li><a href="https://www.cse.msu.edu/">Computer Science and Engineering</a></li>
      </ul>
	</div>
	<div class="msu-middle">
	      <ul>
        <li>Call MSU: <span class="msu-phone"><strong>(517) 355-1855</strong></span></li>
        <li>Visit: <strong><a href="http://msu.edu">msu.edu</a></strong></li>
        <li>MSU is an affirmative-action, equal-opportunity employer.</li>
      </ul>
	</div>
	<div class="msu-bottom">
	      <ul>
        <li class="spartans-will">Spartans Will</li>
        <li>© Michigan State University</li> 
        </ul>
	</div>
</div>

</div>
</footer>
HTML;

		return $html;
	}

	/**
	 * Allow for replacing images with custom ones.
	 * @param string $name Base name of the image (like taskicon)
	 * @param string $default Default to return if image is not replaced
	 * @return string
	 */
	public function image($name, $default) {
		switch($name) {
			case 'quizicon':
				return '/msu/img/quizicon.png';

			case 'taskicon':
				return '/msu/img/taskicon.png';

			case 'favicon':
				return '/msu/img/favicon.ico';
		}

		return $default;
	}

}

