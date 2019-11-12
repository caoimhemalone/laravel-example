<!DOCTYPE html>

<html>

<head>

    <title></title>

</head>

<body>

    <h1>Create a new project</h1>

    <form method="POST" action="/projects">

    	{{ csrf_field() }}

		<div class="field">
			<label class="label" for="title">Project Title</label>

			<div class="control">
				<input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{old('title')}}" required>
			</div>
		</div>

		<div class="field">
			<label class="label" for="description" >Project Description</label>

			<div class="control">
				<textarea name="description" class="{{ $errors->has('description') ? 'is-danger' : '' }}" required>{{old('description')}}</textarea>
			</div>
	</div>
		<div>
			<button type="submit">Create Project</button>
		</div>
 
		@if ($errors->any())
		<div class="notification is-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
    </form>


</body>

</html>