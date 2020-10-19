<table border=1 cellpadding=5 cellspacing=0>
<tr>
<td>ID</td>
<td>Judul</td>
<td>Isi</td>
<td>Url</td>
<td>Tindakan</td>

</tr>
<?php
include "index.php";
include "koneksi.php";

$query = "SELECT * FROM berita";
$result = mysqli_query($koneksi,$query);
$numrows = mysqli_num_rows($result);
$no=1;
while($berita = mysqli_fetch_array($result)){  
echo "<tr>";

echo "<td><font color=blue></font>".$berita['id']."<br></td>"; 
echo "<td><font color=blue></font>".$berita['judul']."<br></td>"; 
echo "<td><font color=blue></font>".$berita['isi']."<br></td>"; 
echo "<td><font color=blue></font>".$berita['url']."<br></td>";
echo "<td>";
echo "<a href='form-edit.php?id=".$berita['id']."'>Edit</a>";
echo "</td>";
echo "</tr>";
$no++;
}

?>