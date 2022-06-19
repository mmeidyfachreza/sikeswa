<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <div style="
    margin: 0px 2rem;
    ">
    <img src="{{asset('/images/uks.jpg')}}" style="z-index: -1;
    position: absolute;
    width: 115px;">
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:14pt;">

      <span style="font-family:'Times New Roman';">TIM PELAKSANA</span></p>

      <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:14pt;"><span style="font-family:'Times New Roman';">USAHA KESEHATAN SEKOLAH</span></p>
      <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:14pt;"><span style="font-family:'Times New Roman';">(UKS)</span></p>
      <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:14pt;"><strong><span style="font-family:'Times New Roman';">SDN 001 BONTANG UTARA</span></strong></p>
      <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:9pt;">
        <span style="font-family:'Times New Roman';">Sekretariat : Jl. Kapt. Pierre Tendean No.77 Kel. Bontang Kuala, Kec. Bontang Utara</span></p>
        <hr>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Nomor   :&nbsp;</span><span style="font-family:'Times New Roman';">{{$request->nomor ?? ""}}</span><span style="width:90.66pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';float:right;margin-right: 1.1rem;">{{$request->dari ?? ""}}, {{date('d F Y', strtotime($request->tgl)) ?? ""}}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Perihal :&nbsp;</span><strong><em><span style="font-family:'Times New Roman';">Surat Rujukan</span></em></strong></p>
        <p style="margin-top:0pt; margin-left:306pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="width:13.5pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';float:right;margin-right: 6.7rem;">Kepada Yth.,</span></p>
        <p style="margin-top:0pt; margin-left:306pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><strong><span style="width:13.5pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman'; float:right">Puskesmas Bontang Utara 1</span></strong></p>
        <p style="margin-top:0pt; margin-left:306pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><strong><span style="width:13.5pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';float:right;margin-right: 1.1rem;">Cq. Poli Gizi/ Poli Umum</span></strong></p>
        <p style="margin-top:0pt; margin-left:306pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="width: 11.5pt;display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';float:right;margin-right: 10.6rem;">Di-</span></p>
        <p style="margin-top:0pt; margin-left:310.5pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="width:13.5pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';float:right;margin-right: 4.5rem;">Bontang</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Bersama ini kami kirimkan anak kami:</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Nama</span><span style="width:79.35pt; display:inline-block;">&nbsp;</span><span style="width:22.5pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: {{$student->nama ?? ""}}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Sekolah</span><span style="width:91.84pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: {{$student->school_from ?? ""}}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Kelas</span><span style="width:80.68pt; display:inline-block;">&nbsp;</span><span style="width:22.5pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: {{$student->classroom ?? ""}}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Jenis Kelamin</span><span style="width:39.68pt; display:inline-block;">&nbsp;</span><span style="width:22.5pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: {{$student->gender ?? ""}}</span></p>
        <p style="margin-top:0pt; margin-left:180pt; margin-bottom:0pt; text-indent:-180pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Alamat</span><span style="width:95.18pt; text-indent:0pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">: {{$student->address ?? ""}}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Keluhan/Kejadian</span><span style="width:20.7pt; display:inline-block;">&nbsp;</span><span style="width:22.5pt; display:inline-block;">&nbsp;</span><span style="font-family:'Times New Roman';">:</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">{{$request->keluhan ?? ""}}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Tindakan yang dilakukan:&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">{{$request->tindakan ?? ""}}</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">Demikian, atas perhatian dan kerjasamanya yang baik diucapkan terima kasih.</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>
        <p style="margin-top:0pt; margin-bottom:0pt; line-height:115%; font-size:12pt;"><span style="font-family:'Times New Roman';">&nbsp;</span></p>

        <p style="margin-top:0pt; margin-left:216pt; margin-bottom:6pt; text-indent:36pt; text-align:center; font-size:12pt;"><span style="font-family:'Times New Roman';">Kepala Sekolah/Petugas UKS</span></p>
        <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span style="font-family:'Times New Roman';"></span><span style="font-family:'Times New Roman';">&nbsp;&nbsp;</span></p>
      <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span style="font-family:'Times New Roman';"></span><span style="font-family:'Times New Roman';">&nbsp;&nbsp;</span></p>
      <p style="margin-top:0pt; margin-left:216pt; margin-bottom:6pt; text-indent:36pt; text-align:center; font-size:12pt;"><span style="font-family:'Times New Roman';">{{$request->nama}}</span></p>
      <p style="margin-top:0pt; margin-left:216pt; margin-bottom:6pt; text-indent:36pt; text-align:center; font-size:12pt;"><span style="font-family:'Times New Roman';">NIP {{$request->nip}}</span></p>
      <p style="margin-top:0pt; margin-bottom:6pt; font-size:12pt;"><span style="height:0pt; display:block; position:absolute; z-index:0;">
      </div>
    </body>
    </html>
