<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link href="../cl/course.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div class="full">

<p>When you are done, use this page to submit your diagram to the peer review system. </p>
<?php echo Toggle::begin("Submission Instructions", "h3"); ?>
<p>When you are done with a diagram, use this page to submit it to the peer review system and to view the reviews. </p>
<p>To export a diagram from Visual Paradigm for submission:</p>
<p>1. Ensure the diagram you want to export is open. </p>
<p>2. Select Project/Export/Active Diagram as Image...</p>
<p>3. Set the Save as type to PNG files (*.png with background). </p>
<p>4. Set the dpi to 72 (the default is 96).</p>
<p>5. Choose a filename and save the file.</p>
<p>The system should look something like this:</p>
<p class="figure"><img src="img/vpexport.png" alt="Visual Paradigm export" width="563" height="418"></p>
<p>Select the file with the Choose File button, then click Upload File. You should see your image after it is done loading.</p>
<p>You can submit as often as you like. You are encouraged to resubmit revisions after reading the peer reviews. You have 24 hours after any review to resubmit, even after the due date.</p>

<?php echo Toggle::end(); ?>

<?php echo $view->present_submissions(); ?>

<?php echo Toggle::begin("I get 'Not a valid image'", "p"); ?>

<p>Submissions must be a PNG file. If you try to submit the Visual Paradigm .vpp file, it will fail 
with this message. Re-read the instructions above 
on how to export an image of your design and follow them carefully.</p>

<?php echo Toggle::end(); ?>
</div>

</body>

