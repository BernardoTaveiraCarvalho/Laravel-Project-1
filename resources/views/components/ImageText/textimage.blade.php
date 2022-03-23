

<div class="container">
    <div class="row">
        @if($position==1)
        <div class="col-6">
           <p>{{$text}}</p>
        </div>
        <div class="col-6">
            <img src="{{$image}}" class="w-100" alt="">
        </div>
        @else
            <div class="col-6">
                <img src="{{$image}}" class="w-100" alt="">

            </div>
            <div class="col-6">
                <p>{{$text}}</p>
            </div>
    </div>
</div>
@endif
