<?php
$members = [
    ['num' => 2, 'rank' => 0],
    ['num' => 2, 'rank' => 0],
    ['num' => 3, 'rank' => 0],
    ['num' => 3, 'rank' => 0],
    ['num' => 3, 'rank' => 0],
    ['num' => 3, 'rank' => 0],
    ['num' => 3, 'rank' => 0],
    ['num' => 5, 'rank' => 0],
    ['num' => 9, 'rank' => 0],
    ['num' => 9, 'rank' => 0],
    ['num' => 9, 'rank' => 0]    
];

$rank=0;
$previous_rank=0;
foreach($members as &$var){
    //star of rank
    if($var['num']==$previous_rank){
        $var['rank']=$rank;
    }else{
        $var['rank']=++$rank;
        $previous_rank=$var['num'];   
    }//end of rank
    
    echo $var['num'].' - '.$var['rank'].'<br>';
}
?>