@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12" style="background-color:white;padding:40px;">
       <!-- Dashboard Stats -->
        <div class="dashboard-stats row">
          <div class="dashboard-stat-information">
            <div class="col-md-3">
              <div class="dashboard-stat" style="background: linear-gradient(to bottom, #deb8e6, #9ce9ad);" >
                <div class="information-left">
                  <i class="fa-solid fa-people-carry-box"></i>
                </div>
                <div class="information-right">
                  <h5 style="margin:0">Tổng số sản phẩm hiện có</h5>
                  <p style="margin-top:10px;font-weight:bold;font-size:30px;color: transparent;-webkit-text-stroke: 2px green;letter-spacing: 4px;">{!! $sumProduct !!}</p>
                </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="dashboard-stat" style="background: linear-gradient(to left, #bbe6b8, rgb(233, 156, 210));">
                <div class="information-left">
                  <i class="fa-solid fa-money-check-dollar"></i>
                </div>
                <div class="information-right">
                  <h5 style="margin:0">Tổng số doanh thu</h5>
                  <p style="margin-top:10px;font-weight:bold;font-size:30px;color: transparent;-webkit-text-stroke: 2px green;letter-spacing: 1px;">{!! number_format($revenue, 0, ',', '.') . ' VND' !!}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dashboard-stat" style="background:  linear-gradient(to bottom, #b8dce6, #9ce9ad);">
                <div class="information-left">
                  <i class="fa-solid fa-cart-plus"></i>
                </div>
                <div class="information-right">
                  <h5 style="margin:0">Tổng số đơn hàng mới</h5>
                  <p style="margin-top:10px;font-weight:bold;font-size:30px;color: transparent;-webkit-text-stroke: 2px green;letter-spacing: 4px;">{!! $orderNew !!}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="dashboard-stat" style="background: linear-gradient(to left, #d7cfc1, #d5b9e9);">
                <div class="information-left">
                  <i class="fa-solid fa-user"></i> 
                </div>
                <div class="information-right">
                  <h5 style="margin:0">Tổng số người dùng</h5>
                  <p style="margin-top:10px;font-weight:bold;font-size:30px;color: transparent;-webkit-text-stroke: 2px green;letter-spacing: 4px;">{!! $totalUser !!}</p>
                </div>
              </div>
            </div>
          </div>
  
           <!-- Chart Container -->
           <div class="chart-container row" style="margin-top:50px;">
            <div class="col-md-6 mt-5 " style="border:1px dashed green;border-radius:5px;padding:20px;">
              <canvas id="chartByDay"></canvas>
            </div>

            <div class="col-md-6 mt-5 " style="border:1px dashed green;border-radius:5px;padding:20px;">
              <canvas id="chartByMonth"></canvas>
            </div>

            <div class="col-md-8 mt-5 " style="border:1px dashed green;border-radius:5px;padding:20px;">
              <canvas id="revenueChartByDay"></canvas>
            </div>

            <div class="col-md-4 mt-5 " style="border:1px dashed green;border-radius:5px;padding:20px;" >
              <canvas id="revenueChartByMonth"></canvas>
            </div>

            <div class="col-md-7 mt-5 " style="height:500px;border:1px dashed green;border-radius:5px;padding:20px;">
              <canvas id="orderChart"></canvas>
            </div>

            <div class="col-md-5 mt-5 " style="border:1px dashed green;border-radius:5px;padding:20px;" >
              <canvas id="productChart" width="400" height="200"></canvas>
            </div>
          </div>
        </div>
    </div>
@endsection

@push('custom-script')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    //bán ra theo ngày
    var ctx = document.getElementById('chartByDay').getContext('2d');
    var myChart_ = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! $productsSoldByDay->pluck('date') !!},
            datasets: [{
                label: 'Sản phẩm đã bán theo ngày',
                data: {!! $productsSoldByDay->pluck('total') !!},
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)', 
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
                borderColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)', 
                  'rgba(255, 206, 86, 0.2)', 
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
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

    //bán ra theo tháng
    var ctx = document.getElementById('chartByMonth').getContext('2d');
    var myChart__ = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! $productsSoldByMonth->pluck('month') !!},
            datasets: [{
                label: 'Sản phẩm đã bán theo tháng',
                data: {!! $productsSoldByMonth->pluck('total') !!},
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)', 
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
                borderColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)', 
                  'rgba(255, 206, 86, 0.2)', 
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
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

    // doanh số theo ngày
    var ctx = document.getElementById('revenueChartByDay').getContext('2d');
    var myChart___ = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! $revenueByDay->pluck('date') !!},
            datasets: [{
                label: 'Doanh thu theo ngày',
                data: {!! $revenueByDay->pluck('total') !!},
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)', 
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
                borderColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)', 
                  'rgba(255, 206, 86, 0.2)', 
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
                borderWidth: 7
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

    // doanh số theo tháng
    var ctx = document.getElementById('revenueChartByMonth').getContext('2d');
    var myChart = new Chart(ctx, {
        // type: 'bar',
        type: 'polarArea',
        data: {
            labels: {!! $revenueByMonth->pluck('month') !!},
            datasets: [{
                label: 'Doanh thu theo tháng',
                data: {!! $revenueByMonth->pluck('total') !!},
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)', 
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
                borderColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)', 
                  'rgba(255, 206, 86, 0.2)', 
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
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

    //thống kê trạng thái đơn hàng
    // var labels =dataOrderChart.map(item => item.status);
    // var counts =dataOrderChart.map(item => item.count);
    var ctx = document.getElementById('orderChart').getContext('2d');
    var orderChart_ = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: {!! $dataOrderChart->pluck('status') !!},
            datasets: [{
                label: 'Số lượng',
                data: {!! $dataOrderChart->pluck('count') !!},
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)', 
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
                borderColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)', 
                  'rgba(255, 206, 86, 0.2)', 
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
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

    var ctx = document.getElementById('productChart').getContext('2d');
    var orderChart_ = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Đã bán', 'Tồn kho'],
            datasets: [{
                label: 'Số lượng',
                data: [{!! $soldProducts !!},{!! $stockProducts !!}],
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)', 
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
                borderColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)', 
                  'rgba(255, 206, 86, 0.2)', 
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 182, 200, 0.2)',
                  'rgba(255, 159, 164, 0.2)'
                ],
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
  })
</script>

@endpush
