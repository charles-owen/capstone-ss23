<?php
/** @file
 * Course Assigment declarations
 */
 
return function(\CL\Course\Assignments $assignments) {

    $assignments->set_start('8/31/2022');

    //
    // Calendar events
    //
    $assignments->add_calendar("Assignments Open", "wed-1");
    $assignments->add_calendar("Meet and Greet", "wed-2", "startup");

    $assignments->add_calendar("Exam", "12/14/2022", "exam-{semester}");

    $assignments->add_calendar("University Holiday", "9/5/2022", null, false, "#808080");
    $assignments->add_calendar("Break Day", "10/24/2022");
    $assignments->add_calendar("Break Day", "10/25/2022");
    $assignments->add_calendar("University Holiday", "11/24/2022", null, false, "#808080");
    $assignments->add_calendar("University Holiday", "11/25/2022", null, false, "#808080");

    $assignments->add_calendar("Project 2 Info Session", "11/16/2022", "project2-{semester}", false, "#0077777");
    $assignments->add_calendar("Project 2 Design Reviews", "11/21/2022", "project2-{semester}", false, "#0077777");
    $assignments->add_calendar("Project 2 Design Reviews", "11/22/2022", "project2-{semester}", false, "#0077777");

    /*
     * Course grading categories and assignments
     */

    $designs = $assignments->add_category("designs", "Design Assignments", 20);
    $steps = $assignments->add_category("steps", "Step Assignments", 30);
    $projects = $assignments->add_category("projects", "Projects", 35);
    $exams = $assignments->add_category("exam", "Exam", 15);


    //
    // Design 2
    //
    $design = $designs->add_step("design2", "Design 2");
    $design->set_release('9/1/2022 1:00am', 'mon-3 11:55pm');
    $design->set_reviews_due('fri-3 11:55pm');

    //
    // Design 3
    //
    $design = $designs->add_step("design3", "Design 3");
    $design->set_release('-14 days', 'mon-4 11:55pm');
    $design->set_reviews_due('9/25/2022 11:55pm');
};
