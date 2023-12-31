@extends('voyager::master')

@section('page_title', 'Agregar Certificado')

@section('content')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-certificate"></i>
            Certificado
        </h1>
        <button class="btn btn-primary" id="btn_ajustar">Añadir Certificado</button>
    </div>
    <div class="container-fluid">
        <div class="panel panel-bordered">
            <div class="panel-body">
                {{--  --}}
                <form action="{{ route('update_certificate_status', $course->id) }}" method="POST" style="">
                    @csrf
                    @method('PUT')
                    @if ($course->certificate_delivered)
                    <div class="alert alert-success">
                        <strong>Éstado:</strong> Los certificados ya se han entregado.
                    </div>                   
                    @else
                    <div class="alert alert-warning">
                        <strong>Estado: </strong> Los certificados aun no se han entregado.
                    </div> 
                    @endif

                    <div class="form-check">
                        <label class="toggle-switch">
                            <input type="checkbox" id="certificateDelivered" name="certificate_delivered" {{ $course->certificate_delivered ? 'checked' : '' }}>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-bordered hidden" id="panel_parent">
            <div class="panel-heading" id="container-pre">
                <div class="table-responsive scale-edit">
                    <div class="container-certificate" id="container-certificate">
                        @if ($course->img_certificate)
                        <img src="{{asset("storage/"."$course->img_certificate")}}" alt="">
                        @endif
                        <div id="movable-div">Nombre Apellido Apellido</div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <form action="{{route('add_certificate', $course->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group col-sm-6">
                                <label for="image">Selecciona una imagen:</label>
                                <input type="file" name="image" id="image" accept="image/*">
                            </div>
                            <div class="form-group col-sm-6 hidden">
                                <label for="range_x">Eje X:</label>
                                <input type="range" name="range_x" id="range_x" class="" min="0" max="1000" step="1" value="0">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="fonts">Tipo de letra</label>
                                <select name="fonts" id="fonts" class="form-control" required>
                                    <option value="">..Elejir fuente</option>
                                    @foreach ($fonts as $font)
                                        <option value="{{$font->id}}">{{ $font->font_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="range_y">Eje Y:</label>
                                <input type="range" name="range_y" id="range_y" class="l" min="0" max="720" step="1" value="0">
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="range_size">Tamaño Letra:</label>
                                <input type="range" name="range_size" id="range_size" class="l" min="8" max="120" step="1" value="32">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
        </div>
        <div class="panel">
            <div class="panel-body">
                <a href="{{ route('total_certificates', ['id_course' => $course->id]) }}" class="btn btn-primary" target="_blank">
                    <i class="voyager-certificate"></i>Generar Todos
                </a>
                <div class="table-responsive">
                    <table id="dataTable" class="table table-hover dataTable" role="grid" aria-describedby="dataTable_info">
                        <thead>
                            <tr class="">
                                <th>Nombre Completo</th>
                                <th>CI</th>
                                <th>Certificado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course->students as $student)
                            <tr role="row" class="odd">
                                <td>{{ $student->full_name }}</td>
                                <td>{{ $student->ci }}</td>
                                <td>
                                    <a href="{{ route('show_certificate', ['id_course' => $course->id, 'id_person' => $student->id]) }}" class="btn btn-primary" target="_blank">
                                        <i class="voyager-certificate"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>                
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        /* @foreach($fonts as $font)*/
            @import url({{$font->font_url}}); /*Mucho cuidado es foreach sigue funcionado, por que esta con el comentario css y no con el de blade, es para mi comodidad visual*/
        /*@endforeach */
        /* .container-certificate {
            position: relative;
            width: 200px;
            height: 100px;
            background-color: lightblue;
            display: flex;
            align-items: center;
            justify-content: center;
        } */
        #container-pre {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 110mm;
        }
        .scale-edit{
            /* transform: scale(0.5); */
            scale: 0.5;
        }
        .container-certificate {
            position: relative;
            width: 297mm; /* Ancho de una hoja A4 horizontal */ 
            height: 210mm; /* Altura de una hoja A4 horizontal*/ 
            background-image: none; /* Por defecto sin imagen de fondo */
            background-size: cover; /* Ajusta la imagen al tamaño del contenedor */
            background-position: center center; /* Centra la imagen en el contenedor */
            /* display: flex;
            align-items: center;
            justify-content: center; */
            margin: auto;
        }
        .container-certificate img{
            width: 100%;
            height: 100%;
        }
        #movable-div {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 2rem;
            color: black;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 700;
        }
    </style>
    <style>
        /* Estilos para el contenedor del Toggle Switch */
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Estilos para el fondo del Toggle Switch (no seleccionado) */
    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* Estilos para el control deslizante */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 34px;
    }

    /* Estilos para el control deslizante cuando está activado */
    .slider.round {
        border-radius: 34px;
    }

    /* Estilos para el control deslizante (el punto) */
    .slider.round::before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 50%;
    }

    /* Estilos para el Toggle Switch cuando está activado */
    input:checked + .slider {
        background-color: #2196F3;
    }

    /* Estilos para el punto cuando el Toggle Switch está activado */
    input:checked + .slider::before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }
    </style>

    
@endsection
@section('js')

@endsection
<script>
    var fonts = @json($fonts);
    console.log(fonts)
    document.addEventListener("DOMContentLoaded", function() {
        //selecciona los rangos
        const rangeX = document.getElementById("range_x");
        const rangeY = document.getElementById("range_y");
        const rangeSize = document.getElementById("range_size");
        const fontSelect = document.getElementById("fonts");

        const movableDiv = document.getElementById("movable-div");

        const container = document.getElementById("container-certificate");
        const imageInput = document.getElementById("image");
        const btnAjustar = document.getElementById("btn_ajustar");
        const panelParent = document.getElementById("panel_parent")

        //eventos 
        rangeX.addEventListener("input", updatePositionX);
        rangeY.addEventListener("input", updatePositionY);
        rangeSize.addEventListener("input", updateFontSize);
        fontSelect.addEventListener("change",updateFontFamily);

        btnAjustar.addEventListener("click",togglePanel);

        //cambiar imagen
        imageInput.addEventListener("change",function(){
            const file = imageInput.files[0];
            if(file){
                const imageUrl = URL.createObjectURL(file);
                container.style.backgroundImage = `url(${imageUrl})`;
            }else {
                container.style.backgroundImage = "none";
            }
        });
        //funciones
        function updateFontFamily() {
            const selectedFontId = fontSelect.value;
            const selectedFont = fonts.find(font => font.id == selectedFontId)

            if (selectedFont){
                movableDiv.style.fontFamily = selectedFont.font_name
            }
        }
        function togglePanel(){
            panelParent.classList.toggle("hidden");
        }

        function updatePositionX() {
            const x = rangeX.value;
            movableDiv.style.transform = `translateX(${x}px) translateY(${rangeY.value}px)`;
        }

        function updatePositionY() {
            const y = rangeY.value;
            movableDiv.style.transform = `translateX(${rangeX.value}px) translateY(${y}px)`;
        }
        function updateFontSize() {
            const fontSize = rangeSize.value + "px"; // Tamaño de letra en píxeles
            movableDiv.style.fontSize = fontSize; // Aplica el tamaño de letra al movable-div
        }
    });
</script>
