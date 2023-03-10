<?php
require "connect.php"; 
$result;
$con = mysqli_connect($servername, $username, $password, $database);


?>

      


<!DOCTYPE html>
<html>
  <head>
    <title>Add Product</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/Trntable.css" rel="stylesheet">
   
   <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1, h4 {
 margin: 15px 0 4px;
      font-weight: 400;
      }
      span {
      color: rgb(15, 1, 1);
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: auto;
      padding-left: 40px;
      padding-top:-10px;
        background: rgb(242, 246, 246);
      box-shadow: 0 2px 5px #ccc; 
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      }
      input:hover, textarea:hover, select:hover {
      outline: none;
      border: 1px solid #095484;
      }
      .name input {
      margin-bottom: 10px;
      }
      select {
      padding: 7px 0;
      border-radius: 3px;
      border: 1px solid #ccc;
      background: #e6eef7;
      }
      option {
      background: #fff;
      }
      select, table {
      width: 100%;
      }
      .day-visited, .time-visited {
      position: relative;
      }
      .day-visited input, .time-visited input {
      width: calc(105%-100px);
      background: #e6eef7;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
 }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      .day-visited i, .time-visited i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      top: 8px;
      font-size: 20px;
      }
      .day-visited i, .time-visited i {
      right: 5px;
      z-index: 1;
      color: #a9a9a9;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      }
      .question-answer label {
      display: block;
      padding: 0 20px 10px 0;
      }
      .question-answer input {
      width: auto;
      margin-top: -2px;
      }
      th, td {
      width: 20px;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 25%;
      text-align: left;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
-moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #80a7c0;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      margin-right:20%;
      margin-bottom:20px;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      .name {
      display: flex;
      justify-content: space-between;
      }
      .name input {
      width: 30%;
      margin-bottom: 0;
      }
      th, td {
      word-break: keep-all;
      }
      .day-visited{
        width:25%;
      }
      }



      .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 40%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #c6dddf;
  color: white;
}

.modal-body {padding: 2px 16px;}

/* .modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
} */
    </style>
  </head>
  <body>
    <header>
      <!-- Sidebar -->
      <nav
           id="sidebarMenu"
           class="collapse d-lg-block sidebar collapse bg-white"
           >
        <div class="position-sticky">
          <div class="list-group list-group-flush mx-3 mt-4">
            <a
               href="index.html"
               class="list-group-item list-group-item-action py-2 ripple"
               aria-current="true"
               >
              <i class="fas fa-tachometer-alt fa-fw me-3"></i
                >
                <span>Main dashboard</span>
            </a>
            <a
               href="adddelivery.php"
               class="list-group-item list-group-item-action py-2 ripple "
               >
              <i class="fas fa-chart-area fa-fw me-3"></i
                ><span>Inventory</span>
            </a>
            <a
               href="#"
               class="list-group-item list-group-item-action py-2 ripple"
               ><i class="fas fa-lock fa-fw me-3"></i><span>Orders</span></a
              >
            <a
               href="#"
               class="list-group-item list-group-item-action py-2 ripple"
               ><i class="fas fa-chart-line fa-fw me-3"></i
              ><span>Analytics</span></a
              >
            <a
               href="#"
               class="list-group-item list-group-item-action py-2 ripple"
               >
              <i class="fas fa-chart-pie fa-fw me-3"></i><span>Reports</span>
            </a>
            <a
               href="#"
               class="list-group-item list-group-item-action py-2 ripple"
               ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Contact Us</span></a
              >
          </div>
        </div>
      </nav>
      <!-- Sidebar -->
    
      <!-- Navbar -->
      <nav
           id="main-navbar"
           class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
           >
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button
                  class="navbar-toggler"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#sidebarMenu"
                  aria-controls="sidebarMenu"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                  >
            <i class="fas fa-bars"></i>
          </button>
    
          <!-- Brand -->
          <a class="navbar-brand" href="#">
            Invento
          </a>
          <!-- Search form -->
          <form class="d-none d-md-flex input-group w-auto my-auto">
            <input
                   autocomplete="off"
                   type="search"
                   class="form-control rounded"
                   placeholder='Search (ctrl + "/" to focus)'
                   style="min-width: 225px"
                   />
            <span class="input-group-text border-0"
                  ><i class="fas fa-search"></i
              ></span>
          </form>
    
          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Notification dropdown -->
            <li class="nav-item dropdown">
              <a
                 class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                 href="#"
                 id="navbarDropdownMenuLink"
                 role="button"
                 data-mdb-toggle="dropdown"
                 aria-expanded="false"
                 >
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger"
                      >1</span
                  >
              </a>
              <ul
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink"
                  >
                <li><a class="dropdown-item" href="#">Some news</a></li>
                <li><a class="dropdown-item" href="#">Another news</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
    
            <!-- Icon -->
            <li class="nav-item">
              <a class="nav-link me-3 me-lg-0" href="#">
                <i class="fas fa-fill-drip"></i>
              </a>
            </li>
            <!-- Icon -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#">
                <i class="fab fa-github"></i>
              </a>
            </li>
    
            <!-- Icon dropdown -->
            <li class="nav-item dropdown">
              <a
                 class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                 href="#"
                 id="navbarDropdown"
                 role="button"
                 data-mdb-toggle="dropdown"
                 aria-expanded="false"
                 >
                <i class="united kingdom flag m-0"></i>
              </a>

    
            <!-- Avatar -->
            <li class="nav-item dropdown">
              <a
                 class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                 href="#"
                 id="navbarDropdownMenuLink"
                 role="button"
                 data-mdb-toggle="dropdown"
                 aria-expanded="false"
                 >
                <img
                     src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                     class="rounded-circle"
                     height="22"
                     alt=""
                     loading="lazy"
                     />
              </a>
              <ul
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdownMenuLink"
                  >
                <li><a class="dropdown-item" href="#">My profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
    </header>
    <!--Main Navigation-->
    
    <!-- MDB -->
        <!-- <script type="text/javascript" src="js/mdb.min.js"></script>
        Custom scripts -->
        <!-- <script type="text/javascript" src="js/script.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
     -->
    <main style="margin-top: 15vh;">
      
      <h1 style="text-align: center;">  Inventory</h1>
