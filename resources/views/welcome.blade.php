<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <div style="display: flex; justify-content: center;">

        <div>
            <div style="text-align: center;">
                <a href="/">
                    Task 1
                </a>
                <a href="/task2">
                    Task 2
                </a>
            </div>
            <div style="border:1px solid black; margin:2px; text-align:center">
                <h1>Form Data Diri</h1>
            </div>
            <div style="border:1px solid black">
                <form action="/">
                    <table>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>:</td>
                            <td><input type="input" name="nama" value="Rizky Julian Ricaldy"></td>
                        </tr>
                        <tr>
                            <th>Tempat, Tanggal Lahir</th>
                            <td>:</td>
                            <td><input type="input" name="tempat" value="Sukabumi"> ,  <input type="input" name="tanggal" value="30" style="width: 20px;"> / <input type="input" name="bulan" value="07" style="width: 20px;"> / <input type="input" name="tahun" value="2000" style="width: 40px;"></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td><textarea name="alamat" style="width: 313px; height: 66px;">Jln. Pelabuhan II kelurahan cikondang kecamatan citamiang, RW04, RT02, kota Sukabumi</textarea></td>
                        </tr>
                        <tr>
                            <th>No. Telp/HP</th>
                            <td>:</td>
                            <td><input type="" name="telp" value="0895331299363"></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td><input type="radio" name="jk" value="LakiLaki" checked> <label for="jk">LakiLaki</label>
                                <input type="radio" name="jk" value="Perempuan"><label for="jk">Perempuan</label>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td>
                                <select name="agama">
                                    <option value="Islam" selected>Islam</option>
                                    <option value="Kristen">Kristen</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Hobi</th>
                            <td>:</td>
                            <td>
                                <input type="checkbox" name="hobi" value="Baca Buku" checked>
                                <label for="hoby">Baca Buku</label>
                                <input type="checkbox" name="hobi" value="Olahraga" checked>
                                <label for="hoby">Olahraga</label>
                                <input type="checkbox" name="hobi" value="Main Game" checked>
                                <label for="hoby">Main Game</label>
                                <input type="checkbox" name="hobi" value="Hiking">
                                <label for="hoby">Hiking</label>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button>Tampilkan</button> <input type="reset" value="Reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            @if(isset($datas))
            <div>
                Nama: {{ $datas->nama }}<br>
                Tempat, Tanggal Lahir: {{ $datas->tempat }}, {{ $datas->tanggal }}/{{ $datas->bulan }}/{{ $datas->tahun }}<br>
                Alamat: {{ $datas->alamat }}<br>
                No. Telp/HP: {{ $datas->telp }}<br>
                Jenis Kelamin: {{ $datas->jk }}<br>
                Agama: {{ $datas->agama }}<br>
                Hobi: {{ $datas->hobi }}<br>
            </div>
            @endif
        </div>

    </div>
</body>
</html>