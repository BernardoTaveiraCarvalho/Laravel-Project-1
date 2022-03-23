<div class="container">
<div class="row">
    @for($i=0;$i<count($vetimg);$i++)
        <div class="col-4" class="w-100" >
            @component('components.card.card',['image'=>$vetimg[$i],'name'=>'e','text'=>$vettext[$i],'button'=>'3'])
            @endcomponent
        </div>
    @endfor
</div>
</div>
