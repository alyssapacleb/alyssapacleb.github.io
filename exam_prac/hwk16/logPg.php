<html>
<head>
    <title>Records</title>
    <link rel = "stylesheet" type = "text/css" href ="login.css" media = "all" >
    <meta charset="UTF-8">

</head>

<body>
<h1> Student Records </h1>
<br><br><br>
<form id = "textForm" method = "post"
      action = "./logCheck.php" >
    <table class = "tab">
        <tr>
                <td class = "title">Login</td>
        </tr>
        <tr>
            <td> <input type = "text" name = "user" placeholder="Username" /></td>
        </tr>
        <tr>
            <td> <input type = "password" name = "pw" placeholder="Password"/></td>
        </tr>
        <tr class = buttonarea>
            <td> <input class="button" type = "submit" value = "Enter" />
                    <input class="button" type = "reset" value = "Clear" /><br><br>


        </tr>
    </table>
</form>

</body>


</html>
