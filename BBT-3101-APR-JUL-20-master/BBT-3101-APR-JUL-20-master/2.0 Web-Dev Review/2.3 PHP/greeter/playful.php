<?php
# making a choice randomly :)
$options = ["Tailwind","Bulma","uikit","foundation","MaterialDesign"];

#more randomnness... who is the shyest person in BBIT 3 a,b,c..?

$name = "Antony Mwala";

$name_length = strlen($name);

#array_rand() n times(where n is the number of letters in that persons name)

# :) Anthony, Sandra and Nicole

$final_int_pos = 0;
while($name_length <= 0){
  $final_int_pos = array_rand($options,1);
  $name_length = $name_length - 1;
}
//framework
echo $options[$final_int_pos];
