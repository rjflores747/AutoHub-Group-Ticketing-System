<?php
 require_once '../connect.php'; 

if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit();
 
}
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE ticket_incident set
 id='" . $_POST['update_id'] . "', 
 ticket_category='" . $_POST['inputcategory'] . "' ,
 ticket_subcategory='" . $_POST['inputsubcategory'] . "', 
 ticket_service='" . $_POST['inputService'] . "', 
 ticket_config_item='" . $_POST['inputconfigitem'] . "' ,
 ticket_short_discrip='" . $_POST['inputSubject'] . "', 
 ticket_discription='" . $_POST['inputMessage'] . "', 
 ticket_contact_type='" . $_POST['contacttype'] . "' ,
 ticket_status='" . $_POST['inputstate'] . "', 
 ticket_imapact='" . $_POST['inputImpact'] . "', 
 ticket_urgent='" . $_POST['inputurgent'] . "' ,
 ticket_priority='" . $_POST['inputPriority'] . "', 
 ticket_assign_group='" . $_POST['deptgroup'] . "', 
 ticket_assign_to='' ,
 ticket_department_id='" . $_POST['tkdepart'] . "'WHERE id='" . $_POST['update_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM ticket_user WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<section class="content">

                <div class="container-fluid">

                    <div class="card card-primary card-outline card-tabs no-border-card mb-0">

                        <div class="card-header p-0 pt-1 border-bottom-0">
                        <h1>Profile</h1>
                            <!-- <div id="app" class=" border-bottom"> -->

                            <div id="app" class="">
                                <nav class="navbar navbar-expand-md navbar-light   mt-0 mb-0 pt-0 pb-0" style="background-color: #ffffff;">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <!-- <ul  class=" nav nav-tabs navbar-nav mr-auto" id="custom-tabs-three-tab" role="tablist"  style="border-bottom: 0px solid #ffffff;"> -->
                                        <ul class=" nav nav-tabs navbar-nav mr-auto" id="custom-tabs-three-tab" role="tablist">
                                            <li class="nav-item ">
                                                <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Information</a>
                                            </li>
                                            <li class="nav-item" id="customer-family-tab">
                                                <a class="nav-link " id="custom-tabs-three-family-tab" data-toggle="pill" href="#custom-tabs-three-family" role="tab" aria-controls="custom-tabs-three-family" aria-selected="false">Password</a>
                                            </li>
                                            <li class="nav-item" hidden="">
                                                <a class="nav-link" id="custom-tabs-three-hobbies-tab" data-toggle="pill" href="#custom-tabs-three-hobbies" role="tab" aria-controls="custom-tabs-three-hobbies" aria-selected="false">Affiliations</a>
                                            </li>
                                            <li class="nav-item" hidden="">
                                                <a class="nav-link" id="custom-tabs-three-gallery-tab" data-toggle="pill" href="#custom-tabs-three-gallery" role="tab" aria-controls="custom-tabs-three-gallery" aria-selected="false">Gallery</a>
                                            </li>

                                            <li class="nav-item" id="customer-corporation_individuals-tab" hidden="">
                                                <a class="nav-link" id="custom-tabs-three-individuals-tab" data-toggle="pill" href="#custom-tabs-three-individuals" role="tab" aria-controls="custom-tabs-three-individuals" aria-selected="false">Connected
                                                    Individuals</a>
                                            </li>
                                            <li class="nav-item" hidden="">
                                                <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Vehicles</a>
                                            </li>

                                            <li class="nav-item" hidden="">
                                                <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Service</a>
                                            </li>
                                            <li class="nav-item" hidden="">
                                                <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Sales</a>
                                            </li>
                                        </ul>
                                        <ul class="navbar-nav mt-1" id="customer-info-button">
                                            <li class="nav-item" hidden="">
                                                <input type="button" onclick="" style="width:65px;" class="btn btn-danger btn-sm" value="Remove" title="Remove Customer">
                                            </li>
                                        </ul>



                                    </div>


                                </nav>
                            </div>


                        </div>
                        <div class="card-body" style="padding-top: 0.30rem;padding-right: .50rem;padding-left: .50rem;">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="row d-flex align-items-stretch">
                                        <div class="col-md-4 d-flex align-items-stretch">
                                            <div id="information-employee-side" class="card card-primary card-outline col-12" >
                                                <div class="card-body">
                                                    <form id="update_form" enctype="multipart/form-data">

                                                        <a data-toggle="lightbox" id="profileDisplay_pop">



                                                            <div class="form-group text-center" style="position: relative;">
                                                                <span class="img-div">
                                                                    <div class="text-center img-placeholder" onclick="triggerClick()">
                                                                        <h4>Update image</h4>
                                                                    </div>
                                                                    <img class="profile-user-img img-fluid img-circle" src="../uploads/<?=$_SESSION['ticket_user_url']?>" onclick="triggerClick()" id="profileDisplay">
                                                                </span>
                                                                <input accept=".png,.jpeg,.jpg" type="file" name="upload_picture" onchange="displayImage(this)" id="upload_picture" class="form-control form-control-sm" style="display: none;">
                                                            </div>


                                                        </a>



                                                        <h3 class="profile-username text-center mb-1">
                                                        <?php echo $_SESSION['ticket_fn'].' '.$_SESSION['ticket_ln']?></h3>

                                                        <p class="text-muted text-center mb-1" id="position-display">
                                                        <?php echo $_SESSION['ticket_user_department']?></p>

                                                        <a class="email-click">
                                                            <p id="main_email" style="font-size: 14px; color:#007bff;" class="customer-data-side text-center">
                                                            <?php echo $_SESSION['u_id']?></p>
                                                        </a>

                                                        <ul class="list-group list-group-unbordered mb-3">
                                                            <li class="list-group-item">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Employee
                                                                            ID</strong>
                                                                        <span class="float-right">:</span></span>
                                                                    <span class="customer-data-side col-sm-7 lbl-forms-sm-customer-main" id="main_category"><a class=""><?php echo $_SESSION['u_id']?></a></span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Username</strong>
                                                                        <span class="float-right">:</span></span>
                                                                    <span class="col-sm-7 lbl-forms-sm-customer-main" id="main_customer_status"> <a class=""><?php echo $_SESSION['u_id']?></a></span>
                                                                </div>
                                                            </li>
                                                            <!-- <li class="list-group-item">
                                                <div class="form-group row my-0">
                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Email
                                                        </strong><span class="float-right">:</span></span>
                                                    <div style="word-wrap: break-word; width: 50%">
                                                        <a class="email2-click"><span
                                                                class="customer-data-side col-sm-7 lbl-forms-sm-customer-main"
                                                                id="main_customer_email_2"></span></a>
                                                    </div>
                                                </div>
                                            </li> -->
                                                            <li class="list-group-item">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Mobile

                                                                        </strong><span class="float-right">:</span></span>
                                                                    <a class="contact2-click"><span class="customer-data-side col-sm-7 lbl-forms-sm-customer-main" id="main_customer_mobile_2">+639618191459</span></a>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item" hidden="">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Department
                                                                        </strong><span class="float-right">:</span></span>
                                                                    <a class="residential-click"> <span class="customer-data-side col-sm-7 lbl-forms-sm-customer-main" id="main_customer_home_mobile">
                                                                            APPLICATION &amp; DATABASE DEPARTMENT</span></a>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Company
                                                                        </strong><span class="float-right">:</span></span>
                                                                    <a class="residential-click"> <span class="customer-data-side col-sm-7 lbl-forms-sm-customer-main" id="company_main">AHG</span></a>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Dealer
                                                                        </strong><span class="float-right">:</span></span>
                                                                    <a class="business-click"> <span class="customer-data-side col-sm-7 lbl-forms-sm-customer-main" id="dealer_main">AHGI</span></a>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Gender
                                                                        </strong><span class="float-right">:</span></span>
                                                                    <span class="customer-data-side col-sm-7 lbl-forms-sm-customer-main" id="gender_main">Male</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Date
                                                                            of
                                                                            birth
                                                                        </strong><span class="float-right">:</span></span>
                                                                    <span class="customer-data-side col-sm-7 lbl-forms-sm-customer-main" id="dob_main">
                                                                        01/22/1997</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-group row my-0">
                                                                    <span class="col-sm-5 lbl-forms-sm-customer-main"><strong>Date
                                                                            Registered
                                                                        </strong><span class="float-right">:</span></span>
                                                                    <span class="customer-data-side col-sm-7 lbl-forms-sm-customer-main" id="main_customer_address_2">
                                                                        June 23, 2022 - 09:42:54 AM</span>
                                                                </div>
                                                            </li>



                                                        </ul>
                                                        <ul class="remove-list-space list-group list-group-unbordered" hidden="">
                                                            <li class="list-group-item" style="border-top: 0 none; border-bottom: 0 none;" title="Viber">
                                                                <div class="form-group row my-0">
                                                                    <div class=" col-sm-5 ">
                                                                        <i class="col-0 fa-fw text-left fab fa-viber fa-lg"></i>
                                                                        <span class=" col-sm-11 lbl-forms-sm-customer-main"><strong>Viber</strong><span class="float-right">:</span></span>
                                                                    </div>
                                                                    <div style="word-wrap: break-word; width: 50%">
                                                                        <a class="viber-click"> <span id="main_viber" class="customer-data-side col-sm-7  lbl-forms-sm-customer-main mx-0 my-0"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item" style="border-top: 0 none; border-bottom: 0 none;" title="Facebook">
                                                                <div class="form-group row my-0">
                                                                    <div class=" col-sm-5 ">
                                                                        <i class="col-0 fa-fw text-left fab fa-facebook-f fa-lg">
                                                                        </i>
                                                                        <span class="col-sm-11 lbl-forms-sm-customer-main"><strong>Facebook</strong><span class="float-right">:</span></span>
                                                                    </div>
                                                                    <div style="word-wrap: break-word; width: 50%">
                                                                        <a class="facebook-click"> <span id="main_facebook" class="customer-data-side col-sm-7  lbl-forms-sm-customer-main mx-0 my-0"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item" style="border-top: 0 none; border-bottom: 0 none;" title="Instagram">
                                                                <div class="form-group row my-0">
                                                                    <div class=" col-sm-5 ">
                                                                        <i class="col-0 fa-fw text-left fab fa-instagram fa-lg">
                                                                        </i>
                                                                        <span class="col-sm-11 lbl-forms-sm-customer-main"><strong>Instagram</strong><span class="float-right">:</span></span>
                                                                    </div>
                                                                    <div style="word-wrap: break-word; width: 50%">
                                                                        <a class="instagram-click"> <span id="main_instagram" class="customer-data-side col-sm-7  lbl-forms-sm-customer-main mx-0 my-0"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item" style="border-top: 0 none; border-bottom: 0 none;" title="Whatsapp">
                                                                <div class="form-group row my-0">
                                                                    <div class=" col-sm-5 ">
                                                                        <i class="col-0 fa-fw text-left fab fa-whatsapp fa-lg">
                                                                        </i>
                                                                        <span class="col-sm-11 lbl-forms-sm-customer-main"><strong>Whatsapp</strong><span class="float-right">:</span></span>
                                                                    </div>
                                                                    <div style="word-wrap: break-word; width: 50%">
                                                                        <a class="whatsapp-click"> <span id="main_whatsapp" class="customer-data-side col-sm-7  lbl-forms-sm-customer-main mx-0 my-0"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item" style="border-top: 0 none; border-bottom: 0 none;" title="Telegram">
                                                                <div class="form-group row my-0">
                                                                    <div class=" col-sm-5 ">
                                                                        <i class="col-0 fa-fw text-left fab fa-telegram fa-lg">
                                                                        </i>
                                                                        <span class="col-sm-11 lbl-forms-sm-customer-main"><strong>Telegram</strong><span class="float-right">:</span></span>
                                                                    </div>
                                                                    <div style="word-wrap: break-word; width: 50%">
                                                                        <a class="telegram-click"> <span id="main_telegram" class="customer-data-side col-sm-7  lbl-forms-sm-customer-main mx-0 my-0"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item" style="border-top: 0 none; border-bottom: 0 none;" title="Website">
                                                                <div class="form-group row my-0">
                                                                    <div class=" col-sm-5 ">
                                                                        <i class="col-0 fa-fw text-left fas fa-globe fa-lg">
                                                                        </i>
                                                                        <span class="col-sm-11 lbl-forms-sm-customer-main"><strong>Website</strong><span class="float-right">:</span></span>
                                                                    </div>
                                                                    <div style="word-wrap: break-word; width: 50%">
                                                                        <a class="website-click"> <span id="main_website_link" class="customer-data-side col-sm-7  lbl-forms-sm-customer-main mx-0 my-0"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>


                                                </form></div>
                                                <!-- NEW -->
                                                <!-- /.card-body -->
                                            </div>
                                        </div>

                                        <div class="col-md-8 d-flex align-items-stretch">

                                            <div id="information-employee" class="card card-primary card-outline col-12" >
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <div class="active tab-pane" id="information">


                                                        
                                                        <span id="company_span" style="display:none;"><strong>Company</strong>&nbsp;
                                                        <i class=" tooltip-me mt-2 mr-2 mb-0 fas fa-question-circle" style="color:blue; cursor: help;" title="" data-original-title="You can change this only once."></i></span>

                                                            <div class="form-group mb-2 dropdown-input mr-2" id="company_div" style="display:none;">
                                                                <label class="dropdown" hidden="">Company</label>
                                                                <select name="company" id="company" class="form-control form-control-sm select2-hidden-accessible" style="width: 100%;" data-select2-id="company" tabindex="-1" aria-hidden="true">
                                                                    <option value="0" selected="" data-select2-id="4">
                                                                        Select
                                                                        Company</option>
                                                                    <option value="1" data-select2-id="16">AHG - AUTOHUB GROUP OF COMPANIES INC.</option><option value="11">AIT - AUTOHUB INSTITUTE OF TECHNOLOGY INC.</option><option value="2">APE - AUTOITALIA PHILIPPINES ENT.</option><option value="12">AUTOPR - AUTOPREMIUM INC.</option><option value="3">BBAI - BRITISH BESPOKE AUTOMOBILES INC.</option><option value="14">BICI - BRITISH ICONIC CARS INC.</option><option value="15">BRCI - BRITISH RACING CARS, INC</option><option value="4">BUAI - BRITISH UNITED AUTOMOBILE INC.</option><option value="5">GCASI - GLOBAL CITY AUTOSALES INC</option><option value="6">GCCLTC - GLOBAL CITY CAR LEASE &amp; TRANSPORT CORP.</option><option value="24">GEM - GLOBAL EXCELLENCE MOTORS</option><option value="13">LEAP - LEADING EDGE AUTOMOBILE PHIL. INC</option><option value="7">MGM - MGM MOTOR TRADING</option><option value="16">MGMMI - MGM MOTORS MINDANAO INC.</option><option value="17">MCMI - MILLENIUM CARS MINDANAO INC.</option><option value="22">MGMI - MILLENIUM GALLERY MOTORS INC.,</option><option value="8">MOTO - MOTOITALIA PHIL. INC.</option><option value="18">PGBVI - PALAWAN GLOBAL BUSINESS VENTURES, INC.</option><option value="9">SAPI - SUPREME AUTOZONE PHIL. INC</option><option value="26">TESTCOMP - TEST COMPANY</option><option value="32">TEST GCASI - TEST GCASI</option><option value="30">TPC - THIRD PARTY COMPANY</option><option value="20">TMPI - TRIUMPH MOTORCYCLES PHILIPPINES, INC.</option><option value="10">VKOOL - VKOOL PHIL. INC</option><option value="21">ZOOMHUB - ZOOMHUB INC</option>                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-company-container"><span class="select2-selection__rendered" id="select2-company-container" role="textbox" aria-readonly="true" title="AHG - AUTOHUB GROUP OF COMPANIES INC.">AHG - AUTOHUB GROUP OF COMPANIES INC.</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>


                                                            <span id="dealer_span" style="display:none;"><strong>Dealer</strong>&nbsp;
                                                        <i class=" tooltip-me mt-2 mr-2 mb-0 fas fa-question-circle" style="color:blue; cursor: help;" title="" data-original-title="You can change this only once."></i></span>
                                                            <div class="form-group mb-2 dropdown-input mr-2" id="dealer_div" style="display:none;">
                                                                <label class="dropdown" hidden="">Dealer</label>
                                                                <select name="dealer" id="dealer" class="form-control form-control-sm select2-hidden-accessible" style="width: 100%;" data-select2-id="dealer" tabindex="-1" aria-hidden="true"><option value="0" selected="" data-select2-id="21">Select Dealer</option><option value="43">AUTOHUB GROUP HOLDINGS</option><option value="42" data-select2-id="23">AUTOHUB GROUP INC</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-dealer-container"><span class="select2-selection__rendered" id="select2-dealer-container" role="textbox" aria-readonly="true" title="AUTOHUB GROUP INC">AUTOHUB GROUP INC</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                           

 
                                                               <span id="gender_span" style="display:none;"><strong>Gender</strong>&nbsp;
                                                        <i class=" tooltip-me mt-2 mr-2 mb-0 fas fa-question-circle" style="color:blue; cursor: help;" title="" data-original-title="You can change this only once."></i></span>
                                                            <div class="form-group mb-2 dropdown-input mr-2" id="gender_div" style="display:none;">
                                                                <label class="dropdown" hidden="">Gender</label>

                                                                <select name="gender" id="gender" class="form-control form-control-sm select2-hidden-accessible" style="width: 100%;" data-select2-id="gender" tabindex="-1" aria-hidden="true"> 
                                                                    <option value="0" data-select2-id="2">Select Gender</option>
                                                                    <option value="1" data-select2-id="26">Male</option>
                                                                    <option value="2">Female</option>

                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-gender-container"><span class="select2-selection__rendered" id="select2-gender-container" role="textbox" aria-readonly="true" title="Male">Male</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div> 

                                                              <span id="dob_span" style="display:none;"><strong>Date of birth</strong>&nbsp;
                                                        <i class=" tooltip-me mt-2 mr-2 mb-0 fas fa-question-circle" style="color:blue; cursor: help;" title="" data-original-title="You can change this only once."></i></span>
                                                            <div class="form-group mb-2 dropdown-input mr-2" id="dob_div" style="display:none;">
                                                                <label class="dropdown" hidden="">Date of birth</label>
                                                              
                                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input name="birthday" id="birthday" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" type="text" class="form-control form-control-sm datetimepicker-input" data-target="#reservationdate" inputmode="numeric">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                                                                <!-- input -->
                                                            </div> 

                                                            <span><strong>Department</strong></span>
                                                            <div class="form-group mb-2 dropdown-input mr-2" id="department_div">
                                                                <label class="dropdown" hidden="">Department</label>
                                                                <select name="department" id="department" class="form-control form-control-sm select2-hidden-accessible" style="width: 100%;" data-select2-id="department" tabindex="-1" aria-hidden="true">
                                                                    <option value="545" data-select2-id="10">ACCOUNTING DEPARTMENT</option>
                                                                    <option value="546" data-select2-id="14">APPLICATION &amp; DATABASE DEPARTMENT</option>
                                                                    <option value="465">CUSTOMER RELATIONSHIP MANAGEMENT&nbsp;</option>
                                                                    <option value="468">DEALER CUSTOMER RELATION CENTER</option>
                                                                    <option value="1">DEFAULT</option><option value="472">EXECUTIVE</option>
                                                                    <option value="476">FINANCING &amp; INSURANCE</option>
                                                                    <option value="484">HUMAN RESOURCE&nbsp;</option>
                                                                    <option value="489">INFORMATION TECHNOLOGY</option>
                                                                    <option value="549">LAND TRANSPORTATION OFFICE</option>
                                                                    <option value="517">PARTS</option><option value="525">SALES AND MARKETING</option>
                                                                    <option value="527">SERVICE</option><option value="547">SYSTEM DEPARTMENT</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-department-container"><span class="select2-selection__rendered" id="select2-department-container" role="textbox" aria-readonly="true" title="APPLICATION &amp; DATABASE DEPARTMENT"><span class="select2-selection__clear" title="Remove all items" data-select2-id="15">×</span>APPLICATION &amp; DATABASE DEPARTMENT</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                            <span><strong>Position</strong></span>
                                                            <div class="form-group mb-2 dropdown-input mr-2" id="position_div">
                                                                <label class="dropdown" hidden="">Position</label>
                                                                <select name="position" id="position" class="form-control form-control-sm select2-hidden-accessible" style="width: 100%;" data-select2-id="position" tabindex="-1" aria-hidden="true"><option value="67" data-select2-id="18">ADD Manager</option><option value="66">Database Assistant</option><option value="68">Database Specialist</option><option value="54" data-select2-id="24">Programmer</option><option value="55">Project Coordinator</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="12" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-position-container"><span class="select2-selection__rendered" id="select2-position-container" role="textbox" aria-readonly="true" title="Programmer"><span class="select2-selection__clear" title="Remove all items" data-select2-id="25">×</span>Programmer</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>



                                                 

                                                            <span><strong>Other Mobile
                                                                    Number</strong></span>
                                                            <div class="input-group mb-2">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text" style="height:31px;">
                                                                        <span class="">+63</span>
                                                                    </div>
                                                                </div>
                                                                <input oninput="this.value=this.value.slice(0,this.maxLength)" type="number" maxlength="10" name="contactno2" id="contactno2" class="form-control form-control-sm" placeholder="" value="">
                                                                <div class="input-group-append mr-2">
                                                                    <div class="input-group-text" style="height:31px;">
                                                                        <span class="fas fa-phone"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <span hidden=""><strong>Fax</strong></span>
                                                            <div class="input-group mb-2" hidden="">
                                                                <input type="text" name="fax" id="fax" maxlength="15" class="form-control form-control-sm" placeholder="" value="">
                                                                <div class="input-group-append  mr-2">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-phone"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <span><strong>Business
                                                                    Phone</strong></span>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="business" id="business" maxlength="15" class="form-control form-control-sm" placeholder="" value="">
                                                                <div class="input-group-append  mr-2">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-phone"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <span><strong>Residential
                                                                    Phone</strong></span>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="residential" id="residential" maxlength="15" class="form-control form-control-sm" placeholder="" value="">
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text  mr-2">
                                                                        <span class="fas fa-phone"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <span><strong>Landline</strong></span>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="landline" id="landline" maxlength="15" class="form-control form-control-sm" placeholder="" value="">
                                                                <div class="input-group-append mr-2">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-phone"></span>
                                                                    </div>
                                                                </div>
                                                            </div>







                                                            <span><strong>Other Email
                                                                    Address</strong></span>
                                                            <div class="input-group mb-2">
                                                                <span id="validate-email2" style="width: 100%;  margin-top: .25rem; font-size: 80%; color: #dc3545; display:none;"></span>
                                                                <input type="email" name="email2" id="email2" class="form-control form-control-sm" placeholder="" value="">
                                                                <div class="input-group-append mr-2">
                                                                    <div class="input-group-text">
                                                                        <span class="fas fa-envelope"></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <span><strong>Address</strong></span>
                                                            <div class="input-group mb-2">
                                                                <input maxlength="100" type="text" name="address" id="address" class="form-control form-control-sm" placeholder="" value="#34 A CAPT. E SANTOS, ST. TND VILLAGE, TUKTUKAN">
                                                                <div class="input-group-append mr-2 ">
                                                                    <div class="input-group-text">
                                                                        <span class="fa fa-map-marker "></span>
                                                                    </div><strong style="color:red;">*</strong>
                                                                </div>
                                                            </div>

                                                            <span><strong>State</strong></span>
                                                            <div class="form-group mb-2 dropdown-input mr-2" id="state_div">
                                                                <label class="dropdown" hidden="">State</label>
                                                                <select name="state" id="state" class="form-control form-control-sm select2-hidden-accessible" style="width: 100%;" data-select2-id="state" tabindex="-1" aria-hidden="true">
                                                                    <option value="0" selected="" data-select2-id="7">
                                                                        Select State
                                                                    </option>
                                                                    <option value="1401">ABRA</option><option value="1602">AGUSAN DEL NORTE</option><option value="1603">AGUSAN DEL SUR</option><option value="0604">AKLAN</option><option value="0505">ALBAY</option><option value="0606">ANTIQUE</option><option value="1481">APAYAO</option><option value="0377">AURORA</option><option value="1507">BASILAN</option><option value="0308">BATAAN</option><option value="0209">BATANES</option><option value="0410">BATANGAS</option><option value="1411">BENGUET</option><option value="0878">BILIRAN</option><option value="0712">BOHOL</option><option value="1013">BUKIDNON</option><option value="0314">BULACAN</option><option value="0215">CAGAYAN</option><option value="0516">CAMARINES NORTE</option><option value="0517">CAMARINES SUR</option><option value="1018">CAMIGUIN</option><option value="0619">CAPIZ</option><option value="0520">CATANDUANES</option><option value="0421">CAVITE</option><option value="0722">CEBU</option><option value="0997">CITY OF ISABELA</option><option value="1182">COMPOSTELA VALLEY</option><option value="1298">COTABATO CITY</option><option value="1123">DAVAO DEL NORTE</option><option value="1124">DAVAO DEL SUR</option><option value="1186">DAVAO OCCIDENTAL</option><option value="1125">DAVAO ORIENTAL</option><option value="1685">DINAGAT ISLANDS</option><option value="0826">EASTERN SAMAR</option><option value="0679">GUIMARAS</option><option value="1427">IFUGAO</option><option value="0128">ILOCOS NORTE</option><option value="0129">ILOCOS SUR</option><option value="0630">ILOILO</option><option value="0231">ISABELA</option><option value="1432">KALINGA</option><option value="0133">LA UNION</option><option value="0434">LAGUNA</option><option value="1035">LANAO DEL NORTE</option><option value="1536">LANAO DEL SUR</option><option value="0837">LEYTE</option><option value="1538">MAGUINDANAO</option><option value="1740">MARINDUQUE</option><option value="0541">MASBATE</option><option value="1042">MISAMIS OCCIDENTAL</option><option value="1043">MISAMIS ORIENTAL</option><option value="1444">MOUNTAIN PROVINCE</option><option value="1339">NCR, CITY OF MANILA, FIRST DISTRICT</option><option value="1376" data-select2-id="17">NCR, FOURTH DISTRICT</option><option value="1374">NCR, SECOND DISTRICT</option><option value="1375">NCR, THIRD DISTRICT</option><option value="0645">NEGROS OCCIDENTAL</option><option value="0746">NEGROS ORIENTAL</option><option value="1247">NORTH COTABATO</option><option value="0848">NORTHERN SAMAR</option><option value="0349">NUEVA ECIJA</option><option value="0250">NUEVA VIZCAYA</option><option value="1751">OCCIDENTAL MINDORO</option><option value="1752">ORIENTAL MINDORO</option><option value="1753">PALAWAN</option><option value="0354">PAMPANGA</option><option value="0155">PANGASINAN</option><option value="0456">QUEZON</option><option value="0257">QUIRINO</option><option value="0458">RIZAL</option><option value="1759">ROMBLON</option><option value="0860">SAMAR (WESTERN SAMAR)</option><option value="1280">SARANGANI</option><option value="0761">SIQUIJOR</option><option value="0562">SORSOGON</option><option value="1263">SOUTH COTABATO</option><option value="0864">SOUTHERN LEYTE</option><option value="1265">SULTAN KUDARAT</option><option value="1566">SULU</option><option value="1667">SURIGAO DEL NORTE</option><option value="1668">SURIGAO DEL SUR</option><option value="0369">TARLAC</option><option value="1570">TAWI-TAWI</option><option value="0371">ZAMBALES</option><option value="0972">ZAMBOANGA DEL NORTE</option><option value="0973">ZAMBOANGA DEL SUR</option><option value="0983">ZAMBOANGA SIBUGAY</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state-container"><span class="select2-selection__rendered" id="select2-state-container" role="textbox" aria-readonly="true" title="NCR, FOURTH DISTRICT">NCR, FOURTH DISTRICT</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>

                                                            <span><strong>City</strong></span>
                                                            <div class="form-group mb-2 dropdown-input mr-2" id="city_div">
                                                                <label class="dropdown" hidden="">City</label>
                                                                <select name="city" id="city" class="form-control form-control-sm select2-hidden-accessible" style="width: 100%;" data-select2-id="city" tabindex="-1" aria-hidden="true"><option value="0" selected="" data-select2-id="20">Select City</option><option value="1373">CITY OF LAS PIÑAS</option><option value="1374">CITY OF MAKATI</option><option value="1375">CITY OF MUNTINLUPA</option><option value="1376">CITY OF PARAÑAQUE</option><option value="1377">PASAY CITY</option><option value="1378">PATEROS</option><option value="1379" data-select2-id="22">TAGUIG CITY</option>	</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-city-container"><span class="select2-selection__rendered" id="select2-city-container" role="textbox" aria-readonly="true" title="TAGUIG CITY">TAGUIG CITY</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>

                                                            <span><strong>Postal
                                                                    Code</strong></span>
                                                            <div class="input-group mb-2">
                                                                <input oninput="this.value=this.value.slice(0,this.maxLength)" type="number" maxlength="6" name="postal" id="postal" class="form-control form-control-sm" placeholder="" value="1634">
                                                                <div class="input-group-append mr-2">
                                                                    <div class="input-group-text">
                                                                        <span class="fa fa-map-marker "></span>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="row mb-2 mt-2">

                                                                <div class="col-12">
                                                                    <div class="form-group mr-2">
                                                                        <div class="alert alert-info float-right" role="alert" id="error-alert" style="display:none;">
                                                                            <span id="error-icon" class="icon fas fa-info">
                                                                            </span>
                                                                            <span id="alert-message">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-group mr-2">
                                                                        <input type="submit" name="submit" id="submit" value="Update" class="btn btn-success float-right">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            
                                                        </div>
                                                        <!-- /.tab-pane -->


                                                        <!-- /.tab-pane -->

                                                        <!-- /.contact -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="card ">
                                                            <div class="card-header p-2">
                                                                <ul class="nav nav-pills">
                                                                    <li class="nav-item"><a class="nav-link active"
                                                                            href="#information"
                                                                            data-toggle="tab">Information</a>
                                                                    </li>
                                                                    <li class="nav-item"><a class="nav-link"
                                                                            href="#password" data-toggle="tab">Change
                                                                            Password</a></li>
                                                                </ul>
                                                            </div>  
                                                        </div> -->
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="custom-tabs-three-family" role="tabpanel" aria-labelledby="custom-tabs-three-family-tab">
                                    <div class="tab-pane" id="password">

                                        <form id="update_form_password" class="form-horizontal">



                                            <span><strong>Old
                                                    Password</strong></span>
                                            <div class="input-group mb-2">
                                                <input type="password" minlength="6" name="old-password" id="old-password" class="form-control form-control-sm" placeholder="">
                                                <div class="input-group-append mr-2">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div><strong style="color:red;">*</strong>
                                                </div>
                                            </div>


                                            <span><strong>New
                                                    Password</strong></span>

                                            <div class="input-group mb-2">
                                                <span id="pw-not-matched" style="width: 100%;  margin-top: .25rem; font-size: 80%; color: #dc3545; display:none;"></span>
                                                <input type="password" minlength="6" name="new-password" id="new-password" class="form-control form-control-sm" placeholder="">
                                                <div class="input-group-append mr-2">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div><strong style="color:red;">*</strong>
                                                </div>
                                            </div>



                                            <span><strong>Repeat New
                                                    Password</strong></span>
                                            <div class="input-group mb-2">
                                                <input type="password" minlength="6" name="cpassword" id="cpassword" class="form-control form-control-sm" placeholder="">
                                                <div class="input-group-append mr-2">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div><strong style="color:red;">*</strong>
                                                </div>
                                            </div>



                                            <div class="row mb-3 mt-3">

                                                <div class="col-12">
                                                    <div class="alert alert-info float-right" role="alert" id="error-alert-pass" style="display:none;">
                                                        <span id="error-icon-pass" class="icon fas fa-info">
                                                        </span>
                                                        <span id="alert-message-pass">
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <input type="submit" name="submit" id="submit_password" value="Update" class="btn btn-success">
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">

                                     
 
 <!--
    <div id="customer-vehicle-div" class="table-responsive ">
      <table id="vehicle-table"
        data-toggle="table"
        class="table table-sm"
        data-url=""  
        data-search="true"
        data-show-refresh="false"
        data-show-toggle="false"
        data-show-columns="false" 
        data-show-columns-toggle-all="false"
        data-show-export="false" 
        data-query-params="queryParamsVehicle"
        data-side-pagination="server"
        data-page-list="[10, 25, 50, 100, all]"
        data-minimum-count-columns="2" 
        data-show-pagination-switch="false"
        data-pagination="true"
        data-height = "200"
        data-click-to-select="true" >
          <thead>
            <tr>
              <th data-formatter="checkIfEmpty" data-field="brand">Brand</th>
              <th data-formatter="checkIfEmpty" data-field="model">Model</th>
              <th data-formatter="checkIfEmpty" data-field="plate_number">Plate No.</th>
              <th data-formatter="checkIfEmpty" data-field="conduction_sticker">CS No.</th>
            </tr>
          </thead>
		   <tbody>
		    </tbody>
      </table>
    </div> 
 
