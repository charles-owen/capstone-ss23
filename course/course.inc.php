<?php
/** @file 
 * This file contains the information that specifies a course
 *
 * This file must return a function that accepts the variable $course
 */

use \CL\Course\Section;

return function(\CL\Course\Course $course) {
	
	$course->define("cse335", 	// Course account name
		"CSE335", 				// Course name
		"Object-oriented Software Development"
		);
		
	/*
	 * Add the sections 
	 */
    $course->add_section('FS22', '730', Section::Online);
};

