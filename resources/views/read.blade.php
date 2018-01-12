@include('inc.header')
<div class="jumbotron">
    <h1 class="display-3">{{$articles->title}}</h1>
    <hr class="my-4">
    <p class="lead">
        {{$articles->description}}
    </p>


</div>

@include('inc/footer')