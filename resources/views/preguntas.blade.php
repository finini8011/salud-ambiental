@extends('layout')
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/indicator.css')}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/secAmbiente.css')}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/questions.css')}}" />
@endsection
@section('contenido')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-8">
                    <div class="row">
                        <div class=" d-inline-block" >
                            <img class="concept-title d-inline-block"  src="{{asset($paginaAnexa[0]['componente1'] ?? '')}}" alt="">
                        </div>
                        <br>
                        <div class="d-inline-block titulo-contenido px-5">
                        <p><span style="color: #ffffff;"><strong>{{$paginaAnexa[0]['componente2'] ?? ''}}</strong></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row ">
                        <div class="col-12 date-time-title">
                            <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 date-time" id="reloj">
                            Fecha y hora
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <a href="{{ $data[44]['datos'] }}">
                                <img src="{{asset($data[41]['datos'])}}" alt="calidad aire" class="img-calidad-aire">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{ $data[45]['datos'] }}">
                                <img src="{{asset($data[42]['datos'])}}" alt="indice uv" class="img-indice-uv">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{ $data[46]['datos'] }}">
                                <img  src="{{asset($data[43]['datos'])}}" alt="clima actual" class="img-clima-actual">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="contenidoSecAmb centradoDiv">
                    {!! nl2br($paginaAnexa[0]['componente6'] ?? '') !!}
                </div>
                    <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align: justify;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
</div>

<!-- Contenido de respuestas -->

