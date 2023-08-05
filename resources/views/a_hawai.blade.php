



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
		<th>Id</th>
		<th>email</th>
		<th>password</th>
		<th>Operation</th>
	</tr>
         @foreach($data as $in)
	    <h1>{{$in['id']}}</h1>
		<h1>{{$in['package']}}</h1>
		<h1>{{$in['price']}}</h1>
		<h1><a href="/delete/{{$in['id']}}">Delete</a></h1>
         @endforeach
	</table>

</body>
</html>


