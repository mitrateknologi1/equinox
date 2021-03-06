<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'users_id' => 9,
                'pengusul_id' => 4, //5
                'latitude' => '-0.857844',
                'longitude' => '119.881858',
                'moa_id' => '1',
                'nomor_ia' => '11111222223333333-ia',
                'nomor_ia_pengusul' => '1111144444555555-ia',
                'pejabat_penandatangan' => 'Kadita',
                'nik_nip_pengusul' => '1213213123213123123-ia',
                'jabatan_pengusul' => 'Rektor-ia',
                'program' => 'Peresmian Pabrik Tesla-ia',
                'manfaat' => 'Menjalin Kerjasama1',
                'tanggal_mulai' => '2021-08-16',
                'tanggal_berakhir' => '2022-01-16',
                'dokumen' => 'dokumen_tidak_ada-ia.pdf',
                'surat_tugas' => 'dokumen_surat_tugas_tidak_ada-ia.pdf',
                'laporan_hasil_pelaksanaan' => 'lpj_tidak_ada-ia.pdf',
                'nilai_uang' => 50000000,
                'metode_pertemuan' => 'Desk to Desk',
                'tanggal_pertemuan' => '2021-07-15',
                'waktu_pertemuan' => '21:00',
                'tempat_pertemuan' => 'Darisa-ia',
                'created_at' => '2021-08-16 07:18:42'
            ],
            [
                'users_id' => 9,
                'pengusul_id' => 4, //6
                'latitude' => '-0.8364322',
                'longitude' => '119.891505',
                'moa_id' => '2',
                'nomor_ia' => '212121313131414141-ia',
                'nomor_ia_pengusul' => 'ia-212121414141416161616-ia',
                'pejabat_penandatangan' => 'Bruno',
                'nik_nip_pengusul' => '999888888888888888-ia',
                'jabatan_pengusul' => 'Kepala Dinas-ia',
                'program' => 'Pelaksanaan IKM-ia',
                'manfaat' => 'Menjalin Kerjasama2',
                'tanggal_mulai' => '2021-12-21',
                'tanggal_berakhir' => '2022-02-01',
                'dokumen' => 'dokumen_tidak_ada-ia.pdf',
                'surat_tugas' => '',
                'laporan_hasil_pelaksanaan' => '',
                'nilai_uang' => 10000000,
                'metode_pertemuan' => 'Desk to Desk',
                'tanggal_pertemuan' => '2022-01-21',
                'waktu_pertemuan' => '17:00',
                'tempat_pertemuan' => 'Anjungan-ia',
                'created_at' => '2021-12-21 07:18:42'

            ],
            [
                'users_id' => 2,
                'pengusul_id' => 7,
                'latitude' => '-0.893251',
                'longitude' => '119.886419',
                'moa_id' => '3',
                'nomor_ia' => '666666777777888888-ia',
                'nomor_ia_pengusul' => '666666888899999-ia',
                'pejabat_penandatangan' => 'Natan',
                'nik_nip_pengusul' => '677777777777-ia',
                'jabatan_pengusul' => 'Sekretaris Bawaslu-ia',
                'program' => 'Pelaksaan Pengawasan Pemilu-ia',
                'manfaat' => 'Menjalin Kerjasama3',
                'tanggal_mulai' => '2021-11-11',
                'tanggal_berakhir' => '2022-02-27`',
                'dokumen' => 'dokumen_tidak_ada-ia.pdf',
                'surat_tugas' => '',
                'laporan_hasil_pelaksanaan' => '',
                'nilai_uang' => 5000000,
                'metode_pertemuan' => 'Ceremonial',
                'tanggal_pertemuan' => '2022-01-21',
                'waktu_pertemuan' => '17:00',
                'tempat_pertemuan' => 'Hutan Kota-ia',
                'created_at' => '2021-11-11 07:18:42'
            ],           
            [
                'users_id' => 6,
                'pengusul_id' => 7,
                'latitude' => '-0.891618',
                'longitude' => '119.8517753',
                'moa_id' => '1',
                'nomor_ia' => '666666777777888888000000-ia',
                'nomor_ia_pengusul' => '666666888899999000000-ia',
                'pejabat_penandatangan' => 'Chou',
                'nik_nip_pengusul' => '677777777777-ia',
                'jabatan_pengusul' => 'Sekretaris Bawaslu-ia',
                'program' => 'Testing-fakultas',
                'manfaat' => 'Menjalin Kerjasama4',
                'tanggal_mulai' => '2021-10-18',
                'tanggal_berakhir' => '2022-03-15',
                'dokumen' => 'dokumen_tidak_ada-ia.pdf',
                'surat_tugas' => 'dokumen_surat_tugas_tidak_ada',
                'laporan_hasil_pelaksanaan' => '',
                'nilai_uang' => 800000,
                'metode_pertemuan' => 'Ceremonial',
                'tanggal_pertemuan' => '2022-01-21',
                'waktu_pertemuan' => '17:00',
                'tempat_pertemuan' => 'Kos-ia',
                'created_at' => '2021-10-18 07:18:42'
            ],        
            [
                'users_id' => 47,
                'pengusul_id' => 5,
                'latitude' => '-0.886793',
                'longitude' => '119.8594253',
                'moa_id' => '1',
                'nomor_ia' => '666666777777888888111111-ia',
                'nomor_ia_pengusul' => '666666888899999111111-ia',
                'pejabat_penandatangan' => 'Layla',
                'nik_nip_pengusul' => '677777777777-ia',
                'jabatan_pengusul' => 'Sekretaris Bawaslu-ia',
                'program' => 'Testing-prodi',
                'manfaat' => 'Menjalin Kerjasama5',
                'tanggal_mulai' => '2021-12-14',
                'tanggal_berakhir' => '2022-04-04',
                'dokumen' => 'dokumen_tidak_ada-ia.pdf',
                'surat_tugas' => 'dokumen_surat_tugas_tidak_ada',
                'laporan_hasil_pelaksanaan' => '',
                'nilai_uang' => 800000,
                'metode_pertemuan' => 'Ceremonial',
                'tanggal_pertemuan' => '2022-01-21',
                'waktu_pertemuan' => '17:00',
                'tempat_pertemuan' => 'Kos-ia',
                'created_at' => '2021-12-14 07:18:42'
            ],           
        ];

        DB::table('ia')->insert($data);
    }
}