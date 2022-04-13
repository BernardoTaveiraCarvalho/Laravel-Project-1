<h1>{{$title}}</h1>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Address</th>
        <th scope="col">Name</th>
        <th scope="col">Birth_date</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Cars</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @for($i=0;$i<count($players);$i++)
        <tr>
            <th scope="row">{{$players[$i]->id}}</th>
            <td>{{$players[$i]->address->address}}</td>
            <td>{{$players[$i]->name}}</td>
            <td>{{$players[$i]->birth_date}}</td>
            <td>{{$players[$i]->created_at}}</td>
            <td>{{$players[$i]->updated_at}}</td>
            <td>
            @foreach($players[$i]->cars as $car)
               <p> {{$car->name}}</p>
            @endforeach
                </td>
            <td ><button> <a href="{{url('players/'.$players[$i]->id)}}">Show </a></button>  </td>
        </tr>
    @endfor
    </tbody>
</table>
