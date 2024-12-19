<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Logs</h3>
            
        </div>
        <!-- /.box-header -->

        <!-- Success Message -->
        @if (session('success'))
            <div id="success-message" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('success') }}
            </div>
        @endif

        <div class="box-body">
            <div class="row">
                <!-- Search Field -->
                <div class="col-md-4">
                    <input type="text" id="search" class="form-control" placeholder="Search by action, user, or details..." onkeyup="filterLogs()">
                </div>
            </div>

            <br>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover no-margin">
                    <thead>
                        <tr class="bg-primary">
                            <th>Action</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>IP</th>
                            <th>Timestamp</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="log-table-body">
                        @foreach ($logs as $log)
                            <tr data-action="{{ $log->action }}" data-details="{{ $log->details }}">
                                <td>{{ $log->action }}</td>
                                <td>{{ $log->user->name }}</td>
                                <td>{{ $log->user->email }}</td>
                                <td>{{ json_decode($log->details)->ip ?? 'N/A' }}</td>
                                <td>{{ \Carbon\Carbon::parse(json_decode($log->details)->timestamp)->timezone('Africa/Nairobi')->format('d-m-Y H:i:s') }}</td>
                                <td>
    <a href="{{ route('logs.show', $log->id) }}" class="btn btn-sm btn-info">View</a>
</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                <ul class="pagination">
                    @if ($logs->onFirstPage())
                        <li class="disabled"><span>«</span></li>
                    @else
                        <li><a href="{{ $logs->previousPageUrl() }}">«</a></li>
                    @endif

                    @foreach ($logs->getUrlRange(1, $logs->lastPage()) as $page => $url)
                        <li class="{{ ($logs->currentPage() == $page) ? 'active' : '' }}">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($logs->hasMorePages())
                        <li><a href="{{ $logs->nextPageUrl() }}">»</a></li>
                    @else
                        <li class="disabled"><span>»</span></li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- /.box-body -->

        <!-- Box Footer with print and export buttons -->
        <div class="box-footer clearfix">
            <a href="#" class="btn btn-sm btn-default btn-flat pull-right">View All Logs</a>
            <button onclick="printTable()" class="btn btn-sm btn-primary btn-flat pull-right">Print</button>
            <button onclick="exportTable()" class="btn btn-sm btn-success btn-flat pull-right" style="margin-right: 10px;">Export</button>
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->

    <!-- Success message auto-hide script -->
    <script>
        setTimeout(() => {
            const message = document.getElementById('success-message');
            if (message) {
                message.style.transition = 'opacity 0.5s';
                message.style.opacity = '0';
                setTimeout(() => message.remove(), 500);
            }
        }, 4000);

        function filterLogs() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const tableRows = document.querySelectorAll('#log-table-body tr');

            tableRows.forEach(row => {
                const action = row.getAttribute('data-action').toLowerCase();
                const details = row.getAttribute('data-details').toLowerCase();
                const showRow = (action.includes(searchInput) || details.includes(searchInput));

                row.style.display = showRow ? '' : 'none';
            });
        }

        function printTable() {
            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(document.getElementById('log-table-body').outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function exportTable() {
            const table = document.getElementById('log-table-body');
            let rows = Array.from(table.rows);
            let csv = 'Action,Details,User,Email,IP,Timestamp\n';

            rows.forEach(row => {
                const rowData = Array.from(row.cells).map(cell => cell.textContent.trim());
                csv += rowData.join(',') + '\n';
            });

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'logs.csv';
            a.click();
        }

        function viewLogDetails(logId) {
            // Implement logic to view full details of the log
            alert('View log details for ID: ' + logId);
        }
    </script>

    <script>
        function filterLogs() {
    const searchInput = document.getElementById('search').value.toLowerCase();
    const tableRows = document.querySelectorAll('#log-table-body tr');

    tableRows.forEach(row => {
        const actionDetails = JSON.parse(row.getAttribute('data-details')); // Parse the JSON
        const action = actionDetails && actionDetails.action ? actionDetails.action.toLowerCase() : '';
        const showRow = action.includes(searchInput); // Check if search input matches action

        row.style.display = showRow ? '' : 'none';
    });
}

    </script>
</x-app-layout>
