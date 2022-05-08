<?php

if (isset($_POST['broj'])) {
    $broj = $_POST['broj'];
} else {
    $broj = 0;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 3</title>
    <style>
        body {
            margin: 0;
        }

        header {
            width: 100%;
            background-color: rgb(71, 94, 87);
            color: #eee;
            text-align: center;
            padding: 5px;
            margin-top: 0;
        }

        main {
            margin-top: 91px;
            padding: 10px;
            display: inline-block;
            margin: auto;
        }

        input {
            margin: 10px 0;
            border-radius: 5px;
            padding: 5px 3px;
        }

        p,
        label {
            font-size: 18px;
        }

        button {
            padding: 5px 10px;
        }

        footer {
            position: fixed;
            width: 100%;
            bottom: 0;
            background-color: rgb(71, 94, 87);
            color: #eee;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>IZRACUNAVANJE SUME</h1>
    </header>
    <main>
        <form action="zadatak3.php" method="post">
            <label for="sum">
                Unesi jedan prirodan broj:
            </label><br>
            <input type="number" id="sum" name="broj[]"><br>
            <button type="submit">OK</button>
        </form>
        <br>
        <div>
            <?php

            if (!empty($broj[0]) && $broj > 0) {
                $sum = 0;
                for ($i = 1; $i <= $broj[0]; $i++) {
                    $sum += $i;
                }
                echo "<p>Zbir prvih <b>$broj[0]</b> prirodnih brojeva je <b>$sum</b>.</p>";
            } else {
                echo "";
            }


            ?>
        </div>
    </main>
    <footer>
        <p>Copyright &copy; 2022 Branko Radojevic - All rights reserved</p>
    </footer>
</body>

</html>