
<?php 

// yes or no cheaking variable 
$action=null; 
$workingtime=[];

//boucle while  
while($action !== 'n'){

        if ($action !== 'n'){
// setting the time 
            $open=(int)readline('enter the opening time: ');
            $close=(int)readline('enter the closing time: ');

        // cheacking the end time is biger the starting time
                if($open > $close){
                    echo "the entered time is invalid \ntry again !";
                }

            //saving the time 
            $workingtime[]=[$open, $close];

        }

        $action=readline("Do you want to enter another times? (o/n) => ");

    }

    echo "******************************************\n";
    echo "Merci\n";
    echo "******************************************\n\n\n";


    //asking at what time he wants to go to shop?

    $going=(int)readline("what time do you want to go at shop? =>");
    $is_open=false;
    foreach($workingtime as $hour){
        if($going >= $hour[0] && $going <= $hour[1]){
            echo "\n\nthe shop is open !\n\n";
            $is_open=true; 
        }
    }
    
    // if the shop is not open show this message 
    if($is_open !=true ){
        echo "\n\nthe shop is close !\n\n";
    }


// general inforamation about working times
    echo "******************************************\n";
    foreach($workingtime as $work){
        echo '- our shop is open between '. $work[0]. ' and '. $work[1]. "\n";
    };
    echo "******************************************\n";
    
//  end


?>

