@extends('welcome')
@section('operation')


    <form action="{{route('admin.create')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <div class="form-group" >
                        <label for="">ENTER ADMIN NAME:</label>
                        <input type="text" name="adminname" namespace="Enter Admin Name..." class="form-control">

                    </div>

                    <div class="form-group" >
                        <label for="">ENTER PASSWORD:</label>
                        <input type="password" name="adminpassword" namespace="Enter password..." class="form-control">

                    </div>

                    <div class="form-group" >
                        <label for="">ENTER E-MAIL:</label>
                        <input type="email" name="adminemail" namespace="Enter E-mail..." class="form-control">

                    </div>


                    <div class="form-group">

                        <label for="">ENTER CONTACT NO:</label>
                        <input type="number" name="admincontact" class="form-control" >

                    </div>

                    <div class="form-group">
                        <label for="">ENTER ROLE:</label>
                        <div class="col-sm-4">
                            <select name="adminrole" class="form-control">

                                <option value="Super Admin">SUPER ADMIN</option>
                                <option value="Admin">ADMIN</option>


                            </select>


                        </div>
                    </div>

                    <div class="col-sm-8">
                    <div class="form-group">
                        <div class="form-control">

                        <input type="file" name="admin_image" placeholder="Please Select an Image">
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group" >
                            <label for="">STATUS:</label>
                            <select required type="option" name="adminstatus" id="" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div></div></div>

    </form>

    <br>
    <br>


@endsection
