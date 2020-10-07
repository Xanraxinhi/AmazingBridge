@extends('backend.layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
@endpush

@section('content')
    <div class="row">
        <div class="col-3 col-m-6 col-sm-6">
            <div class="counter bg-primary">
                <p>
                    <i class="fas fa-tasks"></i>
                </p>
                <h3>100+</h3>
                <p>To do</p>
            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="counter bg-warning">
                <p>
                    <i class="fas fa-spinner"></i>
                </p>
                <h3>100+</h3>
                <p>In progress</p>
            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="counter bg-success">
                <p>
                    <i class="fas fa-check-circle"></i>
                </p>
                <h3>100+</h3>
                <p>Completed</p>
            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="counter bg-danger">
                <p>
                    <i class="fas fa-bug"></i>
                </p>
                <h3>100+</h3>
                <p>Issues</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8 col-m-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Table
                    </h3>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="card-content">
                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Project</th>
                            <th>Manager</th>
                            <th>Status</th>
                            <th>Due date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>React</td>
                            <td>Tran Anh Tuat</td>
                            <td>
										<span class="dot">
											<i class="bg-success"></i>
											Completed
										</span>
                            </td>
                            <td>17/07/2020</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Vue</td>
                            <td>Bui Nhu Sang</td>
                            <td>
										<span class="dot">
											<i class="bg-warning"></i>
											In progress
										</span>
                            </td>
                            <td>18/07/2020</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Laravel</td>
                            <td>Phan Nhat Truong</td>
                            <td>
										<span class="dot">
											<i class="bg-warning"></i>
											In progress
										</span>
                            </td>
                            <td>17/07/2020</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Django</td>
                            <td>Le Anh Tuan</td>
                            <td>
										<span class="dot">
											<i class="bg-danger"></i>
											Delayed
										</span>
                            </td>
                            <td>07/07/2020</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>MEAN</td>
                            <td>John Evan</td>
                            <td>
										<span class="dot">
											<i class="bg-primary"></i>
											Pending
										</span>
                            </td>
                            <td>20/08/2020</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>MERN</td>
                            <td>Robert</td>
                            <td>
										<span class="dot">
											<i class="bg-primary"></i>
											Pending
										</span>
                            </td>
                            <td>20/08/2020</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4 col-m-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Progress bar
                    </h3>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="card-content">
                    <div class="progress-wrapper">
                        <p>
                            Less than 1 hour
                            <span class="float-right">50%</span>
                        </p>
                        <div class="progress">
                            <div class="bg-success" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <p>
                            1 - 3 hours
                            <span class="float-right">60%</span>
                        </p>
                        <div class="progress">
                            <div class="bg-primary" style="width:60%"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <p>
                            More than 3 hours
                            <span class="float-right">40%</span>
                        </p>
                        <div class="progress">
                            <div class="bg-warning" style="width:40%"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <p>
                            More than 6 hours
                            <span class="float-right">20%</span>
                        </p>
                        <div class="progress">
                            <div class="bg-danger" style="width:20%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-m-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Chartjs
                    </h3>
                </div>
                <div class="card-content">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>

        const successColor = '#6ab04c'
        const dangerColor = '#eb4d4b'
        var ctx = document.getElementById('myChart')
        ctx.height = 500
        ctx.width = 500
        var data = {
            labels: ['January', 'February', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                fill: false,
                label: 'Completed',
                borderColor: successColor,
                data: [120, 115, 130, 100, 123, 88, 99, 66, 120, 52, 59],
                borderWidth: 2,
                lineTension: 0,
            }, {
                fill: false,
                label: 'Issues',
                borderColor: dangerColor,
                data: [66, 44, 12, 48, 99, 56, 78, 23, 100, 22, 47],
                borderWidth: 2,
                lineTension: 0,
            }]
        }

        var lineChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                maintainAspectRatio: false,
                bezierCurve: false,
            }
        })
    </script>
@endpush
