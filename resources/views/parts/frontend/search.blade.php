    <div class="search-cate">
	<form action="{{ route('product.search') }}" method="post" >
	@csrf
        <select class="selectpicker" name="type">
          <option> Categorías</option>
          <option> Perfumería</option>
          <option> Relojes</option>
        </select>
        <input type="search" name="search" placeholder="Ingrese su búsqueda...">
        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
	</form>
    </div>
