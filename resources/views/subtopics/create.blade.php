<x-app-layout>
    <section class="content-header">
        <h1>
            Create Subtopic
            <small>Add a new subtopic</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('subtopics.index') }}">Subtopics</a></li>
            <li class="active">Create Subtopic</li>
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
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Subtopic</h3>
                    </div>
                    <!-- /.box-header -->

                    <form action="{{ route('subtopics.store') }}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Subtopic Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Subtopic Name" required>
                            </div>

                            <div class="form-group">
                                <label for="topic_id">Select Topic</label>
                                <select name="topic_id" id="topic_id" class="form-control" required>
                                    <option value="" disabled selected>Select a Topic</option>
                                    @foreach($topics as $topic)
                                        <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <textarea class="textarea" placeholder="Description" name="description" id="editor"
                                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Create Subtopic</button>
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
