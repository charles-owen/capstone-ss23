<?php

return function($quiz) {
	$root = $quiz->root;

	$front = <<<HTML
<figure class="float-right nomobile noshadow"><img src="$root/images/quizright.png"></figure>
HTML;

	$back = <<<HTML
<p class="centerbox comp">Online Quizzes are an individual 
activity. Please do not work with or discuss them with other students. </p>
HTML;

	$quiz->splash = $front . $quiz->splash . $back;

};
