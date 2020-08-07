<!DOCTYPE html>
<html>
<head>
	<title>Add Reseller</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    <div class="container">
    	<div class="row">
    		<h2 class="text-center"><a href="order.indozoom.net">Izoom</a></h2>
    		<div class="col-sm-4">
                 
	<h3>Add Reseller

	<a class="btn btn-secondary" href="/data">Back</a></h3>
	
	
	<br/>

	<form action="/data/store" method="post">
		{{ csrf_field() }}
		Kode <input type="text" class="form-control" name="kode" required="required"> <br/>
		Nama <input type="text" class="form-control" name="name" required="required"> <br/>
		Link <input type="text" class="form-control" name="link" required="required"> <br/>
		<input type="submit" class="btn btn-primary" value="Save Data">
	    </div>
	</form>

    		
        </div>
    </div>	
</body>
</html>