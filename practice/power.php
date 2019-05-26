<html>
<head> <title> powers.php </title>
</head>
<body>
<table border = "border">
    <caption> Powers table </caption>
    <tr>
        <th> 1 </th>
        <th> 2</th>
        <th> 3 </th>
        <th> 4 </th>
	<th> 5 </th>
	<th> 6 </th>
	<th> 7 </th>
 	<th> 8 </th>
 	<th> 9 </th>
	<th> 10 </th>
    </tr>
    <?php
        for ($x = 1; $x <=10; $x++) {
		for ($y = 1; $y <=10;$y++) {
					
		}
	  $a1 = sqrt($number);
          $b2 = pow($number, 2);
          $c3 = pow($number, 3);
	  $d4 = pow($number, 4);

          print("<tr align = 'center'> <td> $number </td>");

    print("<td> $root </td> <td> $square </td>");
    print("<td> $cube </td> <td> $quad </td> </tr>\n");
    }
    ?>
</table>
</body>
</html>
