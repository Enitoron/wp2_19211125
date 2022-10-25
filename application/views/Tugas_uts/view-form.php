<html>

<head>
    <title>Form Input Siswa</title>
</head>

<body>
    <center>
        <form action=<?= base_url('Tugas_uts/cetak'); ?> method="post">
            <table>
                <tr>
                    <th colspan="3">
                        D-Lemas : Form Input Data Sisiwa
                    </th>
                </tr>
                <tr>
                    <td colspan="7">
                        <hr>
                    </td>
                </tr>
                <tr>
					<th align="left">Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <font style="color:red; font-size:8; align:center;"><?= form_error('nama'); ?></font>
                    </td>
                </tr>

                <tr>
                    <th align="left">NIS</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nis" id="nis" value="<?= set_value('nis') ?>">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <font style="color:red; font-size:8; align:center;"><?= form_error('nis'); ?></font>
                    </td>
                </tr>

                <tr>
                    <th align="left">Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kelas" id="kelas" value="<?= set_value('kelas') ?>">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <font style="color:red; font-size:8; align:center;"><?= form_error('kelas'); ?></font>
                    </td>
                </tr>

                <tr>
                    <th align="left">Tanggal Lahir <br>
						<font style="font-size:12;">(Format:23-04-2022)</font>
					</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
                    </td>
                </tr>
                <tr>
                    <th></th>
					<th></th>
                    <td>
                        <font style="color:red; font-size:8; align:center;"><?= form_error('tanggal_lahir'); ?></font>
                    </td>
                </tr>

                <tr>
                    <th align="left">Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= set_value('tempat_lahir') ?>">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <font style="color:red; font-size:8; align:center;"><?= form_error('tempat_lahir'); ?></font>
                    </td>
                </tr>

                <tr>
					<th align="left">Alamat</th>
					<th>:</th>
					<td>
						<input type=" text" name="alamat" id="alamat" value="<?= set_value('alamat') ?>">
					</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <font style="color:red; font-size:8; align:center;"><?= form_error('alamat'); ?></font>
                    </td>
				</tr>
                <tr>
                    <th align="left">Jenis Kelamin</th>
                    <th>:</th>
                    <td id='jenis_kelamin'>
                        <input type='radio' id='jenis_kelamin' name='jenis_kelamin' value='Laki - Laki' <?php echo  set_radio('jenis_kelamin', '1'); ?> />Laki - Laki<br>
                        <input type='radio' id='jenis_kelamin' name='jenis_kelamin' value='Perempuan' <?php echo  set_radio('jenis_kelamin', '2'); ?> />Perempuan<br>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <font style="color:red; font-size:8; align:center;"><?= form_error('jenis_kelamin'); ?></font>
                    </td>
                </tr>
                <tr>
                    <th align="left">Agama</th>
                    <th>:</th>
                    <td>
                        <select name="agama" id="agama">
                            <option value="" <?php echo set_select('Agama', 'Pilih Agama', TRUE); ?>>Pilih Agama</option>
                            <option value="Islam" <?php echo set_select('Agama', 'Islam', (!empty($this->input->post('agama') && $this->input->post('agama') == 'Islam' ? TRUE : FALSE))); ?>>Islam</option>
                            <option value="Kristen" <?php echo set_select('Agama', 'Kristen', (!empty($this->input->post('agama') && $this->input->post('agama') == 'Kristen' ? TRUE : FALSE))); ?>>Kristen</option>
                            <option value="Katolik" <?php echo set_select('Agama', 'Katolik', (!empty($this->input->post('agama') && $this->input->post('agama') == 'Katolik' ? TRUE : FALSE))); ?>>Katolik</option>
                            <option value="Budha" <?php echo set_select('Agama', 'Budha', (!empty($this->input->post('agama') && $this->input->post('agama') == 'Budha' ? TRUE : FALSE))); ?>>Budha</option>
                            <option value="Hindu" <?php echo set_select('Agama', 'Hindu', (!empty($this->input->post('agama') && $this->input->post('agama') == 'Hindu' ? TRUE : FALSE))); ?>>Hindu</option>
                            <option value="Protestan" <?php echo set_select('Agama', 'Protestan', (!empty($this->input->post('agama') && $this->input->post('agama') == 'Protestan' ? TRUE : FALSE))); ?>>Protestan</option>
                            <option value="Khonghucu" <?php echo set_select('Agama', 'Khonghucu', (!empty($this->input->post('agama') && $this->input->post('agama') == 'Khonghucu' ? TRUE : FALSE))); ?>>Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <font style="color:red; font-size:8; align:center;"><?= form_error('agama'); ?></font>
                    </td>
                </tr>
				<tr>
                    <td colspan="7">
                        <hr>
                    </td>
                </tr>
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