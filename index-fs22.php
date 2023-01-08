<!DOCTYPE html>
<html lang="en-US">
<head>
<link href="cl/site.css" type="text/css" rel="stylesheet" />
<link href="cl/course.css" type="text/css" rel="stylesheet" />
<?php echo $view->head(); ?>
</head>
<body>
<?php echo $view->header(false); ?>
<div class="cl-course-home">
<!--
 - The main block at the top of the page
 -->
<div class="cl-main">
  <div>

    <div class="cl-controls">

      <?php
      echo $view->logout_button();
      echo $view->management_controls();
      if($user->staff) echo '<p class="cl-home-control center"><a href="staffinfo">Staff Info</a></p>';
      ?>

    </div>

    <p class="cl-single-space"><?php echo $section->season . ', ' . $section->year; ?>, <span id="cl-site-time"></span><br />
      Greetings <?php echo $user->displayName; ?> </p>

	  
      <p><strong><a href="http://www.cse.msu.edu/~cbowen">Dr. Charles B. Owen</a></strong>, Instructor,
          <a class="email" href="mailto:cbowen@cse.msu.edu">cbowen@msu.edu</a><br>
          Office Hours, 3134 EB: 4:00-5:00pm Monday and Wednesday and by request<br>
          <a href="https://msu.zoom.us/j/92031735332" target="_blank">Zoom Meetings</a>, Passcode: 391212<br>
          Zoom Office Hours, 4:00-5:00pm Thursday and by request
      </p>


    <p>The course <a href="http://www.cse.msu.edu/~cse335/<?php echo $section->semesterLC; ?>/syllabus.php" target="_blank">syllabus</a> is available.</p>

<?php echo $view->hot(); ?>
<?php echo $view->present_calendar(); ?>

    <div>

      <div class="cl-twocol cl-nopadding-lr">
        <div class="cl-card">
          <h2>Course resources</h2>
          <ul>
            <li class="star"><a href="commonissues">Common and Frequent Problems</a></li>
            <LI class="star"><A href="software">Software Requirements for this Course</A></LI>
            <LI class="star"><A href="staff">Course Staff</A><br />&nbsp;</LI>

            <LI><a href="http://www.cse.msu.edu/~cse335/<?php echo $section->semesterLC; ?>/syllabus.php" target="_blank">Course syllabus</a>
            <LI><a href="handbook">Course Handbook</a></LI>
            <LI><a href="doxygen">Using Doxygen</a></LI>
            <LI><a href="commonissues/gettinghelp.php">Getting Help</a></LI>

          </ul>
        </div>

        <div class="cl-card">
          <H2>Site Tools and Resources</H2>
		    <?php echo $view->enrolled_tools(); ?>
          <ul>
            <li><a href="startup/succeed.php">Succeeding in CSE335</a></li>
            <li><a href="faq">Frequently Asked Questions</a></li>
           <!-- <li><a href="lib/review/peerreview.php">About the Peer Review System</a></li> -->
            <li><a href="credits">  Site Credits</a></li>
          </ul>

        </div>
      </div>

    </div>

  </div> <!-- main/.left -->

</div> <!-- main -->

<!--
 - The various lists
 -->
<div class="cl-lists">
  <div class="cl-twocol">
    <div class="cl-card">
      <h2>Design Assignments</h2>
		  <?php echo $view->assignments('designs'); ?>
      <p>When two dates are displayed, the first is the due date
        and the second is the last date for peer reviews.</p>
    </div>

    <div class="cl-card">
      <h2>Step Assignments</h2>
		  <?php echo $view->assignments('steps'); ?>
    </div>
  </div>

  <div class="cl-twocol">
    <div class="cl-card">
      <h2>Exam</h2>
        <?php echo $view->assignments('exam'); ?>
    </div>

    <div class="cl-card">
      <h2>Projects</h2>
      <?php echo $view->assignments('projects'); ?>
    </div>

  </div>

</div>  <!-- .lists -->

</div>  <!-- div.cl-course-home -->
<?php echo $view->footer(false); ?>
</body>
</html>
