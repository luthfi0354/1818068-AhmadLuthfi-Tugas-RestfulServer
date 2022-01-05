<a href= "http://localhost/restful-client/nilai/create">Tambah Data</a>
<table border="1">
    <tr>
        <th>NIS</th>
        <th>NAMA</th>
        <th>KELAS</th>
        <th>MAPEL</th>
        <th>NILAI</th>
    </tr>
    <?php
    foreach($nilai as $nli){
        $NIS= $nli['NIS'];
        $Nama= $nli['Nama'];
        $Kelas= $nli['Kelas'];
        $Ma_Pel= $nli['Ma_Pel'];
        $Nilai= $nli['Nilai'];

    echo "<tr>
    <td>$NIS</td>
    <td>$Nama</td>
    <td>$Kelas</td>
    <td>$Ma_Pel</td>
    <td>$Nilai</td>
    <td>
    ". anchor('nilai/edit/'.$NIS, 'Edit')."
    ". anchor('nilai/delete/'.$NIS, 'Delete')."
    </td>
    </tr>";  
          
    }
    ?>
</table>