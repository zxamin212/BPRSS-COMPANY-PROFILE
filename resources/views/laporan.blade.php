<x-layout>
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <h1>Laporan Tahunan</h1>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Laporan</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <article class="article">
                            <h2 class="title">Daftar Laporan Tahunan</h2>
                            
                            <!-- List Laporan -->
                            <div class="list-group mt-4">
                            
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-1">Laporan Tahunan</h5>
                                        <a class="btn btn-sm btn-primary" href="{{ asset('assets/document/Laporan-Tahunan-BprSahabatSejati-2024.pdf') }}" download>
                                            Download PDF
                                        </a>
                                    </div>
                                    <small class="text-muted">Diterbitkan:  Desember 2024</small>
                                </div>
                                
                                <!-- Laporan 2 (Contoh dengan single file) -->
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-1">Laporan RKAB</h5>
                                        <a class="btn btn-sm btn-primary" href="{{ asset('assets/document/RKAB-BprSahabatSejati-2024.pdf') }}" download>
                                            Download PDF
                                        </a>
                                    </div>
                                    <small class="text-muted">Diterbitkan:  Desember 2024</small>
                                </div>
                                <!-- Laporan 3 (Contoh dengan single file) -->
                                <div class="list-group-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-1">Laporan Publikasi</h5>
                                        <a class="btn btn-sm btn-primary" href="{{ asset('assets/document/Laporan-publikasi-bprsahabatsejati.pdf') }}" download>
                                            Download PDF
                                        </a>
                                    </div>
                                    <small class="text-muted">Diterbitkan:  Maret 2025</small>
                                </div>
                                
                                
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-layout>

<!-- Pastikan Bootstrap JS sudah terload -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>