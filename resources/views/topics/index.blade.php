<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Topics</h3>

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
                    <input type="text" id="search" class="form-control" placeholder="Search by title or creator..." onkeyup="filterTopics()">
                </div>

                <!-- Filter Field -->
            </div>
            <br>

            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover no-margin">
                    <thead>
                        <tr class="bg-primary">
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                        <br>
                    </thead>
                    <tbody id="topic-table-body">
                        @foreach ($topics as $topic)
                            <tr data-creator="{{ $topic->creator->name }}" data-title="{{ $topic->title }}">
                                <td>{{ $topic->name }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($topic->description, 100) !!}</td>
                                <td>{{ $topic->creator->name }}</td>
                                <td>
                                    <a href="{{ route('topics.show', $topic->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('topics.destroy', $topic->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination-wrapper">
                <ul class="pagination">
                    @if ($topics->onFirstPage())
                        <li class="disabled"><span>«</span></li>
                    @else
                        <li><a href="{{ $topics->previousPageUrl() }}">«</a></li>
                    @endif

                    @foreach ($topics->getUrlRange(1, $topics->lastPage()) as $page => $url)
                        <li class="{{ ($topics->currentPage() == $page) ? 'active' : '' }}">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($topics->hasMorePages())
                        <li><a href="{{ $topics->nextPageUrl() }}">»</a></li>
                    @else
                        <li class="disabled"><span>»</span></li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- /.box-body -->

        <!-- Box Footer with print and export buttons -->
        <div class="box-footer clearfix">
        <a href="{{ route('topics.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Add New Topic</a>

            <a href="{{ route('topics.index') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Topics</a>
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

        function filterTopics() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const tableRows = document.querySelectorAll('#topic-table-body tr');

            tableRows.forEach(row => {
                const title = row.getAttribute('data-title').toLowerCase();
                const creator = row.getAttribute('data-creator').toLowerCase();
                const showRow = title.includes(searchInput) || creator.includes(searchInput);
                row.style.display = showRow ? '' : 'none';
            });
        }

        function printTable() {
            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(document.getElementById('topic-table-body').outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function exportTable() {
            const table = document.getElementById('topic-table-body');
            let rows = Array.from(table.rows);
            let csv = 'Title,Description,Created By,Actions\n';

            rows.forEach(row => {
                const rowData = Array.from(row.cells).map(cell => cell.textContent.trim());
                csv += rowData.join(',') + '\n';
            });

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'topics.csv';
            a.click();
        }
    </script>
</x-app-layout>
