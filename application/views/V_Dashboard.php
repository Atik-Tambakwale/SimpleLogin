<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dashboard.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/growl-alert-box/alert.css">
    <title>User Admin Dashboard</title>
</head>
<body>
    <input type="hidden" name="" id="path" value="<?php echo base_url();?>">
    <input type="hidden" name="" id="userRow" value="<?php echo $this->session->userdata["row_num"];?>">
    <input type="hidden" name="" id="userName" value="<?php echo $this->session->userdata["name"];?>">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#sidebar"
            aria-controls="offcanvasExample"
            >
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
        class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
        href="#"
        >USER Dashboard</a
        >
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#topNavBar"
        aria-controls="topNavBar"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">

        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >
                <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?php echo base_url();?>user/signout">Log Out</a></li>
            </ul>
        </li>
    </ul>
</div>
</div>
</nav>
<!-- top navigation bar -->
<!-- offcanvas -->
<div
class="offcanvas offcanvas-start sidebar-nav bg-dark"
tabindex="-1"
id="sidebar"
>
<div class="offcanvas-body p-0">
    <nav class="navbar-dark">
        <ul class="navbar-nav">
            <li>
                <a href="#" class="nav-link px-3 active">
                    <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</div>
<!-- offcanvas -->
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>User Profile</h4>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-1 offset-lg-1">
                <div class="col-md-10 col-lg-10 col-sm-12">
                    <table  class="table table-striped">
                        <tr>
                            <td><b>USER NAME</b></td>
                            <td><?php echo $this->session->userdata["username"];?></td>
                        </tr>
                        <tr>
                            <td><b>EMAIL ID</b></td>
                            <td><?php echo $this->session->userdata["email"]?></td>
                        </tr>
                        <tr>
                            <td><b>ROW NUMBER</b></td>
                            <td><?php echo $this->session->userdata["row_num"];?></td>
                        </tr>
                        <tr>
                            <td><b>FULL NAME</b></td>
                            <td><?php echo $this->session->userdata["name"];?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal" tabindex="-1" id="editUserDetailsModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Update</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="editUserId" value="<?php echo $this->session->userdata["as_id"]?>">
                <div class="form-group">
                    <label for="">Enter User Row Number</label><br>
                    <input type="text" class="form-control" name="edit_row_num" id="edit_row_num" value="" required>
                </div><br>
                <div class="form-group">
                    <label for="">Enter User Full Name</label><br>
                    <input type="text" class="form-control" name="edit_name" id="edit_name" value="" required>
                </div><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary update-user-details"> Update </button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url();?>assets/lib/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/lib/growl-alert-box/alert.js" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
<script type="text/javascript">
if ($("#userRow").val()=="" && $("#userName").val()=="") {
$("#editUserDetailsModal").show();
}
</script>
</body>
</html>
