<?php
include('koneksi.php');
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nama Lengkap');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'Agama');
$sheet->setCellValue('I1', 'Keburuhan Khusus');
$sheet->setCellValue('J1', 'Alamat Jalan');
$sheet->setCellValue('K1', 'RT');
$sheet->setCellValue('L1', 'RW');
$sheet->setCellValue('M1', 'Nama Dusun');
$sheet->setCellValue('N1', 'Nama Kelurahan Desa');
$sheet->setCellValue('O1', 'Kecamatan');
$sheet->setCellValue('P1', 'Kode Pos');
$sheet->setCellValue('Q1', 'Tempat Tinggal');
$sheet->setCellValue('R1', 'Modal Transportasi');
$sheet->setCellValue('S1', 'Nomor HP');
$sheet->setCellValue('T1', 'Nomor Telepon');
$sheet->setCellValue('U1', 'Email');

$query = mysqli_query($conn ,"SELECT * FROM pendaftaran");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query)){
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['nama']);
    $sheet->setCellValue('C'.$i, $row['jkel']);
    $sheet->setCellValue('D'.$i, $row['nisn']);
    $sheet->setCellValue('E'.$i, $row['nik']);
    $sheet->setCellValue('F'.$i, $row['tempat_lahir']);
    $sheet->setCellValue('G'.$i, $row['tanggal_lahir']);
    $sheet->setCellValue('H'.$i, $row['keb_khusus']);
    $sheet->setCellValue('I'.$i, $row['alamat_jalan']);
    $sheet->setCellValue('J'.$i, $row['rt']);
    $sheet->setCellValue('K'.$i, $row['rw']);
    $sheet->setCellValue('L'.$i, $row['dusun']);
    $sheet->setCellValue('M'.$i, $row['kelurahan']);
    $sheet->setCellValue('N'.$i, $row['kecamatan']);
    $sheet->setCellValue('O'.$i, $row['kode_pos']);
    $sheet->setCellValue('P'.$i, $row['tempat_tinggal']);
    $sheet->setCellValue('Q'.$i, $row['transportasi']);
    $sheet->setCellValue('R'.$i, $row['hp']);
    $sheet->setCellValue('S'.$i, $row['telp']);
    $sheet->setCellValue('T'.$i, $row['email']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$i = $i -1;
$sheet->getStyle('A1:U'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Data Penerimaan Siswa Baru.xlsx');
?>

Penginputan Data Berhasil