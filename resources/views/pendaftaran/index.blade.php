@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pendaftaran.css') }}">
    <div class="container d-flex justify-content-center my-4">
        <div class="card">
            <h3 class="card-header">Form Pendaftaran Kepengurusan BEM</h3>
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="/recruitment">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap:</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Input Nama"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nrp">NRP:</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Input NRP"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email Aktif:</label> <span class="text-danger">*</span>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="johndoe@example.com" required>
                        <small id="emailHelp" class="form-text text-muted">Untuk informasi penerimaan</small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="telephone">Nomor Telepon:</label> <span class="text-danger">*</span>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                            </div>
                            <input type="text" class="form-control" name="telephone" id="telephone"
                                placeholder="Input Nomor Telepon" minlength="10" maxlength="15">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="gender">Gender:</label> <span class="text-danger">*</span>
                        <select name="gender" id="gender" class="form-select" required>
                            <option selected disabled>Pilihan gender</option>
                            <option value="Wanita">Wanita</option>
                            <option value="Pria">Pria</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="start">Enter your birthday:</label> <span class="text-danger">*</span><br>
                        <input type="date" name="birthdate" id="birthdate" />
                    </div>
                    <div class="form-group mt-3">
                        <label for="faculty_id">Fakultas:</label> <span class="text-danger">*</span>
                        <select name="faculty_id" id="faculty_id" class="form-select" required>
                            <option selected disabled>Pilihan Fakultas</option>
                            @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="angkatan">Angkatan:</label> <span class="text-danger">*</span>
                        <select name="angkatan" id="angkatan" class="form-select" required>
                            <option selected disabled>Pilihan Angkatan</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="department_id">Pilihan Departemen 1:</label> <span class="text-danger">*</span>
                        <select name="department_id" id="department_id" class="form-select" required>
                            <option selected disabled>Pilihan Departemen</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-2">
                            <label for="alasan">Alasan Memilih Departemen Tersebut:</label> <span
                                class="text-danger">*</span>
                            <textarea class="form-control" name="alasan" id="alasan" rows="5" placeholder="Alasan" required></textarea>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="department_id2">Pilihan Departemen 2:</label> <span class="text-danger">*</span>
                        <select name="department_id2" id="department_id2" class="form-select" required>
                            <option selected disabled>Pilihan Departemen</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                        <div class="mt-2">
                            <label for="alasan2">Alasan Memilih Departemen Tersebut:</label> <span
                                class="text-danger">*</span>
                            <textarea class="form-control" name="alasan2" id="alasan2" rows="5" placeholder="Alasan" required></textarea>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="transkrip">Transkrip Nilai:</label> <span class="text-danger">*</span>
                        <input class="form-control" type="file" accept=".pdf" required name="transkrip"
                            id="transkrip" placeholder="Link Transkrip Nilai">
                        <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="cv">Curriculum Vitae:</label> <span class="text-danger">*</span>
                        <input class="form-control" type="file" accept=".pdf" required name="cv"
                            id="cv" placeholder="Link CV">
                        <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="rekomKetua">Surat Rekomendasi Ketua Organisasi:</label> <span
                            class="text-danger">*</span>
                        <input class="form-control" type="file" accept=".pdf" required name="rekomKetua"
                            id="rekomKetua" placeholder="Link Surat Rekomendasi">
                        <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="osjur">Sertifikat Lulus Ospek Jurusan:</label> <span class="text-danger">*</span>
                        <input class="form-control" type="file" accept=".pdf" required name="osjur"
                            id="osjur" placeholder="Link Sertifikat Ospek Jurusan">
                        <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="wiratha">Sertifikat/Surat Pernyataan Lulus Wiratha Fest:</label> <span
                            class="text-danger">*</span>
                        <input class="form-control" type="file" accept=".pdf" required name="wiratha"
                            id="wiratha" placeholder="Link Sertifikat Wiratha">
                        <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="porto">Portofolio (opsional):</label>
                        <input class="form-control" type="file" accept=".pdf" name="porto" id="porto"
                            placeholder="Link Portofolio">
                        <small id="fileHelp" class="form-text text-muted">Kirim dalam link google drive</small>
                    </div>
                    <div class="button mt-4 d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nrpExistsModal" tabindex="-1" aria-labelledby="nrpExistsModalLabel"
        aria-hidden="true">
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

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
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
