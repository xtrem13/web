
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('about/plugins/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('about/plugins/owlcarousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('about/fonts.css')}}">
<link rel="stylesheet" href="{{asset('about/style.css')}}">

<style>
    .mymod{
        position: fixed;
        top: 10vh;
        width: 70%;
        left: 15%;
        background-color: white;
        min-height: 50vh;
        z-index: 2;
        border: 1px solid #2696f8;
        box-shadow: 0 0 4px 3px white;
        display: none;
        padding:20px 30px;
    }
</style>
<div class="mymod" onclick="stop(event)">
    <h2></h2>
    <p></p>
</div>
<div onclick="hideit()">
<section class="about" >
    <div class="container">
        <div class="about-title">
            <h2>о предприятии</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="about-header">
                    <span class="first"> УП «О'ztemiryo'lmashta'mir» является структурным предприятием</span>
                    <span> 
                        АО «Узбекистон темир йуллари», который введен в портал реестр единых поставщиков по ремонту локомотивов  в Республики Узбекистан. Основной вид деятельности предприятия – капитальный и капитально-восстановительный ремонт подвижных составов, в частности:
                    </span>
                    <span> - капитального ремонта и капитально-восстановительного ремонта с продлением срока службы тепловозов всех серий;</span>
                    <span> - капитальный и капитально-восстановительный ремонт с продлением срока службы электровозов переменного тока ВЛ80С и ВЛ60К;</span>
                    <span> - капитальный ремонт грузовых вагонов;</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="about-header_cont">
                    <span>- модернизация грузовых вагонов с продлением срока службы;</span>
                    <span>- капитальный ремонт электрических машин;</span>
                    <span>- формирование колёсных пар;</span>
                    <span>- восстановление тепловозных электродвигателей ЭД-118;</span>
                    <span>- ремонт агрегатов локомотивов;</span>
                    <span>- изготовления инструментов и всех видов оснасток;</span>
                    <span>- изготовления резинотехнических изделий;</span>
                    <span>- изготовления запасных частей для подвижного состава и верхнего строения пути.</span>
                    <span class="last-span"> УП «О'ztemiryo'lmashta'mir» имеет два дочерних предприятия:</span>
                    <div class="about-header_end">
                        <span>1. ДП «Литейно-механический завод»;</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
               <div class="about-right">
                   <img src="{{asset('about/images/about.jpg')}}" alt="">
               </div> 
           </div>
       </div>
       <div class="plant">
        <div class="plant-name">
            <span>Завод специализируется на:</span>
        </div>
        <div class="plant-disc">
            <span>- строительстве, капитальном ремонте и модернизации грузовых вагонов, в том числе цистерны-цементовозы и минераловозов;</span>
            <span>- производстве литейной продукции, выпуске чугунного, стального и цветного литья;</span>
            <span>- изготовлении запасных частей для ремонта подвижного состава и верхнего строения пути.</span>
        </div>
        <div class="plant-images">
            <div class="row">
                <div class="col-md-4">
                    <div class="plant-images_first">
                        <img src="{{asset('about/images/about1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plant-images_first">
                        <img src="{{asset('about/images/about2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plant-images_first">
                        <img src="{{asset('about/images/about3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="plant-button">
            <a class="plant-btn" href="{{route('zavod', ['l'=>$l,'id'=>1])}}">Подробно</a>
        </div>
    </div>
    <div class="andijan">
        <div class="andijan-title">
            <span>2. ДП «Андижанский механический завод».</span>
        </div>
        <div class="andijan-name">
            <span>Завод специализируется на:</span>
        </div>
        <div class="andijan-disc">
            <span>- строительстве, капитальном ремонте, капитальном ремонте с продлением срока службы и модернизации грузовых вагонов;</span>
            <span>- изготовление нестандартного оборудования и запасных частей для грузовых вагонов.</span>
        </div>
        <div class="andijan-images">
            <div class="row">
                <div class="col-md-4">
                    <div class="andijan-images_first">
                        <img src="{{asset('about/images/about4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="andijan-images_first">
                        <img src="{{asset('about/images/about5.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="andijan-images_first">
                        <img src="{{asset('about/images/about6.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="plant-button">
            <a class="plant-btn" href="{{route('zavod',  ['l'=>$l,'id'=>2])}}">Подробно</a>
        </div>
    </div>
</div> 
</section>



