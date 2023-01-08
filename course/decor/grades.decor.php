<?php

return function($page) {

    $page->after = <<<HTML
<div class="centerbox primary">
<p>To be eligible to earn a non-zero grade in this course, a student must do all the following:</p>
<ul>
  <li>Earn at least 50% of the total points available for Design Assignments</li>
  <li>Earn at least 50% of the total points available for Step Assignments</li>
  <li>Earn at least 50% of the total points available for Project 2</li>
</ul>
</div>
HTML;

};
