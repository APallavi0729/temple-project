<?php
  include "admin/database.php";
$stmt=$con->prepare("SELECT * FROM `scholarship_info`");
$stmt->execute();
$result=$stmt->get_result();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="assets/css/applys.css">
    <link rel="shortcut icon" href="assets/images/partner/favicon.png" type="image/png">
    <link rel="shortcut icon" href="assets/images/partner/favicon.png" type="image/png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="./assets/css/style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

  <style>
        * {
          box-sizing: border-box;
        }
        
        body {
          background-color: #f1f1f1;
          padding: 20px;
          font-family: Arial;
        }
        
        /* Center website */
        .main {
          max-width: 1000px;
          margin: auto;
        }
        
        
        h5 {
          align-items: center;
          text-align: center;
        }
        
        .row {
          margin: 10px -16px;
        }
        
        /* Add padding BETWEEN each column */
        .row,
        .row > .column {
          padding: 8px;
        }
        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: auto;
          display: none; /* Hide all elements by default */
        }
        
        /* Clear floats after rows */ 
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Content */
        .content {
          background-color: white;
          padding: 10px;
          text-align: center;
        }
        
        /* The "show" class is added to the filtered elements */
        .show {
          display: block;
        }
        
        /* Style the buttons */
        .btn {
          border: none;
          outline: none;
          padding: 8px 12px;
          background-color: rgb(233, 37, 37);
          cursor: pointer;
        }
        
        .btn:hover {
          background-color: rgb(189, 182, 182);
        }
        
        .btn.active {
          background-color: rgb(233, 134, 134);
          color: white;
        }
        .appl{
            height:38px;
            width:100px;
            background-color:rgb(179, 92, 92);
        }
        #myBtnContainer {display: block;}
        #myBtnContainer1 {display: none;}

@media screen and (max-width: 768px) {

  #myBtnContainer {display: none;}
  #myBtnContainer1 {display: block;}

}
#mview{
  align:center;
  width:250px;
  height:30px;
  border:3px solid #d81a1a;
  border-radius:10px;
}
#mview2{
  /* align:center; */

  text-align: center;
  align-items: center;
  width:550px;
  height:50px;
  border:3px solid #d81a1a;
  border-radius:10px;
}
        </style>
</head>
<body>

<header class="header">
	<div class="container-fluid">
		<div class="row d-flex justify-content-between">
			<div class="col-md-auto">
				<a href="index.php" class="logo"><img src="images/logo.png"alt="logo"height="70px"width="200px"></a>
			</div>
			<div class="col-md-auto">
				<nav class="main_nav">
					
				</nav>
			</div>
		</div>		
	</div>
</header>	
<br>
<br>
<br>
<br>




<!-- 
    <h2>User view with filter</h2> -->
