<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
       <form method="post" action="/imagedemo" enctype="multipart/form-data">
       	 		
       	 		@csrf
       	 		<input type="text" name="sname">
       	 		<input type="text" name="result">
       	 		<input type="file" name="ipath">
       	 		<input type="button" name="submit" value="submit">

       </form>
</body>
</html>