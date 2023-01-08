<?php
require_once "../site.php";	// For all pages
$view = new \CL\Step\StepPageView($site, 'design3');
?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<link href="../cl/course.css" type="text/css" rel="stylesheet" />
<?php echo $view->head(); ?>
</head>
<body>
<?php echo $view->header(); ?>

<p>This design assignment introduces UML and class modelling.</p>
<p>This content of this assignment is covered in this chapter:</p>
<?php echo $section->get_textbook(1)->reading("Chapter 3"); ?>
<p>For this design assignment, you will submit your solutions electronically to the peer review system. </p>



<p>Every submission will be assigned randomly to two peer reviewers. You will, in turn have two of every assignment assigned to you for peer review. You must submit a completed assignment by the assignment due date. However, you can post revisions of your solutions up to 24 hours after you receive a review. This gives you time to update your submission in response to the review.</p>
<p>You are required to perform a peer review on all assignments assigned to you. Failure to provide at least one review of any submission assigned to you will result in a deduction from the assignment grade.</p>

<p>More <a class="cl-autoback" href="../cl/peerreview">details on the peer review system</a> are available. </p>

<p>See the <?php echo $view->section_link('submission', 'assignment submission page'); ?> for more details and reviews.</p>

<?php echo $view->due_present(); ?>

<?php echo $view->present_sections(); ?>

<?php echo $view->footer(); ?>
</body>
</html>
