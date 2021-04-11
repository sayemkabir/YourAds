@extends('welcome')
@section('operation')


    <form action="{{route('earner.create')}}" method="post" enctype="multipart/form-data">

        @csrf
<div class="container">
    <div class="row">
        <div class="col-sm-8">

    <div class="form-group" >
            <label for="">Earner Name:</label>
            <input type="text" name="earnername" namespace="Enter Earner Name..." class="form-control">

        </div>

        <div class="form-group" >
            <label for="">Enter Password:</label>
            <input type="password" name="password" namespace="Enter password..." class="form-control">

        </div>

        <div class="form-group" >
            <label for="">Enter E-mail:</label>
            <input type="email" name="email" namespace="Enter E-mail..." class="form-control">

        </div>
            <div class="col-sm-10">
            <div class="form-group">
                    <label for="">UPLOAD PHUDU:</label><br>
                    <input type="file" name="earnerImage" placeholder="Please Select An Image">


            </div>
            </div>

<div class="col-sm-3">
        <div class="form-group" >
            <label for="">Status:</label>
            <select required type="option" name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

        </div>
</div>
     <button type="submit" class="btn btn-success">Submit</button>
        </div></div></div>

    </form>


@endsection
