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
    	<form action="{{ route('objects.update', $object->id) }}" method="post" enctype="multipart/form-data" class="form">

        <div class="row">
            <div class="col-md-8">

          		@csrf
              {{ method_field('PATCH') }}
              <input type="hidden" name="id" value="<?= $object->id ?>">

          		<div class="form-group">
          			<label>Producto</label>
          			<input type="text" name="object_name" class="form-control" value="<?= $object->object_name ?>">
          		</div>

              <div class="form-group">
                <label>Descripción</label>
                <textarea name="description" class="form-control" rows="3" value=""><?= $object->description ?>
                </textarea>
              </div>

              <div class="form-group">
                <label>Costo</label>
                <input type="text" name="cost" class="form-control" value="<?= $object->cost ?>">
              </div>

              <div class="form-group">
                <label>Precio</label>
                <input type="text" name="price" class="form-control" value="<?= $object->price ?>">
              </div>

              <div class="form-group">
                <label>Genero</label>
                <select class="form-control" name="gender">
                  <option value="F" <?= ($object->gender == 'F' ? 'selected' : '' ) ?>>Femenino</option>
                  <option value="M" <?= ($object->gender == 'M' ? 'selected' : '' ) ?>>Masculino</option>
                </select>
              </div>

              <div class="form-group">
                <label>Marca</label>
                <select class="form-control" name="brands">
                  @foreach ( $brands as $brand )

                  <option value="{{ $brand->id }}" <?= ($object->brands_id == $brand->id) ? 'selected' : '' ?>>{{ $brand->brand_name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Categoría</label>
                <select class="form-control" name="types">
                  @foreach ( $types as $type )
                  <option value="{{ $type->id }}" <?= ($object->types_id == $type->id) ? 'selected' : '' ?>>{{ $type->type }}</option>
                  @endforeach
                </select>
              </div>

              <!-- load files -->
              <div class="row">
                <div class="col-md-8 documents-objects">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Archivo:</label>
                          <input class="form-control" name="document-file[]" type="file">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="name">Principal:</label><br>
                          <input type="radio" name="feature[]" >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                      <label for="name">&nbsp;</label>
                      <label>
                        <a href="#" id="add-new-document" class="btn btn-primary"><i class="fa fa-upload"></i></a>
                      </label>
                  </div>
                </div>
              </div>

              <div class="row documents-container"></div>
              <input type="hidden" value="0" name="total-files" id="total-files">

          		<input type="submit" class="btn btn-primary">

            </div>

        </div>
    	</form>
    </div>

  </div>
  	

</div>
@stop

@push('scripts')
<script>

  // load files
  $("#add-new-document").click(function() {
    console.log('clicked');
    // $(".documents-objects").clone().appendTo('.documents-container');
    $(".documents-container").append( $(".documents-objects > .row").clone());
    $("#total-files").val( parseInt($("#total-files").val())+1);
    console.log('cloned');
  });

  $("#addDocument").on('click', function(){
      $("#documents-container").css('display', 'block');

      $("#table-documents > tbody:last-child")
            .append("<tr>" +
                      "<td>abc</td>" +
                      "<td></td>" +
                      "<td>" +
                        "<a href=\"#\" class=\"remove-document\">"+
                        "<i class=\"icon-trash\"><\/i>"+
                        "<\/a>"+
                      "</td>" +
                    "</tr>");
  });
</script>

@endpush

