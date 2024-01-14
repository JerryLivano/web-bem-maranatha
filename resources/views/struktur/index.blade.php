@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/struktur.css') }}">
    <section id="struktur">
        <img src="{{ asset('img/foto-struktur.png') }}" id="struktur-img">
    </section>

    <section id="bagan">
        <div class="container p-5 text-center">
            <img src="{{ asset('img/bagan.png') }}" id="bagan-img">
        </div>
    </section>

    <section id="bagan" class="bg-primary">
        <div class="container p-5 text-center">
            <img src="{{ asset('img/bph.png') }}" id="bagan-img">
        </div>
    </section>

    <section id="keanggotaan">
        <div class="container p-5 text-center">
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Badan Pengurus <span style="color: #ffc633;"> Harian
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($bphs as $bph)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($bphs) }}" data-aos="zoom-in"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $bph->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $bph->faculty->name }}
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Keuangan,
                    Sarana, dan
                    Prasarana </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($ksps as $ksp)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($ksps) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $ksp->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $ksp->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Kesekretariatan
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($sekres as $sekre)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($sekres) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $sekre->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $sekre->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Informasi &
                    Komunikasi
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($iks as $ik)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($iks) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $ik->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $ik->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Keilmuan &
                    Pengembangan
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($kps as $kp)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($kps) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $kp->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $kp->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Pengabdian
                    Masyarakat
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($pms as $pm)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($pms) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $pm->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $pm->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Sosial,
                    Politik,
                    dan Hukum
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($sphs as $sph)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($sphs) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $sph->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $sph->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Pengembangan
                    Sumber Daya Organisasi
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($psdos as $psdo)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($psdos) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $psdo->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $psdo->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Minat & Bakat
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($mbs as $mb)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($mbs) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $mb->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $mb->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Permodalan
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($ps as $p)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($ps) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $p->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $p->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="h1 fw-bold mt-5" style="color: #2B6EB5;"> Departemen <span style="color: #ffc633;"> Hubungan Luar
                    Universitas
                </span>
            </div>
            <div class="row justify-content-center">
                @foreach ($hlus as $hlu)
                    <div class="card m-2 p-3 col-md-{{ 12 / count($hlus) }}"
                        style="max-width: 18rem; border: none; background: linear-gradient(to bottom, #007bff, #0056b3);">
                        <img src="img/no_profile.png" class="card-img-top" alt="Card Image"
                            style="border-radius: 15px 15px 0 0;">
                        <div class="card-body m-1">
                            <h5 class="card-title fs-5" style="color: #ffffff;">{{ $hlu->name }}</h5>
                            <h5 class="card-title fs-6 lead" style="color: #c0c0c0;">{{ $hlu->faculty->name }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>
@endsection
