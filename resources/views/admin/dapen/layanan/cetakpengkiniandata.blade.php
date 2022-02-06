<div id="_0:0" class="pos" style="top: 0;">
<div id="_118:29" class="pos" style="top: 29; left: 118;"><span id="_16.0" style="font-family: Arial; font-size: 16.0px; color: #000000;"> DANA PENSIUN SEMEN GRESIK</span></div>
<div id="_119:50" class="pos" style="top: 50; left: 119;"><span id="_10.7" style="font-family: Arial; font-size: 10.7px; color: #000000;"> Kantor: Jalan R.A. Kartini No. 23, Gresik - 61122</span></div>
<div id="_616:72" class="pos" style="text-align: right;"><span id="_12.1" style="font-family: Arial; font-size: 12.1px; color: #000000;"> Tanggal Dicetak : {{ date('d-m-y') }}</span></div>
<div class="pos" style="top: 91; left: 50;">
<table style="width: 100%; border-collapse: collapse; background-color: #000000; height: 18px;" border="0">
<tbody>
<tr style="height: 18px;">
<td style="width: 100%; height: 18px;"><span id="_14.8" style="font-weight: bold; font-family: Arial; font-size: 14.8px; color: #ffffff;">DATA PENSIUN</span></td>
</tr>
</tbody>
</table>
</div>
<div id="_72:146" class="pos" style="padding-left: 40px;">&nbsp;</div>
<div class="pos" style="padding-left: 40px;">
<table style="border-collapse: collapse; width: 100%; height: 144px;" border="0">
<tbody>
<tr style="height: 18px;">
<td style="width: 22.4137%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;">No. Pensiun&nbsp; &nbsp;</span></td>
<td style="width: 2.1073%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"> : </span></td>
<td style="width: 75.4789%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"><span style="font-weight: bold;">{{ $user1->nopeserta }}</span></span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 22.4137%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;">Nama Pensiunan</span></span></td>
<td style="width: 2.1073%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"> : </span></td>
<td style="width: 75.4789%; height: 18px;"><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;"><span style="font-weight: bold;">{{ $user1->name }}</span></span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 22.4137%; height: 18px;"><span id="_12.9" style="font-family: Arial; font-size: 12.9px; color: #000000;">Tgl. Lahir&nbsp;</span><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;"><br /></span></span></td>
<td style="width: 2.1073%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"> : </span></td>
<td style="width: 75.4789%; height: 18px;"><span id="_12.9" style="font-family: Arial; font-size: 12.9px; color: #000000;"><span id="_14.4" style="font-size: 14.4px;"> </span><span style="font-weight: bold;"> {{ date('d-m-Y', strtotime($user1->tgl_lahir)) }}</span></span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 22.4137%; height: 18px;"><span id="_12.5" style="font-family: Arial; font-size: 12.5px; color: #000000;">Alamat Surat</span><span id="_12.9" style="font-family: Arial; font-size: 12.9px; color: #000000;"><br /></span></td>
<td style="width: 2.1073%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"> : </span></td>
<td style="width: 75.4789%; height: 18px;"><span id="_12.5" style="font-family: Arial; font-size: 12.5px; color: #000000;"><span style="font-weight: bold;">{{ $user1->alamat }} </span><span style="font-weight: bold;"> Gresik</span></span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 22.4137%; height: 18px;"><span id="_12.5" style="font-family: Arial; font-size: 12.5px; color: #000000;">No. Telpon / HP&nbsp; &nbsp;</span><span id="_12.5" style="font-family: Arial; font-size: 12.5px; color: #000000;"><br /></span></td>
<td style="width: 2.1073%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"> : </span></td>
<td style="width: 75.4789%; height: 18px;"><span id="_12.5" style="font-family: Arial; font-size: 12.5px; color: #000000;"><span style="font-weight: bold;">{{ $user1->nohp }}</span></span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 22.4137%; height: 18px;"><span id="_12.5" style="font-family: Arial; font-size: 12.5px; color: #000000;">Status Perkawinan</span><span id="_12.5" style="font-family: Arial; font-size: 12.5px; color: #000000;"><br /></span></td>
<td style="width: 2.1073%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"> : </span></td>
<td style="width: 75.4789%; height: 18px;"><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;"><span style="font-weight: bold;">{{ $user1->jenis }}</span></span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 22.4137%; height: 18px;"><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;">Jenis Pensiun</span><span id="_12.5" style="font-family: Arial; font-size: 12.5px; color: #000000;"><br /></span></td>
<td style="width: 2.1073%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"> : </span></td>
<td style="width: 75.4789%; height: 18px;"></td>
</tr>
<tr style="height: 18px;">
<td style="width: 22.4137%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;">N.P.W.P&nbsp; &nbsp;</span><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;"><br /></span></td>
<td style="width: 2.1073%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"> : </span></td>
<td style="width: 75.4789%; height: 18px;"><span id="_12.6" style="font-family: Arial; font-size: 12.6px; color: #000000;"><span style="font-weight: bold;">{{ $user1->npwp }}</span></span></td>
</tr>
</tbody>
</table>
</div>

