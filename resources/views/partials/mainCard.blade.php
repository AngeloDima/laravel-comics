<div class="containerCard-sec">
    <div class="container-card">


        @foreach ($comics as $comic)


        <div class="card-file">
            <img src="{{ $comic['thumb'] }}" alt="">
            <div class="tit">{{ $comic['title'] }}</div>
        </div>

            



        @endforeach




    </div>
</div>