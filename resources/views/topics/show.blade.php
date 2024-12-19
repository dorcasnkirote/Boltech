<x-app-layout>
    <section class="content-header">
        <h1>
            View Topic
            <small>Details of the topic</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('topics.index') }}"><i class="fa fa-list"></i> Topics</a></li>
            <li class="active">View Topic</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Topic Details Card -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Topic Details</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Topic Name</label>
                            <p class="form-control-static">{{ $topic->name }}</p>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <p class="form-control-static">{!! $topic->description !!}</p>
                        </div>

                        <div class="form-group">
                            <label for="created_by">Created By</label>
                            <p class="form-control-static">{{ $topic->creator->name }}</p>
                        </div>

                        <div class="form-group">
                            <label for="created_at">Created At</label>
                            <p class="form-control-static">{{ $topic->created_at->format('d M, Y h:i A') }}</p>
                        </div>

                        <div class="form-group">
                            <label for="updated_by">Updated By</label>
                            <p class="form-control-static">{{ $topic->creator->name ?? 'N/A' }}</p>
                        </div>

                        <div class="form-group">
                            <label for="updated_at">Updated At</label>
                            <p class="form-control-static">{{ $topic->updated_at ? $topic->updated_at->format('d M, Y h:i A') : 'N/A' }}</p>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{ route('topics.index') }}" class="btn btn-primary">Back to Topics</a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</x-app-layout>
