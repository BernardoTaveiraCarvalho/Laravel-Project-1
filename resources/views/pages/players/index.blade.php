@extends('master.main',['Title'=>'Bernardo','Title1'=>'Home','Title2'=>'Gallery','Title3'=>'Blog','Title4'=>'ContactUs','RefTitle'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle2'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle3'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle4'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png'])


@section('content')

    @component('components.table.tablebase',['title'=>'Players','players'=>$players])
    @endcomponent
@endsection
