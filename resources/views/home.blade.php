@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
    <div class="container mt-5">

        <!-- Tombol Daftar di bagian kiri atas -->
        <div class="row mb-4 align-items-center">
            <!-- Teks di sebelah kiri -->
            <div class="col-md-8">
                <p class="text-left font-weight-bold" style="font-size: 18px;">
                    Daftarkan terlebih dahulu anak anda
                </p>
                <div class="col-md-4 text-right">
                    <a href="{{ url('/daftar') }}" class="btn btn-success btn-lg" style="background-color: #15123c; border-color: #15123c;">
                        <h5 class="mb-0">+Daftarkan anak saya</h5>
                    </a>
                </div>
            </div>
            <!-- Tombol di sebelah kanan -->
        </div>
        

        <div id="carouselExample" class="carousel slide mb-3" data-bs-ride="carousel">
            <!-- Indicators (Optional) -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                    aria-current="true"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('AdminLTE') }}/dist/img/beach1.jpg" class="d-block w-100" style="height: 500px;"
                        alt="School Image 1">
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('AdminLTE') }}/dist/img/beach2.jpg" class="d-block w-100" style="height: 500px;"
                        alt="School Image 2">
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('AdminLTE') }}/dist/img/beach3.jpg" class="d-block w-100" style="height: 500px;"
                        alt="School Image 3">
                </div>
            </div>

            <!-- Controls (Previous/Next) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container mt-5">
            <h2 class="text-center mb-4">Agenda Sekolah</h2>

            <!-- Tombol Pilih Bulan -->
            <div class="text-center mb-4">
                <div class="btn-group" role="group" aria-label="Pilih Bulan">
                    <button class="btn btn-outline-primary" onclick="changeMonth('january')">Januari</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('february')">Februari</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('march')">Maret</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('april')">April</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('may')">Mei</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('june')">Juni</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('july')">Juli</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('august')">Agustus</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('september')">September</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('october')">Oktober</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('november')">November</button>
                    <button class="btn btn-outline-primary" onclick="changeMonth('december')">Desember</button>
                    <!-- Tambahkan tombol hingga Desember -->
                </div>
            </div>

            <!-- Kalender Bulanan -->
            <div id="calendar-container" class="card mb-4">
                <div class="card-header text-center">
                    <h3 id="month-title">Oktober 2024</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-table">
                            <!-- Baris kalender akan berubah sesuai bulan yang dipilih -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Agenda Bulanan -->
            <div id="agenda-container" class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Agenda Bulan Oktober</h3>
                </div>
                <div class="card-body">
                    <ul id="agenda-list">
                        <!-- Agenda akan berubah sesuai bulan yang dipilih -->
                        <li><strong>10 Oktober:</strong> Workshop Pendidikan Karakter</li>
                        <li><strong>15 Oktober:</strong> Lomba Futsal Antar Kelas</li>
                        <li><strong>21 Oktober:</strong> Penerimaan Raport Tengah Semester</li>
                        <li><strong>28 Oktober:</strong> Upacara Hari Sumpah Pemuda</li>
                    </ul>
                </div>
            </div>
        </div>

        <script>
            // Data agenda untuk setiap bulan
            const agendas = {
                january: [{
                        date: "5 Januari",
                        event: "Penerimaan Siswa Baru"
                    },
                    {
                        date: "20 Januari",
                        event: "Rapat Guru"
                    }
                ],
                february: [{
                        date: "10 Februari",
                        event: "Lomba Cerdas Cermat"
                    },
                    {
                        date: "25 Februari",
                        event: "Hari Kunjungan Orang Tua"
                    }
                ],
                march: [{
                        date: "8 Maret",
                        event: "Festival Budaya Sekolah"
                    },
                    {
                        date: "21 Maret",
                        event: "Pekan Olahraga Sekolah"
                    }
                ],
                april: [{
                        date: "12 April",
                        event: "Kegiatan Hari Bumi"
                    },
                    {
                        date: "25 April",
                        event: "Penilaian Tengah Semester"
                    }
                ],
                may: [{
                        date: "1 Mei",
                        event: "Upacara Hari Buruh"
                    },
                    {
                        date: "15 Mei",
                        event: "Pelatihan Kepemimpinan"
                    }
                ],
                june: [{
                        date: "10 Juni",
                        event: "Libur Akhir Semester"
                    },
                    {
                        date: "21 Juni",
                        event: "Pelatihan Ekstrakurikuler"
                    }
                ],
                july: [{
                        date: "1 Juli",
                        event: "Pendaftaran Ekstrakurikuler"
                    },
                    {
                        date: "17 Juli",
                        event: "Pelatihan Pramuka"
                    }
                ],
                august: [{
                        date: "17 Agustus",
                        event: "Upacara Hari Kemerdekaan"
                    },
                    {
                        date: "25 Agustus",
                        event: "Pentas Seni Sekolah"
                    }
                ],
                september: [{
                        date: "5 September",
                        event: "Pelatihan Kedisiplinan"
                    },
                    {
                        date: "25 September",
                        event: "Kegiatan Minggu Bahasa"
                    }
                ],
                october: [{
                        date: "10 Oktober",
                        event: "Workshop Pendidikan Karakter"
                    },
                    {
                        date: "15 Oktober",
                        event: "Lomba Futsal Antar Kelas"
                    },
                    {
                        date: "21 Oktober",
                        event: "Penerimaan Raport Tengah Semester"
                    },
                    {
                        date: "28 Oktober",
                        event: "Upacara Hari Sumpah Pemuda"
                    }
                ],
                november: [{
                        date: "3 November",
                        event: "Festival Sains dan Teknologi"
                    },
                    {
                        date: "18 November",
                        event: "Lomba Pidato Antar Siswa"
                    }
                ],
                december: [{
                        date: "12 Desember",
                        event: "Kegiatan Bakti Sosial"
                    },
                    {
                        date: "23 Desember",
                        event: "Perayaan Natal Bersama"
                    },
                    {
                        date: "31 Desember",
                        event: "Malam Tahun Baru"
                    }
                ]
            };

            // Fungsi untuk mengubah tampilan bulan
            function changeMonth(month) {
                const monthNames = {
                    january: "Januari",
                    february: "Februari",
                    march: "Maret",
                    april: "April",
                    may: "Mei",
                    june: "Juni",
                    july: "Juli",
                    august: "Agustus",
                    september: "September",
                    october: "Oktober",
                    november: "November",
                    december: "Desember"
                };

                // Ubah judul bulan
                document.getElementById("month-title").innerText = monthNames[month] + " 2024";
                document.querySelector(".card-title").innerText = "Agenda Bulan " + monthNames[month];

                // Ubah agenda bulanan
                const agendaList = document.getElementById("agenda-list");
                agendaList.innerHTML = "";
                agendas[month].forEach((agenda) => {
                    const li = document.createElement("li");
                    li.innerHTML = `<strong>${agenda.date}:</strong> ${agenda.event}`;
                    agendaList.appendChild(li);
                });

                // Ubah tampilan kalender (contoh sederhana)
                const calendarTable = document.getElementById("calendar-table");
                calendarTable.innerHTML = ""; // Kosongkan tabel sebelumnya
                for (let i = 0; i < 5; i++) {
                    const row = document.createElement("tr");
                    for (let j = 0; j < 7; j++) {
                        const cell = document.createElement("td");
                        cell.innerText = j + i * 7 + 1; // Menambahkan angka tanggal sebagai contoh
                        row.appendChild(cell);
                    }
                    calendarTable.appendChild(row);
                }
            }
        </script>


    </div>
@endsection
