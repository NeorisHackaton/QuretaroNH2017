<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminNeoris | Dashboard</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?=base_url()?>rsc/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>index.php/Admin" class="logo">

      <span class="logo-mini"><b>N</b></span>
    
      <span class="logo-lg"><img src="<?=base_url()?>rsc/img/logo.png" alt="NeorisAdmin"></span>
    </a>
  
    <nav class="navbar navbar-static-top">
   
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>rsc/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>rsc/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  Admin
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!--<li class="header">MAIN NAVIGATION</li>-->
        <li id="menuActivoInicio">
          <a href="<?=base_url()?>index.php/Admin">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>
          </a>
        </li>
        <li class="menuActivoProyecto treeview">
          <a href="#">
            <i class="fa fa-check-square-o"></i>
            <span>Proyectos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="menuActivoAgregarProyecto"><a href="<?=base_url()?>index.php/Proyecto"><i class="fa fa-plus"></i>Agregar</a></li>
            <li id="menuActivoEditarProyecto"><a href="<?=base_url()?>index.php/Proyecto/Editar"><i class="fa fa-minus"></i>Ver / Editar</a></li>
          </ul>
        </li>
        <li class="menuActivoRecurso treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Recursos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="menuActivoAgregarRecurso"><a href="<?=base_url()?>index.php/Recursos"><i class="fa fa-plus"></i>Agregar</a></li>
            <li id="menuActivoEditarRecurso"><a href="<?=base_url()?>index.php/Recursos/EditarRecurso"><i class="fa fa-minus"></i>Ver / Editar</a></li>
          </ul>
        </li>
        <li class="menuActivoOT treeview">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Orden de Trabajo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="menuActivoAgregarOT"><a href="<?=base_url()?>index.php/OT"><i class="fa fa-plus"></i>Agregar</a></li>
            <li id="menuActivoEditarOT"><a href="<?=base_url()?>index.php/OT/EditarOT"><i class="fa fa-minus"></i>Ver / Editar</a></li>
          </ul>
        </li>
        <li class="menuActivoConfOT treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Configurar OT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="menuActivoAgregarConfOT"><a href="<?=base_url()?>index.php/ConfiguracionOT"><i class="fa fa-plus"></i>Configurar</a></li>
            <li id="menuActivoEditarConfOT"><a href="<?=base_url()?>index.php/ConfiguracionOT/editarTO"><i class="fa fa-minus"></i>Ver / Editar</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

      <?=$vista?>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> alpha 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="http://www.neoris.com">Neoris</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url()?>rsc/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>rsc/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?=base_url()?>rsc/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>rsc/bower_components/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>rsc/bower_components/morris.js/morris.min.js"></script>
<script src="<?=base_url()?>rsc/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>rsc/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>rsc/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?=base_url()?>rsc/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?=base_url()?>rsc/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>rsc/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?=base_url()?>rsc/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url()?>rsc/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?=base_url()?>rsc/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>rsc/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url()?>rsc/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>rsc/dist/js/pages/dashboard.js"></script>
<script src="<?=base_url()?>rsc/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?=base_url()?>rsc/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?=base_url()?>rsc/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?=base_url()?>rsc/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="<?=base_url()?>rsc/dist/js/demo.js"></script>
<script src="<?=base_url()?>rsc/js/progressbar.js"></script>
<script src="<?=base_url()?>rsc/js/recursos.js"></script>
<script src="<?=base_url()?>rsc/js/proyectos.js"></script>
<script src="<?=base_url()?>rsc/js/OTfunctions.js"></script>
<script src="<?=base_url()?>rsc/js/recursos_edit.js"></script>
<script>
    $(function () {

        //Initialize Select2 Elements
        $('.select2').select2()
    
        //Datemask dd/mm/YYYY
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()
    
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
        {
            ranges   : {
            'Today'       : [moment(), moment()],
            'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month'  : [moment().startOf('month'), moment().endOf('month')],
            'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate  : moment()
        },
        function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
        )
    
        //Date picker
        $('#datepickerInicio').datepicker({
            autoclose: true
        })

        $('#datepickerFin').datepicker({
            autoclose: true
        })
    })

    $('document').ready(function(){

        if($('#sInicio').length == 1) $('#menuActivoInicio').addClass('active');
        else if($('#sAgregarProyecto').length == 1) {
          $('.menuActivoProyecto').addClass('active');
          $('#menuActivoAgregarProyecto').addClass('active');
        } else if($('#sEditarProyecto').length == 1) {
          $('.menuActivoProyecto').addClass('active');
          $('#menuActivoEditarProyecto').addClass('active');
        } else if($('#sAgregarRecurso').length == 1) {
          $('.menuActivoRecurso').addClass('active');
          $('#menuActivoAgregarRecurso').addClass('active');
        } else if($('#sEditarRecurso').length == 1) {
          $('.menuActivoRecurso').addClass('active');
          $('#menuActivoEditarRecurso').addClass('active');
        } else if($('#sAgregarOT').length == 1) {
          $('.menuActivoOT').addClass('active');
          $('#menuActivoAgregarOT').addClass('active');
        } else if($('#sEditarOT').length == 1) {
          $('.menuActivoOT').addClass('active');
          $('#menuActivoAgregarOT').addClass('active');
        } else if($('#sAgregarConfOT').length == 1) {
          $('.menuActivoConfOT').addClass('active');
          $('#menuActivoAgregarConfOT').addClass('active');
        } else if($('#sEditarConfOT').length == 1) {
          $('.menuActivoConfOT').addClass('active');
          $('#menuActivoEditarConfOT').addClass('active');
        }


        var elemD = document.getElementById("progress-bar-danger");
        var elemS = document.getElementById("progress-bar-success");
        
        var totalLi = $('.callout-warning ul li').length + $('.callout-success ul li').length;
        var widthDanger = $('.callout-warning ul li').length/totalLi * 100;
        var widthSuccess = $('.callout-success ul li').length/totalLi * 100;
        
        console.log(totalLi);
        console.log(widthDanger);
        elemD.style.width = widthDanger + '%';
        elemD.innerHTML = widthDanger + '%';

        $('.alert-dismissible').click(function() {
          var elemD = document.getElementById("progress-bar-danger");
          var elemS = document.getElementById("progress-bar-success");
          
          var totalLi = $('.callout-warning ul li').length + $('.callout-success ul li').length;
          var widthDanger = $('.callout-warning ul li').length/totalLi * 100;
          var widthSuccess = $('.callout-success ul li').length/totalLi * 100;
          
          console.log(totalLi);
          console.log(widthDanger);
          elemD.style.width = widthDanger + '%';
          elemD.innerHTML = widthDanger + '%';
        });
        
    })

</script>
</body>
</html>
