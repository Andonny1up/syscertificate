<div class="" id="container">
    <div class="table-responsive">
        <div class="container-certificate" id="container-certificate">
            <img src="{{asset("storage/"."$course->img_certificate")}}" alt="">
            {{-- <img src="https://previews.123rf.com/images/kitipol/kitipol1609/kitipol160900173/63887549-plantilla-de-certificado-diploma-dise%C3%B1o-tama%C3%B1o-a4-vector.jpg" alt=""> --}}
            <div id="movable-div">
                <p id="text_name">{{$person->full_name}}</p>
            
            </div>
        
        </div>
    </div>
</div>


<style>
    /* @if ($course->font) */
    @import url({{$course->font->font_url}});    
    /* @endif */

    *{
        margin: 0;
        padding: 0;
    }
    .container-flex{
        display: flex;
        justify-content: center
    }
    .container-certificate {
        position: relative;
        width: 297mm; /*Ancho de una hoja A4 horizontal*/ 
        height: 210mm; /*Altura de una hoja A4 horizontal */
        background-size: cover; /* Ajusta la imagen al tamaño del contenedor */
        background-position: center center; /* Centra la imagen en el contenedor */
        display: flex;
        align-items: center;
        justify-content: center;/*1049*595*/
    }
    .container-certificate img{
        width: 100%;
        height: 100%;
    }
    #movable-div {
        position: absolute;
        width: 100%;
        /* left: {{ $course->x }}px; */
        left: 0;
        top: {{ $course->y }}px; 
        text-align: center;
        font-size: 2rem;
        font-weight: 500;
    }
    #movable-div p{
        text-align: center;
        font-size: {{$course->font_size}}px;
        /* @if ($course->font) */
        font-family: {{$course->font->font_name}};
        /* @endif */
    }
    @page {
        size:landscape;
        margin: 0mm 0mm 0mm 0mm;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const participant = @json($person);
    const course = @json($course);

    document.addEventListener("DOMContentLoaded", function() {
        const movableDiv = document.getElementById("movable-div");
        const container = document.getElementById("container-certificate");
        const textName = document.getElementById("text_name");
        /* container.style.backgroundImage = ``; */

        // Landscape export, 2×4 inches

        const modifiedName = participant.full_name.replace(/\s+/g, '_');
        html2canvas(container).then(function(canvas) {
            const image = new Image();
            image.src = canvas.toDataURL('image/png');

            const pdfOptions = {
                margin: 0,
                filename: `certificado_c${course.id}_${modifiedName}.pdf`,
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' } // Configurar la orientación a 'landscape'
            };
            html2pdf(image, pdfOptions);
            // Agrega la imagen al DOM o guarda la imagen en el servidor, según tus necesidades
            document.body.appendChild(image);
            container.remove();
        });
            
    });

</script>