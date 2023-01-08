<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>Design Task: Rabbit Farm</title>
<link href="../cl/course.css" type="text/css" rel="stylesheet" />
</head>
<body>

<strong><p>Your task: create a UML class diagram for this problem.</p>
<p>Submission is on the following page.</p></strong>

<p class="centerbox comp">This problem is similar to the Design 2 problem, but there are some 
	significant differences. Be sure to read the problem carefully.</p>	
	
<?php
require '../design3/rabbits-fs22/task.inc.php';
?>

<h3> Checklist </h3>

<?php
$checklist = new Checklist();
$checklist->item = 'It should be possible to refer to things that are the same using a single class. For example, bucks and does are both rabbits.';
$checklist->item = 'There should be no redundant attributes in a class hierarchy. Redundant attributes should be moved into base classes.';
$checklist->item = 'Base classes should not have attributes that are not used by derived classes.';
$checklist->item = 'UML should not have language artifacts.';
$checklist->item = 'My class names are Camel Case, do not have spaces and start with a capital letter.';
$checklist->item = 'My attribute names are Camel Case,  do not have spaces, do not start with a leading &quot;m&quot; (language artifact), and start with a lower case letter.';
$checklist->item = 'None of my attributes are classes.';
$checklist->item = 'There are no containers in any of my classes (list, vector, arrays, etc.)';
echo $checklist->present();
?>

</body>

