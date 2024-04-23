

<form id="myform" action="{{route("$ruta",["id" => $id]) }}" method="post">
    @csrf
    @method('DELETE')    
    <a data-modal-target="popup-modal" data-modal-toggle="popup-modal" href="{{route("$ruta", ["id" => $id])}}"><button class="bg-red-500 hover:bg-red-800 px-2 border border-black">Eliminar</button></a>
</form>



