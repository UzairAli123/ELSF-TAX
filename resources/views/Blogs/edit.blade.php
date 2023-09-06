@extends('layouts.app')

@section('title', 'Blogs')

@section('content')

<div class="card mb-4">
    <h5 class="card-header">Edit</h5>
    <form class="card-body" id="blogForm">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="multicol-username">Name</label>
                <input type="text" id="name" name="name" value="{{$blog->name}}" class="form-control" placeholder="Enter Blog Title" />
                <p id="name_error"></p>
            </div>
            <div class="col-md-6">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image">
                <p id="image_error"></p>
                <img src="{{asset('storage/'.$blog->image)}}" alt="" width="100px" height="100px">
            </div>
            <div class="col-md-12">
                {{$blog->category_id}}
                <label class="form-label" for="multicol-email">Category</label>
                <select class="form-select" id="category_id" name="category_id">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($blog->category_id==$category->id) selected @endif>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                <p id="category_id_error"></p>
            </div>
            <div class="col-md-12">
                <div class="col-md-12">
                    <label class="form-label" for="multicol-email">Description</label>
                    <div id="editor" name="description">
                        {!! $blog->description !!}
                    </div>
                    <input type="hidden" name="description" id="description" value="">
                </div>
            </div>
        </div>
        <div class="pt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
        </div>
    </form>
</div>

@endsection

@push('scripts')
<script>
    $(function() {
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            ['blockquote', 'code-block'],

            [{
                'header': 1
            }, {
                'header': 2
            }], // custom button values
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            [{
                'script': 'sub'
            }, {
                'script': 'super'
            }], // superscript/subscript
            [{
                'indent': '-1'
            }, {
                'indent': '+1'
            }], // outdent/indent
            [{
                'direction': 'rtl'
            }], // text direction

            [{
                'size': ['small', false, 'large', 'huge']
            }], // custom dropdown
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],

            [{
                'color': []
            }, {
                'background': []
            }], // dropdown with defaults from theme
            [{
                'font': []
            }],
            [{
                'align': []
            }],

            ['clean'] // remove formatting button
        ];
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Compose a blog desc...',
            modules: {
                toolbar: toolbarOptions
            }
        });

        $('#blogForm').on('submit', function(event) {
            event.preventDefault();
            var editorHtml = quill.root.innerHTML;
            $('#description').val(editorHtml);
            let formData = new FormData(this);
            $.ajax({
                type: 'POST', // Change this to 'PUT' if your update route expects a PUT request.
                url: "{{ route('admin.blogs.update', ['blog' => $blog->id]) }}", // Update the route name and parameter.
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    window.location.href = "{{ route('admin.blogs.index') }}";
                    Swal.fire({
                        icon: 'success',
                        title: 'Blog updated successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
                error: function(error) {
                    console.log(error.responseJSON.errors);
                    $.each(error.responseJSON.errors, function(key, value) {
                        $('#' + key + '_error').css('color', 'red');
                        $('#' + key + '_error').text(value[0]); // Assume you have error spans with IDs like 'fieldname_error'
                    });
                }
            });
        });

    });
</script>
@endpush