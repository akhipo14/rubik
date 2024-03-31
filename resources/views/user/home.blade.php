@extends('user.layouts.index')
@section('content')
    @include('sweetalert::alert')
    <div class="background">
        <div class="dot"></div>
        <div class="dot-2"></div>
        <div class="header batas-kanan-kiri">
            {{-- style="background-image: url('img/background.png') ;"> --}}

            <div class="header-text ">
                <h1>Membantu UMKM Lebih Maju</h1>
                <p>Menyediakan berbagai kebutuhan untuk
                    meningkatkan sumber daya manusia dan
                    memajukan UMKM daerah agar bisa Go International
                </p>
                <a href="/register">Daftar Sekarang</a>
            </div>
            <div class="gambar">
                <div class="cover-gambar">
                    <img src="img/header.jpeg" alt="">
                </div>
            </div>
        </div>

        <div class="sosial-media">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
            <a href=""><i class="fa-regular fa-envelope"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="about-us batas-kanan-kiri atas bawah">
            <div class="gambar">
                <div class="cover-gambar">
                    <img src="{{ asset('img/header.jpeg') }}" alt="">
                </div>
            </div>
            <div class="text">
                <h1>Apa Itu Rubik ?</h1>
                <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri
                    percetakan dan penataan huruf atau typesetting. Lorem Ipsum
                    telah menjadi standar contoh teks sejak tahun 1500an, saat
                    seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan
                    teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. </p>
                <a href="">Lihat lebih banyak</a>
            </div>
        </div>
        <div class="background-2">

            <div class="market batas-kanan-kiri atas bawah">
                <div class="text">
                    <h1 style="    line-height: 1.2; margin-bottom:10px;">Yuk Mampir ke Market UMKM</h1>
                    <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri
                        percetakan dan penataan huruf atau typesetting. Lorem Ipsum
                        telah menjadi standar contoh teks sejak tahun 1500an, saat
                        seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan
                        teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. </p>
                    <div class="text tombol-utama">
                        <a href="/market">Lihat kategori produk lainnya</a>
                    </div>
                </div>
                <div class="pembungkus">
                    <a href="" class="kotak">
                        <img src="img/makanan.jpg" alt="">
                        <p>Makanan</p>
                    </a>

                    <a href="" class="kotak">
                        <img src="img/sabun.jpg" alt="">
                        <p>Pembersih Badan</p>
                    </a>
                    <a href="" class="kotak">
                        <img src="img/busana.jpg" alt="">
                        <p>Busana</p>
                    </a>
                    <a href="" class="kotak">
                        <img src="img/jasa.jpg" alt="">
                        <p>Kirim Barang</p>
                    </a>
                    <a href="" class="kotak">
                        <img src="img/kerajinan.jpg" alt="">
                        <p>Kerajinan Tangan</p>
                    </a>
                    <a href="" class="kotak">
                        <img src="img/tanaman.jpg" alt="">
                        <p>Tanaman</p>
                    </a>
                </div>
                <div class="text tombol-tambahan">
                    <a href="/market">Lihat kategori produk lainnya</a>
                </div>
            </div>

            <div class="produk batas-kanan-kiri">
                <div class="text">
                    <h1>Produk UMKM di Rubik</h1>
                </div>
                <hr class="batas-atas-bawah" style="border:1px solid rgba(167, 166, 166, 0.219);">
                {{-- <div class="pembungkus-2 ">
                    @foreach ($produks as $item)
                        <div class="kotak">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="">
                            <div class="text-kotak">
                   s             <h2>{{ Str::limit($item->nama_produk, 23, '...') }}</h2>
                                <p>{{ strip_tags(Str::limit($item->deskripsi_produk, 45, '...')) }}</p>
                            </div>
                            <a href="/market/detail-produk/{{ $item->id }}">lihat produk detail</a>
                        </div>
                    @endforeach
                </div> --}}
                <div class="teks-dan-slide">
                    <h3>Produk Terbaru</h3>
                    @if (count($produks) >= 5)
                        <div class="slide-buttons">
                            <button id="scrollLeftButton" class="slide-button"><i
                                    class="fa-solid fa-left-long"></i></button>
                            <button id="scrollRightButton" class="slide-button"><i
                                    class="fa-solid fa-right-long"></i></button>
                        </div>
                    @endif
                </div>

                <div class="pembungkus-market  pembungkus-market-satu">
                    @foreach ($produks as $item)
                        <div class="kotak">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="">
                            <div class="text-kotak">
                                <h2>{{ Str::limit($item->nama_produk, 17, '...') }}</h2>
                                <p>{{ strip_tags(Str::limit($item->deskripsi_produk, 50, '...')) }}</p>
                            </div>
                            <a href="/market/detail-produk/{{ $item->id }}">Lihat detail produk</a>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="teks-dan-slide atas-25px">
                    <h3>Produk Makanan</h3>
                    @if (count($produk_kategori1) >= 5)
                        <div class="slide-buttons">
                            <button id="scrollLeftButton3" class="slide-button"><i
                                    class="fa-solid fa-left-long"></i></button>
                            <button id="scrollRightButton3" class="slide-button"><i
                                    class="fa-solid fa-right-long"></i></button>
                        </div>
                    @endif
                </div>
                <div class="pembungkus-market pembungkus-market-dua">
                    @foreach ($produk_kategori1 as $item)
                        <div class="kotak">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="">
                            <div class="text-kotak">
                                <h2>{{ Str::limit($item->nama_produk, 17, '...') }}</h2>
                                <p>{{ strip_tags(Str::limit($item->deskripsi_produk, 50, '...')) }}</p>
                            </div>
                            <a href="/market/detail-produk/{{ $item->id }}">Lihat detail produk</a>
                        </div>
                    @endforeach
                </div>

                <div class="teks-dan-slide atas-25px">
                    <h3>Produk Minuman</h3>
                    @if (count($produk_kategori2) >= 5)
                        <div class="slide-buttons">
                            <button id="scrollLeftButton4" class="slide-button"><i
                                    class="fa-solid fa-left-long"></i></button>
                            <button id="scrollRightButton4" class="slide-button"><i
                                    class="fa-solid fa-right-long"></i></button>
                        </div>
                    @endif
                </div>
                <div class="pembungkus-market pembungkus-market-tiga">
                    @foreach ($produk_kategori2 as $item)
                        <div class="kotak">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="">
                            <div class="text-kotak">
                                <h2>{{ Str::limit($item->nama_produk, 17, '...') }}</h2>
                                <p>{{ strip_tags(Str::limit($item->deskripsi_produk, 50, '...')) }}</p>
                            </div>
                            <a href="/market/detail-produk/{{ $item->id }}">Lihat detail produk</a>
                        </div>
                    @endforeach
                </div>

 --}}
                <div class="text tombol-kanan-2">
                    <a href="/market">Lihat produk lainnya</a>
                </div>
                <div class="text tombol-tengah">
                    <a href="/market">Lihat produk lainnya</a>
                </div>

                <div class="bawah"></div>
            </div>
            <div class="ahli atas bawah batas-kanan-kiri">
                <div class="kelompok">
                    <div class="judul">
                        <h1>Ketemuan dengan ahlinya yuk!</h1>
                    </div>
                    <div class="paragraf">
                        <p>Untuk mempelajari suatu ilmu tentunya kita ingin mendapatkannya
                            dari orang yang sudah ahli dibidangnya. karena itu mari kita coba
                            untuk bertanya tanya tentang ilmu yang ingin kita pelajari dengan
                            bertanya dengan para ahlinya.</p>
                        <div class="text tombol-utama-2">
                            <a href="/mentor">Lihat kategori ahli lainnya</a>
                        </div>
                    </div>
                    <div class="ikon">
                        <div class="aset-ikon">
                            <a href=""><i class="fa-solid fa-pen-nib"></i></a>
                            <p>Desain Grafis</p>
                        </div>
                        <div class="aset-ikon">
                            <a href=""><i class="fa-solid fa-volume-high"></i></a>
                            <p>Public Speaking</p>
                        </div>
                        <div class="aset-ikon">
                            <a href=""><i class="fa-solid fa-comments-dollar"></i></a>
                            <p>Marketing</p>
                        </div>
                        <div class="aset-ikon">
                            <a href=""><i class="fa-solid fa-magnifying-glass-chart"></i></a>
                            <p>Analisa Data</p>
                        </div>
                    </div>

                </div>
                <div class="text tombol-tambahan-2">
                    <a href="/mentor">Lihat Kategori Ahli lainnya</a>
                </div>
                <hr class="batas-atas-bawah" style="border:1px solid rgb(255, 255, 255, .3);">
                {{-- <div class="pembungkus-2">
                @foreach ($mentors as $item)
                    <div class="kotak-2">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="">
                        <h2>{{ $item->KategoriMentor->kategori_mentor }}</h2>
                        <p>{{ $item->nama }}</p>
                        <a href="">Lihat profil</a>
                    </div>
                    @endforeach 
            </div> --}}
                <div class="slide-buttons2">
                    <button id="scrollLeftButton2" class="slide-button2"><i class="fa-solid fa-left-long"></i></button>
                    <button id="scrollRightButton2" class="slide-button2"><i class="fa-solid fa-right-long"></i></button>

                </div>
                <div class="pembungkus-mentor ">
                    @foreach ($mentors as $item)
                        <div class="kotak">
                            <div class="kotak-atas">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                <div class="text-kotak" style="text-align: center">
                                    <h2>{{ $item->KategoriMentor->kategori_mentor }}</h2>
                                    <p>{{ $item->nama }}</p>
                                    {{-- <a href="/market/detail-produk/{{ $item->id }}">Lihat detail produk</a> --}}
                                    <div class="profesi">
                                        <p>{{ $item->pekerjaan }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="kotak-deskripsi">
                                <p>{{ $item->deskripsi }}</p>
                            </div>
                            <div class="medsos-mentor ">

                                <a class="tooltip" href="https://wa.me/{{ $item->whatsapp }}">
                                    <span class="tooltiptext">{{ $item->whatsapp }}</span>
                                    <i class="fa-brands fa-whatsapp"></i>Whatsapp </a>

                                <a class="tooltip" href="mailto:{{ $item->email }}">
                                    <span class="tooltiptext">{{ $item->email }}</span>
                                    <i class="fa-regular fa-envelope"></i>Email </a>
                                <a class="tooltip" href="">
                                    @if ($item->instagram)
                                        <span class="tooltiptext">{{ $item->instagram }}</span>
                                    @endif
                                    <i class="fa-brands fa-instagram"></i>Instagram
                                </a>
                                <a class="tooltip" href="#">
                                    @if ($item->facebook)
                                        <span class="tooltiptext">{{ $item->facebook }}</span>
                                    @endif
                                    <i class="fa-brands fa-facebook"></i>Facebook
                                </a>
                            </div>

                        </div>
                    @endforeach

                </div>

                <div class="text tombol-kanan-2">
                    <a href="/mentor">Lihat ahli lainnya</a>
                </div>

                <div class="text tombol-tengah">
                    <a href="/mentor">Lihat ahli lainnya</a>
                </div>
            </div>

            <div class="artikel batas-kanan-kiri atas bawah">
                <div class="text">
                    <h1>Artikel terbaru</h1>
                </div>
                <div class="pembungkus-2 ">
                    @foreach ($artikels as $item)
                        <div class="kotak">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="">
                            <div class="text-kotak">
                                <h2>{{ Str::limit($item->judul, 19, '...') }}</h2>
                                <p>{{ $item->excerpt }}</p>
                            </div>
                            <a href="">Lihat detail artikel</a>
                        </div>
                    @endforeach


                </div>
                <div class="text" style="float: right; margin-top:50px">
                    <a href="">Lihat artikel lainnya</a>
                </div>
            </div>
            <div class="location">

            </div>

            @include('user.layouts.footer')
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                const scrollStep = 290; // Jarak scroll per langkah (sesuaikan dengan kebutuhan Anda)

                $("#scrollRightButton2").click(function() {
                    $(".pembungkus-mentor").animate({
                        scrollLeft: "+=" + scrollStep
                    }, 500); // Waktu animasi (ms)
                });

                $("#scrollLeftButton2").click(function() {
                    $(".pembungkus-mentor").animate({
                        scrollLeft: "-=" + scrollStep
                    }, 500); // Waktu animasi (ms)
                });
            });

            $(document).ready(function() {
                const scrollStep = 290; // Jarak scroll per langkah (sesuaikan dengan kebutuhan Anda)

                $("#scrollRightButton").click(function() {
                    $(".pembungkus-market-satu").animate({
                        scrollLeft: "+=" + scrollStep
                    }, 500); // Waktu animasi (ms)
                });


                $("#scrollLeftButton").click(function() {
                    $(".pembungkus-market-satu").animate({
                        scrollLeft: "-=" + scrollStep
                    }, 500); // Waktu animasi (ms)
                });
            });

            $(document).ready(function() {
                const scrollStep = 290; // Jarak scroll per langkah (sesuaikan dengan kebutuhan Anda)

                $("#scrollRightButton3").click(function() {
                    $(".pembungkus-market-dua").animate({
                        scrollLeft: "+=" + scrollStep
                    }, 500); // Waktu animasi (ms)
                });


                $("#scrollLeftButton3").click(function() {
                    $(".pembungkus-market-dua").animate({
                        scrollLeft: "-=" + scrollStep
                    }, 500); // Waktu animasi (ms)
                });
            });

            $(document).ready(function() {
                const scrollStep = 290; // Jarak scroll per langkah (sesuaikan dengan kebutuhan Anda)

                $("#scrollRightButton4").click(function() {
                    $(".pembungkus-market-tiga").animate({
                        scrollLeft: "+=" + scrollStep
                    }, 500); // Waktu animasi (ms)
                });


                $("#scrollLeftButton4").click(function() {
                    $(".pembungkus-market-tiga").animate({
                        scrollLeft: "-=" + scrollStep
                    }, 500); // Waktu animasi (ms)
                });
            });
        </script>
    @endsection
