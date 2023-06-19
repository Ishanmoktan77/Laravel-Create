@extends('welcome')
@section('content')
<center>
  <h1>CRUD Operation Sample</h1>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add record
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Enter the detail given below:</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="insertData" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-2">
                        <input type="text" placeholder="Enter Products Name" class="form-control" name="pname" id="">
                    </div>
                    <div class="mb-2">
                        <input type="text" placeholder="Enter Products Price" class="form-control" name="pprice" id="">
                    </div>
                    <div class="mb-2">
                        <input type="file"  name="image" class="form-control" name="" id="">
                    </div>
                    <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill">Add Record </button>
                </form>   
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
</center>
<div class="container">
  <table class="table mt-5">
    <thead class="bg-danger text-black fw-bold">
      <th>Id</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Image</th>
      <th>Action</th>
    </thead>
    <tbody class="text-black fs-4">
      @foreach($data as $item)
        <tr>
          <td class="pt-5">{{$item['Id']}}</td>
          <td class="pt-5">{{$item['PName']}}</td>
          <td class="pt-5">{{$item['PPrice']}}</td>
          <td><img src="images/{{$item['PImage']}}" alt="" width="100px" height="100px"></td>
        </tr>
       @endforeach
    </tbody>
  </table>
</div>

@endsection