<!-- <div id="myBtnContainer">
  <button class="btn  active" id="all" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" id="Andhra-Pradesh" onclick="filterSelection('Andhra-Pradesh')">Andhra Pradesh</button>
  <button class="btn" id="Arunachal-Pradesh" onclick="filterSelection('Arunachal-Pradesh')"> Arunachal Pradesh</button>
  <button class="btn" id="Assam" onclick="filterSelection('Assam')">Assam</button>
  <button class="btn" id="Bihar" onclick="filterSelection('Bihar')">Bihar</button>
  <button class="btn" id="Chhatisgarh" onclick="filterSelection('Chhatisgarh')">Chhatisgarh</button>
  <button class="btn" id="Goa" onclick="filterSelection('Goa')">Goa</button>
  <button class="btn" id="Gujrat" onclick="filterSelection('Gujrat')">Gujrat</button>
  <button class="btn" id="Haryana" onclick="filterSelection('Haryana')">Haryana</button>
  <button class="btn" id="Himanchal-Pradesh" onclick="filterSelection('Himanchal-Pradesh')">Himanchal Pradesh</button>
  <button class="btn" id="Jammu & Kashmir" onclick="filterSelection('Jammu & Kashmir')">Jammu & Kashmir</button>
  <button class="btn" id="Jharkhand" onclick="filterSelection('Jharkhand')"> Jharkhand</button>
  <button class="btn" id="Karnataka" onclick="filterSelection('Karnataka')">Karnataka</button>
  <button class="btn" id="Kerala" onclick="filterSelection('Kerala')">Kerala</button>
  <button class="btn" id="Madhya-Pradesh" onclick="filterSelection('Madhya-Pradesh')">Madhya Pradesh</button>
  <button class="btn" id="Maharastra" onclick="filterSelection('Maharastra')">Maharastra</button>
  <button class="btn" id="Manipur" onclick="filterSelection('Manipur')">Manipur</button>
  <button class="btn" id="Meghalaya" onclick="filterSelection('Meghalaya')">Meghalaya</button>
  <button class="btn" id="Mizoram" onclick="filterSelection('Mizoram')">Mizoram</button>
  <button class="btn" id="Nagaland" onclick="filterSelection('Nagaland')">Nagaland</button>
  <button class="btn" id="Odisa" onclick="filterSelection('Odisa')">Odisa</button>
  <button class="btn" id="Rajasthan" onclick="filterSelection('Rajasthan')">Rajasthan</button>
  <button class="btn" id="Sikkim" onclick="filterSelection('Sikkim')">Sikkim</button>
  <button class="btn" id="Tamil-Nadu" onclick="filterSelection('Tamil-Nadu')">Tamil Nadu</button>
  <button class="btn" id="Telangana" onclick="filterSelection('Telangana')">Telangana</button>
  <button class="btn" id="Tripura" onclick="filterSelection('Tripura')">Tripura</button>
  <button class="btn" id="Uttar-Pradesh" onclick="filterSelection('Uttar-Pradesh')">Uttar Pradesh</button>
  <button class="btn" id="Uttarakhand" onclick="filterSelection('Uttarakhand')">Uttarakhand</button>
  <button class="btn" id="West-Bengal" onclick="filterSelection('West-Bengal')">West Bengal</button>
  <button class="btn" id="Chennai" onclick="filterSelection('Chennai')">Chennai</button>
</div> -->
<h5>
<div id="myBtnContainer">
        <select onchange="filterSelection(this.value)" id="mview2">
  <option value="all" selected> Show all</option>
  <option value="Andhra-Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal-Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhatisgarh">Chhatisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himanchal-Pradesh">Himanchal Pradesh</option>
                                <option value="JandK">Jammu & Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya-Pradesh">Madhya Pradesh</option>
                                <option value="Maharastra">Maharastra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisa">Odisa</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil-Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar-Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West-Bengal">West Bengal</option>
                                <option value="Chennai">Chennai</option>
      </select>
</div></h5>
      <div id="myBtnContainer1">
        <select onchange="filterSelection(this.value)" id="mview">
  <option value="all" selected> Show all</option>
  <option value="Andhra-Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal-Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhatisgarh">Chhatisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himanchal-Pradesh">Himanchal Pradesh</option>
                                <option value="JandK">Jammu & Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya-Pradesh">Madhya Pradesh</option>
                                <option value="Maharastra">Maharastra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisa">Odisa</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil-Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar-Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West-Bengal">West Bengal</option>
                                <option value="Chennai">Chennai</option>
      </select>
</div>

<div class="row">
<?php while($row=$result->fetch_assoc()){?>
  <div class="column <?php echo $row['for_class']; ?>">
    <div class="content"style="width: 18rem; height: auto;">
      <img src="admin/image/<?php echo $row['image_logo']; ?>" alt="Mountains" align-items="center";>
      <h2><?php echo $row['title']; ?></h2>
      <p><font color="red"><h4>History: </h4></font><?php echo $row['history']; ?></p>
      <p><font color="red"><h4>Details: </h4></font><?php echo $row['details']; ?></p>
      <p><font color="red"><h4>For_states: </h4></font><?php echo $row['for_class']; ?></p>
      <br>
      <p><button class="btn" onclick="window.location='<?php echo $row['link']; ?>'">Search Now</button></p>
    </div>
  </div>
  <?php } $stmt->close(); ?>
</div>



  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
  var x=window.location.search.replace(/\%20/g," ");
  if(x=="")
  {
    filterSelection("all");
  }else{
filterSelection(x.split("?")[1]);}
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
