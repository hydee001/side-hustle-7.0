<?php
$voters_age = 18;
$voters_voting_ward = 020;
$voters_has_PVC = true;
 if($voters_age <18){
 echo"voter is not up to the age to vote";
}
elseif($voters_voting_ward < 020){
  echo"voter is not in the right ward";
} elseif ($voters_has_PVC = false){
 echo"voter do not have PVC";
}else{
 echo"you are eligible to vote";
}
?>