--> 


        <div class="card-body pb-0" id="customer-vehicle">   
          <div class="row d-flex align-items-stretch" id="customer-owned-vehicle">  
          </div>
        </div>
        <!-- /.card-body -->
        <div id="grid-page-footer">
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0" id="customer-owned-vehicle-paging"> 
            
            </ul>
          </nav>
        </div>
        </div>
        <!-- /.card-footer --> 
                                </div>

                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                                    
  
  
    <!-- <div id="customer-service" class="table-responsive "> -->
    <div id="customer-service">
      <table id="service-table" data-toggle="table" class="table table-sm" data-url="" data-pagination="true" data-search="true" data-show-refresh="false" data-show-toggle="false" data-show-columns="false" data-show-columns-toggle-all="false" data-show-export="false" data-query-params="queryParamsService" data-side-pagination="server" data-page-list="[10, 25, 50, 100]" data-minimum-count-columns="2" data-show-pagination-switch="false" data-height="300" data-click-to-select="true">
          <thead>
            <!-- <tr>
              <th data-formatter="checkIfEmpty" data-field="ro_number">RO Number</th>
              <th data-formatter="checkIfEmpty" data-field="plate_number">Plate Number</th>
              <th data-formatter="checkIfEmpty" data-field="conduction_sticker">Conduction Number</th>
              <th data-formatter="checkIfEmpty" data-field="service_advisor">Service Advisor</th>
            </tr> -->
                <tr>
                                                        <th data-formatter="checkIfEmpty" data-field="date">Date</th>
                                                        <th data-formatter="checkIfEmpty" data-field="dealer">Dealer
                                                        </th>
                                                        <th data-formatter="checkIfEmpty" data-field="ro_number">RO
                                                            Number</th>
                                                        <!-- <th data-formatter="checkIfEmpty" data-field="customer_name_id">
                                                            Customer
                                                            Name</th> -->
                                                            
                                                        <th data-formatter="checkIfEmpty" data-field="ro_total">Amount
                                                        </th>
                                                        <th data-formatter="checkIfEmpty" data-field="conduction_sticker">CS
                                                        </th>
                                                        
                                                        <th data-formatter="checkIfEmpty" data-field="plate_number">
                                                            Plate
                                                            </th>
                                                        <th data-formatter="checkIfEmpty" data-field="brand">Brand</th>
                                                        <th data-formatter="checkIfEmpty" data-field="model">Model</th>
                                                        <th data-formatter="checkIfEmpty" data-field="service_advisor">
                                                            Service
                                                            Advisor</th>
                                                        <!-- <th data-formatter="checkIfEmpty" data-field="customer_name_id">Customer ID / Name</th> -->
                                                    </tr>
            </thead>
            <tbody>
            </tbody>
      </table>
    </div>
                                 </div>
                                <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                                     
    <!-- <div id="customer-sales" class="table-responsive "> -->
    <div id="customer-sales">
      <table id="sales-table" data-toggle="table" data-url="" class="table table-sm" data-pagination="true" data-search="true" data-show-refresh="false" data-show-toggle="false" data-show-columns="false" data-show-columns-toggle-all="false" data-show-export="false" data-query-params="queryParamsSales" data-side-pagination="server" data-page-list="[10, 25, 50, 100]" data-minimum-count-columns="2" data-show-pagination-switch="false" data-height="300" data-click-to-select="true">
          <thead>
            <tr>
                                                        <th data-formatter="checkIfEmpty" data-field="activity_date">
                                                            Date</th>
                                                        <th data-formatter="checkIfEmpty" data-field="order_number">
                                                            Order
                                                            Number</th>
                                                        <th data-formatter="checkIfEmpty" data-field="dealer">Dealer
                                                        </th>
                                                        <!-- <th data-formatter="checkIfEmpty" data-field="customer_name_id">
                                                            Customer
                                                            Name</th> -->
                                                        <!-- <th data-formatter="checkIfEmpty" data-field="po_number">PO Number</th> -->
                                                        <th data-formatter="checkIfEmpty" data-field="conduction_sticker">CS
                                                        </th>
                                                        <th data-formatter="checkIfEmpty" data-field="sale_price">Amount
                                                        </th>
                                                        <th data-formatter="checkIfEmpty" data-field="brand">Brand</th>
                                                        <th data-formatter="checkIfEmpty" data-field="model">Model</th>
                                                        <th data-formatter="checkIfEmpty" data-field="sales_person">
                                                            Sales
                                                            Person</th>
                                                        <!-- <th data-formatter="checkIfEmpty" data-field="customer_name_id">Customer ID / Name</th> -->
                                                    </tr>

            <!-- <tr>
              <th data-formatter="checkIfEmpty" data-field="order_number">Order Number</th>
              <th data-formatter="checkIfEmpty" data-field="po_number">PO Number</th>
              <th data-formatter="checkIfEmpty" data-field="brand">Brand</th>
              <th data-formatter="checkIfEmpty" data-field="model">Model</th>
              <th data-formatter="checkIfEmpty" data-field="activity_date">Date</th>
              <th data-formatter="checkIfEmpty" data-field="sales_person">Sales Person</th>
            </tr> -->
          </thead>
          <tbody>
          </tbody>
      </table>
    </div>
                                  </div>
                                <div class="tab-pane fade" id="custom-tabs-three-individuals" role="tabpanel" aria-labelledby="custom-tabs-three-individuals-tab">
                                    <!-- 
    <div id="customer-corporation-individual">
     <table id="corporation-individual" 
     data-search="true" 
        data-url="" 
        class="table table-bordered table-hover table-sm" 
        data-query-params="queryParamsCorporationCustomer"
        data-pagination="true"
        data-show-refresh="true"
          data-search="true"
         data-side-pagination="server"
        data-page-list="[10, 25, 50, 100]"
         data-url="" 
         
        >
        <thead>

          <tr>
                <th data-align="center" data-formatter="imageFormatter" data-field="photo">Picture</th> 
                <th data-formatter="checkIfEmpty" data-field="name">Name</th> 
                <th data-formatter="checkIfEmpty" data-field="email_1">Email
                </th>
                <th data-formatter="checkIfEmpty" data-field="mobile_phone_1">
                    Mobile</th>
                <th data-formatter="checkIfEmpty" data-field="type">Type</th>
            </tr>

        </thead>
        <tbody>
        </tbody>
    </table>
