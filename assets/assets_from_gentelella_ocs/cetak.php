<?php
require_once('tcpdf/config/lang/eng.php');
require_once('tcpdf/tcpdf.php');


 include "config.php";
 
 $rid = $_GET[RID];
 

    
    $kode=$_POST['kode'];
    
    if ($kode!=''){
        $whr=' WHERE tanggalpemesanan="'.$kode.'" OR nounit like "%'.$kode.'%"
               OR  namapemesan="'.$kode.'" OR kodepemesanan="'.$kode.'"';
    }else{
        $whr='';
    }
 
   $sql    = "SELECT * FROM pemesanan";
   
    //echo $sql;
	
   $hasil = mysql_query($sql);
 
   
   
   $data  = mysql_fetch_array($hasil);

   $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
   
   // set font
   $pdf->SetFont('times', '', 11);
   
 

$pdf->AddPage('L', 'A4');
    $html = '
    <h3><center>Laporan Penerimaan Buku LKS</center></h3>
    <br/>
<table border="1" cellspacing="1" cellpadding="0"> 
    <tr>
        <th align="center"><b>No</b></th>
        <th> <b>Kode Terima BL</b></th>
        <th ><b>Tanggal Terima</b></th>
        <th ><b>Kode Sekolah</b></th>
        <th ><b>Nama Sekolah</b></th>  
        <th ><b>Tema</b></th>   
        <th><b>Jumlah Buku Siswa</b></th> 
        <th><b>Hsl Pemeriksaan & Penerimaan</b></th> 
        <th><b>Jumlah Buku Pegangan Guru</b></th> 
        <th><b>Hsl Pemeriksaan & Penerimaan</b></th>  
        <th><b>Keterangan (*) (Aset/Bukan)</b></th>         
    </tr></table>';
	 $no=0;
   while ($data = mysql_fetch_array($hasil))
   {
    $no++;
     $html .= '<table border="1"><tr>
                    <td align="center">'.$no.'</td>
                    <td align="center">'.$data['kodepemesanan'].'</td>
	               <td align="center">'.$data['namapemesan'].'</td>
	               <td align="center">'.$data['tanggalpemesanan'].'</td>
	               <td align="center">'.$data['nounit'].'</td>
				  
				   </tr></table> ';
				   		   
    
   }
  // ;
	

	
   $pdf->writeHTML($html, true, false, true, false, '');
    
 
   
   
   $pdf->Output('C ', 'I');
 
?>
