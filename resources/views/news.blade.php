@foreach ($data as $item)
<div class="col-lg-4 col-md-6">
    <div class="card">
        <img class="card-img-top" src="{{$item['image']}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">
                <span style="color:red">{{$item['agency']}}</span> | {{$item['title']}}
            </h4>
            <footer class="blockquote-footer">{{$item['datetime']}} <cite title="Source Title"></cite></footer>
            <p class="card-text">{{$item['Content']}}</p>
            <h6>rate: <span>{{$item['rating']}}</span> </h6>
        </div>
    </div>
</div>
@endforeach

