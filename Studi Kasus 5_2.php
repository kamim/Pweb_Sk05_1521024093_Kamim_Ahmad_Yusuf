<!DOCTYPE html>
<html>
<head>
	<title>Studi Kasus 5_2</title>
	<style>
table {
    width:40%;
}
table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 4px;
    text-align: left;
}
table#t th	{
    text-align:left;
}
</style>
</head>
<body>
<table id="t">
  
  
  <?php
  $barang = array
   (
     array("Kode Barang","Nama Barang","Harga Satuan"),
     array(1001,"Sabun Lifeboy","Rp. 1.500,-"),
     array(1002,"Permen Blaster","Rp. 5.600,-"),
     array(1003,"Pasta Gigi Pepsodent","Rp. 4.650,-"),
	 array(1004,"Madu Arbain","Rp. 30.000,-"),
	 array(1005,"Kecap ABC","Rp. 7.250,-"),
	 array(1006,"Saus Tomat ABC","Rp. 6.700,-"),
	 array(1007,"Gula Gulaku","Rp. 8.900,-"),
	 array(1008,"Rinso","Rp. 7.100,-"),
	 array(1009,"Super Pel","Rp. 6.450,-"),
	 array(1010,"Permen Tango","Rp. 5.600,-"),
	 
   );
   echo "
   <tr>
	   <td><b>".$barang[0][0]."</b></td>
	   <td><b>".$barang[0][1]."</b></td>
	   <td><b>".$barang[0][2]."</b></td>
   </tr>
   <tr>
	   <td>".$barang[1][0]."</td>
	   <td>".$barang[1][1]."</td>
	   <td>".$barang[1][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[2][0]."</td>
	   <td>".$barang[2][1]."</td>
	   <td>".$barang[2][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[3][0]."</td>
	   <td>".$barang[3][1]."</td>
	   <td>".$barang[3][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[4][0]."</td>
	   <td>".$barang[4][1]."</td>
	   <td>".$barang[4][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[5][0]."</td>
	   <td>".$barang[5][1]."</td>
	   <td>".$barang[5][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[6][0]."</td>
	   <td>".$barang[6][1]."</td>
	   <td>".$barang[6][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[7][0]."</td>
	   <td>".$barang[7][1]."</td>
	   <td>".$barang[7][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[8][0]."</td>
	   <td>".$barang[8][1]."</td>
	   <td>".$barang[8][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[9][0]."</td>
	   <td>".$barang[9][1]."</td>
	   <td>".$barang[9][2]."</td>
   </tr>
   <tr>
	   <td>".$barang[10][0]."</td>
	   <td>".$barang[10][1]."</td>
	   <td>".$barang[10][2]."</td>
   </tr>
  
</table>";
?>
</body>
</html>
