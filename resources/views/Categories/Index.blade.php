 @extends('layouts.app')

 @section('title', 'Categories')

 @section('content')

 <div class="card">
     <div class="card-header border-bottom">
         <div class="d-flex justify-content-between">
             <h5 class="card-title">Categories</h5>
             <button type="button" class="btn btn-primary" id="add_category">
                 <i class="bx bx-plus me-0 me-sm-1"></i> Add New Category
             </button>
         </div>
     </div>
     <div class="card-datatable table-responsive">
         <table class="datatables table border-top" id="category_table">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Created At</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>

             </tbody>
         </table>
     </div>
 </div>

 <div class="modal fade" id="categoryModal" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
         <div class="modal-content p-3 p-md-5">
             <div class="modal-body">
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 <div class="mb-2">
                     <h3 class="mb-0">Add Category</h3>
                 </div>
                 <form id="categoryForm">
                     @csrf <!-- Add Laravel CSRF token -->
                     <input type="hidden" name="id" id="recordId" value="">

                     <div>
                         <label for="categoryName" class="form-label">Name</label>
                         <input type="text" class="form-control" id="categoryName" name="name" value="" placeholder="Category Name">
                         <p class="error"></p>
                     </div>

                     <div class="col-12 text-end mt-4">
                         <button type="submit" class="btn btn-primary">Save</button>
                     </div>
                 </form>

             </div>
         </div>
     </div>
 </div>
 @endsection

 @push('scripts')
 <script>
     $(function() {
         var categoryTable = $('#category_table').DataTable({
             processing: true,
             serverSide: true,
             ajax: "{{ route('admin.dt-categories') }}",
             columns: [{
                     data: 'DT_RowIndex',
                     name: 'id',
                 }, {
                     data: 'name',
                     name: 'name'
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

         //  open new modal
         $('body').on('click', '#add_category', function() {
             $('.error').text('');
             $('#recordId').val('')
             $('#categoryForm')[0].reset();
             $('#categoryModal').modal('show');
         })

         //  edit category

         $('#category_table').on('click', '#edit_category', function() {
             var rowData = categoryTable.row($(this).closest('tr')).data();

             // Populate the modal form with data
             $('#categoryName').val(rowData.name);
             $('#recordId').val(rowData.id)
             // Populate other form fields as needed
             $('.error').text('');
             // Show the modal
             $('#categoryModal').modal('show');
         });

         //  submit category functionalty
         $('#categoryForm').submit(function(event) {
             event.preventDefault();
             var recordId = $('#recordId').val();
             var formData = new FormData(this);
             if (recordId) {
                 formData.append('_method', 'PUT');
                 updateCategory(formData, categoryTable, recordId)
             } else {
                 addCategory(formData, categoryTable);
             }
         });

         //  delte category
         $('#category_table').on('click', '#delete_category', function() {
             var rowData = categoryTable.row($(this).closest('tr')).data();
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
                         url: '/admin/categories/' + id,
                         success: function(response) {
                             Swal.fire({
                                 icon: 'success',
                                 title: 'Catgory deleted successfully!',
                                 showConfirmButton: false,
                                 timer: 1500
                             })
                             $('#category_table').DataTable().ajax.reload();
                         },
                         error: function(error) {
                             // Handle errors, if any
                             console.error('Error deleting category:', error);
                         }
                     });
                 }
             })
         });
     });

     function addCategory(data, categoryTable) {
         $.ajax({
             type: 'POST',
             url: "{{ route('admin.categories.store') }}", // Replace with your add category route
             data: data,
             processData: false,
             contentType: false,
             success: function(response) {
                 // Handle the success response, if needed
                 $('#categoryModal').modal('hide');
                 $('#categoryForm')[0].reset();
                 Swal.fire({
                     icon: 'success',
                     title: 'Catgory created successfully!',
                     showConfirmButton: false,
                     timer: 1500
                 })
                 // Reload the DataTable to display the updated data
                 categoryTable.ajax.reload();
             },
             error: function(error) {
                 if (error.responseJSON.message) {
                     $('.error').text(error.responseJSON.message);
                     $('.error').css('color', 'red');
                 }
             }
         });
     }

     function updateCategory(data, categoryTable, recordId) {
         $.ajax({
             type: 'POST',
             url: '/admin/categories/' + recordId,
             data: data,
             processData: false,
             contentType: false,
             success: function(response) {
                 // Handle the success response, if needed
                 $('#categoryModal').modal('hide');
                 $('#categoryForm')[0].reset();
                 Swal.fire({
                     icon: 'success',
                     title: 'Category updated successfully!',
                     showConfirmButton: false,
                     timer: 1500
                 })
                 // Reload the DataTable to display the updated data
                 categoryTable.ajax.reload();
             },
             error: function(error) {
                 if (error.responseJSON.message) {
                     $('.error').text(error.responseJSON.message);
                     $('.error').css('color', 'red');
                 }
             }
         });
     }
 </script>
 @endpush