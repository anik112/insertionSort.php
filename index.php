
<?php

// $ch=0;
// $count=0;
// $temp=0;
// $ar=[10,4,3,7,5];

// print_r($ar);

// while($ch != 4){

//     for($i=0; $i<sizeof($ar)-1; $i++){
//         if($ar[$i]>$ar[$i+1]){
//             $temp=$ar[$i];
//             $ar[$i]=$ar[$i+1];
//             $ar[$i+1]=$temp;
//         }
//     }

//     for($i=0; $i<sizeof($ar)-1; $i++){
//         if($ar[$i]<$ar[$i+1]){
//             $count++;
//         }
//     }

//     if($count == sizeof($ar)-1){
//         break;
//     }
//     $ch++;
// }

// echo 'Sort item = ';
// for($i=0; $i<sizeof($ar); $i++){
//     echo $ar[$i]. " ,";
// }




// print_r($ar);

$get_value=0;
$numberA=[];
$oldNumber=[];

if(isset($_POST['numberList'])){

    // print_r($_POST['numberList']);

    $get_value=$_POST['numberList'];

}

if(isset($_POST['number0'])){

    $get_count_value=$_POST['getValue'];

    for($j=0; $j<$get_count_value; $j++){
        $numberA[$j]=$_POST["number$j"];
        $oldNumber[$j]=$numberA[$j];
    }

    $count=0;
    $ch=0;

    while($ch != sizeof($oldNumber)){

        for($i=0; $i<sizeof($numberA)-1; $i++){
            if($numberA[$i]>$numberA[$i+1]){
                $temp=$numberA[$i];
                $numberA[$i]=$numberA[$i+1];
                $numberA[$i+1]=$temp;
            }
        }

        for($i=0; $i<sizeof($numberA)-1; $i++){
            if($numberA[$i]<$numberA[$i+1]){
                $count++;
            }
        }

        if($count == sizeof($numberA)-1){
            break;
        }
        $ch++;
    }

    // print_r($numberA);
}


?>




<!-- Start html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertion Sort</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <div class='container'>
        <h1 style='text-align: center;'>Insertion sort</h1>
        <div class='card my-5'>
            <div class='card-body'>
            <form action="" method="post">
                <div class="form-group">
                    <label for="numberList">Type box number: </label>
                    <input type="text" name="numberList" class="form-control" id="text" >
                </div>
                
                <button type="submit" class="btn btn-default">Get Box</button>
            </form>

            <div class='card mt-5'>
                <div class='card-body'>
                    <form action="" method="post">
                        <div class='my-5'>
                            <p style="display: inline;">Number of given input:</p> <input type="text" value=<?=$get_value;?> name='getValue'>
                        </div>

                        <?php for($i=0; $i<$get_value; $i++):?>
                            <div class="form-group">
                                <label for="numberList">Type number ( <?=$i;?> ):  </label>
                                <input type="text" name="number<?=$i?>" class="form-control" id="text" >
                            </div>
                        <?php endfor;?>
                        <button type="submit" class="btn btn-default" style='width: 100px;'>Sort</button>
                    </form>
                </div>
            </div>

            <div class='card mt-5'>
                <div class='card-body'>
                <p style="display: inline;">Old all number: </p> <p style="display: inline;">
                <?php foreach($oldNumber as $a): ?>
                <?=$a.','?>
                <?php endforeach; ?>
                </p>
                </div>
            </div>

            <div class='card mt-5'>
                <div class='card-body'>
                    <p style="display: inline;">Sorted all number: </p> <p style="display: inline;">
                        <?php foreach($numberA as $a): ?>
                        <?=$a.','?>
                        <?php endforeach; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>    
    </div>
    <table></table>
    <script src="script.js"></script>
</body>
</html>