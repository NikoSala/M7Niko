  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sudoku</title>
</head>
<style>

  table {
  margin:1em auto;
}
td {
  height:30px;
  width:30px;
  text-align:center;
}
td:nth-child(3n) {
  border-right:solid ;
}
td:nth-child(9n) {
  border-right:transparent; ;
}
tr:first-child {
  border-top:solid;
}
tr:nth-child(3n) td {
  border-bottom:solid ;
}
tr:nth-child(9n) td {
  border-bottom:transparent; ;
}
h1{
  text-align: center;
}
input{
  padding: 10px;
  width: 22px;
  height: 22px;
}
</style>
<body>
  <h1>Sudoku Niko</h1>
 <table border="1">
  <?php
    for($i=1;$i<=9;$i++){
      echo "<tr></tr>";
       for($j=1;$j<=9;$j++){
     echo "<td><input type ='number' min='1' max'9' name='s'></td>";
      

    }
  }
?>
	</table>
</body>
</html>