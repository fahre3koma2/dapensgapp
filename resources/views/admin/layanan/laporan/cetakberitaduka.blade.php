<h3 style="text-align:center">&nbsp;</h3>
<table border="0" cellspacing="0" style="text-align:center; border-collapse:collapse; height:126px; width:100%">
<tbody>
<tr style="height: 10px;">
<td style="width: 14.7687%; height: 10px;"><img src="{{ url('dapen/logo/logo.png') }}" alt="" width="80%" /></td>
</tr>
</tbody>
</table>
<br/>
<h3 style="text-align:center"><span style="font-size:26px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">Pelaporan Berita Duka</span></span></h3>

<p style="text-align:center"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">Dana Pensiun Semen Gresik</span></p>

<table border="0" cellspacing="0" style="background-color:#fd7e14; border-collapse:collapse; width:100%">
	<tbody>
		<tr>
			<td style="height:18px; text-align:center; width:100%">&nbsp;</td>
		</tr>
		<tr>
			<td style="height:18px; text-align:center; width:100%"><span style="font-size:14px"><span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif"><span style="color:#ffffff">No Pelaporan</span></span></span></td>
		</tr>
		<tr>
			<td style="height:54px; width:100%">
			<h3 style="text-align:center"><span style="color:#ffffff"><strong>{{$berita->nolaporan}}</strong></span></h3>
			</td>
		</tr>
	</tbody>
</table>

<hr />
<p style="text-align:right">Tgl Laporan : {{ $berita->created_at}}</p>

<table border="0" cellspacing="0" style="border-collapse:collapse; height:126px; width:100%">
	<tbody>
		<tr>
			<td style="height:18px; width:36.9603%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">No Pensiun</span></span></td>
			<td style="height:18px; width:1.72712%"><span style="font-size:16px">:</span></td>
			<td style="height:18px; width:69.6028%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">{{$berita->nopensiun}}</span></span></td>
		</tr>
		<tr>
			<td style="height:18px; width:36.9603%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">Nama Pelapor</span></span></td>
			<td style="height:18px; width:1.72712%"><span style="font-size:16px">:</span></td>
			<td style="height:18px; width:69.6028%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">{{$berita->nama_pelapor}}</span></span></td>
		</tr>
		<tr>
			<td style="height:18px; width:36.9603%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">No Telp/HP Pelapor&nbsp;</span></span></td>
			<td style="height:18px; width:1.72712%"><span style="font-size:16px">:</span></td>
			<td style="height:18px; width:69.6028%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">{{$berita->notelp}}</span></span></td>
		</tr>
		<tr>
			<td style="height:18px; width:36.9603%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">Email</span></span></td>
			<td style="height:18px; width:1.72712%"><span style="font-size:16px">:</span></td>
			<td style="height:18px; width:69.6028%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">{{$berita->email}}</span></span></td>
		</tr>
		<tr>
			<td style="height:18px; width:36.9603%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">Hubungan Keluarga</span></span></td>
			<td style="height:18px; width:1.72712%"><span style="font-size:16px">:</span></td>
			<td style="height:18px; width:69.6028%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">{{$berita->hub_keluarga}}</span></span></td>
		</tr>
		<tr>
			<td style="height:18px; width:36.9603%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">Nama Terlapor Pensiunan</span></span></td>
			<td style="height:18px; width:1.72712%"><span style="font-size:16px">:</span></td>
			<td style="height:18px; width:69.6028%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">{{$berita->nama_peserta}}</span></span></td>
		</tr>
		<tr>
			<td style="height:18px; width:36.9603%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">Tanggal Meniggal</span></span></td>
			<td style="height:18px; width:1.72712%"><span style="font-size:16px">:</span></td>
			<td style="height:18px; width:69.6028%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">{{ Carbon\Carbon::parse($berita->tgl_acara)->isoFormat('D MMMM Y')}}</span></span></td>
		</tr>
		<tr>
			<td style="width:36.9603%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">Alamat Duka</span></span></td>
			<td style="width:1.72712%"><span style="font-size:16px">:</span></td>
			<td style="width:69.6028%"><span style="font-size:16px"><span style="font-family:Trebuchet MS,Helvetica,sans-serif">{{$berita->alamat}}</span></span></td>
		</tr>
		<tr>
			<td style="width:36.9603%">&nbsp;</td>
			<td style="width:1.72712%">&nbsp;</td>
			<td style="width:69.6028%">&nbsp;</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
