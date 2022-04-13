@extends('master.main',['Title'=>'Bernardo','Title1'=>'Home','Title2'=>'Gallery','Title3'=>'Blog','Title4'=>'ContactUs','RefTitle'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle2'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle3'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png','RefTitle4'=>'https://sejaleve.com/wp-content/uploads/2018/02/pequenas-alegrias-diarias.png'])


@section('content')

    <p>Address:  {{$player->address->address}}</p></td>
    <p>Name: {{$player->name}}</p>
    <p>Birth Date: {{$player->birth_date}}</p>
    <p>Created At: {{$player->created_at}}</p>
    <p>Updated At{{$player->updated_at}}</p>

    @foreach($player->cars as $car)
        <p>Car  {{$car->name}}</p>
    @endforeach
@endsection
