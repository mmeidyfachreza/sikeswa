<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <p style="margin-top:0pt; margin-bottom:6pt; text-align:center; font-size:12pt;"><strong><u><span
                        style="font-family:'Times New Roman';">SURAT RUJUKAN KESEHATAN ANAK SEKOLAH</span></u></strong>
        </p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><strong><span
                    style="font-family:'Times New Roman';">&nbsp;</span></strong></p>


        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt; text-align:right"><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="font-family:'Times New Roman';">Kepada Yth. Dokter/ Dokter Gigi</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt; text-align:right"><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="font-family:'Times New Roman';">Puskesmas/ Rumah Sakit</span><span
                style="width:39pt; display:inline-block;">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt; text-align:right"><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">Di
                Bontang</span><span style="width:33pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span
                style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span style="font-family:'Times New Roman';">Mohon
                penatalaksanaan lebih lanjut siswa :</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span
                style="font-family:'Times New Roman';">Nama&nbsp;</span><span
                style="width:4.35pt; display:inline-block;">&nbsp;</span><span
                style="width:36pt; display:inline-block;">&nbsp;</span><span
                style="font-family:'Times New Roman';">:&nbsp;{{$student->name}}
                &nbsp;</span>@if($student->gender=='Laki-laki') <span style="font-family:'Times New Roman'; ">L</span><span
                style="font-family:'Times New Roman';">/</span><span
                style="font-family:'Times New Roman'; text-decoration:line-through">&nbsp;P</span> @else <span
                style="font-family:'Times New Roman'; text-decoration:line-through">L</span><span
                style="font-family:'Times New Roman';">/</span><span
                style="font-family:'Times New Roman'; ">&nbsp;P</span> @endif<span
                style="font-family:'Times New Roman';">&nbsp;&nbsp;Umur : {{$umur}} Tahun&nbsp;</span>
        </p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span
                style="font-family:'Times New Roman';">Sekolah&nbsp;</span><span
                style="width:30.34pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
                {{$student->school_from}}</span><span style="font-family:'Times New Roman';">&nbsp;&nbsp;</span><span
                style="font-family:'Times New Roman';">Kelas</span><span
                style="width:2.34pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:
                {{$student->classroom ?? " "}}</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span
                style="font-family:'Times New Roman';">Keluhan/ Diagnosa : {{$request->deskripsi}}</span></p>
        <ol style="margin:0pt; padding-left:0pt;" type="1">
            <li style="margin-left:50pt; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Dicurigai
                Gangguan Jantung/ Hipertensi/ Anemia&nbsp; *), Regio {{$request->regio1 ?? '.......'}}</li>
            <li style="margin-left:50pt; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Dicurigai
                Rabun Jauh/ Buta warna/ Radang mata *), Regio {{$request->regio2 ?? "......."}}</li>
            <li style="margin-left:50pt; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Serumen/
                Otitis Media/ Dicurigai Gangguan Dengar *), Regio {{$request->regio3 ?? "......."}}</li>
            <li style="margin-left:50pt; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">Gigi
                berlubang/ Sisa Akar/ Gigi goyang/ Karang gigi *), Regio {{$request->regio4 ?? "......."}}</li>
            <li
                style="margin-left:50pt; margin-bottom:6pt; padding-left:4pt; font-family:'Times New Roman'; font-size:12pt;">
                Gangguan Reproduksi/ Gangguan Mental *), Regio {{$request->regio5 ?? "......."}}</li>
        </ol>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span style="font-family:'Times New Roman';">Atas
                kerjasamanya di ucapkan terimakasih.</span></p>
        <p
            style="margin-top:0pt; margin-left:216pt; margin-bottom:6pt; text-indent:36pt; text-align:center; font-size:12pt;">
            <span style="font-family:'Times New Roman';">Petugas Pemeriksa</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span
                style="font-family:'Times New Roman';">*)</span><span
                style="font-family:'Times New Roman';">&nbsp;&nbsp;</span><span
                style="font-family:'Times New Roman';">Pilih dengan cara dilingkari</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span
                style="font-family:'Times New Roman';"></span><span
                style="font-family:'Times New Roman';">&nbsp;&nbsp;</span></p>
        <p
            style="margin-top:0pt; margin-left:216pt; margin-bottom:6pt; text-indent:36pt; text-align:center; font-size:12pt;">
            <span style="font-family:'Times New Roman';">{{$request->petugas}}</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span
                style="height:0pt; display:block; position:absolute; z-index:0;">
</body>

</html>
