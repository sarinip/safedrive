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
            var xValues = ["Jan", "Feb", "Mar", "April", "May", "June", "July", "Aug", "Sep", "October", "Nov", "Dec"];
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
