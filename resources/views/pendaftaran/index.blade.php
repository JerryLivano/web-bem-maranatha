@extends('layouts.master')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card">
        <h3 class="card-header">Form Pendaftaran Kepengurusan BEM</h3>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="name">Nama Lengkap:</label> <span class="text-danger">*</span>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Input Nama" required>
                </div>
                <div class="form-group">
                    <label for="nrp">NRP:</label> <span class="text-danger">*</span>
                    <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Input NRP" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Aktif:</label> <span class="text-danger">*</span>
                    <input type="email" class="form-control" name="email" id="email" placeholder="johndoe@example.com" required>
                    <small id="emailHelp" class="form-text text-muted">Untuk informasi penerimaan</small>
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telepon:</label> <span class="text-danger">*</span>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+62</span>
                        </div>
                        <input type="text" class="form-control" name="telp" id="telp" placeholder="Input Nomor Telepon" minlength="10" maxlength="15">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas:</label> <span class="text-danger">*</span>
                    <select name="fakultas" id="fakultas" class="form-select" required>
                        <option selected disabled>Pilihan Fakultas</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Bisnis">Bisnis</option>
                        <option value="Teknik">Teknik</option>
                        <option value="Bahasa & Budaya">Bahasa & Budaya</option>
                        <option value="Seni Rupa & Desain">Seni Rupa & Desain</option>
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Kedokteran Gigi">Kedokteran Gigi</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Psikologi">Psikologi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="angkatan">Angkatan:</label> <span class="text-danger">*</span>
                    <select name="angkatan" id="angkatan" class="form-select" required>
                        <option selected disabled>Pilihan Angkatan</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dept1">Pilihan Departemen 1:</label> <span class="text-danger">*</span>
                    <select name="dept1" id="dept1" class="form-select" required>
                        <option selected disabled>Pilihan Departemen</option>
                        <option value="Departemen Sekretariat">Departemen Sekretariat</option>
                        <option value="Departemen Keuangan, Sarana, dan Prasarana">Departemen Keuangan, Sarana, dan
                            Prasarana</option>
                        <option value="Departemen Informasi & Komunikasi">Departemen Informasi & Komunikasi</option>
                        <option value="Departemen Pengabdian Masyarakat">Departemen Pengabdian Masyarakat</option>
                        <option value="Departemen Keilmuan & Pengembangan">Departemen Keilmuan & Pengembangan
                        </option>
                        <option value="Departemen Sosial, Politik, dan Hukum">Departemen Sosial, Politik, dan Hukum
                        </option>
                        <option value="Departemen Pengembangan Sumber Daya Organisasi">Departemen Pengembangan
                            Sumber Daya Organisasi</option>
                        <option value="Departemen Minat & Bakat">Departemen Minat & Bakat</option>
                        <option value="Departemen Permodalan">Departemen Permodalan</option>
                        <option value="Departemen Hubungan Luar Universitas">Departemen Hubungan Luar Universitas
                        </option>
                    </select>
                    <label for="alasan1">Alasan Memilih Departemen Tersebut:</label> <span class="text-danger">*</span>
                    <textarea class="form-control" name="alasan1" id="alasan1" rows="5" placeholder="Alasan" required></textarea>
                </div>
                <div class="form-group">
                    <label for="dept2">Pilihan Departemen 2:</label> <span class="text-danger">*</span>
                    <select name="dept2" id="dept2" class="form-select" required>
                        <option selected disabled>Pilihan Departemen</option>
                        <option value="Departemen Sekretariat">Departemen Sekretariat</option>
                        <option value="Departemen Keuangan, Sarana, dan Prasarana">Departemen Keuangan, Sarana, dan
                            Prasarana</option>
                        <option value="Departemen Informasi & Komunikasi">Departemen Informasi & Komunikasi</option>
                        <option value="Departemen Pengabdian Masyarakat">Departemen Pengabdian Masyarakat</option>
                        <option value="Departemen Keilmuan & Pengembangan">Departemen Keilmuan & Pengembangan
                        </option>
                        <option value="Departemen Sosial, Politik, dan Hukum">Departemen Sosial, Politik, dan Hukum
                        </option>
                        <option value="Departemen Pengembangan Sumber Daya Organisasi">Departemen Pengembangan
                            Sumber Daya Organisasi</option>
                        <option value="Departemen Minat & Bakat">Departemen Minat & Bakat</option>
                        <option value="Departemen Permodalan">Departemen Permodalan</option>
                        <option value="Departemen Hubungan Luar Universitas">Departemen Hubungan Luar Universitas
                        </option>
                    </select>
                    <label for="alasan2">Alasan Memilih Departemen Tersebut:</label> <span class="text-danger">*</span>
                    <textarea class="form-control" name="alasan2" id="alasan2" rows="5" placeholder="Alasan" required></textarea>
                </div>
                <div class="form-group">
                    <label for="nilai">Transkrip Nilai:</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" required name="nilai" id="nilai" placeholder="Link Transkrip Nilai">
                    <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                </div>
                <div class="form-group">
                    <label for="cv">Curriculum Vitae:</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" required name="cv" id="cv" placeholder="Link CV">
                    <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                </div>
                <div class="form-group">
                    <label for="rekomKetua">Surat Rekomendasi Ketua Organisasi:</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" required name="rekomKetua" id="rekomKetua" placeholder="Link Surat Rekomendasi">
                    <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                </div>
                <div class="form-group">
                    <label for="osjur">Sertifikat Lulus Ospek Jurusan:</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" required name="osjur" id="osjur" placeholder="Link Sertifikat Ospek Jurusan">
                    <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                </div>
                <div class="form-group">
                    <label for="wiratha">Sertifikat/Surat Pernyataan Lulus Wiratha Fest:</label> <span class="text-danger">*</span>
                    <input class="form-control" type="text" required name="wiratha" id="wiratha" placeholder="Link Sertifikat Wiratha">
                    <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                </div>
                <div class="form-group">
                    <label for="porto">Portofolio (opsional):</label>
                    <input class="form-control" type="text" name="porto" id="porto" placeholder="Link Portofolio">
                    <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                </div>
                <div class="mt-3">
                    <label>Contact Person: Matthew Christopher</label>
                    <div>
                        <a href="">Klik untuk chat</a>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="nrpExistsModal" tabindex="-1" aria-labelledby="nrpExistsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nrpExistsModalLabel">Pendaftaran Gagal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Kamu sudah mendafatar sebelumnya!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Pendaftaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin mendaftar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmRegistrationBtn">Daftar</button>
            </div>
        </div>
    </div>
</div>

@endsection