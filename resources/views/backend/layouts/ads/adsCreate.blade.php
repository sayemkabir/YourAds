@extends('welcome')
@section('operation')


    <form action="{{route('ads.create')}}" method="post">

        @csrf

      <div class="container">
          <div class="row">
              <div class="col-sm-10">
        <div class="form-group">

            <label for="">ENTER NAME:</label>
            <input type="text" name="adname" placeholder="Enter Ad Name..." class="form-control">

        </div>

        <div class="form-group">

            <label for="" >ENTER AD CONTENT:</label>
            <textarea class="form-control" name="adcontent"  cols="20" rows="10" placeholder="ENTER AD DESCRIPTION"></textarea>

        </div>

                  <div class="form-group">

                      <label for="">SELECT CATEGORY:</label>
                      <select name="categoryid" class="form-control">
                          @foreach($categoriesid as $data)
                              <option value="{{$data->id}}">{{$data->name}}</option>
                          @endforeach

                      </select>

                  </div>

        <div class="form-group">

            <label for="" >AD CLICKS:</label>
            <select class="form-control" name="adclicks" >

                <option value="1000">1000</option>
                <option value="5000">5000</option>
                <option value="10000">10000</option>
                <option value="50000">50000</option>
                <option value="100000">100000</option>

            </select>

        </div>

        <div class="form-group">

            <label for="" >AD DURATION:</label>
            <select class="form-control" name="adduration" >

                <option value="30 sec">30 sec</option>
                <option value="60 sec">60 sec</option>
                <option value="120 sec">120 sec</option>

            </select><br>



        </div>

        <button type="submit" class="btn btn-success" >SUBMIT</button>

              </div></div></div>
    </form>
    <br><br><br><br>

@endsection
