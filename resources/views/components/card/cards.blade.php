<div class="container">
<div class="row">
    @for($i=0;$i<$quantity;$i++)
        <div class="col-4">
            @component('components.card.card',['image'=>$image,'name'=>$name,'text'=>$text,'button'=>$button])
            @endcomponent
        </div>
    @endfor
</div>
</div>
