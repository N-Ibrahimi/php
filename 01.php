
<?php 

$workingtime=[];

$workingtime[0]['open']=(int)readline('enter the opening time: ');
$workingtime[0]['close']=(int)readline('enter the closing time: ');

        if($workingtime[0]['open'] > $workingtime[0]['close']){
            echo "the entered time is invalid \ntry again !";
        }
$i=0;
$action=null; 

while($action != 'no'){

    $action=readline("Do you want to enter another time? ");

if ($action != 'no'){

    $i+=1;
    $workingtime[$i]['open']=$open=(int)readline('enter the opening time: ');
    $workingtime[$i]['close']=$close=(int)readline('enter the closing time: ');

            if($workingtime[$i]['open'] > $workingtime[$i]['close']){
                echo "the entered time is invalid \n try again !";
            }
        } else {

            echo "Merci\n";
            echo "******************************************\n";
        }

    }

 $x=0;
    foreach($workingtime as $work){
      
        echo '- our shop is open between '. $work['open']. ' and '. $work['close']. " everyday\n";
    };


?>