<section class="history">
    <div class="container">
        <div class="history-title">
            <h2>история предприятия</h2>
        </div>
        <div class="history-name">
            <span>
                История УП «Узтемирйулмаштаъмир» <br>
                Ташкентского тепловозоремонтного завода. 
            </span>
        </div>
        <div class="history-img">
            <img src="{{asset('about/images/end-img.png')}}" alt="">
        </div>
        <div class="history-second_img">
            <img src="{{asset('about/images/1.jpg')}}" alt="">
        </div>
        <div class="history-img">
            <img src="{{asset('about/images/end-img.png')}}" alt="">
        </div>
        <div class="history-gallery">
            <div id="first" class="row">
                <div class="col-md-6">
                    <div class="gallery-left">
                        <div class="gallery-left_date">
                            <h1>1899-1900</h1>
                        </div>
                        <div class="gallery-left_disc">
                            <p>
                                <span>По профилю деятельности предприятие является уникальным и</span><br>
                                единственным предприятием в Центральной Азии. Здесь сохранились стены и <br>
                                здания, характеризующие историю становления и развития ремонтной базы <br>
                                железнодорожной отрасли республики.
                            </p>
                            <p>
                                <span>В разные годы функционирования на предприятии осуществлялся</span><br>
                                ремонт различных видов подвижных составов – паровозы, тепловозы, <br>
                                пассажирские и специальные вагоны, производилось до 300 наименований <br>
                                запасных частей.
                            </p>
                        </div>
                        <div class="gallery-left_btn">
                            <a href="{{route('history',['l'=>$l, 'id'=>1])}}">Читать дальше</a>
                        </div>
                    </div>
                </div>
                <div id="first2" class="col-md-6">
                 <div class="gallery-right">
                     <img src="{{asset('about/images/h1.jpg')}}" alt="">
                 </div>
             </div>
         </div>
         <div id="second" class="row">
            <div id="second1" class="col-md-6">
                <div class="gallery-left2">
                    <img src="{{asset('about/images/h2.jpg')}}" alt="">
                </div>
            </div>
            <div id="second2" class="col-md-6">
                <div class="gallery-right2">
                    <div class="gallery-right2_date">
                        <h1>1900-1910</h1>
                    </div>
                    <div class="gallery-right2_disc">
                        <p>
                          <span>В 1934 году на оде построен первый в Средней Азии сталелитейный цех.</span><br>
                          Кроме собственных нужд, стальным литьем завод обеспечивал <br>
                          Среднеазиатскую, Самаро-Златоустскую, Туркистано-Сибирьскую <br>
                          железную дорогу, а также предприятия сельхозмашиностроения республики.
                      </p>
                      <p>
                        <span>В годы Второй мировой войны на заводе изготавливались бронепоезда,</span> <br>
                        вагоны специального назначения, санитарные поезда, поезда «Водрем», <br>
                        авиабомбы, снаряды, миномёты, ручные  гранаты.
                    </p>
                </div>
                <div class="gallery-left_btn">
                    <a href="{{route('history',['l'=>$l, 'id'=>1])}}">Читать дальше</a>
                </div>
            </div>
        </div>
    </div>
    <div id="first" class="row">
        <div class="col-md-6">
            <div class="gallery-left">
                <div class="gallery-left_date">
                    <h1>1910-1920</h1>
                </div>
                <div class="gallery-left_disc">
                    <p>
                        <span>По профилю деятельности предприятие является уникальным и</span><br>
                        единственным предприятием в Центральной Азии. Здесь сохранились стены и <br>
                        здания, характеризующие историю становления и развития ремонтной базы <br>
                        железнодорожной отрасли республики.
                    </p>
                    <p>
                        <span>В разные годы функционирования на предприятии осуществлялся</span><br>
                        ремонт различных видов подвижных составов – паровозы, тепловозы, <br>
                        пассажирские и специальные вагоны, производилось до 300 наименований <br>
                        запасных частей.
                    </p>
                </div>
                <div class="gallery-left_btn">
                    <a href="#">Читать дальше</a>
                </div>
            </div>
        </div>
        <div id="first2" class="col-md-6">
         <div class="gallery-right">
             <img src="{{asset('about/images/h3.jpg')}}" alt="">
         </div>
     </div>
 </div>
 <div id="second" class="row">
    <div id="second1" class="col-md-6">
        <div class="gallery-left2">
            <img src="{{asset('about/images/h4.jpg')}}" alt="">
        </div>
    </div>
    <div id="second2" class="col-md-6">
        <div class="gallery-right2">
            <div class="gallery-right2_date">
                <h1>1920-1930</h1>
            </div>
            <div class="gallery-right2_disc">
                <p>
                  <span>В 1934 году на оде построен первый в Средней Азии сталелитейный цех.</span><br>
                  Кроме собственных нужд, стальным литьем завод обеспечивал <br>
                  Среднеазиатскую, Самаро-Златоустскую, Туркистано-Сибирьскую <br>
                  железную дорогу, а также предприятия сельхозмашиностроения республики.
              </p>
              <p>
                <span>В годы Второй мировой войны на заводе изготавливались бронепоезда,</span> <br>
                вагоны специального назначения, санитарные поезда, поезда «Водрем», <br>
                авиабомбы, снаряды, миномёты, ручные  гранаты.
            </p>
        </div>
        <div class="gallery-left_btn">
            <a href="#">Читать дальше</a>
        </div>
    </div>
