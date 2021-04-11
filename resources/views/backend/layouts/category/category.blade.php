@extends('welcome')
@section('operation')

    <!-- Button trigger modal -->
    <center><button type="button"  class="btn btn-primary align-content-center" data-toggle="modal" data-target="#exampleModal">
        ADD CATEGORY
    </button></center><br>
    <table class="table table-bordered table-hover ">

    <thead>

    <th scope="col">ID</th>
    <th scope="col">NAME</th>
    <th scope="col">DESCRIPTION</th>
    <th scope="col">HANDLE</th>

    </thead>
    <tbody>

@foreach($categories as $data)

    <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td style="width: 50%">{{$data->description}}</td>
        <td>
            <a class="btn btn-success" href="">View</a>
            <a class="btn btn-danger" href="">Delete</a>
            <a class="btn btn-info" href="">Edit</a>
        </td>
    </tr>

@endforeach


</tbody>
</table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CATEGORY</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{route('category.create')}}" method="post">

                 @csrf

                <div class="modal-body">
                    <div class="form-group">
                        <label for="categoryname">Category Name</label>
                        <input type="text" id="categoryname" name="categoryname" placeholder="Enter category name" class="form-control">


                    </div>
<div class="form-group">
    <label for="categorydescription">Description</label><br>
    <textarea name="categorydescription" id="categorydescription" placeholder="Enter Description" class="form-control" cols="20" rows="5"></textarea>
</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>


@stop
