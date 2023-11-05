<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>Saniya</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-100">
  <?php include '../api/usersidebar.php';
  sideBar('ProgressionTable');
  ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
              Progression
            </li>
          </ol>
          <h6 class="font-weight-bolder mb-0">PROGRESSION</h6>
        </nav>
        <a class="btn bg-gradient-danger mb-0" href="../api/logout.php">&nbsp;&nbsp;logout</a>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container p-4">
      <form action="../api/addprogression.php" method="POST" enctype="multipart/form-data" onsubmit="return formValidate()">
        <div class="modal-body">
          <div id="errormsg"></div>
          <div class="form-group">
            <label for="text1">Name of Student Entrolling into Higher Education</label><br>
            <input type="hidden" name="type" value="user" />
            <input type="text" class="form-control px-2" id="ename" name="Sname" placeholder="Enter Name" />
          </div>
          <div class="form-group">
            <label for="text1">Program Graduated From</label>
            <input type="text" class="form-control px-2" id="programid" name="ProgramGraduated" placeholder="enter course" /><br>

            <div class="form-group">
              <label for="text1">Name of Institution Joined </label>
              <input type="text" class="form-control px-2" id="insid" name="InstitutionName" placeholder="enter name of institution" /><br>
              <div class="form-group">
                <label for="text1">Name of Programme Admitted To </label>
                <input type="text" class="form-control px-2" id="insid" name="ProgrammeName" placeholder="enter name of programme admitted" />
              </div>
              <div class="form-group">
                <label for="file1">Upload certificate</label>
                <input type="file" name="image" class="form-control" id="eimage" accept="image/png, image/jpeg" />
              </div>
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </form>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1" />
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">
            Transparent
          </button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">
            White
          </button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">
          You can change the sidenav type just on desktop view.
        </p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)" />
        </div>
        <hr class="horizontal dark my-sm-4" />
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i>
            Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <script>
    const fileInput = document.getElementById("eimage");

    function imgValidate() {
      {
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (!allowedExtensions.exec(filePath)) {
          fileInput.value = "";
          document.getElementById("errormsg").innerHTML = '<div class="alert alert-danger" role="alert"> It Is Not Image File</div>'
          return false;
        }
        if (fileInput.files[0].size > 500000) {
          document.getElementById("errormsg").innerHTML = '<div class="alert alert-danger" role="alert">Uploaded Image Is Too Large</div>'
          fileInput.value = "";
          return false;
        }
        document.getElementById("errormsg").innerHTML = ""
      }
    }
    fileInput.onchange = function() {
      imgValidate()
    };

    function formValidate() {
      const sname = document.getElementById("ename");
      const program = document.getElementById("programid");
      const instname = document.getElementById("insid");
      const promname = document.getElementById("insid");
      const choosefile = document.getElementById("eimage");
      if (sname.value == "") {
        sname.focus();
        document.getElementById("errormsg").innerHTML = '<div class="alert alert-danger" role="alert"> Fill The Name Of Student!</div>'
        return false;
      }

      if (program.value == "") {
        program.focus();
        document.getElementById("errormsg").innerHTML = '<div class="alert alert-danger" role="alert"> Fill The Program Graduated From!</div>'
        return false;
      }

      if (instname.value == "") {
        instname.focus();
        document.getElementById("errormsg").innerHTML = '<div class="alert alert-danger" role="alert"> Fill The Name Of Institution Joined!</div>'
        return false;
      }

      if (promname.value == "") {
        promname.focus();
        document.getElementById("errormsg").innerHTML = '<div class="alert alert-danger" role="alert"> Fill The Name Of Programme Admitted To!</div>'
        return false;
      }
      if (choosefile.value == "") {
        choosefile.focus();
        document.getElementById("errormsg").innerHTML = '<div class="alert alert-danger" role="alert"> Select A File</div>'
        return false;
      }
    }
  </script>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
        damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>