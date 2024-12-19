<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
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
                    <input type="text" id="search" class="form-control" placeholder="Search by name or email..." onkeyup="filterUsers()">
                </div>

                <!-- Filter Field -->
                <!-- Add any additional filter options here -->
            </div>

            <br>

            <div class="table-responsive mt-3">
                <table class="table  table-bordered table-hover no-margin">
                    <thead>
                        <tr class="bg-primary">
                           <th>Name</th>
                            <th>Email</th>
                            <th>Registered At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="user-table-body">
                        @foreach ($users as $user)
                            <tr data-name="{{ $user->name }}" data-email="{{ $user->email }}">

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
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
                    {{-- Display Previous Button --}}
                    @if ($users->currentPage() > 1)
                        <li><a href="{{ $users->previousPageUrl() }}">Previous</a></li>
                    @else
                        <li class="disabled"><span>Previous</span></li>
                    @endif

                    {{-- Display Page Numbers --}}
                    @foreach ($users->links()->elements[0] as $page => $url)
                        @if ($page == $users->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    {{-- Display Next Button --}}
                    @if ($users->hasMorePages())
                        <li><a href="{{ $users->nextPageUrl() }}">Next</a></li>
                    @else
                        <li class="disabled"><span>Next</span></li>
                    @endif
                </ul>
            </div>

        </div>
        <!-- /.box-body -->

        <!-- Box Footer with print and export buttons -->
        <div class="box-footer clearfix">
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-info btn-flat pull-left">Add New User</a>
            <a href="{{ route('users.index') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Users</a>
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

        function filterUsers() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const tableRows = document.querySelectorAll('#user-table-body tr');

            tableRows.forEach(row => {
                const name = row.getAttribute('data-name').toLowerCase();
                const email = row.getAttribute('data-email').toLowerCase();
                const showRow = (name.includes(searchInput) || email.includes(searchInput));

                row.style.display = showRow ? '' : 'none';
            });
        }

        function printTable() {
            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Print</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(document.getElementById('user-table-body').outerHTML);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function exportTable() {
            const table = document.getElementById('user-table-body');
            let rows = Array.from(table.rows);
            let csv = 'Profile Picture,Name,Email,Role,Registered At,Actions\n';

            rows.forEach(row => {
                const rowData = Array.from(row.cells).map(cell => cell.textContent.trim());
                csv += rowData.join(',') + '\n';
            });

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'users.csv';
            a.click();
        }
    </script>
</x-app-layout>
