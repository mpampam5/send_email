<form action="<?=base_url()?>index.php/welcome/send_email" method="post">
  <table>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td>
        <input type="email" name="email" id="email" placeholder="Masukkan Email" required>
    </td>
    </tr>

    <tr>
      <td>Subject</td>
      <td>:</td>
      <td><input type="text" name="subject" id="subject" placeholder="" required></td>
    </tr>

    <tr>
      <td>isi Pesan</td>
      <td>:</td>
      <td><textarea name="desc" id="desc" rows="8" cols="50" required></textarea></td>
    </tr>
  </table>

  <button type="submit" name="button">Kirim</button>
</form>
