<?php
set_time_limit(0);
$link = mysqli_connect('localhost','root','Your Password','Database Name');
//32-126
$title = "md5 generator";
$list = array();
for($i = 32; $i <= 126; $i++){
    $list[] = $i;
}

$startTime = time();
$overallStartTime = time();
//echo implode($list);
$count = 0;
#1
echo "start digit 1";
foreach($list as $single){
    insert_to_db(1,chr($single),md5(chr($single)), $link);
}


#2 (9025)
echo "start digit 2";
$char = 2;
$startTime = time();
$count = 0;
foreach($list as $first){
    echo $title." processing ".$char." char (".$count."/94) Time: ".((time()-$startTime)/60)."mins \n";
    $count++;
    foreach($list as $second){
        insert_to_db(2,chr($first).chr($second),md5(chr($first).chr($second)),$link);
    }
}


#3(857375)
echo "start digit 3";
$startTime = time();
$char=3;
$count = 0;
$count1 = 0;
foreach($list as $first){
    echo $title." processing ".$char."(".$count."/94) Time: ".((time()-$startTime)/60)."mins \n";
    $count++;
    $count1 = 0;
    foreach($list as $second){
        echo $title." processing ".$char."(".$count."/94)(".$count1."/94) Time: ".((time()-$startTime)/60)."mins \n";
        $count1++;
        foreach($list as $third){
            insert_to_db(3,chr($first).chr($second).chr($third),md5(chr($first).chr($second).chr($third)),$link);
        }
    }
}

#4(81450625)
echo 'start digit 4\n';
$startTime = time();
$char=4;
$count=0;
$count1 = 0;
$count2 = 0;
foreach($list as $first){
    echo $title." processing ".$char."(".$count."/94 Time: ".((time()-$startTime)/60)."mins \n";
    $count++;
    $count1 = 0;
    foreach($list as $second){
        echo $title." processing ".$char."(".$count."/94)(".$count1."/94) Time: ".((time()-$startTime)/60)."mins \n";
        $count1++;
        $count2 = 0;
        foreach($list as $third){
            echo $title." processing ".$char."(".$count."/94)(".$count1."/94)(".$count2."/94) Time: ".((time()-$startTime)/60)."mins \n";
            $count2++;
            foreach($list as $forth){
                insert_to_db(4,chr($first).chr($second).chr($third).chr($forth),md5(chr($first).chr($second).chr($third).chr($forth)),$link);
            }
        }
    }
}


#5
echo 'start digit 5\n';
$char=5;
$startTime = time();
$count=0;
$count1 = 0;
$count2 = 0;
$count3 = 0;
foreach($list as $first){
    echo $title." processing ".$char."(".$count."/94 Time: ".((time()-$startTime)/60)."mins \n";
    $count++;
    $count1 = 0;
    foreach($list as $second){
        echo $title." processing ".$char."(".$count."/94)(".$count1."/94) Time: ".((time()-$startTime)/60)."mins \n";
        $count1++;
        $count2 = 0;
        foreach($list as $third){
            echo $title." processing ".$char."(".$count."/94)(".$count1."/94)(".$count2."/94) Time: ".((time()-$startTime)/60)."mins \n";
            $count2++;
            $count3 = 0;
            foreach($list as $forth){
                echo $title." processing ".$char."(".$count."/94)(".$count1."/94)(".$count2."/94)(".$count3."/94) Time: ".((time()-$startTime)/60)."mins \n";
                $count3++;
                foreach($list as $fifth){
                    insert_to_db(5,chr($first).chr($second).chr($third).chr($forth).chr($fifth),md5(chr($first).chr($second).chr($third).chr($forth).chr($fifth)),$count);
                }
            }
        }
    }
}

#6
echo 'start digit 6\n';
$startTime = time();
$char=6;
$count=0;
$count1 = 0;
$count2 = 0;
$count3 = 0;
$count4 = 0;
foreach($list as $first){
    echo $title." processing ".$char."(".$count."/94 Time: ".((time()-$startTime)/60)."mins \n";
    $count++;
    $count1 = 0;
    foreach($list as $second){
        echo $title." processing ".$char."(".$count."/94)(".$count1."/94) Time: ".((time()-$startTime)/60)."mins \n";
        $count1++;
        $count2 = 0;
        foreach($list as $third){
            echo $title." processing ".$char."(".$count."/94)(".$count1."/94)(".$count2."/94) Time: ".((time()-$startTime)/60)."mins \n";
            $count2++;
            $count3 = 0;
            foreach($list as $forth){
                echo $title." processing ".$char."(".$count."/94)(".$count1."/94)(".$count2."/94)(".$count3."/94) Time: ".((time()-$startTime)/60)."mins \n";
                $count3++;
                $count4 = 0;
                foreach($list as $fifth){
                    echo $title." processing ".$char."(".$count."/94)(".$count1."/94)(".$count2."/94)(".$count3."/94)(".$count4."/94) Time: ".((time()-$startTime)/60)."mins \n";
                    $count4++;
                    foreach($list as $sixth){
                        insert_to_db(6,chr($first).chr($second).chr($third).chr($forth).chr($fifth).chr($sixth),md5(chr($first).chr($second).chr($third).chr($forth).chr($fifth),chr($sixth)),$link);

                    }
                }
            }
        }
    }
}

$finishTime = time();
$timeUse = $finishTime-$overallStartTime;
echo "total time used: ".$timeUse. " sec";


function insert_to_db($digits,$word,$md5, $link){
    $md5 = mysqli_real_escape_string($link, $md5);
    $word = mysqli_real_escape_string($link, $word);
    mysqli_query($link,"insert into md5 values ('$digits', '$word', '$md5')");

}