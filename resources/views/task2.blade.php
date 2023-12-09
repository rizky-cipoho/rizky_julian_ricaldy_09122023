<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div style="display: flex; justify-content: center;">

		<div>
			<div style="text-align: center;">
				<a href="/">
					Task 1
				</a>
				<a href="/task2">
					Task 2
				</a>
			</div>
			<div>
				<form action="/secondvalue" method="post" enctype='multipart/form-data'>
					@csrf
					Nama: <input type="" name="name">
					Umur: <input type="" name="age">
					Alamat: <textarea name="address"></textarea>
					Foto: <input type="file" name="foto">
					<button>submit</button>
				</form>
			</div>
			<div>
				<table>
					@foreach($datas as $data)
					
						<tr>
							<form action="/edit/{{$data->pegawai_id}}" method="POST">
								@csrf
							<td>Pegawai_id: {{ $data->pegawai_id }}<br></td>
							<td>Pegawai_nama: <input type="" name="name" value="{{ $data->pegawai_nama }}"><br></td>
							<td>pegawai_umur: <input type="" name="age" value="{{ $data->pegawai_umur }}"></td>
							<td>pegawai_alamat: <input type="" name="address" value="{{ $data->pegawai_alamat }}"></td>
							<td>foto: <img src="{{ $data->foto }}" style="width: 100px;"></td>
							<td><button>edit</button></td>
							</form>
							<td>
								<form action="/delete/{{$data->pegawai_id}}" method="post">@csrf<button>delete</button></form>
							</td>
							
							
							
						</tr>
					
					@endforeach
				</table>

			</div>

		</div>

	</div>
</body>
</html>