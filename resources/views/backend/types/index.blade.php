@extends('backend')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categorías</h1>
    <a href="{{ route('types.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Agregar Categoría</a>
  </div>

  <!-- Content Row -->
  <div class="row">

  	<div class="col-md-12">

  		<table class="table datatable">
  			<thead>
  				<th>Categoría</th>
  				<th></th>
  			</thead>
  			<tbody>
  				@foreach( $rows as $row )
  				<tr>
  					<td>{{ $row->type }}</td>
  					<td>
  						<a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
  						&nbsp;
  						<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
  					</td>
  				</tr>
  				@endforeach
  			</tbody>
  		</table>

  	</div>

  </div>
</div>
@stop