<div class="containerCard-sec">
    <div class="container-card">

    <div class="card">
        @foreach ($comics as $comic)



            <img id="ciao" src="{{ $comic['thumb'] }}" alt="">
            {{ $comic['title'] }}



        @endforeach
    </div>



    </div>
</div>