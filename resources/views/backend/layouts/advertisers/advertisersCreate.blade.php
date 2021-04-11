@extends('welcome')
@section('operation')


    <form action="{{route('advertisers.create')}}" method="post">

        @csrf

        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <div class="form-group">
                        <label for="">ENTER ADVERTISER NAME:</label>
                        <input type="text" class="form-control" name="advertisername" placeholder="enter name....">

                    </div>

                    <div class="form-group">
                        <label for="">ENTER PASSWORD:</label>
                        <input type="password" class="form-control" name="advertiserpassword" placeholder="enter password....">

                    </div>

                    <div class="form-group">
                        <label for="">ENTER E-MAIL:</label>
                        <input type="text" class="form-control" name="advertiseremail" placeholder="enter email....">

                    </div>

                    <button type="submit" class="btn btn-success">SUBMIT</button>




                </div>

            </div>

        </div>






    </form>


@endsection
