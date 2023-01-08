

<p class="problem">You are designing classes for a rabbit breeder. Our breeder has, of course, rabbits. Each rabbit has a name and gender. There are breeds, each with a name. Rabbits can have litters (baby rabbits). Each litter has a date and a number of offspring. </p>


<p class="scenario">Scenario:  Our breeder has a male rabbit named Peter. Peter is an American Cottontail. His ear is tagged with the ID 178342. They have a female rabbit named Jennifer, who is an Angora. Jennifer had a litter on 7/26/2022 and had 11 offspring and another litter on 3/2/2022. Jennifer was vaccinated for Myxomatosis on 2/1/2021 and for Rabbit (Viral) Haemorrhagic Disease (R(V)HD) on 2/7/2021. Another rabbit is Bugs, who is a Wild Hare. Bugs was vaccinated for Rabbit (Viral) Haemorrhagic Disease 2 (R(V)HD2) on 9/15/2022. Alice is a female rabbit. Alice has not had a litter, yet. Roger is an American Cottontail. Roger has been vaccinated for Myxomatosis and Rabbit (Viral) Haemorrhagic Disease (R(V)HD).</p>



<p>Provide the classes and attributes to solve this problem. Write them in this editor and press submit to submit your answer to the peer review system. For this task we are only interested in the classes and attributes, <em>not the connections between classes</em>.</p>

<p>It is a convention that class and attribute names are expressed in camel-case with no spaces. Classes begin with a capital letter and attributes do not. Please use these conventions in your answer. For example, &quot;birth date&quot; would not be a valid attribute. &quot;birthDate&quot; is a valid attribute.</p>

<p class="centerbox secondb">The system retains previous answers for your convenience. However, the graders will grade only the most recent answer, which is first in the list of submissions.</p>

<h3>Frequently Asked Questions</h3>


<?php echo Toggle::begin("What type should I use for dates?", "p"); ?>
<p>Just use a type named Date. You are free to create reasonable basic types in your design. Just don't use silly language-specific names like time_t.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("What type should I use for the name of a gender?", "p"); ?>
<p>I would use a string. After all, a rabbit could be male, female, nonbinary, or many other possibilities.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("How long do I have to revise my submission after a review?", "p"); ?>
<p>You will have 24 hours.  This means if a review of your design is submitted at 10am in the morning, you have until 10am the next day to submit your revised solution.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("Why does the scenario have more information than the problem description?", "p"); ?>
<p>Often a scenario will present more information than you are given in the description.  This is normal.  Scenarios help give concrete examples of what the system must handle, so often include details that were not included in the description.  You should examine both to understand what is required in your solution.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("Some attributes are mentioned in the scenario but not given values.", "p"); ?>
<p>This is not a mistake.  Many times you will not get a fully flushed out scenario for each instance of a class.  Instead, the attributes may simply be noted without giving a value to them.  In this design, however, we're concerned about attributes and not values.  Later we'll discuss object diagrams that handle how to indicate instances of classes with attributes.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("So, there is just the one class for rabbits with a bunch of attributes, right?", "p"); ?>
<p>It will take more than that.  There is no reasonable solution with less than 5 classes and there are good solutions that have more. We certainly need some class in charge of our system. There can be multiple litters so there are plural cases. And, if you have multiple objects with the same values for attributes in them, you have redundancy and redundancy is your enemy. And, be sure you abide by rule 3 from Rules of Class Design!</p>
<p>Hint: the breed is NOT an attribute of Rabbit. If you do that you'll have the string "American Cottontail" in two different objects redundantly, based on the provided scenario. There's more than one example like this in this problem.</p>

<?php echo Toggle::begin("So do I need a gender class?", "p"); ?>
<p>That's a good question. This is where you have to make some decisions. Gender tends to be a basic type in a lot of systems, making it an attribute. But, there advantage of making it a class would be that you would be able to easily find all rabbits that identify as nonbinary.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("A rabbit seems to contain instances of many classes.  How do I show that in this assignment?", "p"); ?>
<p>You don't have to show the connections in this assignment.  We'll discuss how to use UML to show connections between classes in the next design assignment.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("Can classes have no attributes?", "p"); ?>
<p>Yes.  Sometimes classes just group instances of other classes together via a connection and don't have their own attributes.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("Do I need attributes named 'Myxomatosis', 'HaemorrhagicDisease' and 'HaemorrhagicDisease2?", "p"); ?>
  <p>Be sure you recognize the difference between <em>attributes</em> and <em>values</em>. An attribute is where you will
store a value.</p>
<?php echo Toggle::end(); ?>
