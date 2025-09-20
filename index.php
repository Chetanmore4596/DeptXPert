<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CTRL+TECH</title>
    <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css",
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC",
    crossorigin="anonymous">
    <link  rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
  <div>
    <script>
    document.addEventListener("contextmenu", function (e){
      e.preventDefault();
    }, false);
    </script>
    <div class="img"></div>
    <h3>DeptXpert</h3>
    <h4>CTRL+TECH</h4><br><br>
    <div class="container text-center py-5">
      <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
          <div class="col">
            <div class="card">
              <img src="Principal.jpg" class="card-img-top">
              <div class="card-body">
                  <h5 class="card-title">Principal</h5>
                  <p class="card-text">Dr.R A Deshmukh</p>
                  <a href="Principal/principalogin.php"><button>Principal</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="Teacher.png" class="card-img-top">
              <div class="card-body">
                  <h5 class="card-title">Teacher</h5>
                <p class="card-text">CO-Dept Teaching Staff</p>
                <a href="Teacher\teacherlogin.php"><button>Teacher</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="Student.png" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Student</h5>
                <p class="card-text">FY-SY-TY</p>
                <a href="Student/Studentlogin.php"><button>Student</button></a>
            </div>
          </div>
        </div>
    </div>
  </div>
  </body>
</html>
