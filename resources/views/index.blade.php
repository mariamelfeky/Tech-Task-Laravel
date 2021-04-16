@extends('layouts.master')
@section('content')
<div class="offset-10">
    <select id="sortNews" name="sortNews">
        <option value="" disabled selected>Sorting News</option>
        <option value="datetime_desc">latest News</option>
        <option value="datetime_asc">Oldest News</option>
        <option value="rating_desc">Top Rating</option>
        <option value="rating_asc">Low Rating</option>
    </select>
</div>
<br>
<div class="row" id="news">
@foreach ($data as $item)
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <img class="card-img-top" src="{{$item['image']}}" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title bg-light">
                <span class="text-danger">{{$item['agency']}}</span> | {{$item['title']}}
            </h4>
            <footer class="blockquote-footer">{{$item['datetime']}} <cite title="Source Title"></cite></footer>
            <p class="card-text">{{$item['Content']}}</p>
            <h6>rate: <span>{{$item['rating']}}</span> </h6>
        </div>
      </div>
    </div>
    @endforeach
</div>

@endsection


