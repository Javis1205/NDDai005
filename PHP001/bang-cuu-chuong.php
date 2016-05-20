<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bảng cửu chương</title>
    <style type="text/css">
        body{
            display: block;
        }
        li{
            width: 90px;
            height: auto;
            padding: 10px;
            border: 1px solid black;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 5px;
            list-style-type: none;
        }
        ul{
            border: 1px outset black;
            padding-left: 5px;
            padding-top: 5px;
        }
    </style>
</head>

<body style="width: 596px;margin: 0 auto">

    <ul style="margin: 0 auto">
        <div style="font-size: 20pt;margin: 0 auto">Bảng cửu chương</div>
    <?php
    for($a = 1; $a <=10; $a++)
    {
    ?>
        <li>
    <?php
        for($b = 1; $b <10; $b++)
        {
            $c = $a * $b;
    ?>
    <div >
    <?php
            echo "$b x $a = $c";
    ?>
    </div>
    <?php
        }
    ?>
        <?php
        for($b = 1; $b <=10; $b++) {
            if ($b == 10) {
                $c = $a * $b;

                ?>
                <div>
                    <?php
                    echo "$b x $a = $c";
                    ?>
                </div>
                <?php
            }
        }
        ?>
        <?php
        if($a==5){
            ?>
            </li><br>
        <?php
        }
        ?>
        <?php
    }
    ?>
    </ul>
</body>
</html>
