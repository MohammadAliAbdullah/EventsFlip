<?php require __DIR__ . './Layouts/upLayouts.php' ?>
<!-- Main Contenter -->
<div class="row">
    <div class="col-lg-12">
        <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal">
            <i class="fa fa-plus"></i>
        </button>
        <a href="action.php?export=excel" class="btn btn-success m-1 float-right">
            <i class="fa fa-download"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="bootstrap-data-table-panel">
                <div class="table-responsive" id="tableData">
                    <h3 class="text-center text-success" style="margin-top: 150px;">Loading...</h3>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>


<!-- Add Record  Modal -->
<div class="modal" id="addModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Customer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="formData">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" required="">
                    </div>
                    <div class="form-group">
                        <label for="date">Date of birth:</label>
                        <input type="date" class="form-control" name="dob" placeholder="Enter dob" required="">
                    </div>
                    <hr>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success" id="submit">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Record  Modal -->
<div class="modal" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Customer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form id="EditformData">
                    <input type="hidden" name="id" id="edit-form-id">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="uname" id="name" placeholder="Enter name" required="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="uemail" id="email" placeholder="Enter email" required="">
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="uusername" id="username" placeholder="Enter username" required="">
                    </div>
                    <div class="form-group">
                        <label for="date">Date of birth:</label>
                        <input type="date" class="form-control" name="udob" id="dob" placeholder="Enter dob" required="">
                    </div>
                    <hr>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-primary" id="update">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    $(document).ready(function() {
        showAllCustomer();
        //View Record
        function showAllCustomer() {
            $.ajax({
                url: "../Services/action.php",
                type: "POST",
                data: {
                    action: "view"
                },
                success: function(response) {
                    $("#tableData").html(response);
                    $("table").DataTable({
                        order: [0, 'DESC']
                    });
                }
            });
        }
        //insert ajax request data
        $("#submit").click(function(e) {
            if ($("#formData")[0].checkValidity()) {
                e.preventDefault();
                $.ajax({
                    url: "../Services/action.php",
                    type: "POST",
                    data: $("#formData").serialize() + "&action=insert",
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Customer added successfully',
                        });
                        $("#addModal").modal('hide');
                        $("#formData")[0].reset();
                        showAllCustomer();
                    }
                });
            }
        });
        //Edit Record
        $("body").on("click", ".editBtn", function(e) {
            e.preventDefault();
            var editId = $(this).attr('id');
            $.ajax({
                url: "../Services/action.php",
                type: "POST",
                data: {
                    editId: editId
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    $("#edit-form-id").val(data.id);
                    $("#name").val(data.name);
                    $("#email").val(data.email);
                    $("#username").val(data.username);
                    $("#dob").val(data.dob);
                }
            });
        });
    });
</script>
<?php require __DIR__ . './Layouts/downLayouts.php' ?>