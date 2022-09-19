<x-app-layout>
</head>
<body>
	<section>
		<h4 class="text-center">Edit person</h4>
		<h6>Person: {{$person->name}}</h6>
		@if ($errors->any())
    		<div class="alert alert-danger">
        		<ul>
            		@foreach ($errors->all() as $error)
                		<li>{{ $error }}</li>
            		@endforeach
        		/ul>
    		</div>
		@endif
		<form  method="post" action="{{route('person.update', $person->id)}}" class="form-group">
			@csrf 
			@method('put')
			<div class="col-md-12">
				<label>Name</label>
				<input type="text" name="name" value="{{$person->name}}" class="form-control"> <br>
			</div>
			<div class="col-md-12">
				<label>Surname</label>
				<input type="text" name="surname" value="{{$person->surname}}" class="form-control"> <br>
			</div>
			<div class="col-md-12">
				<label>Age</label>
			<input type="number" name="age"value="{{$person->age}}" class="form-control"> <br>
			</div>
			<div class="col-md-12">
				<label>Phone</label>
				<input type="tel" name="phone" value="{{$person->phone}}" class="form-control"> <br>	
			</div>
			<div class="col-md-12">
				<label>	Email</label>    
				<input type="email" name="email" value="{{$person->email}}" class="form-control"> <br>	
			</div>
			<div class="col-md-12">
				<button type="submit" class ="btn btn-outline-success btn-sm">save</button>
			</div>
		</form>


	</section>

</x-app-layout>