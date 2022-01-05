<?php
echo form_open('nilai/edit/');
?>

<table border='1'>
    <tr>
        <td>NIS</td>
        <td><?php echo form_input('NIS',$nilai['NIS'],"readonly"); ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo form_input('Nama',$nilai['Nama']); ?> </td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td><?php echo form_input('Kelas',$nilai['Kelas']); ?> </td>
    </tr>
    <tr>
        <td>Ma_Pel</td>
        <td><?php echo form_input('Ma_Pel',$nilai['Ma_Pel']); ?> </td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td><?php echo form_input('Nilai',$nilai['Nilai']); ?> </td>
    </tr>
    <tr>
        <td colspan="2"><?php echo form_submit('submit', 'Update'); ?>
            <?php echo anchor('nilai', 'Kembali'); ?>
        </td>
    </tr>
</table>
<?php echo form_close(); 
?>