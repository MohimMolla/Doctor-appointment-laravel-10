<div class="mb-3">
	<label for="" class="form-label">Name</label>
	<input type="text" class="form-control" name="name" placeholder="Write name" value="{{$event->name??""}}">
</div>
<div class="mb-3">
	<label for="" class="form-label">Title</label>
	<input type="text" class="form-control" name="title" placeholder="Write name" value="{{$event->title??""}}">
</div>
<div class="form-floating">
	<label for="" class="form-label">Description</label>
	
	<textarea class="form-control" placeholder="Description write here" id="description" name="description">{{ $event->description ?? '' }}</textarea>

</div>


<div class="mb-3">
	<label for="formFile" class="form-label">Upload Image</label>
	<input class="form-control" type="file" id="formFile" name="file">

</div>