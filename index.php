<!DOCTYPE html>
<html>
<head>
    <title>Tugas ahir PWEB</title>
    <style type="text/css">
    #foto {
      background-color: #eaeaea;
      background-size: cover;
      border-radius: 100px;
      width: 200px;
      height: 200px;

    }
    div {
        font-family: bookman old style;
        font-size: 30px;
    }
    table {
        font-family: cambria;
        font-size: 15px;
    }

    #tombol {
            background: darkgrey;
        }

  </style>

  <script type="text/javascript">
      function masukan(num) {
    document.fform.tampilan.value = document.fform.tampilan.value + num; //simpan nilai
    }
    function hasil() {
    var nilai = document.fform.tampilan.value;
    if (nilai) document.fform.tampilan.value = eval(nilai);  //cari hasil
    }
    function reset() {
    document.fform.tampilan.value = "";  //kosongkan tampilan
    }
    function hapus() {
    var nilai = document.fform.tampilan.value;
    document.fform.tampilan.value = nilai.substring(0,nilai.length-1);
    }


  </script>
</head>

<body bgcolor="#00ffff">
    <div align="center">Selamat datang di WEBSITE saya</div><br>
    <center><img id="foto" src="foto.jpg"></center><br><br>
    <table align="center">
        <tr>
            <td>Nama</td>
            <td>:Ahlan marjan</td>
        </tr>
        <tr>
            <td>Nim</td>
            <td>:2100018474</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:J</td>
        </tr>
    </table><br>
    <hr>
    <table border="1" cellspacing="0" width="150" height="200" align="center" bgcolor="blue">
        <h2 align="center">PROGRAM KALKULATOR SEDERHANA</h2>
        <tr>
            <form name="fform"><td><input type="text" name="teks" name="tampilan" id="tampilan"></td></form>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td width="40"><input id="tombol" type="button" value="1" onclick="masukan(1)"></td>
                        <td width="40"><input id="tombol" type="button" value="2" onclick="masukan(2)"></td>
                        <td width="40"><input id="tombol" type="button" value="3" onclick="masukan(3)"></td>
                        <td width="40"><input id="tombol" type="button" value="x" onclick="masukan('*')"></td>

                    </tr>
                    <tr>
                        <td width="40"><input id="tombol" type="button" value="4" onclick="masukan(4)"></td>
                        <td width="40"><input id="tombol" type="button" value="5" onclick="masukan(5)"></td>
                        <td width="40"><input id="tombol" type="button" value="6" onclick="masukan(6)"></td>
                        <td width="40"><input id="tombol" type="button" value="/" onclick="masukan('/')"></td>

                    </tr>
                    <tr>
                        <td width="40"><input id="tombol" type="button" value="7" onclick="masukan(7)"></td>
                        <td width="40"><input id="tombol" type="button" value="8" onclick="masukan(8)"></td>
                        <td width="40"><input id="tombol" type="button" value="9" onclick="masukan(9)"></td>
                        <td width="40"><input id="tombol" type="button" value="+" onclick="masukan('+')"></td>

                    </tr>
                    <tr>
                        <td width="40"><input id="tombol" type="button" value="." onclick="masukan('.')"></td>
                        <td width="40"><input id="tombol" type="button" value="0" onclick="masukan(0)"></td>
                        <td width="40"><input id="tombol" type="button" value="-" onclick="masukan('-')"></td>
                        <td width="40"><input id="tombol" type="button" value="=" onclick="hasil()"></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td width="40"><input id="tombol" type="button" value="cler" onclick="reset()"></td>
                        <td width="40"><input id="tombol" type="button" value="delete" onclick="hapus()"></td>
                    </tr>
                </table>
            </td>
        </tr>
        
    </table><br>
    <hr>
    <div align="center"><strong><font size="6" face="Courier New, Courier, mono">MENU FORM</font></strong></div>
        
            <form name="form1" method="post">
                <table width="58%" border="0" align="center">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><input name="nama" type="text" id="nama"></td>
                    </tr>

                    <tr>
                        <td>NIM</td>
                        <td><input type=text name="nim" id="nim"></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td><input name="alamat" type="text" id="alamat"></td>
                    </tr>

                    <tr>
                        <td>E-Mail</td>
                        <td><input name="email" type="text" id="email"></td> </tr>
                    </tr>

                    <tr>
                        <td>Jurusan</td>
                        <td id="jurusan">
                        <input type=radio name="jurusan" value="TI">T. Informatika
                        <input type=radio name="jurusan" value="Elektro">T. Elektro
                        <input type=radio name="jurusan" value="Sipil">T. Kimia
                        </td>
                     </tr>
                    <tr>
                        <td>Jenis Kelamin</td>                      
                        <td id="jenis"><input type=radio name="jenis" value=Laki-laki>Laki-laki<input type=radio name="jenis" value=Perempuan>Perempuan</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
                    </td>
                    </tr>
                </table>
            </form>


    
</body>
</html>
<br><hr>

<?php
$hari   = date("d");
$bulan  = date ("m");
$tahun  = date("Y");
$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
?>
<center><h2>PROGRAM MEMBUAT KALENDER</h2></center>
<table style="border:2px solid #000000" align="center">
  <tr bgcolor="#008000">
  <td align=center><font color="#FF0000">Minggu</font></td>
  <td align=center>Senin</td>
  <td align=center>Selasa</td>
  <td align=center>Rabu</td>
  <td align=center>Kamis</td>
  <td align=center>Jumat</td>
  <td align=center>Sabtu</td>
  </tr>
  <?php
$s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
 
for ($ds=1;$ds<=$s;$ds++) {
echo "<td></td>";
}
 
for ($d=1;$d<=$jumlahhari;$d++) {
 
    if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
        echo "<tr>"; 
        }
$warna="#000000"; // warna default
 
if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
}
echo '</table>'; 
?>


