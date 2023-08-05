<h1>List of Data</h1>
<table border="1" style='background-color:lime;'>
	<tr>
		<th>ID</th>
		<th>Package</th>
		<th>Price</th>
		
		<th>Operation</th>
	</tr>
	@foreach($data as $in)
	<tr>
		<td>{{$in['id']}}</td>
		<td>{{$in['package']}}</td>
		<td>{{$in['price']}}</td>
		
		<td><a href="delete/{{$in['id']}}">Delete</a></td>

	</tr>
	@endforeach
</table>