<?php
$string = "14 36 56 30 11 69 43 81 11 92 27 61 26 82 12 92 68 86 91 61 12 13 9 22 44 17 52 29 18 19 51 3 70 22 34 49 28 35 8 83 46 40 12 66 11 57 20 0 3 93 60 35 99 77 36 40 6 51 73 32 90 20 81 66 78 82 7 51 72 24 29 22 57 14 94 43 65 76 48 83 88 11 78 78 73 40 80 50 83 26 28 56 22 15 73 94 93 38 95 40 100";
$arrayNumber = [];
$arrayNumber = explode(" ", $string);
$inputNumber = $_POST['inputValue'];
function findNumberInArray($array, $number){
    if ($number < 0) {
        throw new Exception("Index less than 0");
    } else if ($number > 100) {
        throw new Exception("Index more than 100");
    } else {
        for ($index = 0; $index < count($array); $index++) {
            if ($index == $number) {
                return $array[$index];
            }
        }
    }
}

try {
    echo "The Number in Index " . $inputNumber . " is " . findNumberInArray($arrayNumber, $inputNumber);
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Hiển thị thông báo nếu người dùng nhập vào chỉ số không hợp lệ</title>
    <style>
        form {
            margin-left: 35%;
        }

        h2 {
            margin-left: 10%;
            color: blue
        }

        .display {
            width: 335px;
            height: 120px;
            margin: 0;
            padding: 10px;
            border: 2px #dd33dd solid;
        }

        input[type=submit] {
            margin-left: 10%;
            width: 70%;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Show notification</h2>
        <fieldset>
            Enter the number:
            <input type="text" name="inputValue" placeholder="Enter Number's Index">
            <br>Display:
            <input type="submit" value="Display">
        </fieldset>
    </div>
</form>
</body>
</html>
