<html>
<head>
    <meta charset = "UTF-8">
    <title>Calendar</title>
    <style type="text/css">
        *{
            font-size: 25px;
            font-family: Roboto;
        }
        #calendar {
            width: 605px;
            height: 580px;
            padding: 0;
            display: block;
        }
        #top{
            background-color: #f95050;
            width: 666px;
            height: 72px;
            line-height: 72px;
            font-size: 45px;
            color: white;
            position: relative;
            text-align: center;
            margin: 0 auto;
            border-radius: 5px;
        }
        .calendar1{
            padding: 1px;
            width: 665px;
            height: 570px;
            background-color: white;
            border: 0px;
        }
        .ngay_ngoai{
            box-shadow: 0px 0px 1px 0px #bdbdbd ;
            background-color: #ffffff;
            background: no-repeat;
            text-align: center;
            width: 14.2857%;
            line-height: 72px;
            height: 72px;
            font-weight: bold;
            color: #bdbdbd;
        }
        .ngay_a{
            box-shadow: 0px 0px 1px 0px #bdbdbd ;
            background-color: #ffffff;
            background: no-repeat;
            text-align: center;
            width: 14.2857%;
            line-height: 72px;
            height: 72px;
            font-weight: bold;
            margin: 5px;
        }
        .calendar1 div div{
            width: 85px;
            text-align: center;
            line-height: 61px;
        }
        #calendar div, .calendar1 div{
            display: inline-block;
        }
        .today {
            font-weight: bold;
            box-shadow: 0px 0px 1px 0px #bdbdbd ;
            background-color: #ffffff;
            background: no-repeat;
            text-align: center;
            width: 14.2857%;
            line-height: 72px;
            height: 72px;
        }
        .ngay_ngoai {
            color: #bdbdbd;
            font-weight: bold;
            margin: 5px;
        }
        .thu_tuan div{
            border: none;
        }
        .tuan{
            width: 700px;
        }
        .tuan:last-child div:first-child{

        }
        .tuan:last-child div:last-child{

        }
        .today{
            margin: 5px;
            background-image: url("today.png");
        }
        button{
            border: none;
            background-color: transparent;
            top: 20px;
            color: white;
        }
        button:focus{
            outline: none;
        }
        button:hover{
            -webkit-transform: scale(1.2);
        }
        #thu_tuan
        {
            margin: 0 auto;
            border-radius: 5px;
            background-color: pink;
            margin-left: 2px;
            margin-bottom: 10px;
            margin-left: 35px;
            margin-top: 7px;
            color: #f95050;
        }
    </style>
</head>
<body>
<?php
    $monthnames = array(0,"January","Februrary","March","April","May", "June","July","August","September","October","November","Decemeber");
    $monthDays = array(0,31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $now = getdate();
    echo '<div id = "main">';
    echo '<div id="calendar">';
    echo '<div id="top">';
    echo $now["mday"];
    echo " ";
    echo $monthnames[$now["mon"]];
    echo " ";
    echo $now["year"];
    echo '</div>';
echo '<div class = "calendar1">';
echo '<div id="thu_tuan"><div>MO</div><div>TU</div><div>WE</div><div>TH</div><div>FR</div><div>SA</div><div>SU</div></div>';
    echo '<div id="calendar_day"></div>';
    $week=0;
    $total=$monthDays[$now["mon"]];
            for($i=0;$i<5;$i++) {
                if ($week == 0) {
                    echo '<div class="tuan">';
                    $ngay_truoc = $monthDays[$now["mon"] - 1] - 5 + $i;
                    if ($i % 2 == 0) {
                        echo '<div class= "ngay_ngoai" style="background-color: white">' . $ngay_truoc . '</div>';
                    }
                if ($i % 2 == 1) {
                    echo'<div class= "ngay_ngoai" style="background-color: #fcfcfc">' . $ngay_truoc . '</div>';
                }
                $week++;
            }
            if ($week != 0) {
                $ngay_truoc = $monthDays[$now["mon"] - 1] - 5 + $i+1;
                if ($i % 2 == 0) {
                    echo '<div class= "ngay_ngoai" style="background-color: white">' . $ngay_truoc . '</div>';
                }
                if ($i % 2 == 1) {
                    echo '<div class= "ngay_ngoai" style="background-color: #fcfcfc">' . $ngay_truoc . '</div>';
                }
                $week++;
            }
            if ($week == 7) {
                echo '</div>';
                $week = 0;
            }
        }
        for ($i = 1; $i <= $total; $i++) {
            if ($week == 0) {
                echo '<div class="tuan">';
            }
            if ($now["mday"] == $i) {
                if($i%2==0){
                    echo '<div class="today" style="background-color: white"><a id="today" >' . $i . '</a></div>';
                }
                if($i%2==1){
                    echo '<div class="today" style="background-color: #fcfcfc"><a id="today" >' . $i . '</a></div>';
                }
            }
            else {
                if($i%2==0) {
                    echo '<div class = "ngay_a"id="a_' . $i . '"style="background-color: white">' . $i . '</div>';
                }
                if($i%2==1) {
                    echo '<div class = "ngay_a" id="a_' . $i . '"style="background-color: #fcfcfc">' . $i . '</div>';
                }
            }
            $week++;
            if ($week == 7) {
                echo '</div>';
                $week = 0;
            }
        }
        for ($i = 1; $week != 0; $i++) {
            $ngay_truoc =  $i;
            if($i%2==1){
                echo '<div class= "ngay_ngoai" style="background-color: white">' . $ngay_truoc .'</div>';
            }
            if($i%2==0){
                echo '<div class= "ngay_ngoai" style="background-color: #fcfcfc">' . $ngay_truoc .'</div>';
            }            $week++;
            if ($week == 7) {
                echo '</div>';
                $week = 0;
            }
        }
    echo '</div>';

    echo '</div>';
    echo '</div>';
?>
</body>
</html>
