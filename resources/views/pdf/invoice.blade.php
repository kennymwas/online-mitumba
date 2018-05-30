<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style>
     .page-break {
      page-break-after: always;
      }
    </style>
</head>
<body>
	<h1>{{ Receipt No :{{ $number}}}}</h1>

	<table style="border: 2px solid #333;">
		<thead>
			<tr>
				<td>Name</td>
				<td>Quantity</td>
				<td>Price</td>

			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{$product->name }}</td>
				<td>{{ $product->qty}}</td>
				<td>{{$product->price}}</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>{{ $product->qty * $product->price}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>