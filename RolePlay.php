<?php
function roll ( $lower=1, $higher=6)
{
   return mt_rand($lower,$higher);
}

echo roll()."\n";
?>
