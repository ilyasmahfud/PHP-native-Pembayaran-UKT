USE pembayaran_ukt;

CREATE TABLE `mahasiswa` (
  `id` INTEGER(10) PRIMARY KEY AUTO_INCREMENT,
  `NIM` CHAR(15),
  `nama_mahasiswa` VARCHAR(255),
  `tgl_lahir` VARCHAR(255),
  `email` VARCHAR(255),
  `password` VARCHAR (225),
  `id_univ` VARCHAR (225),
  `foto_profil` VARCHAR (255),
  `sosmed` VARCHAR (255)
);

CREATE TABLE `universitas` (
  `id` INTEGER(10) PRIMARY KEY AUTO_INCREMENT,
  `NIU` CHAR(15),
  `nama_univ` VARCHAR(255)
);

CREATE TABLE `pembayaran` (
  `id` INTEGER(10) PRIMARY KEY AUTO_INCREMENT,
  `NIM` CHAR(15),
  `bukti_pembayaran` VARCHAR (255),
  `catatan` VARCHAR (255),
  `status` VARCHAR (20),
  `nominal` INTEGER,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
  `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

UPDATE mahasiswa SET `id_univ` = '001027' WHERE id=2;
UPDATE universitas SET `NIU` = '001003' WHERE id=5;




INSERT INTO pembayaran (NIM, `status`, nominal ) VALUE ('M0118035','belum dibayar', 5000000);
INSERT INTO universitas (NIU, nama_univ) VALUE ('001001','Universitas Gajah Mada');
INSERT INTO ADMIN (username, `password`) VALUE ('admin','admin');

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
  
SELECT * FROM mahasiswa JOIN universitas ON universitas.NIU = mahasiswa.id_univ WHERE username='ilyas';

SELECT * FROM mahasiswa JOIN pembayaran ON pembayaran.NIM = mahasiswa.NIM WHERE NIM LIKE 'M0118035';

DELETE FROM `universitas` WHERE id=3;

SELECT username FROM `admin` WHERE username LIKE 'admin' AND `password` = 'admin';

SELECT * FROM mahasiswa JOIN pembayaran ON pembayaran.NIM = mahasiswa.NIM;

SELECT * FROM () AS NIM_terSet WHERE NIM LIKE 

SELECT * FROM mahasiswa WHERE id_univ IN ('001027');
            
SELECT * FROM mahasiswa JOIN universitas ON universitas.NIU = mahasiswa.id_univ JOIN pembayaran ON pembayaran.NIM = mahasiswa.NIM WHERE pembayaran.status = 'sudah membayar';

UPDATE pembayaran SET STATUS='belum dibayar', confirmed_by=NULL WHERE id='1';
UPDATE pembayaran SET STATUS='belum dibayar', confirmed_by='admin ' ,bukti_pembayaran='', catatan='bukti pembayaran tidak valid' WHERE id='2';

SELECT * FROM ADMIN;
SELECT * FROM pembayaran;
SELECT * FROM universitas;  
SELECT * FROM universitas;
SELECT * FROM mahasiswa;
SELECT username FROM mahasiswa WHERE username LIKE 'ilyasmahfud' AND `password` = '2';

UPDATE mahasiswa SET `foto_profil` = '../storage/13112021044319foto-about.jpeg' WHERE id_univ = '001003';