<?php
return [

  /**
   * ------------------------------------------------------------------------
   *  Pengaturan User
   * ------------------------------------------------------------------------
   *
   *  file hasil upload akan disimpan sesuai pengaturan berikut
   *  upload/{mapel}/{kelas}_{tugas}_{nama siswa}
   */

  /*
  |--------------------------------------------------------------------------
  | Mata Pelajaran
  |--------------------------------------------------------------------------
  | Mata Pelajaran untuk kirim file
  |
  */
  'mapel' => 'ketik mapel',

  /*
  |--------------------------------------------------------------------------
  | Kelas
  |--------------------------------------------------------------------------
  | rombongan belajar siswa
  |
  | misalnya '7 b' atau '8 a'
  */
  'kelas' => '7 A',

  /*
  |--------------------------------------------------------------------------
  | Tugas Ke
  |--------------------------------------------------------------------------
  |
  | format penulisan : 1 atau 'satu'
  */
  'tugas' => 'Mapel',

  /*
  |--------------------------------------------------------------------------
  | Format File
  |--------------------------------------------------------------------------
  | format file yang diizinkan untuk dikirim
  |
  | misalnya 'mp4','zip','rar','pdf','docx','jpg','png'
  */
  'file' => 'zip',

  /*
  |--------------------------------------------------------------------------
  | Ukuran Maksimal
  |--------------------------------------------------------------------------
  | Ukuran maksimal file yang dapat dikirim
  |
  | Pastikan sudah mengatur bagian berikut di file php.ini
  | upload_max_filesize, post_max_size,
  | max_input_time, max_execution_time
  |
  | ditulis dalam satuan Bytes, 1 MB = 1000000 Bytes
  */
  'ukuran' => 100000000,

  /*
  |--------------------------------------------------------------------------
  | Kirim Ulang
  |--------------------------------------------------------------------------
  | dapat digunakan untuk mencegah kecurangan siswa mengirim kembali file
  | tugas yang telah direvisi
  |
  | true atau false
  */
  'kirim_ulang' => false

];
