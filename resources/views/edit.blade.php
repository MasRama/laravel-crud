<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<div class="container">
    	<div class="row">
          <h2 class="text-center"><a href="order.indozoom.net">Izoom</a></h2>
          <div class="col-sm-4">
	<h3>Edit Resell

	<a class="btn btn-secondary" href="/data">Back</a></h3>
	
	<br/>
	

	@foreach($resell as $p)
	<form action="/data/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->res_id }}"> <br/>
		Kode <input type="text" class="form-control" required="required" name="kode" value="{{ $p->res_kode }}"> <br/>
		Nama <input type="text" class="form-control" required="required" name="name" value="{{ $p->res_name }}"> <br/>
		Link <input type="text" class="form-control" required="required" name="link" value="{{ $p->res_link }}"> <br/>
		<input type="submit" class="btn btn-primary" value="Save Data">
	    </div>
	</form>
	@endforeach

    	</div>	
    </div>		

	
		

</body>
</html>