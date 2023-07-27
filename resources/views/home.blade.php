@extends('layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Visitas Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Visitas <span>| Total</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $total }} </h6>
                                        <span class="text-muted small pt-2 ps-1">visitas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Sales Card -->

                    <!-- User Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Usuarios<span>| Total</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalUsers }}</h6>
                                        <span class="text-muted small pt-2 ps-1">usuarios</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Estudiantes Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Estudiantes <span>| Total</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalEstudiantes }}</h6>
                                        <span class="text-muted small pt-2 ps-1">estudiantes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gráfico de Visitas</h5>

                                <!-- Gráfico de barras simple -->
                                <canvas id="myChart" width="400" height="200"></canvas>

                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                <script>
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: {!! json_encode($slugs) !!},
                                            datasets: [{
                                                label: 'Visitas por página',
                                                data: {!! json_encode($totalVisits) !!},
                                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                borderColor: 'rgba(75, 192, 192, 1)',
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
                                <!-- End Bar Chart -->
                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- Alumnos x Carrera -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Carreras de Interés <span>| Estudiantes</span></h5>
                                <div style="width: 500px;">
                                    <canvas id="pieChart" width="500" height="300"></canvas>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                </div>

                                <script>
                                    var ctx = document.getElementById('pieChart').getContext('2d');
                                    var myPieChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            labels: ['Economia', 'Administracion', 'Comercio', 'Comercial', 'Financiera'],
                                            datasets: [{
                                                data: [
                                                    {!! $carreraEconomia !!},
                                                    {!! $carreraAdministracion !!},
                                                    {!! $carreraComercio !!},
                                                    {!! $carreraComercial !!},
                                                    {!! $carreraFinanciera !!}
                                                ],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            responsive: true
                                        }
                                    });
                                </script>
                            </div>

                        </div>
                    </div><!-- End Carreras -->
                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Colegios Populares <span>| Top 25</span></h5>
                        <div class="activity">
                            @foreach ($estudiantesCole as $colegio)
                            <div class="activity-item d-flex">
                                <div class="activite-label">{{ $colegio->total }}</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    {{ $colegio->colegio }}
                                </div>
                            </div><!-- End activity item-->
                            @endforeach
                        </div>
                    </div>
                </div><!-- End Recent Activity -->
            </div><!-- End Right side columns -->
        </div>
    </section>

    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button type="button" class="btn btn-danger disabled">Visitas</button>
        <button type="button" class="btn btn-warning disabled">{{ $visits }}</button>
    </div>
@endsection
