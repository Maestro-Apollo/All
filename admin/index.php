<?php
session_start();
if (isset($_SESSION['admin'])) {
} else {
    header('location:login.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    <style>
    body {
        font-family: 'Lato', sans-serif;

    }

    table.dataTable {
        border-collapse: collapse !important;
    }

    .navbar-brand {
        width: 7%;
    }

    .bg_color {
        background-color: #fff !important;
    }
    </style>

</head>

<body class="bg-white">

    <section>
        <div class="p-3 bg-white log_section pb-5">
            <div id="updateModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="flag">Approval</label>
                                <select id='flag' class="form-control">
                                    <option value='Yes'>Yes</option>
                                    <option value='No'>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tsa">TSA Number</label>
                                <input type="text" class="form-control" id="tsa" placeholder="Enter TSA Number"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="name">Global Entry</label>
                                <input type="text" class="form-control" id="global" placeholder="Enter Global Entry"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="name">Airline</label>
                                <input type="text" class="form-control" id="airline" placeholder="Enter Airline"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="name">Number</label>
                                <input type="text" class="form-control" id="number" placeholder="Enter Number" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Food Restrictions</label>
                                <input type="text" class="form-control" id="food" placeholder="Enter Food Restrictions"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="name">Seat preferences</label>
                                <input type="text" class="form-control" id="seat" placeholder="Enter Seat preferences"
                                    required>
                            </div>




                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="txt_userid" value="0">
                            <button type="button" class="btn btn-success btn-sm" id="btn_save">Save</button>
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="text-right mb-5">
                <a href="./logout.php" class="btn btn-danger">Logout</a>
            </div>
            <h4 class="text-center mt-4">All Data</h4>
            <div class="table-responsive">

                <table id="userTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Flight Preference</th>
                            <th>REFERRED BY</th>
                            <th>Joined Since</th>
                            <th>Approved</th>
                            <th>TSA Number</th>
                            <th>Global Entry</th>
                            <th>Airline</th>
                            <th>Number</th>
                            <th>Food Restrictions</th>
                            <th>Seat preferences</th>
                            <th>Latest Flight Booking</th>
                            <th>Action</th>

                        </tr>
                    </thead>



                </table>
            </div>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            "pageLength": 50,

        });
    });
    </script>
    <script>
    var userDataTable = $('#userTable').DataTable({
        'processing': true,
        'serverSide': true,
        responsive: false,

        'serverMethod': 'post',


        'ajax': {
            'url': 'ajaxfile.php'
        },
        'columns': [{
            data: 'username'
        }, {
            data: 'fname'
        }, {
            data: 'lname'
        }, {
            data: 'email'
        }, {
            data: 'phone'
        }, {
            data: 'flight'
        }, {
            data: 'refer'
        }, {
            data: 'created_at'
        }, {
            data: 'flag'
        }, {
            data: 'tsa'
        }, {
            data: 'global'
        }, {
            data: 'airline'
        }, {
            data: 'number'
        }, {
            data: 'food'
        }, {
            data: 'seat'
        }, {
            data: 'flight_created_at'
        }, {
            data: 'action'
        }, ]
    });

    //Update record
    $('#userTable').on('click', '.updateUser', function() {
        var id = $(this).data('id');

        $('#txt_userid').val(id);

        // AJAX request
        $.ajax({
            url: 'ajaxfile.php',
            type: 'post',
            data: {
                request: 2,
                id: id
            },
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {

                    $('#flag').val(response.data.flag);
                    $('#tsa').val(response.data.tsa);
                    $('#global').val(response.data.global);
                    $('#airline').val(response.data.airline);
                    $('#number').val(response.data.number);
                    $('#food').val(response.data.food);
                    $('#seat').val(response.data.seat);


                } else {
                    alert("Invalid ID.");
                }
            }
        });

    });


    // Save user 
    $('#btn_save').click(function() {
        var id = $('#txt_userid').val();


        var flag = $('#flag').val().trim();
        var tsa = $('#tsa').val().trim();
        var global = $('#global').val().trim();
        var airline = $('#airline').val().trim();
        var number = $('#number').val().trim();
        var food = $('#food').val().trim();
        var seat = $('#seat').val().trim();

        if (flag != '') {

            // AJAX request
            $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: {
                    request: 3,
                    id: id,

                    flag: flag,
                    tsa: tsa,
                    global: global,
                    airline: airline,
                    number: number,
                    food: food,
                    seat: seat,
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 1) {
                        // alert(response.message);

                        // Empty the fields

                        $('#tsa', '#global', '#airline', '#number', '#food', '#seat').val('');
                        $('#flag').val('Yes');

                        $('#txt_userid').val(0);

                        // Reload DataTable
                        userDataTable.ajax.reload();

                        // Close modal
                        $('#updateModal').modal('toggle');
                    } else {
                        alert(response.message);
                    }
                }
            });

        } else {
            alert('Please fill all fields.');
        }
    });

    $('#userTable').on('click', '.deleteUser', function() {
        var id = $(this).data('id');

        var deleteConfirm = confirm("Are you sure?");
        if (deleteConfirm == true) {
            // AJAX request
            $.ajax({
                url: 'ajaxfile.php',
                type: 'post',
                data: {
                    request: 4,
                    id: id
                },
                success: function(response) {

                    if (response == 1) {
                        // alert("Record deleted.");

                        // Reload DataTable
                        userDataTable.ajax.reload();

                    } else {
                        alert("Invalid ID.");
                    }

                }
            });
        }

    });
    </script>

</body>

</html>