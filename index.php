<?php
require 'site.php';
$view = new CL\Course\CourseHomeView($site);
require "index-$semesterLC.php";
