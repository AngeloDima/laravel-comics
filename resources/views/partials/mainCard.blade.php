<div class="containerCard-sec">
    <div class="container-card">


    @foreach ($comics as $comic)
    <div>
        {{ $comic['title'] }}
    </div>

    @endforeach


    </div>
</div>