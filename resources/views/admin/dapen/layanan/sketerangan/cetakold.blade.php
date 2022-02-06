<table style="height: 18px; width: 100%; border-collapse: collapse;" border="0">
<tbody>
<tr style="height: 18px;">
<td style="width: 100%; height: 18px;">&nbsp;</td>
</tr>
</tbody>
</table>
<p style="text-align: center;">PELAYANAN VIA WEBSITE DPSG</p>
<p style="text-align: center;">PERMINTAAN SK PENSIUN</p>
<p>&nbsp;</p>
<table style="width: 100%; border-collapse: collapse; height: 108px;" border="0">
<tbody>
<tr style="height: 18px;">
<td style="width: 23.6615%; height: 18px;">NAMA</td>
<td style="width: 3.97228%; height: 18px;">:</td>
<td style="width: 72.3661%; height: 18px;">{{ $surat->name }}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 23.6615%; height: 18px;">NO PENSIUN</td>
<td style="width: 3.97228%; height: 18px;">:</td>
<td style="width: 72.3661%; height: 18px;">{{ $surat->nopeserta }}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 23.6615%; height: 18px;">ALAMAT</td>
<td style="width: 3.97228%; height: 18px;">:</td>
<td style="width: 72.3661%; height: 18px;">{{ $surat->alamat }}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 23.6615%; height: 18px;">HP</td>
<td style="width: 3.97228%; height: 18px;">:</td>
<td style="width: 72.3661%; height: 18px;">{{ $surat->nohp }}</td>
</tr>
<tr>
<td style="width: 23.6615%;">KEPERLUAN</td>
<td style="width: 3.97228%;">:</td>
<td style="width: 72.3661%;">@if ($surat->jenis == '0') Sebagai Pensiunan @else Untuk Anak Masuk Perguruan Tinggi @endif</td>
</tr>
<tr style="height: 18px;">
<td style="width: 23.6615%; height: 18px;">DIAJUKAN PADA</td>
<td style="width: 3.97228%; height: 18px;">:</td>
<td style="width: 72.3661%; height: 18px;">{{ $surat->created_at }}</td>
</tr>
<tr style="height: 18px;">
<td style="width: 23.6615%; height: 18px;">DITERIMA PADA</td>
<td style="width: 3.97228%; height: 18px;">:</td>
<td style="width: 72.3661%; height: 18px;">{{ $surat->created_at }}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
