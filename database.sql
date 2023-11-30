CREATE TABLE `tb_golongan` (
  `gol_id` tinyint(3) NOT NULL,
  `gol_kode` varchar(10) NOT NULL,
  `gol_nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

Struktur dari tabel `tb_pelanggan`

CREATE TABLE `tb_pelanggan` (
   pel_id INT(11) NOT NULL,
   pel_id_gol TINYINT(3),
   pel_no VARCHAR (20),
   pel_nama VARCHAR(50),
   pel_alamat TEXT DEFAULT,
   pel_hp VARCHAR (20),
   pel_ktp VARCHAR (50),
   pel_seri VARCHAR(50),
   pel_meteran INT (11),
   pel_aktif enum('Y','N'),
   pel_id_user INT (11),
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
   updated_at DATETIME DEFAULT NULL,
  PRIMARY KEY (pel_id),
  FOREIGN KEY (pel_id_gol) REFERENCES tb_golongan (gol_id),
  FOREIGN KEY (pel_id_user) REFERENCES tb_golongan (user_id)
);


CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_full_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;