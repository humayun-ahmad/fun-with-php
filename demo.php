if ($dataInsert) {
	$notification = array(
		'message' => 'Successfully Data inserted',
		'alert-type' => 'success'
	);
	
	return Redirect()->back()->with($notification);
}else {
	$notification = array(
		'message' => 'Sometings went wrong',
		'alert-type' => 'error'
	);
	
	return Redirect()->back()->with($notification);
}


//

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif


















































