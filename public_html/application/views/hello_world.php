<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
    <h1>This is list of users from docker database</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($users as $key => $value){
                    echo "<tr>" ;
                        echo "<td>";
                        echo $value["id"] ;
                        echo "</td>";
                        echo "<td>";
                        echo $value["username"] ;
                        echo "</td>";
                        echo "<td>";
                        echo $value["password"] ;
                        echo "</td>";
                    echo "</tr>" ;
                }
            ?>
        </tbody>
    </table>
</body>
</html>