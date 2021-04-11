@extends('welcome')
@section('operation')


    <center><a href="{{route('advertisers.form')}}"><button type="button"  class="btn btn-primary align-content-center" >
                ADD ADVERTISER
            </button></a></center><br>

    <table class="table table-bordered table-hover">
        <thead>

        <th scope="col">ID</th>
        <th scope="col">ADVERTISERS NAME</th>
        <th scope="col">PASSWORD</th>
        <th scope="col">E-MAIL</th>
        <th scope="col">ACTION</th>

        </thead>
        <tbody>

        @foreach($advertisers as $data)
            <tr>
        <th scope="row">{{$data->id}}</th>
            <td>{{$data->a_name}}</td>
            <td>{{$data->a_password}}</td>
            <td>{{$data->a_email}}</td>
                <td>
                    <a class="btn btn-success" href="">View</a>
                    <a class="btn btn-danger" href="">Delete</a>
                    <a class="btn btn-info" href="">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>





    </table>

@stop
