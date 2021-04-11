@extends('welcome')
@section('operation')

    <center><a href="{{route('earner.create.view')}}"><button type="button"  class="btn btn-primary align-content-center" >
            CREATE EARNER
        </button></a></center><br>

    @if(session()->has('success'))

        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-bordered table-hover ">

        <thead>

        <th scope="col">ID</th>
        <th scope="col">PHUDU</th>
        <th scope="col">NAME</th>
        <th scope="col">E-MAIL</th>
        <th scope="col">STATUS</th>
        <th scope="col">ACTIONS</th>

        </thead>
        <tbody>

        @foreach($earners_create as $key=>$data)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>
                    <img style="width: 100px;" src="{{url('/images/earner/'.$data->e_image)}}" alt="IMAGE NOT FOUND">
                </td>
                <td>{{$data->e_name}}</td>
                <td >{{$data->e_email}}</td>
                <td >{{$data->e_status}}</td>
                <td>
                    <a class="btn btn-success" href="">View</a>
                    <a class="btn btn-danger" href="{{route('earner.delete',$data->id)}}">Delete</a>
                    <a class="btn btn-info" href="">Edit</a>
                </td>
            </tr>

        @endforeach


        </tbody>
    </table>



@endsection
