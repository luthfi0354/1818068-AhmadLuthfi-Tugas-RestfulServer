<?php
echo form_open_multipart('nilai/create');
?>

<table border='1'>
    <tr>
        <td>NIS</td>
        <td><?php echo form_input('NIS'); ?> </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo form_input('Nama'); ?> </td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td><?php echo form_input('Kelas'); ?> </td>
    </tr>
    <tr>
        <td>Ma_Pel</td>
        <td><?php echo form_input('Mapel'); ?> </td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td><?php echo form_input('Nilai'); ?> </td>
    </tr>
    <tr>
        <td colspan="2"><?php echo form_submit('submit', 'Simpan'); ?>
            <?php echo anchor('nilai', 'Kembali'); ?>
        </td>
    </tr>
</table>
<?php echo form_close(); ?>