</div>
</div>
<div id="first" class="row">
    <div class="col-md-6">
        <div class="gallery-left">
            <div class="gallery-left_date">
                <h1>1930-1940</h1>
            </div>
            <div class="gallery-left_disc">
                <p>
                    <span>По профилю деятельности предприятие является уникальным и</span><br>
                    единственным предприятием в Центральной Азии. Здесь сохранились стены и <br>
                    здания, характеризующие историю становления и развития ремонтной базы <br>
                    железнодорожной отрасли республики.
                </p>
                <p>
                    <span>В разные годы функционирования на предприятии осуществлялся</span><br>
                    ремонт различных видов подвижных составов – паровозы, тепловозы, <br>
                    пассажирские и специальные вагоны, производилось до 300 наименований <br>
                    запасных частей.
                </p>
            </div>
            <div class="gallery-left_btn">
                <a href="#">Читать дальше</a>
            </div>
        </div>
    </div>
    <div id="first2" class="col-md-6">
     <div class="gallery-right">
         <img src="{{asset('about/images/h5.jpg')}}" alt="">
     </div>
 </div>
</div>
<div id="second" class="row">
    <div id="second1" class="col-md-6">
        <div class="gallery-left2">
            <img src="{{asset('about/images/h6.jpg')}}" alt="">
        </div>
    </div>
    <div id="second2" class="col-md-6">
        <div class="gallery-right2">
            <div class="gallery-right2_date">
                <h1>1941-1945</h1>
            </div>
            <div class="gallery-right2_disc">
                <p>
                  <span>В 1934 году на оде построен первый в Средней Азии сталелитейный цех.</span><br>
                  Кроме собственных нужд, стальным литьем завод обеспечивал <br>
                  Среднеазиатскую, Самаро-Златоустскую, Туркистано-Сибирьскую <br>
                  железную дорогу, а также предприятия сельхозмашиностроения республики.
              </p>
              <p>
                <span>В годы Второй мировой войны на заводе изготавливались бронепоезда,</span> <br>
                вагоны специального назначения, санитарные поезда, поезда «Водрем», <br>
                авиабомбы, снаряды, миномёты, ручные  гранаты.
            </p>
        </div>
        <div class="gallery-left_btn">
            <a href="#">Читать дальше</a>
        </div>
    </div>
</div>
</div>
<div id="first" class="row">
    <div class="col-md-6">
        <div class="gallery-left">
            <div class="gallery-left_date">
                <h1>1946-1960</h1>
            </div>
            <div class="gallery-left_disc">
                <p>
                    <span>По профилю деятельности предприятие является уникальным и</span><br>
                    единственным предприятием в Центральной Азии. Здесь сохранились стены и <br>
                    здания, характеризующие историю становления и развития ремонтной базы <br>
                    железнодорожной отрасли республики.
                </p>
                <p>
                    <span>В разные годы функционирования на предприятии осуществлялся</span><br>
                    ремонт различных видов подвижных составов – паровозы, тепловозы, <br>
                    пассажирские и специальные вагоны, производилось до 300 наименований <br>
                    запасных частей.
                </p>
            </div>
            <div class="gallery-left_btn">
                <a href="#">Читать дальше</a>
            </div>
        </div>
    </div>
    <div id="first2" class="col-md-6">
     <div class="gallery-right">
         <img src="{{asset('about/images/h7.jpg')}}" alt="">
     </div>
 </div>
