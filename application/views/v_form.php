<html>

<head>
    <title>Belajar membuat form validation</title>
</head>

<body>
    <form action="<?php echo base_url('form/aksi') ?>" method="post">
    <h1>membuat form validation</h1>
    <?php echo validation_eror(); ?>
    <?php echo form_open('form/aksi'); ?>
    <label for="">Nama</label>
    <input type="text" name="nama" id=""> <br>
    <label for="">Email</label>
    <input type="text" name="email" id=""> <br>
    <label for="">konfirmasi_email</label>
    <input type="text" name="konfir_email" id=""> <br>
    <input type="submit" value="simpan">

</form>
</body>

</html>