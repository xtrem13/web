@php
$l=request()->l;
@endphp
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('prof/plugins/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('prof/plugins/owlcarousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('prof/style.css')}}">

<section class="committee">
    <div class="container">
        <div class="committee-title">
            <h2>профсоюзный комитет</h2>
        </div>
        <div class="committee-name">
            <h4>профсоюзный комитет</h4>
        </div>
        <div class="committee-disc">
            <p>
                <span>Наш лагерь находится в горном ущелье Бурчи-Мулло Босталынского района Ташкентской области - 110 км от города Ташкента. Лагерь очень</span><br>
                компактный, зеленый, со всеми условиями и улучшенными планировки. <br>
                <span>Вместимость лагеря рассчитана на  320 детей в возрасте от 7 до 14 лет. Предусмотрены 4 смены, продолжительность каждой смены составляет</span> <br>
                двенадцать дней. Лагерь находится в горном ущелье Бурчи-Мулло Босталынского района Ташкентской области - 110 км от города Ташкента. Лагерь <br>
                очень компактный, зеленый, со всеми условиями и улучшенными планировки. <br>
                <span>Предусмотрены 4 смены, продолжительность каждой смены составляет двенадцать дней.</span>
            </p>
        </div>
        <div id="links" class="owl-carousel owl-theme">
            <div class="item">
                <div class="item-img">
                    <a href="{{route('commity',['l'=>$l,'title'=>'FOK'])}}">
                        <img src="{{asset('prof/images/zal.jpg')}}" alt="">
                    </a>
                </div>
                <div class="item-name">
                    <h4>ФОК</h4>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="{{asset('prof/images/vra4.jpg')}}" alt="">
                </div>
                <div class="item-name">
                    <h4>Мед. пункт</h4>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="{{asset('prof/images/magaz.jpg')}}" alt="">
                </div>
                <div class="item-name">
                    <h4>Фитобар</h4>
                </div>
            </div>
            <div class="item">
                <div class="item-img">
                    <img src="{{asset('prof/images/osh.jpg')}}" alt="">
                </div>
                <div class="item-name">
                    <h4>Столовая</h4>
                </div>
            </div>
        </div>
        <div class="committee-end_img">
            <img src="{{asset('prof/images/end-img.png')}}" alt="">
        </div>
    </div>
</section>
<script src="{{asset('prof/plugins/jq.js')}}">
</script>
<script src="{{asset('prof/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{asset('prof/plugins/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('prof/script.js')}}"></script>
