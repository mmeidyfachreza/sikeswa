<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('template/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('template/css/fontastic.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- Bootstrap Select CSS-->
    <link rel="stylesheet" href="{{asset('template/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- Bootstrap Touchspin CSS-->
    <link rel="stylesheet" href="{{asset('template/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}">
    <!-- Bootstrap Datepicker CSS-->
    <link rel="stylesheet" href="{{asset('template/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}">
    <!-- Bootstrap Tags input CSS-->
    <link rel="stylesheet" href="{{asset('template/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <!-- No UI Slider-->
    <link rel="stylesheet" href="{{asset('template/vendor/nouislider/nouislider.css')}}">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{asset('template/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{asset('template/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('template/css/style.default.premium.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('template/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('template/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><a href="pages-profile.html"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle"></a>
            <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li><a href="index.html"> <i class="icon-home"></i>Home                             </a></li>
            <li class="active"><a href="#formsDropdown" aria-expanded="true" data-toggle="collapse"> <i class="icon-form"></i>Forms </a>
              <ul id="formsDropdown" class="collapse list-unstyled show">
                <li><a href="forms.html">Basic forms</a></li>
                <li class="active"><a href="forms-advanced.html">Advanced forms</a></li>
                <li><a href="forms-autocomplete.html">Autocomplete</a></li>
                <li><a href="forms-dropzone.html">Files upload</a></li>
                <li><a href="forms-texteditor.html">Text editor</a></li>
                <li><a href="forms-validation.html">Validation</a></li>
              </ul>
            </li>
            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>Charts </a>
              <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="charts.html">Charts</a></li>
                <li><a href="charts-gauge-sparkline.html">Gauge + Sparkline</a></li>
              </ul>
            </li>
            <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Tables </a>
               <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="tables.html">Bootstrap tables</a></li>
                <li><a href="tables-datatable.html">Datatable</a></li>
              </ul>
            </li>
            <li><a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Components </a>
              <ul id="componentsDropdown" class="collapse list-unstyled ">
                <li><a href="components-cards.html">Cards</a></li>
                <li><a href="components-calendar.html">Calendar</a></li>
                <li><a href="components-gallery.html">Gallery</a></li>
                <li><a href="components-loading-buttons.html">Loading buttons</a></li>
                <li><a href="components-map.html">Maps</a></li>
                <li><a href="components-notifications.html">Notifications</a></li>
                <li><a href="components-preloader.html">Preloaders</a></li>
              </ul>
            </li>
            <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Pages </a>
              <ul id="pagesDropdown" class="collapse list-unstyled ">
                <li><a href="pages-contacts.html">Contacts</a></li>
                <li><a href="pages-invoice.html">Invoice</a></li>
                <li><a href="login.html">Login page</a></li>
                <li><a href="login-2.html">Login v.2 <span class="badge badge-info">New</span></a></li>
                <li><a href="pages-profile.html">Profile</a></li>
                <li><a href="pages-pricing.html">Pricing table</a></li>
              </ul>
            </li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo
                <div class="badge badge-warning">6 New</div></a></li>
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled">
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French                                                         </span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Kesehatan </li>
            </ul>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">Kesehatan </h1>
            </header>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <li>Proses Gagal!!!</li>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Ubah Siswa</h4>
                        </div>
                        <div class="card-body">
                            @isset ($health)

                            <form enctype="multipart/form-data" action="{{route('siswa.update',$health->id)}}" method="POST">
                            @method('PUT')
                            @else
                            <form enctype="multipart/form-data" action="{{route('siswa.store')}}" method="POST">
                            @endisset
                            @csrf
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input type="text" name="nis" placeholder="Masukan Nomor Induk Siswa" class="form-control input-datepicker-autoclose"
                                            value="{{old('nis', $health->date ?? '01/01/2020')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Variant 1 - Date</label>
                                        <input type="text" value="10/20/2017" class="form-control input-datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="name" placeholder="Masukan Nama Lengkap" class="form-control"
                                            value="{{old('name', $health->name ?? ' ')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat lahir</label>
                                        <input type="text" name="born_city" placeholder="Masukan Tempat Lahir"
                                            class="form-control" value="{{old('born_city', $health->born_city ?? ' ')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="address" id="" cols="30" rows="5" class="form-control"
                                            required>{{old('address', $health->address ?? ' ')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Asal Sekolah</label>
                                        <input type="text" name="school_from" placeholder="Masukan Asal Sekolah"
                                            class="form-control" value="{{old('school_from', $health->school_from ?? ' ')}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Ayah</label>
                                        <input type="text" name='father_name' placeholder="Masukan Nama Ayah" class="form-control"
                                            value="{{old('father_name', $health->father_name ?? ' ')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Ibu</label>
                                        <input type="text" name='mother_name' placeholder="Masukan Nama Ibu" class="form-control"
                                            value="{{old('mother_name', $health->mother_name ?? ' ')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Wali</label>
                                        <input type="text" name='guardian' placeholder="Masukan Nama Wali (Jika ada)"
                                            class="form-control" value="{{old('guardian', $health->guardian ?? ' ')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor BPJS</label>
                                        <input type="text" name='no_bpjs' placeholder="Masukan nomor bpjs" class="form-control"
                                            value="{{old('no_bpjs', $health->no_bpjs ?? ' ')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Faskes BPJS</label>
                                        <input type="text" name='faskes_bpjs' placeholder="Masukan Faskes BPJS"
                                            class="form-control" value="{{old('faskes_bpjs', $health->faskes_bpjs ?? ' ')}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" class="form-control-file" name="avatar">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                        <a href="{{URL::previous()}}" class="btn btn-danger">Batal</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Advanced forms       </li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Advanced forms            </h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <!-- No UI Slider-->
              <div class="card">
                <div class="card-header">
                  <h4>No UI Slider</h4>
                </div>
                <div class="card-body">
                  <p>Read more about this component at <a href="https://refreshless.com/nouislider/">https://refreshless.com/nouislider/</a>.</p>
                  <form>
                    <div class="nouislider">
                      <div id="basicNoUISlider"></div>
                    </div>
                    <div class="nouislider mt-5">
                      <div id="stepNoUISlider"></div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Bootstrap Select-->
              <div class="card">
                <div class="card-header">
                  <h4>Bootstrap Select</h4>
                </div>
                <div class="card-body">
                  <p>Read more about Bootstrap Select at <a href="https://silviomoreto.github.io/bootstrap-select/">https://silviomoreto.github.io/bootstrap-select/</a>.</p>
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Variant 1</label>
                      <div class="col-sm-9">
                        <select data-style="btn-primary" class="selectpicker">
                          <option>Mustard</option>
                          <option>Ketchup</option>
                          <option>Relish</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Variant 2 - Secondary</label>
                      <div class="col-sm-9">
                        <select data-style="btn-secondary" class="selectpicker">
                          <option>Mustard</option>
                          <option>Ketchup</option>
                          <option>Relish</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Variant 3 - Dark outlined</label>
                      <div class="col-sm-9">
                        <select data-style="btn-outline-dark" title="Choose one of the following" class="selectpicker">
                          <option>Mustard</option>
                          <option>Ketchup</option>
                          <option>Relish</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- jQuery Multiselect-->
              <div class="card">
                <div class="card-header">
                  <h4>jQuery Multiselect</h4>
                </div>
                <div class="card-body">
                  <p>jQuery Multiselect is a user-friendlier drop-in replacement for the standard <code>&lt;select&gt;</code> with multiple attribute activated. Read more about jQuery Multiselect at <a href="http://loudev.com/">http://loudev.com/</a>.</p>
                  <form>
                    <div class="form-group">
                      <label class="form-control-label">Multiselect - simple with pre-selected values</label>
                      <select id="multiselect1" multiple="multiple" name="multiselect1[]">
                        <option value="Baker" selected>Baker</option>
                        <option value="Independence">Independence</option>
                        <option value="Emerald">Emerald</option>
                        <option value="Beyerville">Beyerville</option>
                        <option value="Vallonia">Vallonia</option>
                        <option value="Weogufka" selected>Weogufka</option>
                        <option value="Catherine">Catherine</option>
                        <option value="Healy">Healy</option>
                        <option value="Coalmont">Coalmont</option>
                        <option value="Glenville">Glenville</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Datepickers-->
              <div class="card">
                <div class="card-header">
                  <h4>Datepicker</h4>
                </div>
                <div class="card-body">
                  <p>Read more about Bootstrap Datepicker at <a href="https://github.com/uxsolutions/bootstrap-datepicker">https://github.com/uxsolutions/bootstrap-datepicker</a>.</p>
                  <form>
                    <div class="form-group">
                      <label class="form-control-label">Variant 1 - Date</label>
                      <input type="text" value="10/20/2017" class="form-control input-datepicker">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label">Variant 2 - Autoclose</label>
                      <input type="text" value="06/22/1980" class="form-control input-datepicker-autoclose">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label">Variant 3 - Multiple dates</label>
                      <input type="text" class="form-control input-datepicker-multiple">
                    </div>
                  </form>
                </div>
              </div>
              <!-- Bootstrap Touchspin-->
              <div class="card">
                <div class="card-header">
                  <h4>Bootstrap Touchspin</h4>
                </div>
                <div class="card-body">
                  <p>Read more about Touchspin at <a href="https://www.virtuosoft.eu/code/bootstrap-touchspin/">https://www.virtuosoft.eu/code/bootstrap-touchspin/</a>.</p>
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Variant 1</label>
                      <div class="col-sm-9">
                        <input type="text" name="touchspin0" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Variant 2</label>
                      <div class="col-sm-9">
                        <input type="text" value="55.50" name="touchspin1" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Variant 3</label>
                      <div class="col-sm-9">
                        <input type="text" value="1500" name="touchspin2" class="form-control">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Bootstrap Tags Input-->
              <div class="card">
                <div class="card-header">
                  <h4>Bootstrap Tags Input</h4>
                </div>
                <div class="card-body">
                  <p>Read more about Tags Input at <a href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/">https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/</a>.</p>
                  <form>
                    <div class="form-group">
                      <label class="form-control-label">Variant 1 - As an <code>&lt;input&gt;</code></label>
                      <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="Add tags">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label">Variant 2 - As a <code>&lt;select&gt;</code></label>
                      <select multiple="" data-role="tagsinput">
                        <option value="Amsterdam">Amsterdam                                                </option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Ubah Siswa</h4>
                    </div>
                    <div class="card-body">
                        @isset ($health)

                        <form enctype="multipart/form-data" action="{{route('siswa.update',$health->id)}}" method="POST">
                        @method('PUT')
                        @else
                        <form enctype="multipart/form-data" action="{{route('siswa.store')}}" method="POST">
                        @endisset
                        @csrf
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" name="nis" placeholder="Masukan Nomor Induk Siswa" class="form-control input-datepicker-autoclose"
                                        value="{{old('nis', $health->date ?? '01/01/2020')}}" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Variant 1 - Date</label>
                                    <input type="text" value="10/20/2017" class="form-control input-datepicker">
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" placeholder="Masukan Nama Lengkap" class="form-control"
                                        value="{{old('name', $health->name ?? ' ')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Tempat lahir</label>
                                    <input type="text" name="born_city" placeholder="Masukan Tempat Lahir"
                                        class="form-control" value="{{old('born_city', $health->born_city ?? ' ')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="address" id="" cols="30" rows="5" class="form-control"
                                        required>{{old('address', $health->address ?? ' ')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Asal Sekolah</label>
                                    <input type="text" name="school_from" placeholder="Masukan Asal Sekolah"
                                        class="form-control" value="{{old('school_from', $health->school_from ?? ' ')}}" required>
                                </div>

                                <div class="form-group">
                                    <label>Ayah</label>
                                    <input type="text" name='father_name' placeholder="Masukan Nama Ayah" class="form-control"
                                        value="{{old('father_name', $health->father_name ?? ' ')}}">
                                </div>
                                <div class="form-group">
                                    <label>Ibu</label>
                                    <input type="text" name='mother_name' placeholder="Masukan Nama Ibu" class="form-control"
                                        value="{{old('mother_name', $health->mother_name ?? ' ')}}">
                                </div>
                                <div class="form-group">
                                    <label>Wali</label>
                                    <input type="text" name='guardian' placeholder="Masukan Nama Wali (Jika ada)"
                                        class="form-control" value="{{old('guardian', $health->guardian ?? ' ')}}">
                                </div>
                                <div class="form-group">
                                    <label>Nomor BPJS</label>
                                    <input type="text" name='no_bpjs' placeholder="Masukan nomor bpjs" class="form-control"
                                        value="{{old('no_bpjs', $health->no_bpjs ?? ' ')}}">
                                </div>
                                <div class="form-group">
                                    <label>Faskes BPJS</label>
                                    <input type="text" name='faskes_bpjs' placeholder="Masukan Faskes BPJS"
                                        class="form-control" value="{{old('faskes_bpjs', $health->faskes_bpjs ?? ' ')}}">
                                </div>

                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control-file" name="avatar">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="submit" value="Simpan" class="btn btn-primary">
                                    <a href="{{URL::previous()}}" class="btn btn-danger">Batal</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
          <!-- Bootstrap Input Masks-->
          <div class="card">
            <div class="card-header">
              <h4>Bootstrap Input Masks</h4>
            </div>
            <div class="card-body">
              <p>Input masks can be used to force the user to enter data conform a specific format. Unlike validation, the user can't enter any other key than the ones specified by the mask.</p>
              <p class="mb-4">Read more about Bootstrap Input Masks at <a href="http://www.jasny.net/bootstrap/javascript/">http://www.jasny.net/bootstrap/javascript/</a>.</p>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>ISBN 1</label>
                    <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="form-control"><small class="help-block-none">e.g &quot;999-99-999-9999-9&quot;</small>
                  </div>
                  <div class="form-group">
                    <label>ISBN 2</label>
                    <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control"><small class="help-block-none">999 99 999 9999 9</small>
                  </div>
                  <div class="form-group">
                    <label>ISBN 3</label>
                    <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control"><small class="help-block-none">999/99/999/9999/9</small>
                  </div>
                  <div class="form-group">
                    <label>IPV4</label>
                    <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control"><small class="help-block-none">192.168.110.310</small>
                  </div>
                  <div class="form-group">
                    <label>IPV6</label>
                    <input type="text" placeholder="" data-mask="wwww:wwww:wwww:w:www:wwww:wwww:wwww" class="form-control"><small class="help-block-none">4deg:1340:6547:2:540:h8je:ve73:98pd</small>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Tax ID</label>
                    <input type="text" placeholder="" data-mask="99-9999999" class="form-control"><span class="font-13 text-muted">99-9999999</span>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control"><span class="font-13 text-muted">(999) 999-9999</span>
                  </div>
                  <div class="form-group">
                    <label>Currency</label>
                    <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control"><span class="font-13 text-muted">$ 999,999,999.99</span>
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="text" placeholder="" data-mask="99/99/9999" class="form-control"><span class="font-13 text-muted">dd/mm/yyyy</span>
                  </div>
                  <div class="form-group m-b-0">
                    <label>Date 2</label>
                    <input type="text" placeholder="" data-mask="99-99-9999" class="form-control"><span class="font-13 text-muted">dd-mm-yyyy                                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2020</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Version 1.4.7</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{asset('template/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('template/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('template/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Bootstrap Select-->
    <script src="{{asset('template/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <!-- Bootstrap Touchspin-->
    <script src="{{asset('template/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <!-- Bootstrap No UI Slider-->
    <script src="{{asset('template/vendor/nouislider/nouislider.min.js')}}"></script>
    <!-- Bootstrap DatePicker-->
    <script src="{{asset('template/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap Tags Input-->
    <script src="{{asset('template/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <!-- Jasny Bootstrap - Input Masks-->
    <script src="{{asset('template/vendor/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"> </script>
    <!-- MultiSelect-->
    <script src="{{asset('template/vendor/multiselect/js/jquery.multi-select.js')}}"> </script>
    <!-- Forms init-->
    <script src="{{asset('template/js/forms-advanced.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('template/js/front.js')}}"></script>
  </body>
</html>
