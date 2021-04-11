@extends('welcome')
@section('operation')


    <center><a href="{{route('ads.form')}}"><button type="button"  class="btn btn-primary align-content-center" >
                CREATE ADS
            </button></a></center><br>

    @if(session()->has('success'))

        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-bordered table-hover">

        <thead>

        <th scope="col">ID</th>
        <th scope="col">AD NAME</th>
        <th scope="col">AD CONTENT</th>
        <th scope="col">CATEGORY NAME</th>
        <th scope="col">AD CLICKS</th>
        <th scope="col">AD DURATION</th>
        <th scope="col">ACTIONS</th>


        </thead>
        <tbody>

        @foreach($ads as $key=>$data)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->ad_name}}</td>
            <td>{{$data->ad_content}}</td>
            <td>{{$data->adCategory->name}}</td>
            <td>{{$data->ad_clicks}}</td>
            <td>{{$data->ad_duration}}</td>
            <td>
                <a class="btn btn-success" href="">View</a>
                <a class="btn btn-danger" href="">Delete</a>
                <a class="btn btn-info" href="">Edit</a>

            </td>

        </tr>


        @endforeach





        </tbody>



    </table>
    <br>
    <br>

    {{$ads->links()}}

@endsection
