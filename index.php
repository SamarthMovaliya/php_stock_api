<?php
 include(config/config.php);

//  $config = new Config();

if(isset($_REQUEST['btn_add'])){
	$name=$_REQUEST['name'];
	$age=$_REQUEST['age'];
	$course=$_REQUEST['course'];

  // $res = $configure->connect_db();

  // if($res == true)
  // {
	// echo "<br />"."Name" ." : ". $name. "<br />";
	// echo "Age" ." : ". $age. "<br />";
	// echo "Course" ." : ". $course. "<br />"; 
  // }


}
?>
<html>
	<head>
	     <title>HomePage</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        </head>
	<body>  
	   <div class="border">
        <div class="container mt-5">
          <div class="col col-4">
             <h1>Student Form</h1>
               <hr>
             <h5>Enter Student data and insert it into MySQL.</h5><br><br>
             <form action="",method="POST">
			     <div class="col col-4">
                    <h4>Name :</h4> 
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" name="name" type="text" placeholder="enter name..."/><br/> 
                    </div>   
                 </div>
                 <div class="col col-4">
                     <h4>Age :</h4> 
                     <div class="input-group">
                     <span class="input-group-addon"><i class="material-icons" style="font-size:16px">contact_phone</i></span>
                     <input class="form-control" name="age" type="number" placeholder="enter age..."/><br/> 
                     </div>   
                 </div>
                 <div class="col col-4">
                     <h4>Course :</h4> 
                     <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span> 
                     <input class="form-control" name="course" type="text" placeholder="enter course..."/><br/>   
                     </div>
                 </div>
                 <br>
			    <button class="btn btn-success" name="btn_add">Insert Student</button>
	         </form>
         </div>
        </div>
       </div>
	</body>
</html>