<div hidden>
    <div id="ask-aire-1">
    La contaminación atmosférica es la presencia que existe en el aire de pequeñas partículas o productos secundarios gaseosos que pueden implicar riesgo, daño o molestia para las personas, plantas y animales que se encuentran expuestas a dicho ambiente.
 <br> Los principales medios por los cuales se produce contaminación atmosférica se concentran en los procesos industriales en donde se realiza combustión, así como por fuentes móviles tales como los automóviles.   
 <div id="pie" class="contenidoSecAmb centradoDiv">
    <p><div id="pieuno"><i>Fuente: IDEAM. Contaminación Atmosférica disponible en: <a href="http://www.ideam.gov.co/web/contaminacion-y-calidad-ambiental/contaminacion-atmosferica">
    http://www.ideam.gov.co/web/contaminacion-y-calidad-ambiental/contaminacion-atmosferica &#8617;<i></a> 
 </div></p><i></div>
 </div>
    <div id="ask-aire-2">
        <p> Los seis contaminantes más comunes del aire son: La contaminación por partículas o material particulado, el ozono a nivel del suelo, monóxido de carbono, óxidos de azufre, óxidos de nitrógeno y el plomo.</p>
        <br>
        <div id="pie" class="contenidoSecAmb centradoDiv">
                    <div id="pieuno"><i>Fuente: Ministerio de medio Ambiente. Contaminación atmosférica, disponible en: <a href="http://www.minambiente.gov.co/index.php/asuntos-ambientales-sectorial-y-urbana/gestion-del-aire/contaminacion-atmosferica">http://www.minambiente.gov.co/index.php/asuntos-ambientales-sectorial-y-urbana/gestion-del-aire/contaminacion-atmosferica </a><i></div>
                        </div>
    </div>
    <div id="ask-aire-3">
    Las mediciones de los niveles de partículas, sustancias y demás contaminantes presentes en el aire se realizan a partir de puntos fijos y móviles que recogen información representativa de los niveles de contaminación de los diferentes lugares en los que se ubican. Estos puntos o estaciones analizan la calidad del aire con base en concentraciones medias, diarias o anuales valoradas en microgramos por metro cúbico (μg/m³).
    <div id="pie" class="contenidoSecAmb centradoDiv">
    <div id="piedos"><i>Fuente: Montero, P. La contaminación del aire, daños a la salud y responsabilidad de la administración. 2020. Disponible en: <a href="https://repositori.upf.edu/bitstream/handle/10230/45472/TFGDRET2020MonteroContaminacion.pdf?sequence=1&isAllowed=y">https://repositori.upf.edu/bitstream/handle/10230/45472/</a><br>TFGDRET2020MonteroContaminacion.pdf?sequence=1&isAllowed=y</a><i></div>
    </div>
    </div>
    <div id="ask-aire-4">
    El conjunto de partículas y contaminantes tóxicos que permanecen en el aire generan una serie de efectos dañinos en la salud de las personas; siendo más vulnerables los menores de 14 años, los adultos mayores y los individuos con afecciones pulmonares. Los efectos en salud de los contaminantes más comunes presentes en la atmósfera son: 
    <br>• El material particulado PM<sub>10</sub> y PM<sub>2,5</sub> es responsable de la reducción de la función pulmonar dando como resultado la aparición de diversas enfermedades respiratorias como bronquitis crónica, exacerbación del asma, infecciones respiratorias y enfermedad pulmonar obstructiva crónica. Además, puede causar muerte prematura, cardiopatías y cáncer de pulmón.    
    <br>• El ozono puede causar diversos problemas respiratorios como asma y exacerbar las enfermedades pulmonares como el enfisema y la bronquitis. Además, produce irritación de los ojos, nariz y garganta y dolor de cabeza. 
    <br>• El Dióxido de nitrógeno (NO<sub>2</sub>) exacerba los síntomas de bronquitis en niños asmáticos.
    <br>
    <br>
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Calidad de aire y salud disponible en: <a id="footnote-1-ref" href="https://www.who.int/es/news-room/fact-sheets/detail/ambient-(outdoor)-air-quality-and-health">https://www.who.int/es/news-room/fact-sheets/detail/ambient-(outdoor)-air-quality-and-health</a><i></div>
   </div>
    <div id="ask-aire-5">
    El Índice de Calidad del Aire (ICA) es un valor dentro del rango de 0 a 500 que permite categorizar los niveles de contaminación del aire y su posible afectación de los mismos para el estado de salud humana. Dicho valor se calcula utilizando la ecuación determinada por la metodología establecida por la US-EPA (Sigla en inglés de la Agencia de Protección Ambiental de los Estados Unidos) de la cantidad de contaminantes hallados en un período de exposición determinado a través de las estaciones de monitoreo que conforman un Sistema de Vigilancia de Calidad del Aire. Los niveles se miden de acuerdo a la normativa específica para cada uno de los contaminantes.
    <br>
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: IDEAM. Índice de calidad del aire, disponible en: <a id="footnote-1-ref" href="http://www.ideam.gov.co/documents/24155/125494/35-HM+%C3%8Dndice+calidad+aire+3+FI.pdf/6c0c641a-0c9a-430d-9c37-93d3069c595b">http://www.ideam.gov.co/documents/24155/125494/35-HM+%C3%8Dndice+calidad+aire+3+FI.pdf/6c0c641a-0c9a-430d-9c37-93d3069c595b</a><i></div>
   </div>
    <div id="ask-aire-6">
    En el caso del PM<sub>10</sub>, las zonas con mayor concentración simulada anual se encuentran en el suroccidente de la ciudad, específicamente entre las localidades de Kennedy, Bosa, Ciudad Bolívar y Tunjuelito, con promedios anuales superiores a 60 μg/m³. En cuanto a las concentraciones anuales por localidades, se estimó que Kennedy es la localidad con el mayor promedio anual de concentraciones de PM<sub>10</sub>, 
    el cual se encuentra por encima de 50 μg/m³, le siguen Fontibón, Bosa y Tunjuelito con promedios anuales de concentración entre 45 μg/m3 y 50 μg/m³. Para PM<sub>2,5</sub>, las zonas con mayor concentración simulada anual se encuentran en el suroccidente de la ciudad, específicamente entre las localidades de Kennedy, Bosa, Ciudad Bolívar y Tunjuelito, con promedios anuales superiores a 27,5 μg/m³.  
     cuanto a las concentraciones anuales por localidades, se estimó que Kennedy es la localidad con el mayor promedio anual de concentraciones de PM<sub>2,5</sub>, el cual se encuentra entre de 22,5 y 25,0 μg/m³, le siguen Bosa y Tunjuelito con promedios anuales de concentración entre 20,0 μg/m³ y 22,5 μg/m³.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: SDA. Informe anual de calidad del aire Bogotá, 2017,disponible en: <a href="http://rmcab.ambientebogota.gov.co/Pagesfiles/180601_Informe%20Anual%202017_V6.pdf"> http://rmcab.ambientebogota.gov.co/Pagesfiles/180601_Informe%20Anual%202017_V6.pdf</a><i>
    </div>
    </div>
    <div id="ask-aire-7">
    Hace referencia a la contaminación del aire en espacios al aire libre, a cielo abierto, es decir, por fuera de cualquier infraestructura que comprenda techo y paredes. La contaminación del aire extramural ocurre cuando los niveles de concentración de los contaminantes medidos en el aire, indican que son tan elevados que logran impactar negativamente la salud humana y/o el medio ambiente. El término contaminación del aire extramural se relaciona con la mala calidad del aire urbano, de las ciudades o en sus alrededores.
    <br>
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OPS. Contaminación del aire ambiental exterior y en la vivienda, disponible en: <a href="https://www.paho.org/hq/index.php?option=com_content&view=article&id=14454:ambient-and-household-air-pollution-and-health-frequently-asked-">https://www.paho.org/hq/index.php?option=com_content&view=article&id=14454:ambient-and-household-air-pollution-and-health-frequently-asked-</a><i>
    </div>
    </div>
    <div id="ask-aire-8">
    Hace referencia a la contaminación del aire en espacios cerrados, interiores o que comprenden infraestructura de techo y paredes sin importar su tipo de material. Por lo general la contaminación intramural tiene como causa el empleo de tecnologías rudimentarias que ocasionan procesos de combustión ineficientes en actividades como cocinar principalmente, alumbrar y obtener calefacción. Otra causa de contaminación del aire intramural tiene que ver con el uso de sustancias químicas presentes en productos de aseo y limpieza o en componentes de los materiales de construcción que también afectan la salud.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Información básica sobre contaminación atmosférica urbana, disponible en: <a href="https://www.who.int/es/health-topics/air-pollution#tab=tab_3">https://www.who.int/es/health-topics/air-pollution#tab=tab_3 </a><i>    
     </div>
     </div>
    <div id="ask-aire-9">
    La contaminación del aire no es un factor causal directo de enfermedad o mortalidad respiratoria sino un factor asociado, que en combinación con otros como la desnutrición, la contaminación intra domiciliaría por tabaquismo pasivo, las enfermedades de base, las deficientes condiciones higiénicas, la falta de vacunación, el clima, entre otras, produce un aumento de las enfermedades respiratorias y cardiovasculares especialmente en grupos susceptibles (menores de 5 años, gestantes y adultos mayores).
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Medina, Edna. La contaminación del aire, un problema de todos Revista de la Facultad de Medicina, vol. 67, núm. 2, 2019, abril-junio, pp. 189-191 Universidad Nacional de Colombia, disponible en: <a href="https://www.redalyc.org/journal/5763/576364238001/ ">https://www.redalyc.org/journal/5763/576364238001/</a><i>    
    </div>
    </div>
    <div id="ask-aire-10">
    Estudios internacionales sugieren que la incidencia y el riesgo de mortalidad por Covid-19 se incrementan con la exposición aguda y crónica a los contaminantes del aire, particularmente a PM<sub>2,5</sub>, PM<sub>10</sub>,  y NO<sub>2</sub>.
    <br>Al  respirar  el  NO<sub>2</sub>, gas dañino para la salud, afecta el sistema respiratorio a nivel  tisular  al  encontrarse  en  altas  concentraciones  en  el  aire.  A  corto  plazo, la exposición a este gas puede causar síntomas respiratorios como tos o  dificultad  para  respirar,  agravando  las  enfermedades  respiratorias  y  por  ende  la  salud  del  paciente  que  está  infectado  por  SARS-CoV -19.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente 1: Arellano, F. et al. Revisión rápida: contaminación del aire y morbimortalidad por Covid-19, disponible en: <a href="https://www.medigraphic.com/pdfs/salpubmex/sal-2020/sal205n.pdf ">https://www.medigraphic.com/pdfs/salpubmex/sal-2020/sal205n.pdf </a><i>     
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente 2: Lanchipa T. et al. Perspectiva del COVID-19 sobre la contaminación del aire, disponible en: <a href="http://sociedadcientifica.org.py/ojs/index.php/rscpy/article/view/123 ">http://sociedadcientifica.org.py/ojs/index.php/rscpy/article/view/123 </a><i>
    </div>
    </div>
     </div>
    <div id="ask-aire-11">
    Es el olor generado por sustancias o actividades industriales, comerciales o de servicio, que produce fastidio, aunque no cause daño a la salud humana.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Ministerio de Ambiente y Desarrollo Sostenible. Resolución 1541/2013</a><i>
    </div>
    </div>
    <div id="ask-aire-12">
    Azufre Total Reducido (TRS), Sulfuro de hidrógeno (H2S), Amoniaco (NH3) Ácido Sulfhídrico, Sulfuro de dimetilo, Dicloruro de azufre, Mercaptanos, Amoniaco, Metilamina, Acetaldehido, Ácido Butirico, Etilacrilato, Clorofenol, Estireno, Trimetilamina, Índole, Skatole.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Ministerio de salud. Lineamientos para la vigilancia ambiental del impacto de olores ofensivos en la salud y calidad de vida de las comunidades expuestas en áreas urbanas. 2012, disponible en: <a href="https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/VS/PP/SA/impacto-olores-ofensivos-salud.pdf ">https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/VS/PP/SA/impacto-olores-ofensivos-salud.pdf</a><i>
    </div>    
     </div>
    <div id="ask-aire-13">
    Pese a que no se ha podido establecer una relación directa entre los malos olores y la toxicidad que pueda afectar la salud humana, sí se puede determinar un efecto de estímulo – respuesta dada las reacciones fisiológicas del sistema nervioso central o periférico ante la percepción de malos olores. Las reacciones pueden ir desde la simple sensación de desagrado hasta la presencia de cefalea (dolores de cabeza), mareos, inapetencia o irritabilidad; esto dependiendo de factores individuales o intrínsecos y/ o el tiempo de exposición a los malos olores. Al exponerse continúa o crónicamente a un mismo olor, se puede experimentar un fenómeno conocido como fatiga olfativa, la cual puede ser de corto o largo plazo según el tiempo que se requiera para recuperar la sensibilidad olfativa.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Ministerio de salud. Lineamientos para la vigilancia ambiental del impacto de olores ofensivos en la salud y calidad de vida de las comunidades expuestas en áreas urbanas. 2012, disponible en: <a href="https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/VS/PP/SA/impacto-olores-ofensivos-salud.pdf">https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/VS/PP/SA/impacto-olores-ofensivos-salud.pdf </a><i>
    </div>
   </div>
    <div id="ask-aire-14">
    Se conoce como Humo de Tabaco Ambiental (H.T.A.) a la emisión gaseosa exhalada por los pulmones de quien fuma o vapea, y al humo que se genera al tiempo que se enciende o consume la sustancia al fumar. El humo del tabaco contiene más de 4000 productos químicos, de los cuales se sabe que al menos 250 son nocivos, y más de 50 causan cáncer, estar expuesto a este humo se conoce como fumar pasivamente y al no existir niveles seguros de exposición se afirma que aún en cantidades bajas del contaminante producirían efectos nocivos a la salud, siendo la tercera causa prevenible de muerte, después de fumar activamente y del alcoholismo.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Tabaco. 2018, disponible en: <a href="https://www.who.int/es/news-room/fact-sheets/detail/tobacco">https://www.who.int/es/news-room/fact-sheets/detail/tobacco </a><i>
    </div>    
     </div>
    <div id="ask-aire-15">
    El tabaco es una de las mayores amenazas para la salud pública que ha tenido que afrontar el mundo. Mata a más de 7 millones de personas al año, de las cuales más de 6 millones son consumidores directos y alrededor de 890.000 son no fumadores expuestos al humo ajeno. El consumo de tabaco es un factor de riesgo importante de cardiopatía coronaria, accidente cerebrovascular y vasculopatía periférica. A pesar de que se conocen bien los daños para la salud cardiaca que provoca el tabaco y de la disponibilidad de soluciones para reducir la morbimortalidad que ocasiona, amplios sectores de la población desconocen que es una de las principales causas de las enfermedades cardiovasculares.
    <br>Recientemente los estudios demostraron que los fumadores activos tienen 1,4 veces la probabilidad de tener síntomas graves de COVID-19 y 2,4 veces la probabilidad para ingresar a UCI con necesidad de ventilación mecánica o morir, comparado con no fumadores.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente 1: OMS. Tabaquismo, disponible en: <a href="https://www.who.int/es/news-room/fact-sheets/detail/tobacco"> https://www.who.int/es/news-room/fact-sheets/detail/tobacco </a><i>
    </div> 
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente 2: Asociación colombiana de Neumología y Cirugía de tórax. Documento de posición Comité Antitabaco, disponible en: <a href="https://asoneumocito.org/influencia-del-tabaquismo-en-la-infeccion-por-coronavirus/">https://asoneumocito.org/influencia-del-tabaquismo-en-la-infeccion-por-coronavirus/ </a><i>
    </div>   
    </div>
    <div id="ask-aire-16">
    En cuanto al control sobre el consumo de tabaco, en Colombia se cuenta con una variedad de políticas que regulan e implementan medidas de control sobre el mercado en el ámbito nacional, con el fin de reducir de manera continua y sustancial la prevalencia del consumo de tabaco; En 2006 se adopta el Convenio Marco de la OMS mediante la Ley 1109 de 2006, sin embargo es La Ley 1335 del 2009 la que consolida y engloba en gran medida las políticas de control de tabaco, y precisamente señala las <i>"Disposiciones por medio de las cuales se previenen daños a la salud de los menores de edad, la población no fumadora y se estipulan políticas públicas para la prevención del consumo del tabaco y el abandono de la dependencia del tabaco del fumador y sus derivados en la población colombiana"<i>.
    <br>Por otro lado, el control policivo frente al consumo de tabaco, es regulado mediante la Ley 1801 de 2016, conocido como el código nacional de policía y convivencia, en el cual se sanciona el consumo en lugares no autorizados y la venta a menores de edad.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Congreso de la República. Disposiciones por medio de las cuales se previenen daños a la salud de los menores de edad, la población no fumadora y se estipulan políticas públicas para la prevención del consumo del tabaco y el abandono de la dependencia del tabaco del fumador y sus derivados en la población colombiana.2009, disponible en: <a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1335_2009.html">ttp://www.secretariasenado.gov.co/senado/basedoc/ley_1335_2009.html </a><i>
    </div>    
    </div>
    <div id="ask-aire-17">
    No está permitido fumar en espacios cerrados abiertos al público, así estos delimiten un   área de fumadores con aislamiento total del establecimiento e incluyan extractores en espacios cerrados (Artículo 19, ley 1335 de 2009), de modo que el consumo de tabaco en dichas áreas no es autorizado y es susceptible de ser sancionado mediante lo dispuesto en la ley 1801 de 2016. La creación de zonas de fumadores va en contra de las medidas de salud pública de promoción y prevención frente al no consumo de tabaco, así como las medidas relativas a la cesación tabáquica, que se establecen en el Convenio Marco para el Control de Tabaco (CMCT), del cual Colombia hace parte desde el año 2008.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: ongreso de la República. Disposiciones por medio de las cuales se previenen daños a la salud de los menores de edad, la población no fumadora y se estipulan políticas públicas para la prevención del consumo del tabaco y el abandono de la dependencia del tabaco del fumador y sus derivados en la población colombiana.2009, disponible en: <a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1335_2009.html">http://www.secretariasenado.gov.co/senado/basedoc/ley_1335_2009.html </a><i>
    </div>    
   </div>
    <div id="ask-aire-18">
    No. Según lo descrito en el Artículo 19 de la Ley 1335 de 2009, se prohíbe el consumo de tabaco y sus derivados en los siguientes lugares: en áreas cerradas de los lugares de trabajo y/o de los lugares públicos, tales como bares, restaurantes, centros comerciales, tiendas, ferias, festivales, parques, estadios, cafeterías, discotecas, cibercafés, hoteles, ferias, pubs, casinos, zonas comunales y áreas de espera, en donde se realicen eventos de manera masiva, entre otras.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Congreso de la República. Disposiciones por medio de las cuales se previenen daños a la salud de los menores de edad, la población no fumadora y se estipulan políticas públicas para la prevención del consumo del tabaco y el abandono de la dependencia del tabaco del fumador y sus derivados en la población colombiana.2009, disponible en: <a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1335_2009.html">http://www.secretariasenado.gov.co/senado/basedoc/ley_1335_2009.html </a><i>
    </div>    
     </div>
    <div id="ask-aire-19">
    No. La expedición de la Ley 1335 de 2009, se encuentra sustentada en la garantía efectiva del derecho a la salud de las personas, dicha norma fue diseñada con el fin de proteger a la población no fumadora y a los menores de edad, así como para desestimular el consumo de tabaco y contribuir al abandono de la dependencia del fumador. En este sentido, resulta relevante referir el artículo 19 de la Ley 1335 de 2009, en el cual se prohíbe el consumo de productos de tabaco, en los lugares señalados dentro del artículo en mención.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Congreso de la República. Disposiciones por medio de las cuales se previenen daños a la salud de los menores de edad, la población no fumadora y se estipulan políticas públicas para la prevención del consumo del tabaco y el abandono de la dependencia del tabaco del fumador y sus derivados en la población colombiana.2009, disponible en: <a href="http://www.secretariasenado.gov.co/senado/basedoc/ley_1335_2009.html">http://www.secretariasenado.gov.co/senado/basedoc/ley_1335_2009.html </a><i>
    </div> 
    </div>
    <div id="ask-aire-20">
    Aquel sonido complejo que tiene numerosas fluctuaciones aleatorias, distribuidas a lo largo de un amplio margen de frecuencias, por lo cual se determina como un sonido no deseado por ser de carácter desarmónico o estridente.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Boix Palacián, J. Acústica y audiometría. Editorial club Universitario, junio 2003: 222</a><i>
    </div>    
   </div>
    <div id="ask-aire-21">
      Se puede clasificar como:
      <p> ●	Ruido continuo: Se produce por una fuente que opera del mismo modo sin interrupción</p>
      <p> ●	Ruido Intermitente: Se genera por ciclos donde el nivel aumenta y disminuye rápidamente, por ejemplo: un avión. 
      <p> ●	Ruido Implosivo: Un ruido de impacto como una explosión.
      <p> ●	Ruido de baja frecuencia: posee una energía acústica significante en el margen de frecuencias de 8 a 100 Hz, típico en motores diésel de trenes, barcos y plantas de energía. 
      <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Boix Palacián, J. Acústica y audiometría. Editorial club Universitario, junio 2003: 222</a><i>
    </div> 
    </div>
    <div id="ask-aire-22">
    Se cuenta con la Resolución 627 de 2006 la cual establece las disposiciones legales y técnicas frente a la emisión de ruido y ruido ambiental, permitiendo a las autoridades ambientales la elaboración de mapas de ruido, vigilar los niveles de emisión de ruido, sectorizar y estandarizar los niveles máximos permitidos tanto en el día como en la noche, así mismo, la Ley 768 de 2002 establece la elaboración y ejecución de planes de descontaminación por ruido.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Ministerio de Ambiente.  Resolución 627 de 2006, disponible en:  <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=19982"> https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=19982</a><i>
    </div>     
    </div>    
    
    <div id="ask-aire-23">
    Los aspectos a considerar para la afectación de la salud por el ruido son: La duración, el tiempo y la frecuencia. Los principales efectos en salud son los auditivos como la discapacidad, dolor y fatiga auditiva, mientras que los extras auditivos como la perturbación del sueño, efectos cardiovasculares, respuestas hormonales, rendimiento laboral y escolar, molestia, interferencia con el comportamiento e interferencia con la comunicación oral.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Escuchar sin riesgo. 2015, disponible en: <a href="https://apps.who.int/iris/bitstream/handle/10665/331001/9789240001640-spa.pdf?sequence=1&isAllowed=y">https://apps.who.int/iris/bitstream/handle/10665/331001/9789240001640-spa.pdf?sequence=1&isAllowed=y</a><i>
    </div>   
    </div>
    <div id="ask-aire-24">
    Según la Organización Mundial de la Salud, el nivel de ruido que el oído humano puede tolerar sin alterar su salud es de 55 decibeles. Los niveles sonoros que se puede soportar dependen del tipo de ruido, distancia y tiempo de exposición. Un nivel perjudicial de ruido se establece en una exposición a más de 85 decibelios (dB) durante ocho horas o 100 dB durante 15 minutos.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Escuchar sin riesgo. 2015, disponible en: <a href="https://apps.who.int/mediacentre/news/releases/2015/ear-care/es/index.html">https://apps.who.int/mediacentre/news/releases/2015/ear-care/es/index.html</a><i>
    </div>     
   </div>
    <div id="ask-aire-25">
    Cuando los establecimientos abiertos al público o en eventos privados se producen ruido excesivo que afecta la tranquilidad y genera molestias a las personas, la policía está autorizada para acudir y que se desactive la fuente generadora de ruido, además podrá sellar temporalmente y definitivamente los establecimientos que excedan los niveles de ruido permitidos según la normatividad vigente.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Ley 1801 de 2016, Artículo 33., Código de Policía, disponible en: <a href="https://www.policia.gov.co/files/ley-1801-codigo-nacional-policia-convivenciapdf">https://www.policia.gov.co/files/ley-1801-codigo-nacional-policia-convivenciapdf </a><i>
    </div>  
   </div>
    <div id="ask-aire-26">
    Es el campo de fuerza que se crea en torno a una corriente eléctrica; está compuesto por dos campos eléctrico y magnético.
    <br><li>Los campos eléctricos se originan de la diferencia de voltaje: entre más elevado sea el voltaje, más fuerte será el campo resultante. </li>
    
    <br><li>Los campos magnéticos se originan en las corrientes eléctricas: una corriente más fuerte da como resultado un campo más fuerte.</li>
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Campos Electromagnéticos, disponible en: <a href="https://www.who.int/es/news-room/questions-and-answers/item/electromagnetic-fields">https://www.who.int/es/news-room/questions-and-answers/item/electromagnetic-fields </a><i>
    </div>
   </div>
    <div id="ask-aire-27">
    Los campos electromagnéticos de frecuencia baja, surgen de cualquier corriente eléctrica, dentro de los que se encuentran redes eléctricas, de alta, media o baja tensión, transformadores eléctricos, estaciones y subestaciones de energía. Por otro lado, diversos tipos de ondas de radio de frecuencia que se utilizan para transmitir información, ya sea por medio de antenas de televisión, estaciones de radio o estaciones base de telefonía móvil, así como las subestaciones de energía, transformadores y líneas de tensión,<sup>28</sup> de las cuales se pueden catalogar las estaciones radioeléctricas, estaciones base de telecomunicación móvil, entre otros.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Campos Electromagnéticos, disponible en:<a href="https://www.who.int/es/news-room/questions-and-answers/item/electromagnetic-fields">https://www.who.int/es/news-room/questions-and-answers/item/electromagnetic-fields</a><i>
    </div>
    </div>
    <div id="ask-aire-28">
    Algunas personas han atribuido un conjunto difuso de síntomas a la exposición de baja intensidad a campos electromagnéticos en el hogar. Los síntomas notificados incluyen dolores de cabeza, ansiedad, náuseas, fatiga, pérdida de la libido, enfermedad de depresión y conducta suicida. En la actualidad, la evidencia científica no admite la existencia de una asociación causal entre la aparición de esta sintomatología y la exposición a campos electromagnéticos. Al menos, alguno de estos problemas puede deberse a otros factores medioambientales como el ruido, la contaminación del aire o factores propios y genéticos del individuo.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Campos Electromagnéticos, disponible en: <a href="https://www.who.int/es/news-room/questions-and-answers/item/electromagnetic-fields">https://www.who.int/es/news-room/questions-and-answers/item/electromagnetic-fields </a><i>
    </div>    
   </div>
    <div id="ask-aire-29">
    En Bogotá se cuenta con el Acuerdo 339 de 2008 y el Decreto 397 de 2017, que dicta los parámetros para la ubicación de antenas de telecomunicaciones y la estructura que las soporta.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Concejo de Bogotá. Acuerdo 339 de 2008, disponible en: <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=33886#0">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=33886#0</a><i>
    </div>
    </div>
    <div id="ask-aire-30">
     Los teléfonos móviles permiten que una persona esté permanentemente localizable. Estos dispositivos son transmisores de radiofrecuencia de baja potencia, que operan en frecuencias entre 450 y 2700 MHz con potencias máximas en el rango de 0,1 a 2 vatios. El teléfono solo transmite energía cuando está encendido. Una persona que utilice un teléfono móvil a una distancia de 30 a 40 cm de su cuerpo (actividades como enviar mensajes de texto, Internet o utilizar un dispositivo con "manos libres") tendrá una exposición mucho menor a los campos de radiofrecuencia que alguien que sostenga el teléfono junto a la cabeza; también se reduce al limitar el número y la duración de las llamadas, y el uso en áreas de buena recepción. 
     <br>Hasta la fecha, no se han establecido efectos adversos para la salud causados por el uso de teléfonos móviles, sin embargo, se pueden presentar efectos de calentamiento de tejidos como el principal mecanismo de interacción entre la energía de radiofrecuencia y el cuerpo humano
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: OMS. Campos electromagnéticos, efectos sobre la salud, disponible en: <a href="https://www.who.int/news-room/fact-sheets/detail/electromagnetic-fields-and-public-health-mobile-phones">https://www.who.int/news-room/fact-sheets/detail/electromagnetic-fields-and-public-health-mobile-phones </a><i>
    </div>      
     </div>
     <div id="ask-aire-31">
     La administración distrital a través de la Secretaría Distrital de Planeación, se encarga de vigilar la correcta localización, instalación y cumplimiento de las normas urbanísticas, arquitectónicas y técnicas de estaciones radioeléctricas utilizadas en la prestación de los servicios públicos de TIC en Bogotá D.C.
     <br>Así mismo, la autoridad ambiental definirá la autorización respecto a las necesidades del plan de manejo ambiental que esta requiera en un polígono que encierra el área de influencia, con fines de mitigación y restauración ecológica, respecto a los posibles efectos que sobre el área aledaña pudieran producirse y en cuanto a la instalación en espacio público le corresponde al Departamento Administrativo de la Defensoría del Espacio Público – DADEP, generar el concepto técnico correspondiente.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente: Decreto 397 de 2017, Articulo 6, Articulo 7, Articulo 16. Artículo 17, disponible en: <a href="https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=70337&dt=S">https://www.alcaldiabogota.gov.co/sisjur/normas/Norma1.jsp?i=70337&dt=S </a><i>
    </div>      
     </div>
     <div id="ask-aire-32">
     El término 5G se refiere a la quinta generación de las redes móviles. Su diseño busca ampliar las redes de telefonía celular 4G LTE actuales y, en algunos casos, reemplazarlas por completo, en términos generales es la evolución de generaciones anteriores de tecnologías móviles: 2G, 3G y 4G.
    <br>La 5G, telefonía móvil inalámbrica, fue implementada ampliamente por primera vez en 2019. Se espera que aumente el rendimiento y una amplia gama de nuevas aplicaciones, incluido el fortalecimiento de la salud electrónica (telemedicina, vigilancia remota, tele cirugía).
     <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente 1: ITU.5G, disponible en:<a href="https://www.itu.int/es/mediacentre/backgrounders/Pages/5G-EMF-health.aspx">https://www.itu.int/es/mediacentre/backgrounders/Pages/5G-EMF-health.aspx</a><i>
    </div>
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente 2: OMS. Radiación: redes móviles 5G y salud. Consultado: febrero 2022, disponible en: <a href="https://www.who.int/news-room/fact-sheets/detail/electromagnetic-fields-and-public-health-mobile-phones">https://www.who.int/news-room/fact-sheets/detail/electromagnetic-fields-and-public-health-mobile-phones </a><i>
    </div>       
     </div>
     <div id="ask-aire-33">
     Dado que las tecnologías 5G pueden utilizar frecuencias EMF más altas (>24 GHz) además de las que se utilizan actualmente (&#60;4 GHz), la energía de esas frecuencias más altas se absorberá principalmente de manera más superficial que la de las tecnologías de telecomunicaciones móviles anteriores. Sin embargo, aunque la proporción de energía que se absorbe superficialmente (a diferencia de lo que se absorbe más profundamente en el cuerpo) es mayor para las frecuencias más altas, se han establecido las restricciones de ICNIRP (2020) para garantizar que la energía espacial máxima resultante se mantenga mucho más baja que esa. En consecuencia, las exposiciones a 5G no causarán ningún daño siempre que cumplan con las pautas de ICNIRP (2020).
    <br>Hasta la fecha, y después de muchas investigaciones realizadas, no se ha relacionado causalmente ningún efecto adverso para la salud con la exposición a las tecnologías inalámbricas. El calentamiento de tejidos es el principal mecanismo de interacción entre los campos de radiofrecuencia y el cuerpo humano. Los niveles de exposición a la radiofrecuencia de las tecnologías actuales dan como resultado un aumento insignificante de la temperatura en el cuerpo humano.
    <br>A medida que aumenta la frecuencia, hay menos penetración en los tejidos del cuerpo y la absorción de la energía se limita más a la superficie del cuerpo (piel y ojos). Siempre que la exposición general permanezca por debajo de las pautas internacionales, no se prevén consecuencias para la salud pública.
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente 1: ICNIRP. 5G Radiofrecuencia, disponible en: <a href="https://www.icnirp.org/en/applications/5g/index.html">https://www.icnirp.org/en/applications/5g/index.html</a><i>
    <div id="pieuno" class="contenidoSecAmb centradoDiv"><i>Fuente 2: OMS. Campos electromagnéticos, efectos sobre la salud, disponible en: <a href="https://www.who.int/news-room/fact-sheets/detail/electromagnetic-fields-and-public-health-mobile-phones">https://www.who.int/news-room/fact-sheets/detail/electromagnetic-fields-and-public-health-mobile-phones</a><i>
    </div>      
     </div>
     </div>
    <div id="ask-alimentos-1">
        La Secretaría Distrital de Salud, a través de las Subredes Integradas de Servicios de Salud, realiza la inspección, vigilancia y control sanitario, en los establecimientos de comercio que preparan, almacenan, comercializan y expenden alimentos, con el fin de verificar el cumplimiento de la normatividad sanitaria vigente. Como resultado de esta vigilancia se emite concepto sanitario al establecimiento acorde a las condiciones sanitarias evidenciadas en el momento de la visita.
    </div>
    <div id="ask-alimentos-2">
        <p>Puede acercarse a las Subredes Integradas de Servicios de Salud, de acuerdo a la localidad como se establece a continuación:</p>
        <div class="centrado">
        <img class="centrado"src="images/alimentos/respuestaPregunta2.png" width="400px" height="480px"/>
          </div>
        <p>En las  Subredes Integradas de Servicios de Salud  también puede tramitar:</p>
        <p>	Atención y recepción de quejas</p>
        <p> Solicitud de visitas a establecimientos para la emisión de conceptos sanitarios </p>
        <p> Inspección a vehículos de alimentos  </p>
        <p> Inspección a vehículos de carnes y productos cárnicos comestibles   </p>
        <p> Todas las actividades e inquietudes relacionadas con Salud Pública </p>


    </div>
    <div id="ask-alimentos-3">
        <p> Es importante que tenga en cuenta que si la actividad comercial que desarrolla el establecimiento es de proceso y/o distribución de alimentos o planta de sacrificio de animales de especies mayores o menores se comunique con el Instituto de Vigilancia de Alimentos y Medicamentos INVIMA quien tiene la competencia de otorgar el concepto Técnico Sanitario PBX 2948700. </p>
        <p> Si la actividad comercial que se realiza en el establecimiento es de preparación, almacenamiento, comercialización o expendio de alimentos, debe dirigirse a la Subred integrada de servicios de salud, de acuerdo con la localidad  donde se encuentra ubicado el establecimiento y radicar su solicitud.</p>
        <div class="centrado">
        <img class="centrado"src="images/alimentos/respuestaPregunta2.png" width="400px" height="480px"/>
          </div>
    </div>
    <div id="ask-alimentos-4">
        <p> •	Si sospecha que usted o su familia tienen una enfermedad transmitida por alimentos debe asistir de inmediato a su servicio médico de urgencias. </p>
        <p> •	Si tiene restos de los alimentos consumidos, no los bote, debe conservarlos en la nevera. Estos pueden ser necesarios para analizarlos en el laboratorio. </p>
        <p> •	Si los alimentos fueron consumidos en un establecimiento comercial debe anotar el nombre y dirección del lugar. </p>
    </div>
    <div id="ask-alimentos-5">
        <p> La Secretaría Distrital de Salud se permite informar que, a partir del 1 de abril de 2015, la inspección a vehículos transportadores de alimentos y bebidas en el Distrito Capital, se realizará únicamente en las Subredes Integradas de Servicios de Salud que a continuación se detallan: </p>
        <p> <b> Subred Sur Occidente </b> </p>
        <p> USS Fontibón: Dirección: carrera 106 No. 15 A - 32 piso 3 detrás del Éxito de Zona Franca.  </p>
        <p> Teléfono: 4860033 Ext. 8520 </p>
        <p> USS Pablo VI Bosa: Dirección: calle 68 B sur No. 78 H – 51 piso 2 a dos cuadras del cementerio de Bosa, barrio San Pablo Primer Sector.  </p>
        <p> Teléfono: 4860033 Ext. 8520 - 7799800 Ext. 20120 / 20150 </p>
        <p> <b> Subred Centro Oriente </b> </p>
        <p> USS Centro Oriente: Dirección: carrera 7 No. 30D – 44 sur o calle 22 8A – 58 sur. </p>
        <p> Teléfono: 5966600 ext 1752 </p>
        <p> <b> Subred Norte </b> </p>
        <p> USS Usaquén: Dirección: calle 165 No. 7 – 38 piso 1 UPA Servita, al lado del Hospital Simón Bolívar, barrio Servita.  </p>
        <p> Teléfono: 6719760 </p>
        <p> Es importante recordar:</p>
        <p> Para que se realice la inspección del vehículo, debe ir cargado, excepto cuando va a solicitar por primera vez la inspección.</p>
        <p> Debe presentar la siguiente documentación: </p>
        <p> Fotocopia de la tarjeta de propiedad del vehículo. </p>
        <p> Original y copia de: certificación de capacitación en el tema de manejo higiénico de alimentos y certificado médico de las personas manipuladoras de alimentos en vehículo.</p>
        <p> Para más información sobre el tema dirigirlas a los correos: </p>
        <p> mhernandez@saludcapital.gov.co, mcpsanchez@saludcapital.gov.co</p>

    </div>
    <div id="ask-alimentos-6">
        <p> Las ETA son producidas por ingerir accidental, incidental o intencionalmente de agua o alimentos contaminados, mal preparados o deficientemente conservados, generando cantidades suficientes de agentes químicos y microbiológicos (o sus toxinas), que afectan al organismo, debido a la deficiencia de Buenas Prácticas de Manufactura BPM en el proceso, preparación elaboración, transporte o comercialización de los alimentos y agua. </p>
        <p> Cuando la enfermedad se origina al consumir un alimento que contiene gran cantidad de bacterias, virus, hongos, parásito, se reproducen en el cuerpo, ocasionando náuseas, vómitos, dolor de cabeza, diarrea, fiebre y otros síntomas como vértigo, sudoración profusa, asfixia, poca coordinación de los movimientos y a veces convulsiones debido a que estas sustancias pueden atacar el sistema nervioso. </p>
        <p> La intoxicación alimentaria se produce también cuando se consumen alimentos contaminados con sustancias químicas como plaguicidas, herbicidas etc. </p>
        <p> <b>Recomendaciones para un adecuado manejo de los alimentos</b>  (Común para todos los alimentos)</p>
        <p> <b>Es importante tener en cuenta:</b>  </p>
        <p> •	Lavarse las manos antes de entrar en contacto con los alimentos y después de ir al baño.</p>
        <p> •	Lavar muy bien los utensilios y equipos que se vayan a utilizar.</p>
        <p> •	Cocinar bien los alimentos y no prepararlos con demasiada anticipación a su consumo.</p>
        <p> •	Usar agua potable.</p>
        <p> •	Los alimentos preparados o precocidos deben ser refrigerados si no se consumen en un periodo corto de tiempo.</p>
        <p> •	Evitar el contacto de alimentos crudos con cocidos durante la preparación y/o almacenamiento.</p>
        <p> •	Los pescados, mariscos, carnes, y pulpa de fruta se deben almacenar a temperatura de congelación.</p>
        <p> •	Los derivados lácteos, huevos, frutas y verduras deben almacenarse a temperatura de refrigeración.</p>
        <p> •	No almacenar alimentos junto a combustibles, insecticidas, detergentes, etc.</p>
        <p> •	Los alimentos deben almacenarse protegidos de insectos, roedores, polvo, etc.</p>
        <p> •	Almacenar las basuras en recipientes con tapa o bolsas cerradas.</p>
        <p> •	No permitir la presencia de animales en sitios de elaboración de alimentos.</p>
        <p> •	Evite al máximo comprar en ventas ambulantes.</p>
        <p> •	Nunca compre alimentos que sospeche hayan sido transportados junto con productos peligrosos: venenos, plaguicidas, desperdicios, abonos.</p>
        <p> No olvide: </p>
        <p> En lo posible mantener refrigerados los alimentos sospechosos, para que puedan ser analizados posteriormente por la autoridad Sanitaria. </p>
        <p> Llame inmediatamente a la <b>Línea 123</b>  (urgencias en salud). </p>

    </div>
    <div id="ask-alimentos-7">
        <p> Lo más importante es recordar que el consumo de bebidas alcohólicas debe hacerse con moderación. El consumo excesivo de alcohol etílico ocasiona efectos dañinos sobre la salud de las personas. Puede llevar al alcoholismo y hasta causar la muerte por consumo crónico. </p>
        <p> Cuando se consumen bebidas alcohólicas adulteradas o falsificadas, aumentan los riesgos sobre la salud. Por lo tanto, es importante verificar la autenticidad de la bebida antes de ingerirla. Se deben revisar los siguientes aspectos:</p>
            <p> •	En el rotulado verificar el nombre del producto, que aparezca la empresa fabricante o importadora responsable del producto, con nombre y ubicación, y que tenga escrito el número de Registro Sanitario. </p>
            <p> •	Verificar que el contenido neto declarado en el rotulo o etiqueta coincida con la capacidad del envase adquirido. Así mismo, debe expresar claramente el grado alcohólico contenido. </p>
            <p> •	El estado de envases, empaques, etiquetas, contra-etiquetas, tapas, bandas, sellos de seguridad y estampillas deben encontrarse en buenas condiciones; el deterioro, rotura, oxidación, destrucción, obviamente ya hace parte al producto no aceptable. </p>
            <p> •	Observar que la etiqueta tenga bien definidas sus características litográficas y no presente deterioro. </p>
            <p> •	Observar cuidadosamente la tapa, tratar de verificar que sea autentica (no debe perder su pintura fácilmente, por ejemplo, con la uña). La botella debe estar perfectamente cerrada y la banda de seguridad intacta. </p>
            <p> •	Al momento de abrir la botella, en el caso de que traiga dispensador, verificar su estado. Cualquier anomalía como perforaciones, es evidencia de una posible adulteración </p>
            <p> •	Verificar la presencia de estampilla de impuestos en las bebidas nacionales. Adicionalmente la de aduana en los importados. Esto aumenta la seguridad acerca de la procedencia autentica de la bebida. </p>
            <p> •	Posteriormente, deben ser evaluadas las características sensoriales como aspecto del producto, apariencia, color, etc. Si se observa turbidez, presencia de partículas extrañas en suspensión, elementos extraños (vidrios, elementos metálicos, etc.), separación de fases, merma en el volumen nominal, cambio de coloración, indican posibles alteraciones y/o fraudulencia del producto. </p>
            <p> •	En el caso de los licores deben tener aspecto brillante, color característico y estar limpios de partículas en suspensión. </p>
            <p> •	Deben tenerse precauciones especiales al ingerir bebidas alcohólicas en, establecimientos abiertos al público, tales como bares, tabernas, discotecas, etc. </p>
            <p> •	Debe exigirse la botella cerrada para revisión, antes de ingerir cualquier trago. </p>
            <p> •	Por ningún motivo se debe ofrecer bebidas alcohólicas a los niños, en determinadas condiciones, un solo trago puede causar trastornos graves en la salud del menor. </p>
            <p> No olvide: </p>
            <p> Al momento del consumo: Verifique el aroma y sabor de la bebida. Ante cualquier anormalidad absténgase de consumirlo. </p>
            <p> El consumo de bebidas alcohólicas está contraindicado cuando se consumen determinados medicamentos. Verifique esta información en el empaque del medicamento o directamente con su médico. </p>
            <p> El consumo de bebidas alcohólicas está contraindicado con algunas actividades cotidianas como el conducir; esta combinación pone en peligro la salud y la vida del ciudadano. </p>
            <p> Tenga en cuenta que en todo recipiente de bebida alcohólica nacional o extranjera deberá imprimirse en el extremo inferior de la etiqueta y ocupando al menos la décima parte de ella la leyenda: " El exceso de alcohol es perjudicial para la salud " conforme a lo dispuesto en el artículo 16 de la Ley 30 de 1986. </p>
    </div>
    <div id="ask-alimentos-8">
        Los Laboratorios de análisis fisicoquímico y microbiológico de alimentos interesados deben cumplir con los estándares de calidad relacionados en la Resolución 1619 de 2015 del Ministerio de Salud y Protección Social.
    </div>
    <div id="ask-alimentos-9">
        <p>  Las personas naturales y/o jurídicas propietarias de establecimientos en funcionamiento y dedicados a las actividades de expendio y almacenamiento de carne y productos cárnicos comestibles en la ciudad de Bogotá, pueden realizar su inscripción en el siguiente enlace: </p>
        <p> <a href="https://appb.saludcapital.gov.co/Sivigiladc/ExpendioDeCarne/frmSubMenuExpCarnes.aspx?opcion=New&n=&Origen=Login&opcion=New&n=&Origen=Login">ver aquí</a>  </p>
    </div>
    <div id="ask-alimentos-10">
        <p> Todo establecimiento debe cumplir con las condiciones sanitarias que se describen en la Ley 9 de 1979, que está compuesta por títulos de carácter general como los de protección del medio ambiente, suministro de agua, y salud ocupacional, así como algunos específicos como el título V denominado Alimentos, en el que se establecen las normas específicas a las que están sujetos los establecimientos industriales y comerciales en los que se realicen actividades que se relacionan con alimentos. </p>
        <p> También deben cumplir con los requisitos sanitarios establecidos en la Resolución 2674 de 2013. Esta norma indica específicamente en el capítulo VIII  las condiciones sanitarias que deben cumplir los restaurantes y establecimientos gastronómicos.   </p>
    </div>

    <div id="ask-agua-1">
        <p> Dentro de las acciones de inspección, vigilancia y control se debe propender por garantizar las condiciones higiénicas y sanitarias de cada uno de los siguientes establecimientos:  </p>
        <div class="centrado">
        <img class="centrado"src="images/agua/Respuesta1Agua.png" width="400px" height="400px"/>
          </div>

    </div>
    <div id="ask-agua-2">
        <p> Aunque existen muchas enfermedades asociadas al consumo de agua, la Secretaría Distrital de Salud vigila las de mayor interés en salud pública y que son consideradas como trazadoras o significativas, entre estas se encuentran</p>
        <p> •	Hepatitis A </p>
        <p> •	Enfermedad Diarreica Aguda (EDA) </p>
        <p> •	Mortalidad por EDA en menores de 5 años </p>
        <p> •	Morbilidad según el perfil epidemiológico institucional de los hospitales de la red pública Distrital </p>
    </div>
    <div id="ask-agua-3">
        Los índices de morbilidad y mortalidad de enfermedades que pueden estar asociadas al consumo de agua se realizan a través del área de vigilancia epidemiológica mediante el seguimiento de reportes al sistema de vigilancia SIVIGILA, así como las consultas y atenciones de la red pública hospitalaria a través del Registro Individual de Prestación de Servicios de Salud RIPS.
    </div>
    <div id="ask-agua-4">
        <p> En los juguetes, sus componentes y accesorios, se verifican las siguientes condiciones: </p>
        <p> Aspectos de higiene: Los juguetes deben garantizar condiciones de higiene tales que a través de ellos no se genere un riesgo de infección, enfermedad o contagio por malas condiciones de higiene durante su almacenamiento, exhibición y comercialización: El lugar de almacenamiento y exhibición debe estar libre de humedad y los juguetes deberán encontrarse en adecuadas condiciones de higiene y limpieza. </p>
        <p> Requisitos de etiquetado o rotulado: Verificar en la etiqueta o empaque del producto la información mínima requerida. </p>
        <p> •	La información debe ser legible, visible y en idioma español </p>
        <p> •	La etiqueta debe contener la identificación del fabricante. </p>
        <p> •	La etiqueta debe contener la identificación del importador o comercializador autorizado. </p>
        <p> •	Debe estar registrado el número de lote del juguete. </p>
        <p> •	Se debe indicar la edad mínima del usuario recomendada. </p>
        <p> •	Registrarse información sobre las advertencias y precauciones de empleo relacionadas con el juguete. </p>
        <p> •	En caso de ser necesario se registran las indicaciones de uso del juguete, los cuidados, los riesgos que puede ocasionar su uso y la forma de evitarlos. </p>
        <p> Certificado de conformidad: Preguntar al comercializador si el proveedor de los juguetes (fabricante, importador o distribuidor) le entregó los certificados de conformidad de los juguetes y si no indicarle que debe solicitarlo, según lo definido en la resolución 3388 de 2008. </p>
    </div>
    <div id="ask-agua-5">
        <p> La normativa que regula los hogares geriátricos en Colombia es la siguiente: </p>
        <p> Ley 1315 de 2009 Por medio de la cual se establecen las condiciones mínimas que dignifiquen la estadía de los adultos mayores en los centros de protección, centros de día e instituciones de atención. </p>
        <p> Acuerdo 312 de 2008 por medio del cual se regula el funcionamiento de los hogares geriátricos y gerontológicos que prestan servicios a las personas mayores en el Distrito Capital y se dictan otras disposiciones." - Concejo de Bogotá, D.C. </p>
        <p> Ley 1171 de 2007 Por medio de la cual se establecen unos beneficios a las personas adultas mayores. </p>
        <p> Ley 1251 de 2008, Por la cual se dictan normas tendientes a procurar la protección, promoción y defensa de los derechos de los adultos mayores. </p>
        <p> Resolución 110 de 1995, Por la cual se adoptan las condiciones mínimas para el funcionamiento de los establecimientos que ofrecen algún tipo de atención al anciano en el Distrito Capital.- Secretaría distrital de Salud. </p>
        <p> Acuerdo 254 de 2006 por medio del cual se establecen los lineamientos de la política pública para el envejecimiento y las personas mayores en el distrito capital y se dictan otras disposiciones - Concejo de Bogotá, D.C. </p>
        <p> Acuerdo 314 de 2008 por el cual se reglamenta la actividad física, cultural y educativa en los establecimientos geriátricos y gerontológicos del distrito a través de programas intergeneracionales y se dictan otras disposiciones - Concejo de Bogotá, D.C. </p>
        <p> Decreto 1538/05. Accesibilidad a edificios abiertos al público. </p>
        <p> Decreto 345 de 2010, Por medio del cual se adopta la Política Pública Social para el Envejecimiento y la Vejez en el Distrito Capital </p>
    </div>
    <div id="ask-agua-6">
        <p> La Secretaría Distrital de Salud realiza la vigilancia dentro del Distrito Capital a 20 establecimientos que cuentan con laboratorio de tanatopraxia; para la prestación de servicios, siempre que se requiera el servicio se debe verificar que estos cuenten con concepto sanitario favorable, lo cual garantiza que cumplen con todas las normas higiénicas sanitarias y locativas.  </p>
        <p> Los establecimientos son:  </p>
        <div class="centrado">
        <img class="centrado"src="images/agua/Pregunta6Agua.png" width="500px" height="170px"/>
          </div>

    </div>
    <div id="ask-agua-7">
        <p> En el Distrito Capital se tienen identificados 102 sistemas de abastecimiento identificados, de estos 101 son denominados comunitarios o auto-abastecedores, entre estos 101 sistemas se tienen 4 que, aunque cuentan con alguna infraestructura no es posible realizar control sanitario por causas como la restricción en el ingreso, carencia de responsable y agotamiento de la fuente de abastecimiento. </p>
        <p> Tabla 1. sistemas de abastecimiento por localidad de los denominados comunitarios y otros tipos de sistemas, Bogotá Octubre 2019</p>
        <div class="centrado">
      <img src="images/agua/Pregunta7Agua.png" width="200px" height="200px"/>
        <p> Fuente: Secretaría distrital de Salud. Vigilancia Sanitaria y ambiental. Bogotá. 2019 </p>
    </div>
    </div>
    <div id="ask-agua-8">
        <p> El resultado de la vigilancia de la calidad de agua en los acueductos comunitarios se mide mediante el Índice de Riesgo de la Calidad del Agua para Consumo Humano (IRCA), el cual muestra el grado de riesgo de ocurrencia de enfermedades relacionadas con el no cumplimiento de las características físicas, químicas y microbiológicas del agua, este se califica en una escala de 0 a 100, siendo 0 la calificación sin riesgo y 100 la inviable sanitariamente. Estos resultados son reportados al Sistema de Información de la Vigilancia de la Calidad del Agua para Consumo Humano SIVICAP. Para obtener mayor información del comportamiento del IRCA en los acueductos comunitarios, se puede dirigir al indicador distrital Índice de riesgo para la calidad del agua potable (IRCA) otros sistemas de abastecimiento en Bogotá D.C. </p>
        <p> Ver indicador: <a href= "http://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-ambiental/irca-otros/">Índice de riesgo para la calidad del agua potable IRCA de otros sistemas de abastecimiento en Bogotá D.C.</a></p>
    </div>
    <div id="ask-agua-9">
        <p> Respecto al traslado de cuerpos la Secretaría de salud también expide un certificado sanitario a los vehículos que realizan este tipo de servicios, por lo cual, al momento de contratar dicho servicio se debe verificar que el vehículo cuente con esta documentación vigente. </p>
        <p> Verifique también en este sitio web  los vehículos certificados. </p>
    </div>
    <div id="ask-agua-10">
        <p> El resultado de la vigilancia de la calidad de agua a <b>la empresa de Acueducto y Alcantarillado de Bogotá</b> se mide mediante el Índice de Riesgo de la Calidad del Agua para Consumo Humano (IRCA), el cual muestra el grado de riesgo de ocurrencia de enfermedades relacionadas con el no cumplimiento de las características físicas, químicas y microbiológicas del agua, <b>este se califica en una escala de 0 a 100, siendo 0 la calificación sin riesgo y 100 la inviable sanitariamente</b>. Estos resultados son reportados al Sistema de Información de la Vigilancia de la Calidad del Agua para Consumo Humano SIVICAP. Durante el periodo 2012 a 2014 el IRCA de la EAAB ha están dentro del rango sin riesgo: de 0 a 5%, lo cual muestra la buena calidad del agua suministrada a la gran mayoría (98%) de la población del Distrito.</p>
        <p> Ver indicador: Índice de riesgo para la calidad del agua potable IRCA para la Empresa de Acueducto y Alcantarillado de Bogotá EAAB. </p>
    </div>
    <div id="ask-agua-11">
        <p> Estos requisitos se encuentran establecidos dentro de la siguiente normatividad: </p>
        <p> Resolución 110 de 1995 (por la cual se adoptan las condiciones mínimas para el funcionamiento de los establecimientos que ofrecen algún tipo de atención al anciano en el Distrito Capital). </p>
        <p> Ley 1315 de 2009 (Por medio de la cual se establecen las condiciones mínimas que dignifiquen la estadía de los adultos mayores en los centros de protección, centros de día e instituciones de atención). </p>
        <p> Ley 9 del 1979 (Por la cual se dictan Medidas Sanitarias). </p>
    </div>
    <div id="ask-agua-12">
        <p> Es importante tener en cuenta que, para solicitar esta visita, el hogar geriátrico debe estar en funcionamiento. </p>
        <p> La solicitud se realiza directamente a la Unidad Prestadora de Servicios de Salud Fontibón ubicada en la Kra 106 15ª 32 o por vía telefónica al 4860033 Ext. 10002 </p>
    </div>
    <div id="ask-agua-13">
        <p> Para el año 2015 se tenían 245 puntos concertados con la Empresa de Acueducto de Bogotá  EAAB de los cuales se han materializado 166 así, 50 Tanques, 112 piletas de muestreo, así como 4 plantas de tratamiento de agua potable.</p>
    </div>
    <div id="ask-agua-14">
        <p> Los decretos 1843/91, 1575/07 y las resoluciones 2190/91, 4143/93 reglamentan las condiciones para el mantenimiento, lavado y desinfección de tanques de almacenamiento domiciliario de agua potable; Además se refieren a la periodicidad y al control de las empresas que realizan actividades de lavado y desinfección, quienes deben contar concepto sanitario favorable dado por la Secretaría de Salud Distrital, y que una vez prestado el servicio deben certificar mediante análisis de laboratorio las condiciones fisicoquímicas y microbiológicas del agua de cada uno de los tanques intervenidos.</p>
    </div>

    <div id="ask-clima-1">
        Los efectos del cambio climático sobre la salud se clasifican en enfermedades y defunciones relacionadas con la temperatura, con fenómenos meteorológicos extremos (inundaciones, vendavales, fenómenos de remoción en masa, etc.), con la contaminación atmosférica, enfermedades transmitidas por el agua y los alimentos, enfermedades zoonóticas, en especial las transmitidas por vectores y roedores; efectos de la falta de alimentos y agua, efectos sobre la salud mental, la nutrición y las infecciones. La intensidad con la que los efectos del cambio climático influyen sobre la salud humana se encuentran directamente relacionados con la vulnerabilidad de las poblaciones, que a su vez depende del grado de desarrollo económico, densidad demográfica, disponibilidad de alimentos, nivel y distribución de los ingresos, condiciones ambiéntales locales, la calidad y disponibilidad de atención en salud.
    </div>

    <div id="ask-clima-2">
        De acuerdo con la Convención Marco sobre el Cambio Climático (CMNUCC), el cambio climático se define como la variación del clima atribuido directa o indirectamente a la actividad humana que altera la composición de la atmósfera a nivel mundial y que se suma a la variabilidad natural del clima observada durante períodos de tiempo comparables generalmente décadas o más. <em>(Masson-Delmotte, , y otros, 2018)</em>.
    </div>
    <div id="ask-clima-3">
        De acuerdo a la OMS se prevé que entre los años 2.030 y 2.050 el cambio climático causará unas 250.000 defunciones adicionales cada año, debido a la malnutrición, el paludismo, la diarrea y el estrés calórico.
    </div>

    <div id="ask-clima-4">
      Las altas temperaturas provocan un aumento de los niveles de ozono y de otros contaminantes del aire que agravan las enfermedades cardiovasculares y respiratorias. Los niveles de polen y otros alérgenos también son mayores en caso de calor extremo, estos pueden provocar asma, dolencia que afecta a unos 300 millones de personas en el mundo.
    </div>
    <div id="ask-clima-5">
    Los rayos ultravioleta (UV) son un tipo de radiación invisible que proviene del sol principalmente, sin embargo, puede ser generado por elementos como, las camas solares y las lámparas solares. Los rayos ultravioletas pueden penetrar y cambiar las células de la piel <em>(CDC, 2016)</em>.
    <p>Existen tres tipos de rayos UV: ultravioleta A (UVA), ultravioleta B (UVB) y ultravioleta C (UVC).</p>
    <p>• Los rayos UVA constituyen la fuente más común de radiación solar presente en la superficie terrestre y penetran más allá de la capa externa de la piel humana. Los científicos consideran que los rayos UVA pueden causar daños al tejido conectivo y aumentan el riesgo de contraer cáncer de piel.</p>
    <p>• En comparación con los rayos UVA, la mayoría de los rayos UVB son absorbidos por la capa de ozono, por lo tanto, son menos comunes en la superficie terrestre. Los rayos UVB, que ayudan a producir la vitamina D en la piel, no penetran demasiado en la piel como los rayos UVA, aunque de igual forma pueden causar daños.</p>
    <p>• Los rayos UVC son muy peligrosos, pero son absorbidos por la capa de ozono y no llegan a la superficie terrestre.</p>

    Además de producir quemaduras solares, la excesiva exposición a los rayos UV puede cambiar la textura de la piel y causar envejecimiento prematuro y/o cause cáncer de piel. Los rayos UV también se han asociado a afecciones oculares como cataratas <em>(CDC, 2016).</em>
    <p>La Organización Mundial de la Salud y la Organización Meteorológica Mundial han creado el índice UV para pronosticar el riesgo de sobreexposición a los rayos UV. Este servicio le indica el nivel de precaución que debe tener al trabajar, jugar o hacer ejercicio al aire libre <em>(OMS - OMM, 2003).</em><p>
    </div>
    <div id="ask-clima-6">
    El cambio climático es una realidad que ha venido alterando los diversos patrones climatológicos, por esta razón en las últimas décadas se han realizado diversos estudios sobre sus implicaciones ambientales y económicas. Sin embargo, el rol del cambio climático en el desarrollo de enfermedades no transmisibles no ha sido estudiado ampliamente <em>(Luna-Abanto, Rafael-Hornac, & Gil-Olivares, 2017).</em>
    <p>Es claro que el cambio climático produce un aumento de la temperatura global causada principalmente por la retención de radiaciones solares, el aumento de la producción de gases invernadero y el deterioro de la capa de ozono. Este aumento a la exposición solar se puede asociar con el incremento de cánceres fotosensibles como el cáncer de piel. Algunos estudios experimentales con ratones han demostrado que los efectos carcinogénicos de la radiación UV aumentan en un 5% por cada °C. <em>(Luna-Abanto, Rafael-Hornac, & Gil-Olivares, 2017).</em></p>
    <p>Diferentes sectores científicos coinciden en que existe una tendencia actual al calentamiento global y a la disminución de las precipitaciones en ciertas zonas del planeta. Existen controversias en cuanto a sus posibles causas y la influencia de la actividad humana. Se conoce que si la temperatura continúa en aumento se incrementarían las prevalencias de algunas patologías cutáneas como las relacionadas con la piel sensible y xerosis cutánea por disminución de la humedad relativa, otra de las enfermedades que aumentarían su gravedad son las relacionadas con las alteraciones de la función de la barrera cutánea y la dermatitis atópica. <em>(Llamas Velasco & García Díez, 2010).</em></p>
    <p>Se esperan aumentos en las tasas de cáncer de piel y de fotoenvejecimiento, debido al aumento de la radiación UVB que alcanza la superficie terrestre y en sinergia con los hábitos poblacionales en los cuales se aumenta la fotoexposición y no se tienen rutinas de protección adecuadas. <em>(Llamas Velasco & García Díez, 2010) (Sánchez, Nova, & De La Hoz, Factores de riesgo de carcinoma basocelular. Un estudio del Centro Nacional de Dermatología de Colombia, 2011).</em></p>
    </div>
    <div id="ask-clima-7">

    El fenómeno climático natural El Niño oscilación del sur (ENOS), en su fase fría “La Niña” y cálida “El Niño”, tiene efectos en  la salud humana, específicamente en el comportamiento de las enfermedades infecciosas, como por ejemplo las transmitidas por vectores, alterando la dinámica de transmisión, pues las modificaciones en las condiciones climáticas influyen en la dinámica biológica, ecológica  y natural de los agentes causales, así como de sus vectores <em>(Hales, Kovats, & Woodward, 2000)</em>.
    <p>De esta forma dicho fenómeno se ha relacionado con el aumento de la incidencia y epidemias de enfermedades, como el dengue y la malaria, pues el ciclo de vida del vector y el periodo de incubación del agente causal, dependen directamente de la temperatura y otras variables climáticas que retardan o aceleran el desarrollo. Las bajas temperaturas impiden la eclosión de los huevos y las altas temperaturas disminuyen el tiempo larvario del vector, en el caso de dengue (Poveda, y otros, 2000) <em>(Poveda, y otros, 2001) (Guha-Sapir & Schimmer, 2005).</em></p>
    </div>

    <div id="ask-clima-8">

 La humanidad tiene los medios necesarios para reducir drásticamente las emisiones de gases de efecto invernadero y así evitar las consecuencias catastróficas del cambio climático. Sin embargo, a fin de estabilizar el clima, la transición de combustibles fósiles -como carbón y petróleo- se debe llevar a cabo a lo largo de varias décadas. Además, la sociedad humana, en su conjunto, debe empezar a cambiar su estilo de vida y sus patrones de consumo, también fomentar la explotación de más fuentes de energía renovables, como la eólica y la solar, hasta el uso de bombillas más eficaces, así como la siembra de árboles. Los países deben adoptar políticas que fijen un precio para las emisiones de carbono y ofrezcan incentivos para fomentar el desarrollo de tecnologías energéticas más eficientes. Como se evidencia, es un trabajo arduo, que toma tiempo y necesita de la integración de todo el mundo <em>(Tomado de: https://www.ngenespanol.com/fotografia/frenar-calentamiento-global/)</em>.
    </div>



    <div id="ask-espacio-1">
    Para mantener un hogar seguro es importante prevenir riesgos que afecten a las personas que lo habitan, reconociendo los peligros (presencia de aparatos mecánicos y eléctricos, medicamentos almacenados, productos de limpieza y plaguicidas, entre otros) y generando control como mecanismo de prevención.

    <p style='font-family:"Arial",sans-serif;font-size:16px;'>Los elementos que intervienen:</span></p>
<ul style="list-style-type: disc;margin-left:31px;">
    <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>La persona que sufre el accidente y que est&aacute; condicionada por sus caracter&iacute;sticas personales: edad, sexo, enfermedades, discapacidades, car&aacute;cter, estado de &aacute;nimo, etc.&nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>El agente (objeto, elemento o mecanismo) que desencadena el accidente.&nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>El entorno (situaci&oacute;n o circunstancia) en el que se produce el accidente. &nbsp;</span></li>
</ul>

<p style='font-family:"Arial",sans-serif;font-size:16px;'>La adecuada educaci&oacute;n y concientizaci&oacute;n ayudar&aacute; a tomar los correctivos necesarios y las pautas a seguir para evitar percances dom&eacute;sticos, que en algunas ocasiones pueden llegar a ser mortales. No olvide que, en caso de accidente, se debe mantener la calma y actuar para reducir las consecuencias. &nbsp;Recuerde que es mejor prevenir y generar sensaci&oacute;n de bienestar, tranquilidad y ausencia de peligros.</span></p>
<p style='font-family:"Arial",sans-serif;font-size:16px;'>Recomendaciones de prevenci&oacute;n seg&uacute;n las 5 principales causas de accidentalidad en el hogar:&nbsp;</span></p>
<h3 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Cambria",serif;color:#243F60;font-weight:normal;'><span style='font-family:"Arial",sans-serif;color:windowtext;'>Elementos cortopunzantes:</span></h3>
<ul style="list-style-type: disc;margin-left:36.35px;">
    <li><span style='font-family:"Arial",sans-serif;'>Proteger, alejar o eliminar en lo posible del alcance de los ni&ntilde;os aquellos objetos que presenten superficies o aristas vivas (cuchillos, aspas de ventilador, trituradora, cuchillas de afeitar, agujas de coser o de punto, tijeras, etc.).&nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>No dejar que los ni&ntilde;os corran o jueguen con objetos en la boca, botellas u objetos cortantes en las manos.</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Guardar lejos del alcance de los ni&ntilde;os vasos y botellas de vidrio, as&iacute; como tambi&eacute;n cubiertos, abrelatas, sacacorchos, entre otros</span></li>
    <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Colocar las herramientas en cajones con las puntas o elementos cortantes hacia dentro.&nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Revisar y eliminar platos y vasos rotos</span></li>
</ul>
<p style='margin-right:0cm;margin-left:46.35pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-top:1.9pt;margin-bottom:.0001pt;text-indent:0cm;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
<h3 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Cambria",serif;color:#243F60;font-weight:normal;'><span style='font-family:"Arial",sans-serif;color:windowtext;'>Elementos contundentes</span><span style='font-family:"Arial",sans-serif;color:windowtext;'>:</span></h3>
<ul style="list-style-type: disc;margin-left:36.35px;">
    <li><span style='font-family:"Arial",sans-serif;'>Fije a la pared muebles y estantes que puedan volcarse</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Situ&eacute; objetos colgantes de forma estable, fij&aacute;ndolos a la pared &nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Asegure los electrodom&eacute;sticos</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Asegure los cajones y gabinetes para evitar volcamiento&nbsp;</span></li>
</ul>
<p style='margin-right:0cm;margin-left:36.0pt;font-size:15px;font-family:"Calibri",sans-serif;margin:0cm;margin-bottom:.0001pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
<h3 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Cambria",serif;color:#243F60;font-weight:normal;'><span style='font-family:"Arial",sans-serif;color:windowtext;'>Quemaduras:</span></h3>
<ul style="list-style-type: disc;margin-left:36.35px;">
    <li><span style='font-family:"Arial",sans-serif;'>Cuando cocine, ubique los mangos de las ollas y sartenes hacia adentro de manera que no sobresalgan del fog&oacute;n</span></li>
    <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Mantener a los ni&ntilde;os y personas en condici&oacute;n de discapacidad aislados de la cocina, y fuentes de calor como planchas y aparatos de calefacci&oacute;n.&nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Verificar la temperatura del agua al tomar una ducha</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Evite el derrame de sustancias calientes&nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Evite el almacenamiento de sustancias inflamables</span></li>
    <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Manipular con cuidado cualquier producto qu&iacute;mico como sustancias causticas (sosa) o corrosivas (&aacute;cido sulf&uacute;rico)&nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Impedir que los ni&ntilde;os jueguen con f&oacute;sforos, velas y encendedores&nbsp;</span></li>
</ul>
<p style='margin-right:0cm;margin-left:36.0pt;font-size:15px;font-family:"Calibri",sans-serif;margin:0cm;margin-bottom:.0001pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
  <h3 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Cambria",serif;color:#243F60;font-weight:normal;'><span style='font-family:"Arial",sans-serif;color:windowtext;'>Ca&iacute;da de alturas</span><span style='font-family:"Arial",sans-serif;color:windowtext;'>&nbsp;</span></h3>
 <ul style="list-style-type: disc;margin-left:36.35px;">
    <li><span style='font-family:"Arial",sans-serif;'>Aleje sillas, camas o muebles de las ventanas e instale cierres de seguridad que impiden que las ni&ntilde;as y ni&ntilde;os las abran.</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Evite la recreaci&oacute;n en las escaleras</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>No instale tapetes en las escaleras, &eacute;stos aumentan el riesgo de resbalones y ca&iacute;das</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Revise que las barandas de los balcones y terrazas cumplan con las medidas de seguridad adecuadas (6 cm de distancia entre uno y otro). En lo posible, instale mallas de seguridad.</span></li>
 </ul>
 <p style='margin-right:0cm;margin-left:36.0pt;font-size:15px;font-family:"Calibri",sans-serif;margin:0cm;margin-bottom:.0001pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
 <h3 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Cambria",serif;color:#243F60;font-weight:normal;'><span style='font-family:"Arial",sans-serif;color:windowtext;'>Ca&iacute;da de su propia altura</span></h3>
 <ul style="list-style-type: disc;margin-left:36.35px;">
    <li><span style='font-family:"Arial",sans-serif;'>Evite el uso de productos de limpieza que pongan el piso resbaloso&nbsp;</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Retire los cables, cuerdas y elementos sueltos de las &aacute;reas comunes</span></li>
    <li><span style='font-family:"Arial",sans-serif;'>Coloque elementos antideslizantes en las zonas h&uacute;medas (ba&ntilde;o, patio de ropa)</span></li>
 </ul>
    </div>

    <div id="ask-espacio-2">
    <p><span style='font-family:"Arial",sans-serif;'>Los accidentes en el hogar son acontecimientos inesperados que pueden suceder en cualquier espacio de la vivienda, tales como: cocina, ba&ntilde;o, cuartos, garaje, escaleras, entre otros, siendo los ni&ntilde;os y ni&ntilde;as de primera infancia los m&aacute;s propensos a las lesiones no intencionales ocurridas en casa.</span></p>
    <p><span style='font-family:"Arial",sans-serif;'>Las 5 principales causas de accidentalidad son:</span></p>
    <p><span style='font-family:"Arial",sans-serif;'>Ca&iacute;da de altura, ca&iacute;da de su propia altura, quemadura, elemento contundente y elemento cortopunzante. &nbsp;</span></p> <img class="center"src="images/espacio/Pregunta2Espacios.png" width="480px" height="170px"/>
    <p>Fuente: 
    <br>https://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/<br>salud-mental/accidentesdomesticosenmenores11anios <a href="https://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-mental/accidentesdomesticosenmenores11anios/">https://saludata.saludcapital.gov.co/osb/index.php/datos-de-salud/salud-mental/accidentesdomesticosenmenores11anios/</a></p>
    </div>
    <div id="ask-espacio-3">
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Una vivienda saludable&nbsp;es aqu&eacute;lla que brinda seguridad y protecci&oacute;n, ofrece intimidad, es confortable y contribuye al bienestar de cada una de las personas que la habitan. &Eacute;sta incluye no s&oacute;lo la casa, sino tambi&eacute;n la familia misma, el entorno inmediato y la comunidad.</span></p>
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;color:black;'>&nbsp;</span></p>
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:21.3pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;color:black;'>Algunas condiciones de habitabilidad:</span></p>
   
      <ul style="list-style-type: disc;margin-left:32.55px;">
       <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>El suministro de agua potable.</span></li>
       <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Higi&eacute;nica eliminaci&oacute;n de excretas.</span></li>
       <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Disposici&oacute;n apropiada de los desechos s&oacute;lidos.</span></li>
       <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>El drenaje de aguas superficiales a trav&eacute;s de desag&uuml;e.</span></li>
       <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>La higiene personal y dom&eacute;stica.</span></li>
       <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Espacios higi&eacute;nicos para la preparaci&oacute;n y almacenamiento de alimentos.</span></li>
       <li><span style='font-family:"Arial",sans-serif;'>Ventilaci&oacute;n adecuada y aprovechamiento de la iluminaci&oacute;n natural</span><span style='font-family:"Arial",sans-serif;font-size:12.0pt;color:#4B4F58;'>.</span></li>
    </div>

    <div id="ask-espacio-4">
        <p style='margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:23.0pt;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>M&aacute;s de la mitad de la poblaci&oacute;n mundial vive en ciudades, lo que podr&iacute;a significar una oportunidad para mejorar la calidad de vida y&nbsp;luchar por la sostenibilidad ambiental, o podr&iacute;a&nbsp;crear m&aacute;s pobreza y acelerar la destrucci&oacute;n&nbsp;de los recursos naturales.</span></p>
        <p style='margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:21.3pt;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Algunas de las acciones que se pueden emprender para mejorar y preservar son:&nbsp;</span></p>
        <ul style="list-style-type: disc;margin-left:44px;">
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Evite la deforestaci&oacute;n&nbsp;</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Ayude a conservar las &aacute;reas declaradas protegidas (fauna y flora)</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Evite el tr&aacute;fico ilegal de especies</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Implemente pr&aacute;cticas de uso y ahorro eficiente de los recursos naturales (energ&iacute;a &ndash; agua)</span></li>
        </ul>
        <p><span style='font-size:16px;font-family:"Arial",sans-serif;'>Incremente el uso de la bicicleta como medio de transporte</span></p>
    </div>
    <div id="ask-espacio-5">
        <ul style="list-style-type: disc;margin-left:44px;">
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Usar la luz el&eacute;ctrica s&oacute;lo en d&iacute;as muy oscuros o cuando sea necesario</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Apagar y desconectar computadores, televisores cuando no est&eacute;n en uso</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Conectar en una sola multitoma el computador, modem, impresora y parlantes</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Uso de bombillos ahorradores, disminuye el consumo de energ&iacute;a en un 80%.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Minimizar el tiempo que se tenga la puerta de la nevera abierta&nbsp;</span></li>
        </ul>
    </div>
    <div id="ask-espacio-6">
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Calibri",sans-serif;margin-left:23.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>La p&oacute;lvora es una mezcla de tres componentes: nitrato de potasio (75%), carb&oacute;n (15%) y azufre (10%), as&iacute; mismo y&nbsp;</span><span style='font-size:16px;font-family:"Arial",sans-serif;'>de acuerdo a los colores que generan contienen diferentes compuestos, es as&iacute; que &nbsp;los amarillos tienen sales de sodio, los anaranjados sales de hierro, los verdes tienen sales de cobre, los rojos sales de estroncio, los blancos sales de aluminio y magnesio y los rojos suaves contienen sales de litio, que en su proceso de combusti&oacute;n, que en su proceso de combusti&oacute;n , libera diferentes contaminantes a la atmosfera entre los que se encuentran, &nbsp;el di&oacute;xido de azufre SO<sub>2</sub>, el di&oacute;xido de carbono CO<sub>2</sub>, el mon&oacute;xido de carbono CO, elementos traza peligrosos como el aluminio, el manganeso, el cadmio y material particulado (PM<sub>10</sub> y PM<sub>2.5</sub>).&nbsp;</span></p>
    </div>
    <div id="ask-espacio-7">
     <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Durante la temporada navide&ntilde;a, donde es habitual la venta y uso de p&oacute;lvora, la Secretar&iacute;a Distrital de Salud promueve recomendaciones sobre: la prohibici&oacute;n, inadecuada manipulaci&oacute;n y adquisici&oacute;n, adicionalmente la polic&iacute;a realiza jornadas de control en lugares de venta de la misma.&nbsp;</span></p>
     <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Si se llegar&aacute; a identificar el trasporte, almacenaje y comercializaci&oacute;n de p&oacute;lvora de manera ilegal, se cuenta con la l&iacute;nea telef&oacute;nica 3057691842 de la Polic&iacute;a Nacional, que ser&aacute; atendida durante los siete d&iacute;as de la semana, las 24 horas del d&iacute;a. &nbsp;</span></p>
    </div>

    <div id="ask-espacio-8">
     <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>En Bogot&aacute; se pueden encontrar ecosistemas naturales que se funden o son absorbidos por el desarrollo urbano, estos se pueden catalogar como como los ecosistemas de los cerros orientales, humedales, cercan&iacute;as a cuerpos de agua. Sin embargo, se debe considerar la interrelaci&oacute;n de los individuos con su entorno al interior de la ciudad lo cual se podr&iacute;a catalogar como ecosistema urbano o de ciudad. &nbsp;</span></p>

    </div>
    <div id="ask-espacio-9">
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Los parques ecol&oacute;gicos distritales de humedales - PEDH son ecosistemas de transici&oacute;n entre el medio acu&aacute;tico y terrestre, fundamentales en el equilibrio ecol&oacute;gico y ambiental, siendo el h&aacute;bitat de muchas especies de fauna y flora, as&iacute; como elementos vitales en la estructura ecosist&eacute;mica, sociocultural y econ&oacute;mica.</span></p>
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Debido a su importancia, los PEDH hacen parte de la Estructura Ecol&oacute;gica Principal y del Sistema de &Aacute;reas Protegidas de la Ciudad de Bogot&aacute;.</span></p>
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;text-align:justify;'><span style="font-family: Arial, sans-serif; font-size: 16px;">En los siguientes enlaces podr&aacute; encontrar la informaci&oacute;n completa de los parques ecol&oacute;gicos distritales de humedales y las actividades programadas:&nbsp;</span></p>
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Jard&iacute;n Bot&aacute;nico de Bogot&aacute;, Infraestructura de Datos de Bogot&aacute; (IDECA)&nbsp;</span></p>
        <p><a href="https://jbb.gov.co/generacion-de-conocimiento/informacion-de-interes/">https://jbb.gov.co/generacion-de-conocimiento/informacion-de-interes/</a></p>
        <p><a href="https://idecabogota.maps.arcgis.com/apps/Cascade/index.html?appid=6b6693b71f7f4cbcb66db1a7a1ed7816">https://idecabogota.maps.arcgis.com/apps/Cascade/index.<br>htmlappid=6b6693b71f7f4cbcb66db1a7a1ed7816</a>&nbsp;</p>
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'>Programaci&oacute;n de recorridos e informaci&oacute;n de cada humedal&nbsp;</span></p>
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'><a href="https://humedalesbogota.com/educacion/recorridos/">https://humedalesbogota.com/educacion/recorridos/</a></span></span></p>
      
    </div>
    <div id="ask-espacio-10">

    <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Los factores ambientales siempre est&aacute;n presentes en cualquier entorno. En un sitio de trabajo influyen las condiciones clim&aacute;ticas: si las actividades se hacen en &aacute;reas libres la indumentaria a utilizar&nbsp;y&nbsp;hasta las actividades que se pueden realizar de acuerdo al clima. En espacios cerrados los factores ambientales que intervienen de manera general, pueden ser la calidad del aire, temperatura&nbsp;y&nbsp;la ventilaci&oacute;n. Para lo anterior tenga en cuenta:</span></p>

    <ul style="list-style-type: disc;margin-left:26px;">
        <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Determinar enfermedades y lesiones, provocadas por determinados factores ambientales peligrosos en el trabajo.&nbsp;</span></li>
        <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Peligros o riesgos para la seguridad y la salud derivados de su exposici&oacute;n a los mismos.&nbsp;</span></li>
        <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Laborar en el lugar de trabajo, o en su entorno, reforzando as&iacute; la protecci&oacute;n de la poblaci&oacute;n en general y del medio ambiente.</span></li>
    </ul>
    </div>
    <div id="ask-espacio-11">
    <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:36.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Cada ciudadano puede ayudar a mejorar las condiciones de vida y salud mientras se encuentre en el espacio p&uacute;blico de la siguiente manera: no deteriorando las condiciones actuales del entorno, eso quiere decir no contribuir a la contaminaci&oacute;n, como por ejemplo depositar los residuos en las canecas dispuestas para tal fin, &nbsp;no deteriorar la capa vegetal presente en un lugar, hacer buen uso de las instalaciones urbanas (juegos infantiles, bancas, fuentes, entre otras), tenencia responsable de animales de compa&ntilde;&iacute;a (condiciones de seguridad y aseo) y si se quiere ir m&aacute;s all&aacute;, los ciudadanos pueden participar en las jornadas de mejoramiento y embellecimiento de sus territorios.</span></p>
    </div>
    
    <div id="ask-espacio-12">
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:18.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;Varias entidades est&aacute;n a cargo de diferentes escenarios del espacio p&uacute;blico:</span></p>
        <div style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
            <ul style="margin-bottom:0cm;list-style-type: disc;margin-left:26px;">
                <li style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>El IDU, Instituto de Desarrollo Urbano, se encarga de la construcci&oacute;n y el mantenimiento de ciclo rutas, andenes, puentes peatonales, las zonas bajo los puentes vehiculares, sardineles, alamedas, plazoletas y plazas, y adem&aacute;s tiene a su cargo el mantenimiento de monumentos y bienes de inter&eacute;s cultural.</span></li>
            </ul>
        </div>
        <div style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
            <ul style="margin-bottom:0cm;list-style-type: disc;margin-left:26px;">
                <li style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>La Empresa de Renovaci&oacute;n y Desarrollo Urbano -ERU&nbsp;</span><span style="font-size:12.0pt;;">tiene por objeto la identificar, promover, gestionar, gerenciar y ejecutar proyectos integrales referidos a la Pol&iacute;tica P&uacute;blica de Desarrollo y Renovaci&oacute;n Urbana de Bogot&aacute; D.C.</span></li>
            </ul>
        </div>
        <div style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
            <ul style="margin-bottom:0cm;list-style-type: disc;margin-left:26px;">
                <li style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>La Unidad Administrativa Especial de Servicios P&uacute;blicos -UAESP, tiene a su cargo el alumbrado p&uacute;blico y la recolecci&oacute;n de basuras.</span></li>
            </ul>
        </div>
            <div style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'>
        <ul style="margin-bottom:0cm;list-style-type: disc;margin-left:26px;">
            <li style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-family:"Arial",sans-serif;'>Instituto Distrital de Recreaci&oacute;n y Deporte -IDRD, se encarga del Sistema Distrital de Parques y escenarios deportivos.</span></li>
        </ul>
     </div>
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:18.0pt;text-align:justify;'><br></p>
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:18.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Para mayor informaci&oacute;n puede consultar:&nbsp;</span></p>
        <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:18.0pt;'><span style="color:blue;text-decoration:underline;"><span style='font-size:16px;font-family:"Arial",sans-serif;color:windowtext;'><a href="https://bogota.gov.co/mi-ciudad/cultura-recreacion-y-deporte/8-preguntas-y-respuestas-sobre-el-espacio-publico-en-bogota">https://bogota.gov.co/mi-ciudad/cultura-recreacion-y-deporte/8-preguntas-y-respuestas-sobre-el-espacio-publico-en-bogota</a></span></span></p>
    
    </div>
    <div id="ask-espacio-13">
     <h3 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:16px;font-family:"Cambria",serif;color:#243F60;font-weight:normal;'><span style='font-family:"Arial",sans-serif;color:windowtext;'>Derechos</span><span style='font-family:"Arial",sans-serif;color:windowtext;'>&nbsp;</span></h3>
      <ul style="list-style-type: disc;margin-left:44px;">
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>A un espacio p&uacute;blico incluyente.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Como peat&oacute;n: al espacio p&uacute;blico accesible. Con el deber de cederle el paso a las personas en condici&oacute;n especial.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Para conductores y bici usuarios: derecho al espacio p&uacute;blico que permita la conectividad y movilidad y el deber de darle prioridad al peat&oacute;n.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Transitar libremente por el espacio p&uacute;blico y el deber de no encerrar los espacios colectivos.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Recreaci&oacute;n en el espacio p&uacute;blico y el deber de hacerlo en armon&iacute;a con la naturaleza y las personas.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Realizar deporte en el espacio p&uacute;blico y el deber de dejarlo en buenas condiciones.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Derecho al espacio p&uacute;blico se&ntilde;alizado.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Derecho al espacio p&uacute;blico amigable con el medio ambiente.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Derecho a ejercer la democracia participativa en el espacio p&uacute;blico.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Derecho a la participaci&oacute;n en la toma de decisiones que afecten el medio ambiente.</span></li>
      </ul>
       <h3 style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:18.0pt;font-size:16px;font-family:"Cambria",serif;color:#243F60;font-weight:normal;'><span style='font-family:"Arial",sans-serif;color:windowtext;'>Deberes</span></h3>
      <ul style="list-style-type: disc;margin-left:44px;">
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Respetar las filas para adquirir productos o servicios.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Cuidar las instalaciones y elementos proporcionados en el espacio p&uacute;blico para servicio, comodidad y bienestar.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Obrar conforme al principio de buena fe.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Tratar a los dem&aacute;s con respeto.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Ser consciente del cuidado y preservaci&oacute;n del medio ambiente.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Denunciar ante las autoridades los usos inadecuados del inmobiliario dispuesto en el espacio p&uacute;blico.</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Respetar y acatar las se&ntilde;ales de tr&aacute;nsito.</span></li>
      </ul>
      <p><span style='font-size:16px;font-family:"Arial",sans-serif;'>Contribuir para vivir en un ambiente saludable, seguro y libre de contaminaci&oacute;n.</span></p>
     </div>
    <div id="ask-espacio-14">
    <p style='margin-right:0cm;margin-left:23.0pt;font-size:16px;font-family:"Times New Roman",serif;margin-top:0cm;margin-bottom:18.0pt;'><span style='font-family:"Arial",sans-serif;'>La&nbsp;se&ntilde;alizaci&oacute;n vial es el medio f&iacute;sico, usado para informar a los diferentes actores viales las condiciones, reglas, prohibiciones y dem&aacute;s aspectos que aplican en las v&iacute;as, y tienen como objetivo buscar la forma m&aacute;s segura y correcta para su uso.</span></p>
    <p style='margin-right:0cm;margin-left:23.0pt;font-size:16px;font-family:"Times New Roman",serif;margin-top:0cm;margin-bottom:18.0pt;'><span style='font-family:"Arial",sans-serif;'>Esta se&ntilde;alizaci&oacute;n debe reunir condiciones de credibilidad, visibilidad, f&aacute;cil lectura y adecuada ubicaci&oacute;n. Mediante la Resoluci&oacute;n 1885 del 17 de junio de 2015 se adopt&oacute; la &uacute;ltima versi&oacute;n del Manual de Se&ntilde;alizaci&oacute;n Vial para la regulaci&oacute;n del tr&aacute;nsito en calles, carreteras y ciclorrutas de Colombia.</span></p>
    <ul style="margin-bottom:0cm;" type="disc">
            <li style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Radique una solicitud escrita en la Centro de Servicios de Movilidad Calle 13 o Centro de Servicio de Movilidad Paloquemao.</span></li>
            <li style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Solo se reciben en los sitios determinados:</span></li>
       </ul>
      <ol class="decimal_type" style="list-style-type: circle;">
      <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>Centro de Servicio de Movilidad Calle 13 - (Calle 13 No. 37-35).</span></li>
            <li><span style='font-family:"Arial",sans-serif;font-size:16px;'>&nbsp;Centro de Servicio de Movilidad Paloquemao - (Carrera 28 A No. 17 A -20 /&nbsp;</span><span style='font-size:16px;font-family:"Arial",sans-serif;'>La Unidad Administrativa Especial de Rehabilitaci&oacute;n y Mantenimiento Vial, adscrita a la Secretar&iacute;a Distrital de Movilidad es la entidad encargada de ejecutar las obras de reparaci&oacute;n en la malla vial de Bogot&aacute;, toda vez que tiene como objeto: <em>&ldquo;programar y ejecutar las obras necesarias para garantizar la rehabilitaci&oacute;n y el mantenimiento peri&oacute;dico de la malla vial local, intermedia y rural; as&iacute; como la atenci&oacute;n inmediata de todo el subsistema de la malla vial cuando se presenten situaciones que dificulten la movilidad en el Distrito Capital&rdquo;&nbsp;</em>y&nbsp;</span><span style='font-size:16px;font-family:"Arial",sans-serif;'>ha dispuesto de los siguientes canales de atenci&oacute;n:</span>
          
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Canal presencial:&nbsp;</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Sede Administrativa:</span><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;Calle 26 No. 69-76, Edificio Elemento, Torre AIRE &ndash; piso 3 -Bogot&aacute; D.C. Colombia, de lunes a viernes de 7:00 am a 4:30 pm.<br>&nbsp;</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Canal Telef&oacute;nico:</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>La entidad presta el servicio a la ciudadan&iacute;a a trav&eacute;s de la l&iacute;nea (+57) 601-3779555 Ext. 1001 &ndash; 1002 de lunes a viernes de 7:00 am a 4:30 pm.</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>L&iacute;nea de Servicio 195, la&nbsp;</span><span style='font-size:16px;font-family:"Arial",sans-serif;'>Unidad Administrativa Especial de Rehabilitaci&oacute;n y Mantenimiento Vial&nbsp;- UAERMV.</span><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;articula este canal con el Distrito Capital, a trav&eacute;s del cual la ciudadan&iacute;a puede acceder y obtener la informaci&oacute;n de su inter&eacute;s.</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Canal Escrito:</span></p>
            <p style='margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:41.0pt;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>La entidad presta servicio a la ciudadan&iacute;a en la Sede Administrativa Calle 26 No. 69-76, Edificio Elemento, Torre AIRE &ndash; piso 3 -Bogot&aacute; D.C. Colombia, en el horario de lunes a viernes de 7:00 am a 1:00 pm y de 2:00 pm a 4:30 pm., a trav&eacute;s de la ventanilla de correspondencia, se reciben solicitudes escritas por parte de la ciudadan&iacute;a y se radican en la ventanilla que la Entidad dispone para esto.</span></p>
            <p style='margin-top:1.9pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:41.0pt;text-indent:0cm;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Canal virtual:&nbsp;</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>P&aacute;gina web &nbsp;<span style="color:blue;text-decoration:underline;"><a href="http://www.umv.gov.co/">www.umv.gov.co</a></span></span></p>
            <ul style="list-style-type: square;margin-left:49px;">
                <li><span style='font-family:"Arial",sans-serif;'>A trav&eacute;s del formulario de peticiones Sistema Distrital para la Gesti&oacute;n de Peticiones Ciudadanas &ldquo;Bogot&aacute; te Escucha&rdquo; las 24 horas: <span style="color:blue;text-decoration:underline;"><a href="https://www.umv.gov.co/portal/pqrsfd/">https://www.umv.gov.co/portal/pqrsfd/</a></span></span></li>
                <li><strong><span style='font-family:"Arial",sans-serif;'>Chat virtual </span></strong><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>&nbsp;de lunes a viernes de &nbsp;7:00 am a 1:00 pm &nbsp;y de 2:00 pm &nbsp;a 4:00 pm. <span style="color:blue;text-decoration:underline;"><a href="https://www.umv.gov.co/portal/">https://www.umv.gov.co/portal/</a></span></span></li><strong><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></strong>
            </ul>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Tambi&eacute;n puede contactarse a trav&eacute;s de los siguientes correos:</span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Correo electr&oacute;nico institucional: <span style="color:blue;text-decoration:underline;"><a href="about%3Ablank">atencionalciudadano@umv.gov.co</a></span></span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Correo Defensor del Ciudadano: <span style="color:blue;text-decoration:underline;"><a href="about%3Ablank">defensor.ciudadano@umv.gov.co</a></span></span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Correo Denuncias corrupci&oacute;n: <span style="color:blue;text-decoration:underline;"><a href="mailto:denuncias.corrupcion@umv.gov.co">denuncias.corrupcion@umv.gov.co</a></span></span></p>
            <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:41.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp;</span></p><span style='font-size:16px;font-family:"Arial",sans-serif;'>Mayor informaci&oacute;n: <a href="https://www.umv.gov.co/portal/">https://www.umv.gov.co/portal/</a></span>
         </li>
      </ol>
    </div>
    <div id="ask-espacio-15">
        <p>La entidad presta servicio a la ciudadan&iacute;a en la Sede Administrativa Calle 26 No. 69-76, Edificio Elemento, Torre AIRE &ndash; piso 3 -Bogot&aacute; D.C. Colombia, en el horario de lunes a viernes de 7:00 am a 1:00 pm y de 2:00 pm a 4:30 pm., a trav&eacute;s de la ventanilla de correspondencia, se reciben solicitudes escritas por parte de la ciudadan&iacute;a y se radican en la ventanilla que la Entidad dispone para esto.</p>
        <p>Canal virtual:</p>
        <p>P&aacute;gina web&nbsp;&nbsp;<a href="http://www.umv.gov.co/">www.umv.gov.co</a></p>
        <ul>
        <li>A trav&eacute;s del formulario de peticiones Sistema Distrital para la Gesti&oacute;n de Peticiones Ciudadanas &ldquo;Bogot&aacute; te Escucha&rdquo; las 24 horas:&nbsp;<a href="https://www.umv.gov.co/portal/pqrsfd/">https://www.umv.gov.co/portal/pqrsfd/</a></li>
        <li><strong>Chat virtual</strong> de lunes a viernes de&nbsp;&nbsp;7:00 am a 1:00 pm&nbsp;&nbsp;y de 2:00 pm&nbsp;&nbsp;a 4:00 pm.&nbsp;<a href="https://www.umv.gov.co/portal/">https://www.umv.gov.co/portal/</a></li>
        </ul>
        <p>Tambi&eacute;n puede contactarse a trav&eacute;s de los siguientes correos:</p>
        <p>Correo electr&oacute;nico institucional:&nbsp;<a href="about:blank">atencionalciudadano@umv.gov.co</a></p>
        <p>Correo Defensor del Ciudadano:&nbsp;<a href="about:blank">defensor.ciudadano@umv.gov.co</a></p>
        <p>Correo Denuncias corrupci&oacute;n:&nbsp;<a href="mailto:denuncias.corrupcion@umv.gov.co">denuncias.corrupcion@umv.gov.co</a></p>
        <p>&nbsp;Mayor informaci&oacute;n: https://www.umv.gov.co/portal/</p>
    </div>
    <div id="ask-espacio-16">
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;text-align:justify;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Hay una relaci&oacute;n directa, ya que los veh&iacute;culos que se movilizan al interior de la ciudad y en las zonas perif&eacute;ricas de la misma, son en parte emisores de contaminantes atmosf&eacute;ricos (pm 2.5 -material particulado de 2.5 micras &ndash; pm 10 material particulado de 10 micras &ndash; CO mon&oacute;xido de Carbono &ndash; SO2 Di&oacute;xido de azufre &ndash; NO2 Di&oacute;xido de Nitr&oacute;geno &ndash; O3 Ozono-), los cuales generan deterioro de la calidad del aire y por consiguiente en la salud de las personas de orden respiratorio y cardiovascular.</span></p>      
    </div>
    <div id="ask-espacio-17">
    <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>La movilidad segura busca garantizar y prevenir la morbimortalidad por siniestros viales, en el marco de las interacciones que surgen entre el transporte y el desplazamiento de las personas en el espacio p&uacute;blico con enfoque de protecci&oacute;n al individuo vulnerable, la integraci&oacute;n de estilos de vida saludables, los espacios de recreaci&oacute;n y deporte y el disfrute del espacio p&uacute;blico, desde la corresponsabilidad y trabajo colectivo, en un sistema seguro: velocidades y veh&iacute;culos seguros, Infraestructura vial segura, comportamiento de los actores viales, cumplimiento de normas de tr&aacute;nsito y gobernanza</span></p>
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>La movilidad activa se puede entender como una pr&aacute;ctica social en la que se satisfacen las necesidades de desplazamiento usando la energ&iacute;a del cuerpo, ya sea caminando o empleando otros medios de transporte que aprovechen al ser humano como motor.</span></p>
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Una de las formas de promover una movilidad activa&nbsp;y&nbsp;segura, es que cada persona desde sus posibilidades sea responsable de su movilidad acatando las normas&nbsp;y&nbsp;respetando a los diferentes actores viales.</span></p>
      <p style='margin:0cm;margin-bottom:.0001pt;font-size:15px;font-family:"Arial MT",sans-serif;margin-left:23.0pt;'><span style='font-size:16px;font-family:"Arial",sans-serif;'>Actividades que promueven la movilidad segura y activa y mejora la calidad de vida:</span></p>
      <ul style="list-style-type: disc;margin-left:32.55px;">
       <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>caminar, hacer uso de la bicicleta, patines, patinetas, o cualquier otro que use de motor el cuerpo humano.</span></li>
       <li><span style='font-family:"Arial",sans-serif;font-size:12.0pt;'>Movilizarse en transporte p&uacute;blico o compartir el veh&iacute;culo privado con otras personas.&nbsp;</span></li>
      </ul>
      <p><span style='font-size:16px;font-family:"Arial",sans-serif;'>&nbsp; &nbsp;&nbsp; Adem&aacute;s de los beneficios de movilidad, el caminar y usar la bicicleta,&nbsp;</span><span style='font-size:16px;font-family:"Arial MT",sans-serif;'>fomentar una vida saludable y social</span><span style='font-size:16px;font-family:"Arial",sans-serif;'>, mejora el estado de &aacute;nimo, la socializaci&oacute;n y el esparcimiento, lo que aporta a la humanizaci&oacute;n de la ciudad.</span></p>
    </div>
    
    <div id="ask-medicamentos-1">
        <p>La manera adecuada de hacerlo es en un contenedor o “PUNTO AZUL” en el cual se hace la recolección de medicamentos vencidos o parcialmente consumidos por el usuario final (ej. pacientes), con el fin de darles una disposición ambientalmente adecuada y previniendo con ello riesgos en Salud Pública como los atribuidos a la falsificación de los mismos.</p>
        <p>La Industria Farmacéutica (laboratorios nacionales y multinacionales) a través de la Corporación Punto Azul en cumplimiento con la Resolución 371 de 2009, gestionan el programa de pos consumo de medicamentos, por tal motivo los contenedores reciben el nombre mencionado. Encuentre el punto azul más cercano en el siguiente link: </p>
          <p><a href="https://www.puntoazul.com.co/puntos-azules/">https://www.puntoazul.com.co/puntos-azules/</a></p>
    </div>
    <div id="ask-medicamentos-2">
        <p> •	Residuos biosanitarios tales como: jeringas, algodones, gasas, agujas, baja lenguas, etc. </p>
        <p> •	Elementos corto punzantes como agujas, cuchillas, entre otros.  </p>
        <p> •	Residuos domésticos o de otra clase (basura común), entre otros. </p>
       <p> Encuentre el punto azul más cercano en el siguiente link:</p>
       <p><a href="https://www.puntoazul.com.co/puntos-azules/">https://www.puntoazul.com.co/puntos-azules/</a></p>
    </div>
    <div id="ask-medicamentos-3">
        <p>Los contenedores se encuentran ubicados en las principales cadenas de droguerías y almacenes de grandes superficies de Colombia, para mayor precisión puede dirigirse al siguiente link y consultar cual es el punto más cercano para usted: </p>
        <p><a href="https://www.puntoazul.com.co/puntos-azules/">https://www.puntoazul.com.co/puntos-azules/</a></p>
    </div>
    <div id="ask-medicamentos-4">
        <p> Las tiendas naturistas para su apertura y funcionamiento deben cumplir como mínimo con las condiciones esenciales de higiene sanidad, locativas, personal y la documentación legal establecida en las Resoluciones 126 de 2009 y 662 de 2011 y con los requisitos establecidos en el Código Nacional de Policía, Ley 1801 de 2016 Artículo 87, del mismo modo, adherirse a las demás normas que involucren aspectos que se relacionen con la comercialización minorista de productos naturales. Además, deben solicitar una visita de inspección, vigilancia y control sanitario en las Subredes Integradas de Servicios de Salud E.S.E o en el siguiente link: <a href="http://conceptosanitario.saludcapital.gov.co/">http://conceptosanitario.saludcapital.gov.co/,</a> y anexar la documentación estipulada en el artículo 5 de la Resolución 126 de 2009. </p>
        <p> El personal encargado de la venta de los productos deberá contar con un entrenamiento específico y con una certificación de estudios en el que conste que ha aprobado como mínimo noveno grado de educación media. </p>
    </div>
    <div id="ask-medicamentos-5">
        <p> Estos establecimientos deben cumplir con los requisitos establecidos en el Decreto 1950 de 1964, Decreto 780 de 2016, Resolución 1403 de 2007, Código Nacional de Policía Ley 1801 de 2016 Artículo 87 y demás reglamentación vigente.</p>
        <p> Para la apertura de una droguería se deben cumplir con los requisitos mencionados en el siguiente link: </p>
        <p><a href="http://autorregulacion.saludcapital.gov.co/droguerias">http://autorregulacion.saludcapital.gov.co/droguerias</a></p>
    </div>
    <div id="ask-medicamentos-6">
        <p>Es cualquier suceso médico desafortunado que puede presentarse durante el tratamiento con un medicamento, pero que no tiene necesariamente relación causal con el mismo, está definición se encuentra contemplada en el Decreto 780 de 2016 Artículo 2.5.3.10.3.</p>
    </div>
    <div id="ask-medicamentos-7">
        <p>Se considera como un evento adverso serio cuando su desenlace es la muerte o una amenaza a la vida, o cuando genera o prolonga una hospitalización, causa discapacidad, interrupción del embarazo o malformaciones.</p>
    </div>
    <div id="ask-medicamentos-8">
        <p>Es aquel del cual no se tiene un conocimiento previo hasta la fecha de su ocurrencia por no haber sido consignado en la información de seguridad de un medicamento.</p>
    </div>
    <div id="ask-medicamentos-9">
        <p>Es un Evento no intencionado, diferente a los que pudieron haber llevado a la muerte o al deterioro serio de la salud del paciente, operador o todo aquel que se vea implicado directa o indirectamente, como consecuencia de la utilización de un dispositivo o aparato de uso médico.</p>
    </div>
    <div id="ask-medicamentos-10">
        <p>Cualquier sustancia administrada a la especie humana para la profilaxis, el diagnóstico o el tratamiento de una enfermedad o para modificar una o más funciones fisiológicas.</p>
    </div>
    <div id="ask-medicamentos-11">
        <p>Es el preparado farmacéutico obtenido a partir de principios activos, con o sin sustancias auxiliares, presentado bajo forma farmacéutica, que se utiliza para la prevención, alivio, diagnóstico, tratamiento, curación o rehabilitación de la enfermedad, así como los alimentos que posean una acción o se administren con finalidad terapéutica o se anuncien con propiedades medicinales. Los envases, rótulos, etiquetas y empaques hacen parte integral del medicamento, por cuanto estos contribuyen a garantizar su calidad, estabilidad y uso adecuado, está definición se encuentra contemplada en el Decreto 780 de 2016 Artículo 2.7.2.3.2.1.3.</p>
    </div>
    <div id="ask-medicamentos-12">
        <p>Cualquier episodio médico desafortunado que puede presentarse durante el tratamiento con un medicamento, pero que no tiene necesariamente relación causal con el medicamento, por ejemplo: episodios diarreicos durante la administración de un medicamento.</p>
    </div>
    <div id="ask-medicamentos-13">
        <p>Los reportes de eventos adversos se deben realizar en la plataforma INVIMA en la página <a href="https://www.invima.gov.co/">www.invima.gov.co</a> en el ítem farmacovigilancia, si se presentan dificultades con el uso de dicha plataforma comunicarse al correo <b>reportefv@invima.gov.co</b> . Si los eventos son serios deben reportarse en las 72 horas después de ocurrido el evento. Los eventos no serios se deberán reportar los primeros cinco días después del mes vencido.</p>
    </div>
    <div id="ask-medicamentos-14">
        <p>Es el proceso continuo, estructurado y diseñado por el Estado, que será desarrollado e implementado por cada institución, y que busca asegurar que los medicamentos sean usados de manera apropiada, segura y efectiva, según lo contemplado por el Decreto 780 de 2016 Artículo 2.5.3.10.3.</p>
    </div>
    <div id="ask-medicamentos-15">
        <p>Selección y uso de los medicamentos, que no requieren prescripción, por parte de las personas, con el propósito de tratar enfermedades o síntomas que ellos mismos pueden identificar.</p>
    </div>
    <div id="ask-medicamentos-16">
        <p>Uso indiscriminado e irracional de los medicamentos que deben estar sujetos a la supervisión médica.</p>
    </div>
    <div id="ask-medicamentos-17">
        <p>Todo cambio no deseado o esperado en su salud a pesar de seguir las instrucciones del uso que le hace su médico acerca del uso de los medicamentos; debe realizar el reporte de estos efectos; inclusive si usted no está seguro que el medicamento sea el causante de los síntomas.</p>
    </div>
    <div id="ask-medicamentos-18">
        <p>Sus reportes permiten cuantificar los EAM (evento adverso a medicamento) y PRM (problema relacionado con medicamentos) que ocurren en su comunidad y detectar RAM (reacciones adversas a medicamentos) no reconocidas anteriormente. Además, genera información sobre el uso de medicamentos en la población, creando datos locales que faciliten la toma de decisiones a nivel regional, nacional e internacional en pro de la salud de la comunidad.</p>
    </div>
    <div id="ask-medicamentos-19">
        <p>Es la manifestación de efectos dañinos para la salud de las personas por el uso de medicamentos, esto puede darse cuando se utilizan dosis superiores a las terapéuticas o por condiciones fisiológicas particulares.</p>
    </div>
    <div id="ask-medicamentos-20">
        <p>Si debe hacer el reporte en cero en la plataforma del INVIMA <a href="https://www.invima.gov.co/">www.invima.gov.co</a> en el ítem farmacovigilancia), los primeros cinco días hábiles después del mes vencido.</p>
    </div>
    <div id="ask-medicamentos-21">
        <p>Acuda a consulta médica ante cualquier caso de uso inadecuado de medicamentos, del que se sospeche un daño para la salud del paciente.</p>
    </div>
    <div id="ask-medicamentos-22">
        <p> Aquellas situaciones que en el proceso de uso de medicamentos causan o pueden causar la aparición de un resultado negativo asociado a la medicación. Ejemplos:</p>
        <p> </p>
        <p> •	Administración errónea del medicamento.</p>
        <p> •	Características personales.</p>
        <p> •	Conservación inadecuada.</p>
        <p> •	Contraindicación.</p>
        <p> •	Dosis, pauta y/o duración no adecuada.</p>
        <p> •	Duplicidad.</p>
        <p> •	Errores en la dispensación.</p>
        <p> •	Errores en la prescripción.</p>
        <p> •	Incumplimiento.</p>
        <p> •	Interacciones.</p>
        <p> •	Otros problemas de salud que afectan al tratamiento.</p>
        <p> •	Problema de salud insuficientemente tratado.</p>
    </div>
    <div id="ask-medicamentos-23">
        <p> Según la OMS, es una “reacción nociva y no deseada que se presenta tras la administración de un fármaco, a dosis utilizadas habitualmente en la especie humana, para prevenir, diagnosticar o tratar una enfermedad, o para modificar cualquier función biológica”. Ejemplos: </p>
        <p>  </p>
        <p> •	Aparición de dolor de cabeza posterior al inicio del medicamento. </p>
        <p> •	Diarrea por uso de antibióticos. </p>
        <p> •	Flebitis por la administración endovenosa de medicamentos. </p>
        <p> •	Erupción cutánea posterior a la administración de un medicamento </p>
    </div>
    <div id="ask-medicamentos-24">
        <p> Para notificar que usted presentó una sospecha de reacción al medicamento, debe tener en cuenta que es importante tener la mayor información de este así: </p>
        <p>  </p>
        <p> •	Nombre del medicamento. </p>
        <p> •	Cantidad formulada. </p>
        <p> •	Fábricas y depósitos de pintura. </p>
        <p> •	Con qué frecuencia lo tomó. </p>
        <p> •	Por qué se lo formularon. </p>
        <p> •	Fecha de inicio y terminación de toma del medicamento. </p>
        <p> •	Si tiene la caja o empaque donde viene el medicamento tenerlo a la mano. </p>
    </div>
    <div id="ask-medicamentos-25">
        <p>Estos establecimientos deben cumplir con los requisitos establecidos en el Decreto 1030 de 2007, Resolución 4396 de 2008, Resolución Distrital 605 de 2015, Código Nacional de Policía Ley 1801 de 2016 Artículo 87 y demás reglamentación vigente. Para la apertura de una óptica sin consultorio se deben cumplir con los requisitos mencionados en el siguiente enlace: <a href="http://autorregulacion.saludcapital.gov.co/autorregulacion#proceso">http://autorregulacion.saludcapital.gov.co/autorregulacion#proceso</a>
</p>
    </div>
    <div id="ask-medicamentos-26">
        <p>Siga los pasos que aparecen en la siguiente infografía:<a href="https://drive.google.com/file/d/1snpqkbKIIsIW0H-LnGEQKiBW_u1wZ68F/view?usp=sharing"> “ver más”.</p></a>
        
    </div>
    <div id="ask-medicamentos-27">
        <p>El Certificado de Capacidad de Adecuación y Dispensación cuenta con una vigencia de cinco (5) años contados a partir de la fecha de su expendición. Dicho certificado podrá renovarse iniciando nuevamente el trámite correspondiente.</p>
        <p>Cabe resaltar que, la vigencia de cinco (5) años de que goza el certificado expedido por la Secretaría Distrital de Salud, podrá verse afectado en caso de que el taller óptico o la óptica sin consultorio, incumpla las previsiones normativas sobre funcionamiento de este tipo de establecimientos, circunstancia que se dará como consecuencia de los hallazgos evidenciados en ejercicio de las actividades de inspección, vigilancia y control que ejerza la autoridad competente. Si como resultado de dicho ejercicio, se evidencia el incumplimiento de la normatividad correspondiente, el establecimiento dispondrá de un término no mayor de sesenta (60) días para la corrección y ajuste de las observaciones formuladas por la autoridad.</p>
        <p>De no acatarse la recomendación por parte del establecimiento en el tiempo señalado, el certificado será objeto de suspensión. Dicha circunstancia será levantada una vez se subsanen las condiciones que dieron origen a la suspensión.</p>
    </div>
    <div id="ask-medicamentos-28">
        <p>Tenga presente que debe contar con la Certificación de capacidad para la adecuación y dispensación de dispositivos médicos sobre medida para la salud visual y ocular, con el fin de cumplir en lo establecido en el Decreto 1030 de 2007 y demás normatividad legal vigente.</p>
        <p>El no acatamiento de lo acá establecido dará espacio a las sanciones a que haya lugar, previo agotamiento del debido proceso y con estricta sujeción a los procedimientos indicados en la ley, pues se entenderá el funcionamiento ilegal del establecimiento, de acuerdo con la normatividad citada.</p>
    </div>
    <div id="ask-quimicos-1">
        <p> Los requisitos para la apertura y funcionamiento de una peluquería o sala de belleza (que no incluya servicios de estética), y en general de un establecimiento de comercio, están establecidos en la Ley1801 de 2016, por medio de la cual se expide el Código Nacional de Policía y Convivencia. </p>
        <p> Como parte de los requisitos de operación, el establecimiento deberá cumplir con lo establecido en la Ley 9 de 1979 y las normas sanitarias vigentes que para el caso de la peluquería o sala de belleza son las siguientes: </p>
        <p> Resolución 2117 de 2010: Por la cual se establecen los requisitos para la apertura y funcionamiento de los establecimientos que ofrecen servicio de estética ornamental tales como, barberías, peluquerías, escuelas de formación de estilistas y manicuristas, salas de belleza y afines y se dictan otras disposiciones. </p>
        <p> Resolución 2827 de 2006: Por la cual se adopta el Manual de bioseguridad para establecimientos que desarrollen actividades cosméticas o con fines de embellecimiento facial, capilar, corporal y ornamental (Peluquería). </p>
        <p> Para mayor información visitar el link: <a href="http://autorregulacion.saludcapital.gov.co/salonesbelleza">http://autorregulacion.saludcapital.gov.co/salonesbelleza</a> </p>
        <p> Una vez abierto al público, el propietario o representante legal del establecimiento podrá solicitar la visita higiénico sanitaria en la oficina de atención de la Subred adscrita a la Secretaría Distrital de Salud, que tenga jurisdicción sobre su localidad o en el siguiente link: <a href="http://conceptosanitario.saludcapital.gov.co/">http://conceptosanitario.saludcapital.gov.co/</a>, con el fin de otorgarle el concepto sanitario respectivo.</p>
        <p><a href="{{asset("oficinas")}}">Ver ubicación</a></p>
    </div>
    <div id="ask-quimicos-2">
        <p> En primer lugar, los requisitos generales para la apertura y operación de cualquier establecimiento de este tipo están establecidos en la Ley 1801 de 2016, por medio de la cual se expide el Código Nacional de Policía y Convivencia. </p>
        <p> Como parte de los requisitos de operación, el establecimiento que presta servicios estéticos (no invasivos o de salud) deberá cumplir la Ley 9 de 1979 y las normas sanitarias vigentes que para el caso de servicios de estética personal (sin incluir peluquería, ni servicios de salud estética) se encuentran en la siguiente normatividad: </p>
        <p> Ley 711 de 2001: Por la cual se reglamenta el ejercicio de la ocupación de la cosmetología y se dictan otras disposiciones en materia de salud estética. </p>
        <p> Resolución 2263 de 2004: Por la cual se establecen los requisitos para la apertura y funcionamiento de los centros de estética y similares y se dictan otras disposiciones. </p>
        <p> Resolución 3924 de 2005: Por la cual se adopta la Guía de inspección para la apertura y funcionamiento de los centros de estética y similares y se dictan otras disposiciones. Particularmente, esta resolución presenta en uno de sus anexos un cuadro con las tecnologías que no son de competencia de las esteticistas. </p>
        <p> Resolución 2827 de 2006: Por la cual se adopta el Manual de bioseguridad para establecimientos que desarrollen actividades cosméticas o con fines de embellecimiento facial, capilar, corporal y ornamental. </p>
        <p> Para los establecimientos que prestan adicionalmente servicios de salud estética, se deberá dar cumplimiento al Decreto 1011 de 2006 y normas reglamentarias, por el cual se establece el Sistema Obligatorio de Garantía de Calidad de la Atención de Salud del Sistema General de Seguridad Social en Salud. </p>
        <p> Una vez abierto al público, el propietario o representante legal del establecimiento podrá solicitar la visita higiénico sanitaria en la oficina de atención de la Subred adscrita a la Secretaría Distrital de Salud, que tenga jurisdicción sobre la localidad, con el fin de otorgarle el concepto sanitario respectivo.</p>
        <p><a href="{{asset("oficinas")}}">Ver ubicación</a></p>
        <p> O puede solicitar la visita higiénico sanitaria ingresando los datos en el siguiente link: <a href="http://conceptosanitario.saludcapital.gov.co/">http://conceptosanitario.saludcapital.gov.co/</a></p>
    </div>
    <div id="ask-quimicos-3">
        <p> Todos los productos requieren de Notificación Sanitaria Obligatoria a excepción de las materias primas que se utilicen en la fabricación de los mismos y aquellos productos naturales que no sufran transformación química ni física, por ejemplo: arcillas y lodos volcánicos, etc., siempre y cuando no se vendan con usos específicos y con marca. Si requiere mayor información puede consultar la Decisión 516 de 2002 de la Comunidad Andina </p>
    </div>
    <div id="ask-quimicos-4">
        <p> La Resolución 2263 de 2004, por la cual se establecen los requisitos para la apertura y funcionamiento de centros de estética y similares estableció que los establecimientos en los que se aplican técnicas con finalidad terapéutica, intervenciones quirúrgicas, microcirugías (tatuaje), procedimientos invasivos (piercing), implantes o preparaciones cosméticas, deberán cumplir en todo momento con la reglamentación vigente en lo relacionado con los prestadores de servicios de salud. </p>
        <p> Para el caso de la cosmetología y/o la estética facial y corporal, la Resolución 3924 de 2005, en su Apéndice II, establece los procedimientos y aparatología que no son de la competencia de la esteticista/cosmetóloga: </p>
        <p> •Tecnología IPL (Intense pulsed light/ Luz pulsada intensa). </p>
        <p> •Rayos ultravioletas (UVA-UVB-UVC). </p>
        <p> •Tecnología Láser. </p>
        <p> •Presión negativa- succión (vacumterapia/endermología). </p>
        <p> •Cámaras hiperbáricas. </p>
        <p> •Electro acupuntura. </p>
        <p> •Electrolipólisis. </p>
        <p> •Celulipólisis. </p>
        <p> •Electroridólisis. </p>
        <p> •Dióxido de Carbono (carboxiterapiasubdérmica). </p>
        <p> •Pistolas de mesoterapia. </p>
        <p> •Microdermabrasión. </p>
        <p> •Dermoabrasión. </p>
        <p>Adicionalmente, es importante informar que mediante concepto técnico emitido por el Ministerio de Salud y Protección social (Radicado 201824000044831), relacionado con la Resolución 3924 de 2005, se indicó que respecto a la tecnología AFT <em> “(…) se considera que el establecimiento en el cual funcione, debe contar con la participación de al menos un profesional de la medicina, quien es el responsable de la valoración del usuario y del procedimiento que incluye el uso seguro del equipo. Este profesional debe cumplir con lo previsto en la Resolución 203 de 2014, en lo que respecta a la habilitación de su consultorio como profesional independiente.” </em> </p>
    </div>
    <div id="ask-quimicos-5">
        <p> Cualquier queja, reclamo, sugerencia o solicitud de información relacionada con la prestación de servicios de estética facial, corporal y ornamental, podrá efectuarla directamente en la oficina de atención de la subred correspondiente, según la localidad en la que se encuentre el establecimiento o procedimiento motivo de su inquietud. También podrá realizarlo a través de la opción de servicio al ciudadano/ Sistema Distrital de Quejas y Soluciones <a href="https://bogota.gov.co/sdqs/">(https://bogota.gov.co/sdqs/)</a> .  </p>
        <p><a href="{{asset("oficinas")}}">Ver ubicación</a></p>
    </div>
    <div id="ask-quimicos-6">
        <p> Existen servicios que requieren la intervención de un profesional de la medicina, tales como procedimientos con fines estéticos dirigidos al mejoramiento de la imagen corporal, en los que se incluyen servicios en los que se realicen los siguientes tipos de procedimientos: </p>
        <p> •	Procedimientos que impliquen solución de continuidad de la piel. </p>
        <p> •	Procedimientos que impliquen la inoculación de cualquier substancia intradérmica, subcutánea o parenteral. </p>
        <p> •	Procedimientos que impliquen la formulación de cualquier principio activo farmacológico parenteral, oral o tópico. </p>
        <p> •	Procedimientos, técnicas o actividades con finalidad terapéutica, intervenciones quirúrgicas, procedimientos invasivos, implantes o preparaciones cosméticas”. </p>
        <p> Los anteriores servicios y procedimientos hacen parte de los denominados servicios de salud estética los cuales se encuentran reglamentados por el Decreto 1011 de 2006, por el cual se establece el Sistema Obligatorio de Garantía de Calidad de la Atención de Salud del Sistema General de Seguridad Social en Salud. Esto significa que estos servicios deberán habilitarse, cumpliendo con lo establecido por el Decreto 1011 de 2006 y sus normas reglamentarias tal como la Resolución 2003 de 2014: <em> “Por la cual se definen los procedimientos y condiciones de inscripción de los Prestadores de Servicios de Salud y de habilitación de servicios de salud”. </em></p>
    </div>
    <div id="ask-quimicos-7">
        <p>Como punto de partida puede consultar el documento denominado: Conductas básicas en bioseguridad – manejo integral del Ministerio de Salud del año 1997. Para el caso específico del sector belleza, el Ministerio de la Protección Social ha expedido la Resolución 2827 de 2006, por la cual se adopta el Manual de bioseguridad para establecimientos que desarrollen actividades cosméticas o con fines de embellecimiento facial, capilar, corporal y ornamental (Peluquería). </p>
    </div>
    <div id="ask-quimicos-8">
        <p> Debido a que el término “estética” se relaciona con procedimientos tanto del área de salud como de los servicios personales, es necesario diferenciar los procedimientos estéticos que hacen parte de uno u otro sector, cuáles son sus alcances y cuál es la reglamentación aplicable a cada uno de ellos. </p>
        <p> Los servicios personales en estética o belleza son aquellos realizados en establecimientos comerciales (barberías, peluquerías, salas de belleza, centros de estética, spa, etc.) o educativos (instituciones de educación para el trabajo y desarrollo humano o instituciones de educación superior) por personas que cuentan con idoneidad al recibir una acreditación para desempeñar la respectiva ocupación u oficio. </p>
        <p> En Colombia, los servicios personales en estética o belleza se dividen básicamente en dos categorías, los cuales están reglamentados por las siguientes normas: </p>
        <p>   •	Estética ornamental (Peluquería): Resolución 2117 de 2010 y Resolución 2827 de 2006. </p>
        <p>   •	Estética y/o cosmetología Facial y/o corporal: Ley 711 de 2001, Resolución 2263 de 2004, Resolución 3924 de 2005, Resolución 2827 de 2006. </p>
        <p> De otra parte, los servicios de salud estética son servicios que requieren la intervención de un profesional de la medicina, en los cuales se realizan procedimientos con fines estéticos dirigidos al mejoramiento de la imagen corporal; incluye los servicios en los que se realicen los siguientes tipos de procedimientos:</p>
        <p>  •	Procedimientos que impliquen solución de continuidad de la piel. </p>
        <p>  •	Procedimientos que impliquen la inoculación de cualquier substancia intradérmica, subcutánea o parenteral. </p>
        <p>  •	Procedimientos que impliquen la formulación de cualquier principio activo farmacológico parenteral, oral o tópico. </p>
        <p>  •	Procedimientos, técnicas o actividades con finalidad terapéutica, intervenciones quirúrgicas, procedimientos invasivos, implantes o preparaciones cosméticas. </p>
        <p>  Estos servicios se encuentran reglamentados por el Decreto 1011 de 2006 y la Resolución 2003 de 2014. </p>
    </div>
    <div id="ask-quimicos-9">
        <p> Los servicios personales en estética y/o cosmetología se pueden ofrecer en diferentes tipos de establecimientos o espacios, tales como: </p>
        <p> •	Centros de estética. </p>
        <p> •	Institutos de belleza. </p>
        <p> •	Institutos de educación (con fines académicos). </p>
        <p> •	Eventos publicitarios, demostraciones, shows, ferias y demás afines </p>
        <p> •	Complementariamente en: Gimnasios, piscinas, saunas, spa, hotel, resorts y demás afines. </p>
        <p> Se debe tener en cuenta que la realización de estos servicios implicará el cumplimiento de la normatividad sanitaria vigente y en el caso de mezclar actividades diferentes en servicios complementarios, se deberá dar cumplimiento a cada norma sanitaria aplicable a cada tipo de actividad o establecimiento implicado; Ley 9 de 1979 y Ley 1801 de 2016 (Art. 87), Resoluciones 2117 de 2010, 2263 de 2004, 3924 de 2005 y 2827 de 2006.</p>
    </div>
    <div id="ask-quimicos-10">
        <p> El desarrollo de los servicios de belleza correspondientes a servicios personales de estética facial, corporal y ornamental (peluquería) se relacionan con la utilización de tres grupos de productos básicos los cuales son: </p>
        <p> •	Cosméticos (Peluquería y estética). </p>
        <p> •	Aparatología estética (Estética facial y corporal). </p>
        <p> •	Productos de aseo, higiene y limpieza o productos de desinfección y esterilización (Peluquería y estética). </p>
        <p>Para cualquiera de estos productos existe un régimen de registros sanitarios para su producción, procesamiento, envase, empaque, almacenamiento, expendio, comercialización, mantenimiento, uso, importación y exportación. Por lo tanto, se recomienda que consulte la legalidad de estos productos verificando el registro sanitario o la notificación sanitaria obligatoria, consultando de una forma rápida y actualizada en la página web del INVIMA: <a href="https://www.invima.gov.co">www.invima.gov.co</a>, en el menú: <em>“ITEMS DE INTERÉS”</em> , enlace:<em> “Consulte el Registro Sanitario”.</em></p>
        <p> También puede dirigirse personalmente al INVIMA, ubicado en la Carrera 10 # 64 – 28, Bogotá D.C. comunicarse al teléfono: 2948700 o a la línea gratuita: 018000122220, donde le atenderán su duda acerca de registros o notificaciones sanitarias.</p>
    </div>
    <div id="ask-quimicos-11">
        <p> En primer lugar, los requisitos generales para la apertura y operación de cualquier establecimiento de este tipo están establecidos en la Ley 1801 de 2016, por medio de la cual se expide el Código Nacional de Policía y Convivencia. </p>
        <p> Como parte de los requisitos de operación, el establecimiento deberá cumplir con lo establecido en la Ley 9 de 1979 y las normas sanitarias vigentes que para el caso son las siguientes: </p>
        <p> Se entiende que los servicios de masaje con fines de relajación o estéticos hacen parte del campo de ejercicio de los servicios personales en estética, que han sido definidos en la Ley 711 de 2001 como <em>“Prácticas y actividades de embellecimiento corporal”</em> , por la cual se reglamenta el ejercicio de la ocupación de la cosmetología y se dictan otras disposiciones en materia de salud estética y la Resolución 2263 de 2004, por la cual se establecen los requisitos para la apertura y funcionamiento de los centros de estética y similares y se dictan otras disposiciones. </p>
        <p> Estas dos normas definen entonces, el campo de ejercicio de la estética y/o cosmetología, incluyendo los siguientes procedimientos, entre otros: </p>
        <p> •	Tratamientos cosméticos faciales y corporales. </p>
        <p> •	Masaje manual estético (Facial y corporal). </p>
        <p> •	Uso de aparatología estética. </p>
        <p> •	Drenaje linfático manual. </p>
    </div>
    <div id="ask-quimicos-12">
        <p> La línea de Seguridad Química de la SDS adelanta intervenciones a establecimientos dedicados a la transformación fisicoquímica de las propiedades de las materias primas destinadas a la elaboración de bienes y productos intermedios o terminados, y a los prestadores de servicios a la industria y la comunidad en general que almacenen, manejen o comercialicen sustancias químicas, ubicados en Bogotá D.C., a excepción de aquellas industrias en donde tiene lugar la producción y procesamiento de alimentos o de materias primas relacionadas, la fabricación de medicamentos, dispositivos médicos, cosméticos o productos para el aseo de uso doméstico, cuya competencia para la vigilancia recae en el Instituto para la Vigilancia de Medicamentos y Alimentos (INVIMA). </p>
        <p> Los sectores o industrias vigiladas son: </p>
        <p> Industria extractiva, superficial, canteras y fábricas de ladrillo </p>
        <p> Depósitos de material de construcción y ferreterías </p>
        <p> Industrias manufactureras </p>
        <p> Empresas de servicios automotrices (mantenimiento de vehículos y distribuidoras de combustibles) </p>
        <p> Lavanderías </p>
        <p> Empresas gestoras de residuos peligrosos </p>
        <p> Empresas de servicios personales de belleza (estética ornamental, facial y/o corporal) </p>
        <p> Estudios de tatuaje, micropigmentación o piercing </p>
    </div>
    <div id="ask-quimicos-13">
        <p> Cuando un establecimiento genere posibles afectaciones a la salud de los trabajadores o a la población adyacente a las instalaciones donde se encuentre un establecimiento comercial, debido al desarrollo de actividades económicas que involucren el uso de sustancias químicas, generación de residuos peligrosos o empleo de maquinaria o equipos, puede poner la queja por medio del Sistema Distrital de Quejas y Soluciones – SDQS – en el link <a href="http://www.bogota.gov.co/sdqs">http://www.bogota.gov.co/sdqs</a> o radicando una carta donde se exponga la situación presentada en la Secretaría Distrital de Salud – SDS – en la Carrera 32 No. 12 – 81 o en la Unidad de Servicios de Salud de la Subred integrada de servicios de salud de la localidad donde se encuentre ubicada la empresa objeto de la petición. </p>
        <p> Es importante que en la queja presentada se detalle la dirección exacta de las instalaciones que posiblemente estén ocasionando las afectaciones, y se describan con la mayor precisión las condiciones o deficiencias del establecimiento que den lugar a la problemática expuesta. </p>
    </div>
    <div id="ask-quimicos-14">
        <p> Dado que la vigilancia y control de estos aspectos están reglamentados por la Resolución 1188 de 2003, y que con base en la misma, la competencia para estas acciones está dada por la autoridad ambiental; en Bogotá le corresponde a la Secretaría Distrital de Ambiente verificar las condiciones establecidas y garantizar el cumplimiento de las disposiciones del Manual de normas y procedimientos para la gestión de los aceites usados en el Distrito Capital, y en consecuencia adoptar las medidas de prevención y corrección necesarias y de ser el caso la imposición de las sanciones correspondientes. </p>
        <p> Sin embargo, la autoridad sanitaria (Secretaría Distrital de Salud) podrá reportar el incumplimiento de dicha norma a la autoridad competente mediante oficio, en el que se describa la situación evidenciada durante la visita de inspección sanitaria. </p>
    </div>
    <div id="ask-quimicos-15">
        <p> Durante una visita de inspección sanitaria se puede constatar el incumplimiento de disposiciones que no se encuentran dentro de la competencia de la autoridad sanitaria, como por ejemplo las relacionadas con impactos para el ambiente generados por el desarrollo de las actividades económicas. </p>
        <p>  En ese caso, se efectúa la verificación de las condiciones con base en la normativa ambiental y se registran los hallazgos encontrados, de tal manera que se entrega el respectivo informe a la autoridad competente que para el Distrito Capital es la Secretaría Distrital de Ambiente, quién recibirá la notificación correspondiente sobre cualquier evento relacionado con disposición inadecuada de residuos, aguas residuales, emisiones incontroladas de gases de combustión, entre otras, para que así se tomen las acciones pertinentes. </p>
    </div>
    <div id="ask-quimicos-16">
        <p> Como cualquier otro establecimiento abierto al público, las lavanderías deben cumplir con las disposiciones establecidas en la Ley 9 de 1979 que, en lo relacionado con dicha actividad económica, se refiere a: </p>
        <p> •	La distribución adecuada el espacio (zonas específicas para distintos usos y actividades). </p>
        <p> •	La separación física, delimitación o demarcación de áreas de trabajo y de almacenamiento de sustancias químicas y materiales. </p>
        <p> •	La adecuación de pisos impermeables, sólidos y antideslizantes que se mantengan en buenas condiciones y secos. </p>
        <p> •	La inclinación y canalización suficientes para el completo escurrimiento de los líquidos generados en el proceso, evitando la disposición de vertimientos en drenajes del alcantarillado. </p>
        <p> •	La iluminación suficiente, en cantidad y calidad, para prevenir y garantizar adecuadas condiciones de visibilidad y seguridad. </p>
        <p> •	La existencia de ventilación que garantice el suministro de aire limpio y fresco, en forma permanente y en cantidad suficiente. </p>
        <p> •	El buen estado y el mantenimiento de la maquinaria y equipo utilizados, de tal manera que sean operados siempre en forma segura. </p>
        <p> •	El empleo de personal capacitado, métodos, equipos y materiales adecuados y suficientes para la prevención y extinción de incendios. </p>
        <p> •	Almacenamiento seguro de sustancias químicas como el percloroetileno o el combustible para la caldera. </p>
        <p> •	Uso de protección respiratoria, máscara con filtro para vapores orgánicos, durante el proceso de limpieza. </p>
        <p> •	La señalización, control de proceso, protección personal y demás medidas necesarias para prevenir accidentes y evitar efectos a la salud. </p>
        <p> •	Implementación de prácticas para la prevención y manejo de emergencias. </p>
        <p>Así mismo, al tratarse de un establecimiento donde se lleva a cabo el almacenamiento y manipulación de sustancias químicas peligrosas, se deben tener en cuenta otros aspectos definidos en la Ley 55 de 1993, <em>“Por la cual se aprueba el convenio 170 y la recomendación 177 de la OIT sobre la seguridad en la utilización de productos químicos en el trabajo”</em>, en la cual se define el cumplimiento de los siguientes factores:</p>
        <p> •	La clasificación, etiquetado y rotulado de los productos utilizados. </p>
        <p> •	La demarcación de áreas donde se opere con sustancias nocivas. </p>
        <p> •	La información clara y precisa de las medidas preventivas y de emergencia para casos de contaminación del ambiente o de intoxicación. </p>
        <p> •	Existencia de diques de contención para los combustibles utilizados, como el A.C.P.M alimentado a la caldera. </p>
        <p> •	Implementación de medidas elementales de contención de derrames de combustibles y sustancias químicas utilizadas. </p>
        <p> •	Suministro y socialización de las hojas de seguridad de las sustancias. </p>
    </div>

    <div id="ask-zoonosis-1">
        <p>En concordancia con la Ley 9a de 1979 y el Decreto 780 de 2016,la Secretaría Distrital de Salud realiza las visitas de Inspección, Vigilancia y Control sanitario de los establecimientos médico veterinarios y aquellos que prestan servicios para animales (pet´s shop, peluquerías, spa, ventas de concentrado, entre otros). Estas intervenciones son realizadas a través de las oficinas de Salud Ambiental de las cuatro Subredes Integradas de Servicios de Salud; como resultado de la vigilancia se emite concepto técnico sanitario al establecimiento acorde con las condiciones sanitarias evidenciadas en el momento de la visita.</p>
    </div>
    <div id="ask-zoonosis-2">
        <p> En caso de evidenciar una mala práctica por parte de un profesional médico veterinario o médico veterinario zootecnista, podrá interponer la queja radicando el requerimiento directamente en las oficinas de COMVEZCOL ubicadas en la Calle 101 # 71A – 52. Se sugiere siempre contar con el acervo probatorio de la presunta mala práctica en la que incurrió el profesional con el fin de que haga parte de la investigación que se llevará a cabo. </p>
        <p> Antes de consultar cualquier servicio médico veterinario, verifique siempre que el establecimiento cuenta con los servicios de un profesional en medicina veterinaria debidamente registrado ante el Consejo Profesional de Medicina Veterinaria y Zootecnia de Colombia - COMVEZCOL.,  </p>
        <p> Si tiene alguna inquietud sobre el profesional que le atiende solicite la presentación de la tarjeta profesional y verifique la información en el  siguiente link: </p>
        <p> <a href="https://consejoprofesionalmvz.gov.co/consulta-de-profesionales">https://consejoprofesionalmvz.gov.co/consulta-de-profesionales</a> </p>
    </div>
    <div id="ask-zoonosis-3">
        <p> En estos casos se sugiere acudir a la Superintendencia de Industria y Comercio para interponer la respectiva queja pues el acto de comercializar se constituye en una transacción comercial donde quien vende tiene la responsabilidad de entregar en óptimas condiciones el bien vendido en este caso un animal.  </p>
        <p> En el marco de la Ley 1480 de 2011 “Por medio de la cual se expide el Estatuto del Consumidor y se dictan otras disposiciones". <b> Igualmente es importante anotar que por ningún motivo deben comprarse animales en vía pública</b>, dado que en este caso nadie le responderá por el animal o en su defecto por el dinero entregado por tratarse de una actividad que no se encuentra permitida por la legislación colombiana. <b>Recuerde</b> de usted depende que esta actividad se realice.  </p>
    </div>
    <div id="ask-zoonosis-4">
        <p> Antes de tomar la decisión de llevar un animal de compañía a casa, recuerda que “los animales no son objetos, son sujetos y sienten” y que “los animales de compañía no son juguetes”, antes de llevar a casa uno, pregúntate: </p>
        <p>
          <b>¿Tengo el tiempo para dedicarle?
        <p> ¿Tengo los medios económicos suficientes? </p>
        <p> ¿Tengo el espacio requerido? </p>
        <p> ¿Puedo adquirir el compromiso para 10 ó 15 años? </p>
        <p> ¿Cuál es la especie que más se adecua a la forma de vida de mi familia? ¿Perro o gato? </p>
        <p> ¿Todos los miembros de la familia están de acuerdo en tenerlo? </p>
        <p> ¿Hay problemas de salud en la familia, alergias, discapacidades físicas? </p>
        <p> ¿Puedes llevarlo a vivir en el sitio donde habitan? </p>
        <p> ¿Estoy dispuesto a cumplir con las normas de convivencia en sociedad? </p>
        <p> ¿Soy capaz de afrontar los problemas que se presenten (emergencias de salud, inconvenientes de comportamiento)? </p>
        <p> ¿Qué va a suceder con él en vacaciones? </p>
        <p>Recuerda que la adopción es otra opción por eso <b>“No compres, adopta”</b> . Para adoptar un perro o gato, acércate a la Unidad de Cuidado Animal en la Carrera 106 A # 67-02 Barrio El Muelle (Engativá) ó puede comunicarse con el Instituto Distrital de Protección y Bienestar Animal al teléfono: 6477117 o al correo electrónico: proteccionanimal@alcaldiabogota.gov.co, en donde podrán brindarle mayor información sobre el proceso de adopción. </p>
    </div>
    <div id="ask-zoonosis-5">
        <p> Según lo estipulado en la Ley 84 de 1989, en el capítulo 2, artículo 4 y 5 toda persona está obligada a respetar y abstenerse de causar daño o lesión a cualquier animal. Igualmente debe denunciar todo acto de crueldad cometido por terceros de que tenga conocimiento. Además, son también deberes del propietario, tenedor o poseedor de un animal, entre otros: </p>
        <p> •	Mantener el animal en condiciones locativas apropiadas en cuanto a movilidad, luminosidad, aireación, aseo e higiene. </p>
        <p> •	Suministrarle bebida, alimento en cantidad y calidad suficientes, así como medicinas y los cuidados necesarios para asegurar su salud, bienestar y para evitarle daño, enfermedad o muerte. </p>
        <p> •	Suministrarle abrigo apropiado contra la intemperie, cuando la especie de animal y las condiciones climáticas así lo requieran. </p>
        <p> •	Cuando se trata de animales domésticos o domesticados, en cautividad o confinamiento las condiciones descritas deberán ser especialmente rigurosas, de manera tal que los riesgos de daño, lesión, enfermedad o muerte sean mínimas. </p>
    </div>
    <div id="ask-zoonosis-6">
        <p> La ley 84 de 1989 en el capítulo 3, artículo 6, literales de la A a la Z describe las conductas consideradas como crueles con los animales. Ver: <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-84-de-1989.pdf">http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-84-de-1989.pdf</a> </p>
        <p> Conjuntamente en la ley 1774 de 2016 en el artículo 4, se modifica el artículo 10 de la ley 84 de 1989 en lo referente a las penas y agravantes impuestas por actos dañinos y de crueldad, también adiciona al Código penal el Título XI-A de los delitos contra los animales. Ver: <a href="http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-1774-de-2016.pdf">http://biblioteca.saludcapital.gov.co/img_upload/03d591f205ab80e521292987c313699c/ley-1774-de-2016.pdf</a> </p>
    </div>
    <div id="ask-zoonosis-7">
        <p> Si se trata de situaciones que afectan el bienestar de los animales, de conformidad con la entidad encargada de atender, investigar y sancionar en primera instancia es la inspección de policía correspondiente a la localidad donde se ubique el establecimiento de comercio o la persona infractora de la ley “Ley 84 de 1989 y la Ley 1774 de 2016”. La autoridad que deberá atender el requerimiento bien sea por oficio o por denuncia.</p>
        <p> Por otra parte y conforme a lo descrito en el Decreto 546 de 2016, en el Distrito el Instituto Distrital de Protección y Bienestar Animal debe igualmente atender a dichos casos, por lo que ante casos de maltrato o vulneración de bienestar animal puede comunicarse al teléfono: 6477117 o al correo electrónico: proteccionanimal@alcaldiabogota.gov.co.</p>
    </div>
    <div id="ask-zoonosis-8">
        <p> En aquellos casos en que se evidencie la presencia de caninos y felinos callejeros en su barrio podrá solicitar ante la Inspección de Policía de la localidad en la que se encuentran los animales o ante el Instituto Distrital de Protección y Bienestar Animal, que se adelante la recolección o reubicación de los mismos. Para interponer su requerimiento, puede usted comunicarse con el Instituto Distrital de Protección y Bienestar Animal al teléfono: 6477117 o al correo electrónico: proteccionanimal@alcaldiabogota.gov.co. </p>
        <p> Lo anterior teniendo en cuenta que de conformidad a lo descrito en el Titulo XIII, Capítulo III de la Ley 1801 de 2016, las autoridades tomarán las medidas necesarias para despejar las vías de animales abandonados, que serán conducidos al coso o se entregarán a asociaciones sin ánimo de lucros encargados de su cuidado. Se crearán los cosos o depósitos animales, en cada uno de los municipios del país, y, en el caso del distrito capital de Bogotá, uno en cada una de sus localidades. El coso o depósito de animales será un inmueble dotado con los requisitos necesarios para el alojamiento adecuado de los animales que en él se mantengan. Este inmueble comprenderá una parte especializada en especies menores, otra para especies mayores y otra para fauna silvestre, esta última supervisada por la entidad administrativa del recurso. </p>
        <p> Sumado a lo anterior el Decreto 546 de 2016, mediante el cual se conforma el Instituto Distrital de Protección y Bienestar Animal, define que dicha entidad es igualmente responsable en la atención de la fauna domestica callejera.  </p>
    </div>

</div>
                    <p class="notaPiePagina">&nbsp;</p>
                
            </div>

            
        </div>
    </div>

@endsection
@section('scripts')
    @if ( session('mensaje') )
        <script>
            //alert("El archivo no existe");
        </script>
    @endif
    <script type='text/javascript'  src="{{asset('js/news/news.js')}}"></script>
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.text() // Extract info from data-* attributes
            // var respuesta = $('#'+button.data('response'));

            $('#exampleModal').find('.modal-header').removeClass (function (index, className) {
        return (className.match (/(^|\s)ask-\S+/g) || []).join(' ');
        });
            $('#exampleModal').find('.modal-header').addClass(button.data('line'));
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text( recipient);
            modal.find('.modal-body').text('');
            $('#'+button.data('response')).clone().appendTo(modal.find('.modal-body'));
            // setTimeout(() => {
            //     modal.find('.modal-body').append(respuesta);
            // });
        })
    </script>
@endsection