</div>
<div id="second" class="row">
    <div id="second1" class="col-md-6">
        <div class="gallery-left2">
            <img src="{{asset('about/images/h8.jpg')}}" alt="">
        </div>
    </div>
    <div id="second2" class="col-md-6">
        <div class="gallery-right2">
            <div class="gallery-right2_date">
                <h1>1960-1970</h1>
            </div>
            <div class="gallery-right2_disc">
                <p>
                  <span>В 1934 году на оде построен первый в Средней Азии сталелитейный цех.</span><br>
                  Кроме собственных нужд, стальным литьем завод обеспечивал <br>
                  Среднеазиатскую, Самаро-Златоустскую, Туркистано-Сибирьскую <br>
                  железную дорогу, а также предприятия сельхозмашиностроения республики.
              </p>
              <p>
                <span>В годы Второй мировой войны на заводе изготавливались бронепоезда,</span> <br>
                вагоны специального назначения, санитарные поезда, поезда «Водрем», <br>
                авиабомбы, снаряды, миномёты, ручные  гранаты.
            </p>
        </div>
        <div class="gallery-left_btn">
            <a href="#">Читать дальше</a>
        </div>
    </div>
</div>
</div>
<div id="first" class="row">
    <div class="col-md-6">
        <div class="gallery-left">
            <div class="gallery-left_date">
                <h1>1970-1980</h1>
            </div>
            <div class="gallery-left_disc">
                <p>
                    <span>По профилю деятельности предприятие является уникальным и</span><br>
                    единственным предприятием в Центральной Азии. Здесь сохранились стены и <br>
                    здания, характеризующие историю становления и развития ремонтной базы <br>
                    железнодорожной отрасли республики.
                </p>
                <p>
                    <span>В разные годы функционирования на предприятии осуществлялся</span><br>
                    ремонт различных видов подвижных составов – паровозы, тепловозы, <br>
                    пассажирские и специальные вагоны, производилось до 300 наименований <br>
                    запасных частей.
                </p>
            </div>
            <div class="gallery-left_btn">
                <a href="#">Читать дальше</a>
            </div>
        </div>
    </div>
    <div id="first2" class="col-md-6">
     <div class="gallery-right">
         <img src="{{asset('about/images/h9.jpg')}}" alt="">
     </div>
 </div>
</div>
<div id="second" class="row">
    <div id="second1" class="col-md-6">
        <div class="gallery-left2">
            <img src="{{asset('about/images/h10.jpg')}}" alt="">
        </div>
    </div>
    <div id="second2" class="col-md-6">
        <div class="gallery-right2">
            <div class="gallery-right2_date">
                <h1>1980-1990</h1>
            </div>
            <div class="gallery-right2_disc">
                <p>
                  <span>В 1934 году на оде построен первый в Средней Азии сталелитейный цех.</span><br>
                  Кроме собственных нужд, стальным литьем завод обеспечивал <br>
                  Среднеазиатскую, Самаро-Златоустскую, Туркистано-Сибирьскую <br>
                  железную дорогу, а также предприятия сельхозмашиностроения республики.
              </p>
              <p>
                <span>В годы Второй мировой войны на заводе изготавливались бронепоезда,</span> <br>
                вагоны специального назначения, санитарные поезда, поезда «Водрем», <br>
                авиабомбы, снаряды, миномёты, ручные  гранаты.
            </p>
        </div>
        <div class="gallery-left_btn">
            <a href="#">Читать дальше</a>
        </div>
    </div>
</div>
</div>
<div id="first" class="row">
    <div class="col-md-6">
        <div class="gallery-left">
            <div class="gallery-left_date">
                <h1>1990-2000</h1>
            </div>
            <div class="gallery-left_disc">
                <p>
                    <span>По профилю деятельности предприятие является уникальным и</span><br>
                    единственным предприятием в Центральной Азии. Здесь сохранились стены и <br>
                    здания, характеризующие историю становления и развития ремонтной базы <br>
                    железнодорожной отрасли республики.
                </p>
                <p>
                    <span>В разные годы функционирования на предприятии осуществлялся</span><br>
                    ремонт различных видов подвижных составов – паровозы, тепловозы, <br>
                    пассажирские и специальные вагоны, производилось до 300 наименований <br>
                    запасных частей.
                </p>
            </div>
            <div class="gallery-left_btn">
                <a href="#">Читать дальше</a>
            </div>
        </div>
    </div>
    <div id="first2" class="col-md-6">
     <div class="gallery-right">
         <img src="{{asset('about/images/h11.jpg')}}" alt="">
     </div>
 </div>
