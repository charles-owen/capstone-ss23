<figure><img src="../design3/rabbits-fs22/farm1.jpg" alt="Rabbit farm" width="1069" height="550"></figure>

<figure class="right"><img src="../design3/rabbits-fs22/litter1.jpg" alt="Litter of rabbits" width="539" height="611"></figure>

<p class="problem">Problem: You are writing code to keep track of the inventory of a rabbit farm.
Of course, you have rabbits, each with a name and tag ID. Rabbits are of different breeds, such as Cottontail and Angora. A rabbit can be a buck, doe, or a kit. A buck is a male rabbit. A doe is a female rabbit. A kit is a 
young rabbit that we do not yet know the gender of. A reliability score is assigned to each buck indicating how reliable it is at impregnating a doe. A litter consists of a buck and a doe and any number of rabbits that are the offspring born in that litter. The farm regularly weighs the rabbits and records the weight.</p>	


<p class="scenario">Scenario: Sebastion is a Cottontail buck with tag ID 08937. He has reliability score 0.75. Arnold is an Angora buck. He has a reliability score of 1.0. Candy, Stephanie, and Barbara are all Angora does. Candy has a dewlap, Barbara does not. Sebastion and Candy had a litter on 1/22/2022, producing Arnold, Candy, and Barbara and another litter on 3/2/2022. Arnold and Stephanie had a litter on 5/13/2022. Arnold weighed 0.35kg on 1/25/2022, 1kg on 2/21/2022, and 3kg on 6/1/2022. Sebastion expired on 9/1/2022.</p>


<h3>Frequently Asked Questions</h3>

<?php echo Toggle::begin("What is a dewlap?", 'p'); ?>
  <p>The dewlap is an extra flap under the chin of a rabbit that contains fatty tissue. A dewlap tends to occur when a rabbit has reached sexual maturity and is able to reproduce, which is why the farm keeps track of them in the does.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("Does Stephanie have dewlap?", 'p'); ?>
<p>Why do we care? It is common that scenarios omit information. You may be able to guess from the scenario.</p>
<?php echo Toggle::end(); ?>


<?php echo Toggle::begin("Is Arnold a kit or a buck?", 'p'); ?>
<p> See the section "He was a kit for the first six weeks of his life, now he's a buck.</p>
<?php echo Toggle::end(); ?>


<?php echo Toggle::begin("How is a reliability score determined?", 'p'); ?>
<p>You put a doe in with a buck. How long does it take to get the job done. After all, we don't have all day.</p>
<?php echo Toggle::end(); ?>

<?php echo Toggle::begin("What does it mean when a rabbit expires?", 'p'); ?>
<p>'E's passed on! This rabbit is no more! He has ceased to be! 'E's expired and gone to meet 'is maker! 'E's a stiff! Bereft of life, 'e rests in peace! 'Is metabolic processes are now 'istory! 'E's off the twig! 'E's kicked the bucket, 'e's shuffled off 'is mortal coil, run down the curtain and joined the bleedin' choir invisible!! THIS IS AN EX-RABBIT!!</p>
<p>	What do you think we are farming them for? To be fair, Sebastion did make a really tasty stew. </p>
<?php echo Toggle::end(); ?>


<?php echo Toggle::begin("Don't we know if a rabbit is a buck or a doe?", 'p'); ?>
<p>Actually no. It turns out that it is surprisingly difficult to sex a very young rabbit.</p>
<?php echo Toggle::end(); ?>

