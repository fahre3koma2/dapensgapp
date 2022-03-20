<h3 style="text-align: center;">Pelaporan Berita Duka</h3>
<h5 style="text-align: center;">Dana Pensiun Semen Gresik</h5>
<table style="height: 90px; width: 100%; border-collapse: collapse;" border="0">
<tbody>
<tr style="height: 18px;">
<td style="width: 100%; text-align: center; height: 18px;">&nbsp;</td>
</tr>
<tr style="height: 18px;">
<td style="width: 100%; text-align: center; height: 18px;">No Pelaporan</td>
</tr>
<tr style="height: 54px;">
<td style="width: 100%; height: 54px;">
<h3 style="text-align: center;"><strong>{{$berita->nolaporan}}</strong></h3>
</td>
</tr>
</tbody>
</table>
<hr />
<p style="text-align: right;">Tgl Laporan : {{ $berita->created_at}}</p>
<table style="height: 126px; width: 100%; border-collapse: collapse;" border="0">
<tbody>
<tr style="height: 18px;">
<td style="width: 36.9603%; height: 18px;">No Pensiun</td>
<td style="width: 1.72712%; height: 18px;">:</td>
<td style="width: 69.6028%; height: 18px;">{{$berita->nopensiun}}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 36.9603%; height: 18px;">Nama Pelapor</td>
<td style="width: 1.72712%; height: 18px;">:</td>
<td style="width: 69.6028%; height: 18px;">{{$berita->nama_pelapor}} </td>
</tr>
<tr style="height: 18px;">
<td style="width: 36.9603%; height: 18px;">No Telp/HP Pelapor&nbsp;</td>
<td style="width: 1.72712%; height: 18px;">:</td>
<td style="width: 69.6028%; height: 18px;">{{$berita->notelp}}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 36.9603%; height: 18px;">Email</td>
<td style="width: 1.72712%; height: 18px;">:</td>
<td style="width: 69.6028%; height: 18px;">{{$berita->email}}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 36.9603%; height: 18px;">Hubungan Keluarga</td>
<td style="width: 1.72712%; height: 18px;">:</td>
<td style="width: 69.6028%; height: 18px;">{{$berita->hub_keluarga}}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 36.9603%; height: 18px;">Nama Terlapor Pensiunan</td>
<td style="width: 1.72712%; height: 18px;">:</td>
<td style="width: 69.6028%; height: 18px;">{{$berita->nama_peserta}}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 36.9603%; height: 18px;">Tanggal Meniggal</td>
<td style="width: 1.72712%; height: 18px;">:</td>
<td style="width: 69.6028%; height: 18px;"> {{ Carbon\Carbon::parse($berita->tgl_acara)->isoFormat('D MMMM Y')}}</td>
</tr>
<tr>
<td style="width: 36.9603%;">Alamat Duka</td>
<td style="width: 1.72712%;">:</td>
<td style="width: 69.6028%;">{{$berita->alamat}}</td>
</tr>
<tr>
<td style="width: 36.9603%;">&nbsp;</td>
<td style="width: 1.72712%;">&nbsp;</td>
<td style="width: 69.6028%;">&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
