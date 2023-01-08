<?php
/** @file
 * Design 2 step definition file
 */

use \CL\Step\Step;

return function(Step $step) {
	$step->rewrite = true;      // Uses HTTP Rewrite

	/*
	 * Basic step definition
	 */
	$step->set_name('Design 2: Class Design', 'Design 2');
	$step->set_icon('icon.png', '');
	
	/*
	 * The step sections and tasks 
	 */
	$step->add_section("intro", "Introduction");
	$step->add_task("task-{semester}");

	/*
	 * Grading categories
	 */
	$grading = $step->grading;
	 
	// Number is percent of total step grade
	$grading->add_manual(40, "peerreview", "Peer Review Participation");

    $step->submissions->add_text("task", "Design Task");
    $grading->add_manual(60, "task", "Design Task");
};

