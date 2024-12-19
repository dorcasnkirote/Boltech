<x-app-layout>
    <section class="content-header">
        <h1>
            Subtopic Details
            <small>View the details of the subtopic</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('subtopics.index') }}">Subtopics</a></li>
            <li class="active">Subtopic Details</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Success Message -->
                @if (session('success'))
                    <div id="success-message" class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Details Card -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Subtopic Details</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Subtopic Name</label>
                            <input type="text" class="form-control" value="{{ $subtopic->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="topic_id">Topic</label>
                            <input type="text" class="form-control" value="{{ $subtopic->topic->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="5" readonly>{{ strip_tags($subtopic->description) }}</textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <a href="{{ route('subtopics.index') }}" class="btn btn-default">Back to Subtopics</a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>

    <script>
        // Auto-hide success message
        setTimeout(() => {
            const message = document.getElementById('success-message');  // Select the success message element
            if (message) {
                message.style.transition = 'opacity 0.5s';  // Smoothly fade out the message
                message.style.opacity = '0';  // Set opacity to 0
                setTimeout(() => message.remove(), 500);  // Remove the message after 0.5 seconds
            }
        }, 4000);  // Set timeout to 4 seconds
    </script>
</x-app-layout>
