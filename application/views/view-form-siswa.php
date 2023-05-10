<html>
<head>
 <title>Form Input Siswa</title>
 <style>
    .pesan {color:red;font-style: italic;}
 </style>
</head>
<body>
     
    <center>
        <div class="pesan">
        <form action="<?= base_url('siswa/cetak'); ?>"
        method="post">
        <//?php echo validation_errors() ?>
        
        <table >
            <tr>
                <th colspan="3">
                    Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama" value="<?php echo set_value('nama')?>">
                </td>
            </tr>
            
            <td class="" colspan="3" align="center"> <?php echo form_error('nama'); ?>
        </td>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="nis" id="nis" value="<?php echo set_value('nis')?>">
                </td>
            </tr>
            <td class="pesan" colspan="3" align="center"> <?php echo form_error('nis'); ?>
        </td>
        <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas" value="<?php echo set_value('kelas')?>">
                </td>
            </tr>
            <td class="pesan" colspan="3" align="center"> <?php echo form_error('kelas'); ?>
        </td>
        <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="tgllahir" id="tgllahir" value="<?php echo set_value('tgllahir')?>">
                </td>
            </tr>
            <td class="pesan" colspan="3" align="center"> <?php echo form_error('tgllahir'); ?>
        </td>
        <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tempatlahir" id="tempat lahir" value="<?php echo set_value('tempatlahir')?>">
                </td>
            </tr>
            <td class="pesan" colspan="3" align="center"> <?php echo form_error('tempatlahir'); ?>
        </td>
        <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <textarea name="alamat" id="alamat" value="<?php echo set_value('alamat')?>"></textarea>
                </td>
            </tr>
            <td class="pesan" colspan="3" align="center"> <?php echo form_error('alamat'); ?>
        </td>
        <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" id="jk" value="Perempuan"<?php echo set_value('jk')?>>Perempuan
                    <input type="radio" name="jk" id="jk" value="Laki-Laki"<?php echo set_value('jk')?>>Laki-Laki
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama" value="<?php echo set_value('agama')?>">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </td>
            </tr>
            <td class="pesan" colspan="3" align="center"> <?php echo form_error('agama'); ?>
        </td>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
 </center>
</body>
</html>