<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>

    <style> 

    * { 
        margin: 0;
    }

    body { 
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
    }

    
        table {
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            text-align: center;
            width: max-content;
            padding: 10px;
        }
    </style>

</head>
<body>
    <div class="wrapper">
        <table cellspacing="5">
            <?php
            $rows = 5;

            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>"; 
    
                for ($j = 1; $j <= $i; $j++) {

                    echo "<td>" . chr(64 + $j) . "</td>";
                }
                echo "</tr>"; 
            }
            ?>
        </table>
    </div>
</body>
</html>