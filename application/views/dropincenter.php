<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>SIPL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="<?php echo base_url();?>assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <style>

    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            <?php echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname') ?> <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="remixicon-logout-box-line"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="dashboard.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="<?php echo base_url();?>assets/images/logo-light.jpg" alt="" height="50">
                        <!-- <span class="logo-lg-text-light">Xeria</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>


            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="<?php echo base_url();?>Main" class="waves-effect">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>Main/dropin" class="waves-effect">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Drop-In Center </span>
                            </a>
                        </li>


                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">ISDQI</a></li>

                                        <li class="breadcrumb-item active">Drop-In Center</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Drop-In Center </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card-box">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#request-ass" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <span class="d-inline-block d-sm-none"></span>
                                            <span class="d-none d-sm-inline-block">Request Assisstance</span>
                                        </a>
                                    </li>



                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="request-ass">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="">Search Navigator </label>
                                                <input type="text" class="form-control" name="" id="" value="" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">


                                                <?php $i = 1; foreach ($navlist as $values) {?>
                                                    <div class="widget-rounded-circle card-box">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-lg">
                                                                    <img src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="user">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <h5 class="mt-0"><?php echo $values->navigator_name;?></h5>
                                                                <p class="text-muted mb-1 font-13"></p>

                                                            </div>
                                                            <div class="col-md-4 text-right">
                                                                <button class="btn btn-primary btn-sm book_app btn-appointment" id-attr="<?php echo $i;?>">Book Appointment</button>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3 select_dr_<?php echo $i;?>" id="" style="display:none">
                                                            <div class="form-group col-md-8">
                                                                <label for="">Select Address</label>
                                                                <select class="form-control chosen-select-deselect nav-address" name="address_id" select-attr="<?php echo $i;?>" id="address_id">
                                                                    <option value=""></option>
                                                                    <?php foreach($values->location_id as $key => $value) {?>
                                                                        <option value="<?php echo $value; ?>">
                                                                            <?php echo $values->navigator_location[$key].', '. $values->navigator_city[$key].', '.$values->navigator_zipcode[$key]?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            

                                                            
                                                        </div>
                                                    </div>
                                                <?php $i++; } ?>
                                                <script>
                                                    var scrollEnabled = true;

                                                </script>
                                                <div id="example" style="display:none">
                                                            
                                                </div>

                                                


                                            </div>
                                        </div>

                                    </div>

                                    <!-- </div> -->

                                </div>
                            </div> <!-- end col -->




                        </div>

                    </div>



                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                2020 © SIPL
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>


    <script src="<?php echo base_url();?>assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js"></script>

    <script src="<?php echo base_url();?>assets/js/popper.min.js" >
    </script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" >
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script> -->


    <!-- Peity chart-->
    <script src="<?php echo base_url();?>assets/libs/peity/jquery.peity.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.ui.scrolltabs.js"></script>


    <!-- App js -->
    <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
    <script>
        var $tabs;
        var scrollEnabled;
        $(function() {



                // $('#example_3').scrollTabs({
                //     scrollOptions: {
                //         easing: 'swing',
                //         enableDebug: false,
                //         // closable: true,
                //         showFirstLastArrows: false,
                //         selectTabAfterScroll: true
                //     }
                // });
            }


        );
    </script>

       
<script type="text/javascript">
        $(".btn-appointment").click(function() {
            var val = $(this).attr('id-attr');
            $(".select_dr_"+val).toggle();
        })

        $(function() {
            $('#example_3').hide();
            // $('#address_id').change(function() {
            //     if ($('#address_id').val() == 'dr1' || $('#address_id').val() == 'dr2') {
            //         $('#example_3').show();
            //     } else {
            //         $('#example_3').hide();
            //     }
            // });
        });


    </script>
    <script type="text/javascript">
         $(document).ready(function() {
            var html = "";
            $(".nav-address").change(function() {
                var location_id = $(this).val();
                var selectattr = $(this).attr('select-attr');
                $.ajax({
                  url:"<?php echo base_url();?>Main/gettimeslot",
                  type:"POST",
                  data: {location_id: location_id},
                  success: function(response) {
                    var data = JSON.parse(response);
                    
                    html += '<div id="example_3" class="p-3 b1 slots ui-tabs ui-corner-all ui-widget ui-widget-content ui-scroll-tabs"><div class="stNavMain stNavMainLeft"><button class="stNavPrevArrow ui-state-active" title="Previous"><i class="fas fa-angle-double-left"></i></button></div><div class="ui-scroll-tabs-view" style="margin-bottom: 0px;"><ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">';
                    $.each(data.data, function(key, value) {
                        var date = value.show_date.split(',');
                        
                        html += '<li role="tab"><a href="#tabs-'+(key+1)+'" class="text-center" role="presentation">'+((date[1] != undefined) ? date[1] : date[0])+' <br> <small class="fdc">'+((value.slotes != null) && (value.slotes.morning[0].length) > 0 ? value.slotes.morning[0].length : 0)+' slot available</small></a> </li>';
                        
                    });
                    html += "</ul></div></div>";

                    $.each(data.data, function(key, value) {
                        html += '<div id="tabs-'+(key+1)+'" role="tabpanel"><div class="col-md-12 text-center mb-4"><b>'+value.show_date+'</b></div>';

                        if (value.slotes != null && value.slotes.morning != undefined) {
                            html += '<div class="col-md-12 mb-2"><b>Morning:</b> <small>'+value.slotes.morning.length+' slots available</small></div>';
                            html += '<div class="col-md-12 mb-3"><a href="javascript:void(0);"><button class="btn btn-sm btn-outline-primary mr-2 slots-d-booked">Booked</button></a>'
                            $.each(value.slotes.morning, function(k, v) {
                            
                                html += '<a href="appointment-details.html"> <button class="btn btn-sm btn-outline-primary mr-2">'+v+'</button></a>';
                            });
                            html += '</div>';
                        }

                        if (value.slotes != null && value.slotes.afternoon != undefined) {
                            html += '<div class="col-md-12 mb-2"><b>Afternoon:</b> <small>'+value.slotes.afternoon.length+' slots available</small></div>';
                            html += '<div class="col-md-12 mb-3"><a href="javascript:void(0);"><button class="btn btn-sm btn-outline-primary mr-2 slots-d-booked">Booked</button></a>';
                            $.each(value.slotes.afternoon, function(k, v) {
                            
                                html += '<a href="appointment-details.html"> <button class="btn btn-sm btn-outline-primary mr-2">'+v+'</button></a>';
                            });

                            html += '</div>';
                        }

                        if (value.slotes != null && value.slotes.evening != undefined) {
                            html += '<div class="col-md-12 mb-2"><b>Evening:</b> <small>'+value.slotes.evening.length+' slots available</small></div>';

                            html += '<div class="col-md-12 mb-3"><a href="javascript:void(0);"><button class="btn btn-sm btn-outline-primary mr-2 slots-d-booked">Booked</button></a>';
                            $.each(value.slotes.evening, function(k, v) {
                            
                                html += '<a href="appointment-details.html"> <button class="btn btn-sm btn-outline-primary mr-2">'+v+'</button></a>';
                            });

                            html += '</div>';
                        }


                        if (value.slotes != null && value.slotes.night != undefined) {
                            html += '<div class="col-md-12 mb-2"><b>Night:</b> <small>'+value.slotes.night.length+' slots available</small></div>';

                            $.each(value.slotes.night, function(k, v) {
                            
                                html += '<div class="col-md-12 mb-3"><a href="javascript:void(0);"><button class="btn btn-sm btn-outline-primary mr-2 slots-d-booked">Booked</button></a><a href="appointment-details.html"> <button class="btn btn-sm btn-outline-primary mr-2">'+v+'</button></a></div>';
                            });
                        }
                        

                        html += "</div>";    
                    });
                    
                    $("#example").html(html);
                    $("#example").show();
                  }
                })    
            })
            
          });
    </script>

</body>


</html>
