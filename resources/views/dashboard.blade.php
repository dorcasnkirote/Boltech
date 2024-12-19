<x-app-layout>
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $topicsCount }}</h3>
                        <p>Total Topics</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $subtopicsCount }}</h3>
                        <p>Total Subtopics</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-folder"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $usersCount }}</h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
        </div>

        <!-- /.row -->
    </section>

    <!-- Include Scripts -->
    @push('scripts')
        <!-- FullCalendar -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">

        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            // Initialize Calendar
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var today = new Date();

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    nowIndicator: true, // Highlights the current time
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: [
                        {
                            title: 'Today',
                            start: today.toISOString().split('T')[0], // Highlight today's date
                            display: 'background',
                            backgroundColor: '#ff9f89'
                        }
                    ]
                });

                calendar.render();
            });

            // Initialize Chart.js Graph
            const ctx = document.getElementById('dashboardGraph').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May'],
                    datasets: [{
                        label: 'User Growth',
                        data: [10, 20, 30, 40, 50],
                        backgroundColor: 'rgba(60, 179, 113, 0.5)',
                        borderColor: 'rgba(60, 179, 113, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endpush
</x-app-layout>
