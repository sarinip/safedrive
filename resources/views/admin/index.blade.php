@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome SafeDrive</h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card ">
            <div class="card-people mt-auto">
                <img src="{{ asset('images/dashboard/download2.png') }}" alt="people">
                <div class="weather-info">
                    <div class="d-flex">
                        <div>
                            <!-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>-->
                        </div>
                        <div class="ml-2">
                            <!-- <h4 class="location font-weight-normal">Bangalore</h4> -->
                            <!-- <h6 class="font-weight-normal">India</h6> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Next Class</p>
                        <p class="fs-30 mb-2">2nd Jan 2023</p>
                        <!-- <p>10.00% (30 days)</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Last Payment</p>
                        <p class="fs-30 mb-2">LKR 10,000</p>
                        <p>2 Jan 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Next Exam</p>
                        <p class="fs-30 mb-2">23 Feb 2023</p>
                        <!-- <p>2.00% (30 days)</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Next Payment</p>
                        <p class="fs-30 mb-2">LKR 15,000</p>
                        <p>On or before 20 Feb 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    <canvas id="paymentchart" style="width:100%;max-width:700px"></canvas>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <canvas id="studentchart" style="width:100%;max-width:700px"></canvas>
            </div>
        </div>
    </div>

    <script>
        var xValues = ["Jan", "Feb", "Mar", "April", "May","June", "July", "Aug", "Sep", "October","Nov","Dec"];
        var yValues = {!! $studentdata !!};
        var paymentValues = {!! $paymentdata !!};
        var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1ee145",
            "#b91c49",
            "#00aba9",
            "#2b5797",
            "#e8a398",
            "#1e7142",
            "#b91d98",
            "#00aba5",
            "#2b579d",
            "#e8c3bc",
            "#1e7145"
        ];


        new Chart($("#studentchart"), {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Student Registration Report"
                }
            }
        });

        new Chart($("#paymentchart"), {
            // type: "pie",
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: paymentValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "Student Registration Report"
                }
            }
        });
    </script>


    @endsection
