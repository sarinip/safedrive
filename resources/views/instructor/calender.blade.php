@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <p class="card-title">Calender</p>
                    <div id="calendar-container">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                let calendarEl = document.getElementById('calendar');
                let calendar = new FullCalendar.Calendar(calendarEl, {
                    height: '768px',
                    locale: 'en',
                    aspectRatio: 1.8,
                    editable: true, // enable draggable events
                    now: new Date(),
                    droppable: false,
                    scrollTime: '08:00', // undo default 6am scrollTime
                    headerToolbar: {
                        left: 'prev,next',
                        center: 'title',
                        right: 'timeGridWeek,dayGridMonth,listWeek'
                    },
                    initialView: 'timeGridWeek',
                    expandRows: true,
                    events: {!! $schedules !!},
                    eventRender: function(event, element) {
                        element.find('.fc-event-title.fc-sticky').html("<br/><div class='badge badge-warning'>" + event.description+"</div>");
                    }
                });

                calendar.render();
            });
        </script>
@endsection
