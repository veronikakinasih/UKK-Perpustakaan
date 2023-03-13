@extends('admin-lte/app')
@section('title', 'Dashboard')
@section('active-dashboard', 'active')


@section('content')
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info" style="background: linear-gradient(to right, #B637FB, #14E17B );">
              <div class="inner" >
                <h3>{{$count_buku}}</h3>

                <p>Buku</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success" style="background: linear-gradient(to right, #23A109, #FFCF46 );">
              <div class="inner">
                <h3>{{$count_user}}</h3>

                <p>Peminjam</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success" style="background: linear-gradient(to right, #D80000, #F1E200 );">
              <div class="inner">
                <h3>{{$count_rak}}</h3>

                <p> Rak</p>
              </div>
              <div class="icon">
                 <i class="fas fa-list"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger" style="background: linear-gradient(to right, #9A0088, #23F8FF );">
              <div class="inner">
                <h3>{{$count_kategori}}</h3>

                <p> Kategori</p>
              </div>
              <div class="icon">
                <i class="far fa-bookmark"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
        <!-- <div class="row my-4">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                 <canvas id="myChart" height="125"></canvas>
              </div>
            </div>
          </div>
        </div> -->

        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>Buku Terbaru</h5>
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($buku as $item)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->created_at->diffForHumans()}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>User Terbaru</h5>
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $item)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->created_at->diffForHumans()}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

         
@endsection

<!-- @section('script')
    @include('admin-lte/script/chart')
@endsection

@section('chart-script')
    <livewire:petugas.chart-script></livewire:petugas.chart-script>
@endsection -->