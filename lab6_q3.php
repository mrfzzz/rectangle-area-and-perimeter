<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $w = $_POST['width'];
        $l = $_POST['length'];
        $a = $w*$l;
        $p = $w + $w + $l + $l;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content{
            
            width:100%;
            background-color: whitesmoke;
            border-radius: 5px 5px 5px 5px;
            margin-top: 8px;
            margin-bottom: 8px;
            height: 620px;
        }
        .cutter{
            display:flex;
        }
        .firgroup{
            background-color: lightgreen;
            border-radius: 5px 5px 5px 5px;
            width: 49%;
            height:435px;
            padding: 30px;
            text-align: center;
            margin-left: 7px;
            margin-right: 3px;
           
        }
        .secgroup{
            background-color: lightgreen;
            border-radius: 5px 5px 5px 5px;
            width: 49%;
            height:435px;
            padding: 30px;
            margin-left: 3px;
            margin-right: 7px;
        }
        .answer{
            background-color: whitesmoke;
            border-radius: 5px 5px 5px 5px;
            margin-top: 8px;
            margin-bottom: 8px;
            height: 320px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 style="text-align: center;">Calculate the rectangle</h1>
        <div class="cutter">
            <div class="firgroup">
                <img src="rec.jpg" width ="492" height="221">
                <br/><br/>
                <form method="post" action="">
                    <label for="width"><b>Width :</b></label>
                    <input type="TextBox" id="width" name="width" placeholder="Number of width"></input>
                    <br/><br/>
                    <label for="length"><b>Length :</b></label>
                    <input type="Text" id="length" name="length" placeholder="Number of length"></input>
                    <br/><br/>
                    <button type="submit" name="count" id="count" onclick="cal()" value="1">Count</button>
                </form>
            </div>

            <div class="secgroup">
                <p>Output:</p>
                <div class="answer">
                <input style="width:550px; height:auto;" value="<?php echo "The area of this rectangle is ",$w*$l;echo ".The Perimeter of this rectangle is ",$w+$l+$w+$l;echo"."?>" disabled></input>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>