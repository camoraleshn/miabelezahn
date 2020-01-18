@extends('backend')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-save fa-sm text-white-50"></i> Crear producto</a>-->
  </div>

  <!-- Content Row -->
  <div class="row">

  	<div class="col-md-12">
    	<form action="{{ route('objects.store') }}" method="post" class="form">

        <div class="row">
            <div class="col-md-8">

          		@csrf

          		<div class="form-group">
          			<label>Producto</label>
          			<input type="text" name="object_name" class="form-control">
          		</div>

              <div class="form-group">
                <label>Costo</label>
                <input type="text" name="cost" class="form-control">
              </div>

              <div class="form-group">
                <label>Precio</label>
                <input type="text" name="price" class="form-control">
              </div>

              <div class="form-group">
                <label>Genero</label>
                <select class="form-control" name="gender">
                  <option value="F">Femenino</option>
                  <option value="M">Masculino</option>
                </select>
              </div>

              <div class="form-group">
                <label>Marca</label>
                <select class="form-control" name="brands">
                  @foreach ( $brands as $brand )
                  <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Categoría</label>
                <select class="form-control" name="types">
                  @foreach ( $types as $type )
                  <option value="{{ $type->id }}">{{ $type->type }}</option>
                  @endforeach
                </select>
              </div>

          		<input type="submit" class="btn btn-primary">

            </div>

        </div>
    	</form>
    </div>

  </div>
  	

</div>
@stop

