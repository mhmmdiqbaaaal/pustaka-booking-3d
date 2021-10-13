<html>

<head>
    <title>Belajar Crud</title>
</head>

<body>
    <center>
        <h1>Belajar CRUD dengan CodeIgniter</h1>
    </center>
    <center><?php echo anchor('crud/tambah', 'tambah data'); ?></center>
    <table style="margin: 20px auto;" border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($user as $u) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->nama ?></td>
                    <td><?php echo $u->alamat ?></td>
                    <td><?php echo $u->pekerjaan ?></td>
                    <td><?php echo anchor('crud/edit', 'edit '); ?><?php echo anchor('crud/hapus', 'hapus'); ?></td>
            </tr>
        <?php } ?>
    </table>
</body> 



