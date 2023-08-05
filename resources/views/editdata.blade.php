<body style="background-color:skyblue">
<center>
	<h1> Update Boat Package Details</h1>
<form method="get" action="/edit" >
	<input type="hidden" name="id" value="{{$data[0]->id}}">
	<input type="text" name="package" value="{{$data[0]->package}}" placeholder="enter package" required class="in"><br><br>
        	<input type="text" name="price" value="{{$data[0]->price}}" placeholder="enter price" required class="in"><br><br>
          
<br><br>
        	
        	<input type="submit" value="Update" class="btn">
</form>

</center>

</body>

