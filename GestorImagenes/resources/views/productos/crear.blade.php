<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div calss="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gary-500 text-light font-semibold">Nombre</label>
                            <input type="text" name="nombre" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full" placeholder="nombre del producto">
                        </div>   
                        <div calss="grid grid-cols-1">
                            <label class="uppercase md:text-sm text-xs text-gary-500 text-light font-semibold">Descripcion</label>
                            <input type="text" name="descripcion" class="py-2 px-3 rounded-lg border-2 border-purple-300 focus:outline-none focus:ring-2 focus:purple-600 w-full" placeholder="descripcion del producto">
                        </div> 
                    </div>
                    <div class="grig grid-cols-1 mt-5 mx-7">
                            <img id="imagenSeleccionada" style="max-height: 300px;">
                    </div>
                    <div class="grig grid-cols-1 mt-5 mx-7">
                            <label class="uppercase md:text-sm text-xs text-gary-500 text-light font-semibold mb-1 w-full">Subir Imagen</label>
                            <div class="flex items-center justify-center w-full">
                                <label class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group">
                                    <div class="flex flex-col items-center justify+center pt-7">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider">Seleccione la imagen</p>
                                    </div>
                                    <input name="imagen" id="imagen" type="file" class="hidden" />
                                </label>
                            </div>
                    </div>
                    <div class="flex items-center justify-center h-20">
                        <a type="button" href="{{ route('productos.index') }}" class="w-auto bg-indigo-600 hover:bg-indigo-400 rounded-lg shadow-x1 font-medium text-white px-4 py-2">Cancelar</a>
                        <button type="submit" class="w-auto bg-indigo-600 hover:bg-purple-700 rounded-lg shadow-x1 font-medium text-white px-4 py-2 px-2">Guardar</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e){
        $('#imagen').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        })
    })
</script>