</div> -->
    
    <div id="customer-corporation-individual">
      <table id="corporation-individual" data-toggle="table" class="table table-sm" data-url="" data-pagination="true" data-search="true" data-show-refresh="true" data-show-toggle="false" data-show-columns="false" data-show-columns-toggle-all="false" data-show-export="false" data-query-params="queryParamsCorporationCustomer" data-side-pagination="server" data-page-list="[10, 25, 50, 100]" data-minimum-count-columns="2" data-show-pagination-switch="false" data-click-to-select="true">
          <thead>
          
            <tr>
                <th data-align="center" data-formatter="imageFormatter" data-field="photo">Picture</th> 
                <th data-formatter="checkIfEmpty" data-field="name">Name</th> 
                <th data-formatter="tableEmailFormatter" data-field="email_1">Email
                </th>
                <th data-formatter="tableMobileFormatter" data-field="mobile_phone_1">
                    Mobile</th>
                <!-- <th  data-formatter="checkIfEmpty" data-field="type" >Type</th> -->
            </tr>

            </thead>
            <tbody>
            </tbody>
      </table>
    </div>
 












<!-- <div id="customer-list-corporation" class=" customer-table">
    <table id="customer-table-corporation" data-search="true" data-custom-search="customSearch" data-buttons="buttonsFunction"
        data-url="" class="table table-bordered table-hover table-sm" data-query-params="queryParams"
        data-pagination="true">
        <thead>

            <tr>
                <th data-align="center" data-formatter="imageFormatter" data-field="photo">Picture</th> 
                <th data-formatter="checkIfEmpty" data-field="name">Name</th> 
                <th data-formatter="checkIfEmpty" data-field="email_1">Email
                </th>
                <th data-formatter="checkIfEmpty" data-field="mobile_phone_1">
                    Mobile</th>
                <th data-formatter="checkIfEmpty" data-field="type">Type</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <div class="card" id="grid-card-corporation" style="box-shadow: 0 0 0 0">

        <div class="overlay" id="loader-main-corporation" style="display:none;">
            <div class="fas fa-2x fa-sync-alt fa-spin ">
            </div>
            <strong><span class="ml-2" id="loading-message-corporation"> Loading, please
                    wait...</span></strong>
        </div>
        <div class="card-body pb-0" id="customer-grid-corporation" style="padding: .50rem">



            <div class="row d-flex align-items-stretch" id="customer-grid-data-corporation">

            </div>
        </div>
        <div id="grid-page-footer-customer-corporation">
            <div class="card-footer">
                <nav aria-label="Customer Page Navigation">
                    <ul class="pagination justify-content-center m-0" id="customer-grid-data-paging-corporation">
                    </ul>
                </nav>
            </div>
        </div>
    </div>


</div> -->                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-hobbies" role="tabpanel" aria-labelledby="custom-tabs-three-hobbies-tab">
                                    <div class="col-12 text-center mt-3" id="affiliations-page-footer" style="display: none ;">
    <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0" id="customer-affiliation-paging">No Record</ul>
        </nav>
    </div>
</div>

<div id="information_affiliations_div" class="mt-3" style="display: none ;">

    <div class="card card-primary card-outline card-tabs no-border-cardcard card-primary card-outline col-12" style="width: 100%;">
        <ul id="information_affiliations_list" class="list-group list-group-flush">
        </ul>
    </div>
</div>                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-gallery" role="tabpanel" aria-labelledby="custom-tabs-three-gallery-tab">


                                    <div class="container">
                                        <div id="customer-sales-image-data" class="row">

                                        </div>
                                    </div>



                                </div>
                                <!-- /.card -->
                            </div>
                        </div>

                    </div>
                    <!--card-body-->



                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>