<div id="_61:461" class="pos" style="top: 461; left: 61;">&nbsp;</div>
<div class="pos" style="top: 461; left: 61;">
<table style="height: 19px; width: 100%; border-collapse: collapse;" border="0">
<tbody>
<tr style="height: 11px;">
<td style="width: 3.88606%; height: 19px;">
<div id="_22:494" class="pos" style="top: 494; left: 22;"><span id="_12.2" style="font-style: italic; font-family: Times New Roman; font-size: 12.2px; color: #000000;"><span id="_15.0" style="font-weight: bold; font-style: normal; font-family: Arial; font-size: 15.0px;">*)</span></span></div>
</td>
<td style="width: 96.1139%; height: 19px; background-color: #000000;">
<div id="_22:494" class="pos" style="top: 494; left: 22;"><span id="_12.2" style="font-style: italic; font-family: Times New Roman; font-size: 12.2px; color: #000000;"> <span id="_15.0" style="font-weight: bold; font-style: normal; font-family: Arial; font-size: 15.0px; color: #ffffff;"> PERUBAHAN DATA PENSIUN </span></span><span style="color: #ffffff; font-family: Arial; font-size: 13px; font-style: italic;">( Diisi apabila ada perubahan ) </span><span id="_13.6" style="font-style: normal; font-size: 13.6px; color: #000000;"> TR</span></div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="pos" style="padding-left: 40px;">
<table style="height: 171px; width: 98.7844%; border-collapse: collapse;">
<tbody>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;">No. Pensiun</span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;">&nbsp;{{ $user2->nopeserta }}</span></span></td>
</tr>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">Nama Pensiunan</span></span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">&nbsp;{{ $user2->name }}</span></span></span></td>
</tr>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">Tempat, Tgl. Lahir</span></span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">&nbsp;{{ $user2->tempat_lahir.', '.$user2->tgl_lahir }}</span></span></span></td>
</tr>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;">Alamat Surat</span><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;"><br /></span></span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">&nbsp;{{ $user2->alamat }}</span></span></span></td>
</tr>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;">Kota / Kabupaten</span><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><br /></span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">&nbsp;{{ $user2->kota }}</span></span></span></td>
</tr>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;">No. Telpon / HP</span><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><br /></span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">&nbsp;{{ $user2->nohp }}</span></span></span></td>
</tr>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;">N.P.W.P</span><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><br /></span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">&nbsp;{{ $user2->npwp }}</span></span></span></td>
</tr>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;">Status Perkawinan</span><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><br /></span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">&nbsp;{{ $user2->kawin }}</span></span></span></td>
</tr>
<tr style="height: 19px;">
<td style="width: 26.2237%; height: 19px;"><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;">Status</span><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;"><br /></span></td>
<td style="width: 2.20264%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span id="_14.1" style="font-size: 14.1px;">:</span></span></td>
<td style="width: 95.5087%; height: 19px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;"><span style="font-weight: bold;"><span id="_12.3" style="font-family: Arial; font-size: 12.3px; color: #000000;">&nbsp;{{ $user2->jenis }}</span></span></span></td>
</tr>
</tbody>
</table>
</div>
<div id="_81:546" class="pos" style="padding-left: 40px;"><span id="_12.7" style="font-family: Arial; font-size: 12.7px; color: #000000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></div>
<div id="_57:742" class="pos" style="top: 742; left: 57;"><span id="_12.2" style="font-family: Arial; font-size: 12.2px; color: #000000;"> Keluarga yang masih menjadi tanggungan sesuai data dari SDM PT Semen Indonesia (Persero) Tbk.</span></div>
<table style="border-collapse: collapse; width: 99.6441%; height: 63px;" border="1">
<thead>
<tr style="height: 18px;">
<td style="width: 6.34642%; text-align: center; height: 18px;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">NO.</span></td>
<td style="width: 34.8244%; text-align: center; height: 18px;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">NAMA ANGGOTA KELUARGA</span></td>
<td style="width: 8.82927%; text-align: center; height: 18px;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">HUBUNGAN&nbsp;</span></td>
<td style="width: 16.6667%; text-align: center; height: 18px;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">TGL. LAHIR&nbsp;</span></td>
<td style="width: 16.6667%; text-align: center; height: 18px;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">PEKERJAAN</span></td>
<td style="width: 16.6667%; text-align: center; height: 18px;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">KETERANGAN</span></td>
</tr>
</thead>
<tbody>
@php $no = 1; @endphp
@foreach ($user1->keluarga as $item)
<tr>
<td style="width: 6.34642%; text-align: center;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">{{ $no }}</span></td>
<td style="width: 34.8244%; text-align: center;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">{{ $item->nama }}</span></td>
<td style="width: 8.82927%; text-align: center;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;"> @if($item->hubungan == 'S') Suami @elseif($item->hubungan == 'I') Istri @else Anak @endif</span></td>
<td style="width: 16.6667%; text-align: center;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;">{{ Carbon\Carbon::parse($item->tgl_lahir)->isoFormat('D MMMM Y')}}</span></td>
<td style="width: 16.6667%; text-align: center;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;"> - </span></td>
<td style="width: 16.6667%; text-align: center;"><span id="_12.1" style="font-weight: bold; font-family: Arial; font-size: 12.1px; color: #000000;"> - </span></td>
</tr>
@php $no++; @endphp
@endforeach
</tbody>
</table>
<div id="_61:885" class="pos" style="top: 885; left: 61;">&nbsp;</div>
<table style="height: 223px; width: 100%; border-collapse: collapse;" border="0">
<tbody>
<tr style="height: 18px;">
<td style="width: 33.3333%; height: 18px;">&nbsp;</td>
<td style="width: 9.32639%; height: 18px;">&nbsp;</td>
<td style="width: 57.3402%; height: 18px;">.................................., ...........................</td>
</tr>
<tr style="height: 205px;">
<td style="width: 33.3333%; height: 205px;">&nbsp;</td>
<td style="width: 9.32639%; height: 205px;">&nbsp;</td>
<td style="width: 57.3402%; height: 205px; text-align: center;">Tanda Tangan / Cap Jempol<br />
<table style="width: 100%; border-collapse: collapse; height: 134px;" border="1">
<tbody>
<tr style="height: 134px;">
<td style="width: 100%; height: 134px;">&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
