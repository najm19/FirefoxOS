 <?php
$con=mysqli_connect("telefonosDenun.db.9278967.hostedresource.com","telefonosDenun","Telefonos1!","telefonosDenun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Llamadas (numero, categoria, seudonimo, pais, comentarios)
VALUES
('$_POST[numero]','$_POST[categoria]','$_POST[seudonimo]','$_POST[pais]','$_POST[comentario]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "<script>alert('Gracias, tu llamada fue registrada exitosamente.'); location.href='index.html'</script>";
  
  mysqli_close($con);

?>
