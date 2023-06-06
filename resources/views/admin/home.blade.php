@extends('admin.template.default')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row text-capitalize">
            <div class="col-lg-3 col-5">
                <!-- small box -->
                <div class="small-box bg-info bg-gradient">
                    <div class="inner">
                        <h3>{{ $dipinjam }}</h3>
                        <p>buku masih dipinjam</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-arrow-up-a"></i>
                    </div>
                    <a href="{{ route('admin.buku.masih_dipinjam') }}" class="small-box-footer">more info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success bg-gradient">
                    <div class="inner">
                        <h3>{{ $user }}</h3>
                        <p>jumlah pengguna</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ route('admin.user.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info bg-gradient">
                    <div class="inner">
                        <h3>{{ $buku }}</h3>
                        <p>jumlah buku</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-book"></i>
                    </div>
                    <a href="{{ route('admin.book.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <section class="col-lg-12 connectedSortable ui-sortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Grafik Peminjaman Buku Berdasarkan Kategori</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                            class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="myChart" style="width: 300px;"></canvas>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
@endsection()

@push('scripts')
    <script src="{{ asset('js/chart/Chart.bundle.min.js') }}"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    foreach ($categories as $category) {
                        echo '"' . $category->category_name . '",';
                    }
                    ?>
                ],
                datasets: [{
                    label: 'Jumlah Buku',
                    data: [
                        <?php
                        $count = count($categories);
                        for ($i = 1; $i <= $count; ) {
                            echo $grafik->where('category_id', '=', $i++)->count() . ', ';
                        }
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],

                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
@endpush