<div class="total">
<div class="tbl-header">
    <table> 
        <thead> 
            <tr> 
                <th>Product ID</th> 
                <th>No. of palletes</th> 
            </tr> 
        </thead>
</table>
</div>
<div class="tbl-content">
    <table>
        <tbody>

          <?php
            $sql = "SELECT * FROM delivery;";
            $result = mysqli_query($conn,$sql);
            
            if($result)
            {
                $rec=mysqli_fetch_all($result);
                $lentrn = count($rec);
            }
        
              for($records = $lentrn-1;$records>=0;$records-=1)
                {
                  ?>
          <tr>
            <td scope=row><?php echo $rec[$records][1]; ?> </td>
            <td scope=row><?php echo $rec[$records][4]; ?></td>
            
          </tr>
          <?php } ?>
          </tbody>

    </table>
</div>
</div>
        
        <button  class="btnbtn " id="myBtn">Add</button>
        
      </div>


      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Add Details</h2>
          </div>
          <div class="modal-body">
       
            <form action="addIncomOrders.php" method="post">
                <h1>Add Delivery Details</h1>
                <!-- <div class="row"> -->
                <div class="col">    
                <h4>Product Id<span>*</span></h4>
                <div class="name">
                <select name="Selectedproduct" id="product">
                <?php 
  $sql = "SELECT * FROM products;";
  $result = mysqli_query($conn,$sql);
  if($result)
  {
      $rec=mysqli_fetch_all($result);
      $lentrn = count($rec);
  }

    for($records = $lentrn-1;$records>=0;$records-=1)
      {
    ?>
     <option value="<?php echo $rec[$records][0]; ?>"><?php echo $rec[$records][1]; ?></option>
    <?php } ?>
                </div>
      </div>
            

                <div class="col">
                <h4>EstimateTime<span>*</span></h4>
        
                <div class="name">
                    <input type="datetime-local" name="esTime" placeholder="Category" required />
                  </div>
                  </div>

                <div class="col">
                <h4>Actual Time<span>*</span></h4>
                <div class="name">
                    <input type="datetime-local" name="acTime" placeholder="Category" required />
                  </div>
                  </div>

                  <div class="col">
                <h4>No. of palletes<span>*</span></h4>
                <div class="name">
                    <input type="number" name="palletes" placeholder="Category" required />
                  </div>
                  </div>

                  <div class="col">
                <h4>Date<span>*</span></h4>
                <div class="name">
                    <input type="date" name="exp" placeholder="Category" required />
                  </div>
                  </div>
                <!-- <h4>Email</h4>
                <input type="text" name="name" />
              -->
                <!-- <h4>Estimate Delivery Date<span>*</span></h4>
                <div class="day-visited">
                  <input type="date" name="dayvisited" required/>
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <h4>Actual Delivery Date<span>*</span></h4>
                <div class="day-visited">
                  <input type="date" name="dayvisited" required/>
                  <i class="fas fa-calendar-alt"></i>
                </div>
               
                <h4>No of Paletts<span>*</span></h4>
                <div class="name">
                    <input type="text" name="name" placeholder="No of Paletts" required />
                  </div> -->
                  <!-- <h4>Perishibale<span>*</span></h4>
                  <div class="question-answer">
                    <label><input type="radio" value="1" name="perish" /> Yes</label>
                    <label><input type="radio" value="0" name="perish" /> No</label>
                  </div> -->
                  <!-- <h4>Expiry Date<span>*</span></h4>
                  <div class="day-visited">
                    <input type="date" name="dayvisited" required/>
                    <i class="fas fa-calendar-alt"></i>
                  </div>
         -->
                       <div class="btn-block">
                  <button type="submit" name="submit" href="/">Add</button>
                </div>
        
        
              </form>
        <div>
            <br/>
            <br/>
            <br/>
            <br/>

        </div>

          </div>
        
        </div>
      
      </div>

      
    </main>
   
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
  </body>
</html>