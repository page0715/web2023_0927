<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            /* background-color: gray; */
        }
        .container {
            width: 80%;
            margin: auto;
            margin-top: 30px;

        }

        table,
        th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }

        table {
            width: 100%;
        }
        td{
            height: 30px;
        }
        .bg-ccc{
            background-color: #CCC;
        }

        .bg-pink{
            background-color: lightpink;
        }


    </style>
</head>

<body>
    <div class="container">
    <h3>Students List</h3>
        <table>
            <tr class="bg-ccc">
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Pic</th>
            </tr>
<? php for($i=1;$i<=10;$i++) :?>
            <tr class="bg-pink">
                <td>1</td>
                <td>Amy</td>
                <td>0911</td>
                <td>amy.jpg</td>
            </tr>
<?php endfor;?>

        </table>
    </div>
</body>

</html>