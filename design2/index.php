<?php
require_once "../site.php";	// For all pages
$view = new \CL\Step\StepPageView($site, 'design2');
?>
<!doctype html>
<html lang="en-US">
<head>
<link href="../cl/site.css" type="text/css" rel="stylesheet" />
<link href="../cl/course.css" type="text/css" rel="stylesheet" />
<?php echo $view->head(); ?>
</head>
<body>
<?php echo $view->header(); ?>


<p>In this design assignment we are introducing concepts of design in object-oriented programs. In larger programs, good design is essential. We have to choose what the classes are and what they do. That is the focus of this assignment.</p>
<p>This assignment is relatively short, but leave time to solve the task.</p>
<p>For this design assignment, you will submit your solution electronically to the peer review system. </p>
<p id="return">Every submission will be assigned randomly to two peer reviewers. You will, in turn have two of every assignment assigned to you for peer review. You must submit a completed assignment by the assignment due date. However, you can post revisions of your solutions up to 24 hours after you receive a review. This gives you time to update your submission in response to the review.</p>

<p class="centerbox comp">Be sure you are aware of the 24-hour rule. If a student posts a review of your assignment at 1pm on Tuesday, you have until 1pm Wednesday to revise your submission. Also, be aware that you can ONLY revise after the due date if your submission is reviewed. If, the students assigned to review your submission drop the course or just don't bother to do the review, don't count on being able to revise your submission after the initial due date.</p>

<p>You are required to perform a peer review on all assignments assigned to you. Failure to provide at least one review of any submission assigned to you will result in a deduction from the assignment grade.</p>
<p>More <a class="cl-autoback" href="../cl/peerreview">details on the peer review system</a> are available. </p>

<p>See the <?php echo $view->section_link('task-{semester}', 'assignment task page'); ?> for more details and reviews.</p>

<?php echo $view->due_present(); ?>

<?php echo $view->present_sections(); ?>

<?php echo $view->footer(); ?>
</body>
</html>
