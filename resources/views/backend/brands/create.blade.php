@extends('backend')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Marca</h1>
    <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-save fa-sm text-white-50"></i> Crear categoría</a>-->
  </div>

  <!-- Content Row -->
  <div class="row">

  	<div class="col-md-12">
	  	<form action="{{ route('brands.store') }}" method="post">

	  		@csrf

	  		<div class="form-group">
	  			<label>Marca</label>
	  			<input type="text" name="brand_name" class="form-control">
	  		</div>

	  		<input type="submit" class="btn btn-primary">

	  	</form>
  	</div>
  </div>
  	

</div>
@stop