</div>
<div id="second" class="row">
    <div id="second1" class="col-md-6">
        <div class="gallery-left2">
            <img src="{{asset('about/images/h12.jpg')}}" alt="">
        </div>
    </div>
    <div id="second2" class="col-md-6">
        <div class="gallery-right2">
            <div class="gallery-right2_date">
                <h1>2000-2010</h1>
            </div>
            <div class="gallery-right2_disc">
                <p>
                  <span>В 1934 году на оде построен первый в Средней Азии сталелитейный цех.</span><br>
                  Кроме собственных нужд, стальным литьем завод обеспечивал <br>
                  Среднеазиатскую, Самаро-Златоустскую, Туркистано-Сибирьскую <br>
                  железную дорогу, а также предприятия сельхозмашиностроения республики.
              </p>
              <p>
                <span>В годы Второй мировой войны на заводе изготавливались бронепоезда,</span> <br>
                вагоны специального назначения, санитарные поезда, поезда «Водрем», <br>
                авиабомбы, снаряды, миномёты, ручные  гранаты.
            </p>
        </div>
        <div class="gallery-left_btn">
            <a href="#">Читать дальше</a>
        </div>
    </div>
</div>
</div>
<div id="first" class="row">
    <div class="col-md-6">
        <div class="gallery-left">
            <div class="gallery-left_date">
                <h1>2010-2020</h1>
            </div>
            <div class="gallery-left_disc">
                <p>
                    <span>По профилю деятельности предприятие является уникальным и</span><br>
                    единственным предприятием в Центральной Азии. Здесь сохранились стены и <br>
                    здания, характеризующие историю становления и развития ремонтной базы <br>
                    железнодорожной отрасли республики.
                </p>
                <p>
                    <span>В разные годы функционирования на предприятии осуществлялся</span><br>
                    ремонт различных видов подвижных составов – паровозы, тепловозы, <br>
                    пассажирские и специальные вагоны, производилось до 300 наименований <br>
                    запасных частей.
                </p>
            </div>
            <div class="gallery-left_btn">
                <a href="#">Читать дальше</a>
            </div>
        </div>
    </div>
    <div id="first2" class="col-md-6">
     <div class="gallery-right">
         <img src="{{asset('about/images/h13.jpg')}}" alt="">
     </div>
 </div>
</div>
</div>
<div class="history-end_btn">
    <a href="{{route('historical_gallery', $l)}}">Историческая галерея</a>
</div>
<div class="history-img">
    <img src="{{asset('about/images/end-img.png')}}" alt="">
</div>
</div>
</section>


<section class="manual">
 <div class="container">
    <div class="page-title">
      <h2>руководство</h2>
      <hr>
      <hr class="blue">
  </div>
</div>
<div class="container">
   <div class="manual-cards">
    <div class="row">
        @foreach($managers as $manager)
        <div class="col-md-6">
            <div class="idcard">
                <div class="row">
                    <div class="col-md-4">
                        <div class="idcard-img">
                            <img src="{{asset('about/images/Абдулллаев С.Н.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="idcard-disc">
                            <div class="idcard-name">
                                <h3>
                                   {{json_decode($manager->name)->$l}}
                               </h3>
                           </div>
                           <div class="idcard-job">
                            <span>{{json_decode($manager->position)->$l}}</span>
                        </div>
                        <ul class="idcard-data">
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i> 
                                {{$manager->phone}}
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>{{$manager->email}}
                            </li>
                            <li>
                                <i class="fa fa-calendar" aria-hidden="true"></i> {{json_decode($manager->hours)->$l}}
                            </li>
                        </ul>
                        <div class="idcard-link">
                            <a href="#" 
                                onclick="showit(event)" 
                                data-text="{{json_decode($manager->bio)->$l}}"
                                data-name="{{json_decode($manager->name)->$l}}"
                            >
                                Биография
                            </a>
                            <a href="#"
                               onclick="showit(event)" 
                               data-text="{{json_decode($manager->resp)->$l}}"
                               data-name="{{json_decode($manager->name)->$l}}"
                            >
                                Должностные обязанности
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="history-img">
    <img src="{{asset('about/images/end-img.png')}}" alt="">
</div>
</div>
</div>
</div>
</section>
@section('js')
<script src="{{asset('about/plugins/jq.js')}}"></script>
<script src="{{asset('about/plugins/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('about/script.js')}}"></script>
<script>
    const modal=document.getElementsByClassName('mymod')[0];
    function stop(ev){
        ev.stopPropagation();
    }
    function showit(ev){
        stop(ev);
        ev.preventDefault();
        const data=ev.target.dataset;
        modal.children[0].innerHTML=data.name;
        modal.children[1].innerHTML=data.text;
        modal.style.display="block";
    }
    function hideit(){
        console.log("hey");
        modal.style.display="none";
    }
</script>
@endsection
