<html>
<head>
	<title>Teacher</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="registration.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style type="text/css">
		.teacher {
             max-width: 500px;
             margin: auto;
             margin-top: 20px;
             background-color: pink;

         }
         #jj{
         	background-color: transparent;
         }


		
	</style>
</head>
<body>
	
	<form class="teacher" action="{{route('teachers')}}" method= "post">
        @csrf
		 <label >Teacher's full name</label>
		<input type="text" id="jj" class="form-control" name="name" placeholder="name"><br><br>

		 <label >Teacher's Date of birth</label>
         <input type="date" id="jj" class="form-control" name="dob" ><br><br>

         <label >Teacher's gender</label><br>
         <input type="radio" id="jj" class="form-check-input" name="gender" >Male
         <input type="radio" id="jj" class="form-check-input" name="gender">Female
         <br>
         <br>
         <label>Teacher's qualification</label>
         <input type="text" id="jj" class="form-control" name="qualification" placeholder="qualification"><br><br>

         <label>Teacher's phone</label>
         <input type="number" id="jj" name="phone" class="form-control" placeholder="phone"><br><br>
         <input type="submit" class="btn btn-primary mt-3" value="Sign up">
	</form>
</body>
</html>