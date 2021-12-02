<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potęgowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="baner">
            <a href="index.html"><img src="baner.jpeg" alt="baner" style="width:800px;height:100px;"></a>
        </div>
        <div class="menu">
            <br></br>
            <p>Menu</p>
            <ul>
                <a href="strona1.html"><li>proste działania</li></a>
                <a href="strona2.php"><li>potęgowanie</li></a>
            </ul>
        </div>
        <div class="tresc">
            <br></br>
            <h1>POTĘGOWANIE</h1>
            <form method="post" action="strona2.php">
                <label>Podaj podstawę potęgi:</label> <input type="text" name="num1" />
                <br><br>
                <label>Podaj dodatni, całkowity wykładnik potęgi:</label> <input type="text" name="num2" /> <br></br>
                <input type="submit" value="POTĘGOWANIE" name="send">
            </form> 
            <div id="wynik"> <br>
                <?php
                    if (empty($_POST['num1']) || (empty($_POST['num2']) && $_POST['num2']!=0))
                    {
                            echo "Wpisz podstawę i wykładnik potęgi";
                    }
                    else {
                        if ($_POST['num2']>=0){
                            echo "Wynik działania wynosi: ";
                            echo pow($_POST['num1'], $_POST['num2']);
                        }
                        else{
                            echo "Wykładnik potęgi musi być dodatni";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    </body>
    </html>