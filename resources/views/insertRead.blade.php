@extends('welcome') 

@section('content')
<center>    
 <!-- Button trigger modal -->
 <button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Record
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">CRUD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="insertdata" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <input type="text" placeholder="Enter Product name" class="form-control" name="pname" id="">
                </div>
                <div class="mb-2">
                    <input type="text" placeholder="Enter Product price" class="form-control" name="pprice" id="">
                </div>
                <div class="mb-2">
                    <input type="file" class="form-control" name="image" id="">
                </div>
                <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill">Add Record</button>
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
    <table class="table">
        <thead class="bg-danger text-white fw-bold">
            <tr>
                <th>sr.no</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Update</th>
                <th>Delete</th> 
            </tr>
        </thead>
        <tbody class="text-dange bg-light fs-4">
            @foreach ($data as $p)
            <tr>
                <form action="updatedelete" method="GET">
                    @csrf
                <td><input type="hidden" name="id" value="{{ $p->id }}">{{ $p->id }}</td>
                <td><input type="hidden" name="name" value="{{ $p->pname }}">{{ $p->pname }}</td>
                <td><input type="hidden" name="price" value="{{ $p->pprice }}">{{ $p->pprice }}</td>
                <td><input type="hidden" name="image" value="{{ $p->pimage }}"><img src="images/{{ $p->pimage }}" alt="" height="30px" width="60px"></td>
                <td><input type="submit" class="btn btn-outline-danger rounded-pill" name="update" value="update"></td>
                <td><input type="submit" class="btn btn-outline-danger rounded-pill" name="delete" value="delete"></td>
            </form>
            </tr>    
            @endforeach
        </tbody>
    </table>
</div>








@endsection
