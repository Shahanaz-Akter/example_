<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show Data</title>
    <style>
        #logout:hover {
            color: #ec2024;
        }
    </style>
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <div class="card">
            <div class="card-body">
                <div class="card-header py-3">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                            <h4>All Clients</h4>
                        </div>
                    </div>
                </div>

                <br>
                <!-- table table-striped table-bordered"-->
                <table id="example1" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td>
                            <td>z Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2023-11-01 13:13:10</td>
                            <td>$320,800</td>
                        </tr>
                        <!-- Include your other rows here -->
                        <tr>
                            <td>02</td>
                            <td>fgfh Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2023-11-03 13:13:10</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>k,, Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2023-11-06 13:13:10</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td> Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2023-11-08 13:13:10</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>bvjgv Nixon</td>
                            <td>System fhgf</td>
                            <td>Edinburgh</td>
                            <td>66</td>
                            <td>2023-11-09 13:13:10</td>
                            <td>$320,800</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!--end wrapper-->

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                order: [
                    [5, 'desc']
                ]
            });
        });
    </script>
</body>

</html>