<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <title>Sorting Data</title>
</head>
<body>
<strong>PENGURUTAN DATA</strong>
<br/>
<br/>
        <table border="1" width="500px">

                <?php
                        require "lat1-koneksi.php";
                        $query1 = "SELECT * FROM Mahasiswa ORDER BY nim ";
                        $urutan= 'desc';
                        $urutbaru = 'desc';
                        if(isset($_GET['orderby'])){
                                $orderby=$_GET['orderby'];
                                $urutan=$_GET['urut'];
                                
                                $query1="SELECT * FROM Mahasiswa order by $orderby $urutan ";
                                if($urutan=='desc'){
                                        $urutbaru='asc';                                        
                                }else{
                                        $urutbaru='desc';
                                }
                        }
                ?>
                <th>
                        <td><a href='tugas.php?orderby=nim&urut=<?=$urutbaru;?>'>Nim</a></td>
                        <td><a href='tugas.php?orderby=nama&urut=<?=$urutbaru;?>'>Nama</a></td>
                        <td><a href='tugas.php?orderby=alamat&urut=<?=$urutbaru;?>'>Alamat</a></td>
                </th>
                                                        
                <?php
                        $result = mysql_query($query1) or die (mysql_error());
                        $no = 1;
                        while($rows=mysql_fetch_object($result)){
                ?>

                <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $rows -> nim;?></td>
                        <td><?php echo $rows -> nama;?></td>
                        <td><?php echo $rows -> alamat;?></td>
                </tr>
                
                <?php
                        $no++;
                        }
                ?>

        </table>
</body>
</html>