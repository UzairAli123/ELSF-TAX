@extends('layouts.app')

@section('title', 'Blogs')

@section('content')

<div class="card">
    <div class="card-header border-bottom">
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Blogs</h5>
            <a href="{{route('admin.blogs.create')}}" type="button" class="btn btn-primary">
                <i class="bx bx-plus me-0 me-sm-1"></i> Add Blogs
            </a>
        </div>
    </div>
    <div class="card-datatable table-responsive">
        <table class="datatables table border-top" id="blogs_table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(function() {
        var blogTable = $('#blogs_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.dt-blogs') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                }, {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'category',
                    name: 'category'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'actions',
                    name: 'actions',
                    orderable: false,
                    searchable: false,
                },
            ]
        });

        //  delte category
        $('#blogs_table').on('click', '#delete_blog', function() {
            var rowData = blogTable.row($(this).closest('tr')).data();
            var id = rowData.id
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    cancelButton: 'swal2-cancel btn btn-label-secondary ms-2',
                    confirmButton: 'swal2-confirm btn btn-primary'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/admin/blogs/' + id,
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Blog deleted successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#blogs_table').DataTable().ajax.reload();
                        },
                        error: function(error) {
                            // Handle errors, if any
                            console.error('Error deleting blog:', error);
                        }
                    });
                }
            })
        });
    });
</script>
@endpush