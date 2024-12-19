<x-app-layout>
    <section class="content-header">
        <h1>
            Edit Topic
            <small>Update an existing topic</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('topics.index') }}"><i class="fa fa-list"></i> Topics</a></li>
            <li class="active">Edit Topic</li>
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

                <!-- Form Card -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Topic</h3>
                    </div>
                    <!-- /.box-header -->

                    <form action="{{ route('topics.update', $topic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Topic Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $topic->name) }}" placeholder="Enter Topic Name" required>
                            </div>

                            <div>
                                <textarea class="textarea" placeholder="Description" name="description" id="editor"
                                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('description', $topic->description) }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Topic</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>

    <script src="https://cdn.ckeditor.com/4.25.0/standard/ckeditor.js"></script>
    <script>
        // Initialize CKEditor for the content area
        CKEDITOR.replace('editor', {
            filebrowserImageBrowseUrl: '{{ route('ckeditor.image_browser') }}',  // URL to browse image files
            filebrowserUploadUrl: '{{ route('ckeditor.image_upload') }}',       // URL to upload images
            allowedContent: true,  // Allows any content in the editor
            height: 300,  // Optional: Set custom height for CKEditor
        });

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
