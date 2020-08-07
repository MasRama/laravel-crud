<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				

				<h2 class="text-center"><a href="order.indozoom.net">Izoom</a></h2>

				<h3>Data Pegawai
				<a class="btn btn-primary ml-3" type="submit" href="/data/tambah">Tambah Data</h3></a>
				<p>Cari Data Pegawai :</p>

				<div class="form-group">
					
				</div>
				<form action="/data/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Reseller .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>Kode</th>
						<th>Nama</th>
						<th>Link</th>
						<th>Action</th>
					</tr>
					@foreach($resell as $p)
					<tr>
						<td>{{ $p->res_kode }}</td>
						<td>{{ $p->res_name }}</td>
						<td>{{ $p->res_link }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/data/edit/{{ $p->res_id }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/data/hapus/{{ $p->res_id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $resell->currentPage() }} <br/>
				Jumlah Data : {{ $resell->total() }} <br/>
				Data Per Halaman : {{ $resell->perPage() }} <br/>
				<br/>

				{{ $resell->links() }}
				<a href="{{ route('logout') }}" class="btn btn-danger"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
			</div>
		</div>
	</div>


</body>
</html>