


@extends('master.main',['Title'=>'Bernardo','Title1'=>'Home','Title2'=>'Gallery','Title3'=>'Blog','Title4'=>'ContactUs','RefTitle'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle2'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle3'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle4'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png'])





@section('content')
    @component('components.Slide.slide',['vetimg'=>$vetimg])
    @endcomponent
    @component('components.card.cards',['quantity'=>3,'image'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','name'=>'Smile Face','text'=>'hello','button'=>'Insert'])
    @endcomponent
    @component('components.ImageText.textimage',[
    'image'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png',
    'text'=>'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by En',
    'position'=>1])
    @endcomponent
    @component('components.card.cardsvar',[
    'vetimg'=>['https://www.revistabula.com/wp/wp-content/uploads/2014/12/FELIZ1-610x350.png','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ553usYHEN_JbCFloGgJEgYNNHEBQP54BNfPqkWLEQshxh8XRKmnWqCsdRLfroJJbivwk&usqp=CAU'],'vettext'=>['ola','adeus'],'vetbutton'=>['inserir','inserido']])
    @endcomponent

    @component('components.ImageText.textimage',['image'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png',
'text'=>'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by En',
'position'=>2])
    @endcomponent
@stop

