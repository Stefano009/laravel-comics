<div class="container-main-section">
    @foreach($socials as $key => $social)
    <div class="merch">
        <img src="{{$social}}" alt="{{$social}}">
        <h4>{{$key}}</h4>
    </div>
    @endforeach
</div>