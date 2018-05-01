<?php
$quote = array( //an array of sentences
"I wish I had",
"Why Can't I have",
"Can I have", 
"Did you have",
"Will you get",
"When will I get",
"Hey, should I get",
"I love",
"Why is",
"What is",
"Am I",
"You like",
"Are you",
"Do I know",
"Do I",
"This is a",
"I am a",
"This is another",
"What is",
"Do you like",
"Do you",
"I know",
"You know",
"I think you are a",
"I think"
);  

$rand_quote = array_rand($quote,1); //randomly select a sentence

$items = file("./words.txt"); //load all the words and form it into an array

$rand_keys = array_rand($items,1); //select one random word from the formed array
$stmt = $quote[$rand_quote] ." ". $items[$rand_keys]; //join the randomly generated sentence and the randomly generated word
echo $stmt; //echo the result
?>
