<x-app-layout>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Log Details</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('logs.index') }}" class="btn btn-box-tool"><i class="fa fa-arrow-left"></i></a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th>Action</th>
                    <td>{{ $log->action }}</td>
                </tr>
                <tr>
                    <th>User</th>
                    <td>{{ $log->user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $log->user->email }}</td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>{{ $details['ip'] ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Timestamp</th>
                    <td>{{ \Carbon\Carbon::parse($details['timestamp'] ?? '')->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Detailed Information</th>
                    <td>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Key</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $key => $value)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ is_array($value) ? json_encode($value) : $value }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</x-app-layout>
