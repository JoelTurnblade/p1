<?php
$array = [
  //quote 1
  '“Now the trouble about trying to make yourself stupider than you really are
   is that you very often succeed.”
   <br>― C.S. Lewis, The Magician\'s Nephew',

   //quote 2
   '“I wish it need not have happened in my time," said Frodo.
   "So do I," said Gandalf, "and so do all who live to see such times.
   But that is not for them to decide. All we have to decide is what to do
   with the time that is given us.”
   <br>― J.R.R. Tolkien, The Fellowship of the Ring',

   //quote 3
   '“It does not do to leave a live dragon out of your calculations,
   if you live near him.”
   <br>― J.R.R. Tolkien, The Hobbit',

   //quote 4
   'Fixed fortifications are a monument to the stupidity of man.
   <br>― George Patton',

   //quote 5
   'In preparing for battle, I have always found that plans are useless
   but planning is indispensable.
   <br>― Dwight Eisenhower',

   //quote 6
   'Opportunity is missed by most people because it is dressed in overalls
   and looks like work.
   <br>― Thomas Edison',
];
$index=array_rand($array,1);
$output="<p>".$array[$index]."</p>";
echo $output;
?>
