@extends('Items.layout')

@section('content')
<br>
<div class= " form-group row">
<div class="col-lg-12 margin-tb">
    <div class="float-right" alignment="absolute">
        <a class="btn btn-success" href="{{route('items.create')}}">Create a New Item</a>

    </div>
</div>
</div><br>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<!--this is for view details  -->
<table class="table table-bordered">
    <tr>
     <th>Item ID</th> 
     <th>Item Name</th>   
     <th>Item Description</th>   
    </tr>
       <!--this is for view details.data object assigned in the controller -->
       <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>
                <!--we cant set the delete function as before. it will be sending as post request.So I created a form -->
                <!--in here method = form method -->
                <form action="{{ route('items.destroy', $item->id) }}" method="POST">

                <!--Couldnt get outside edit button from form created for delete.css flipping  -->
                <a class="btn btn-primary" href="{{ route('items.edit', $item->id) }}">Edit</a>

                <!--we cant set the delete function as before. it will be sending as post request. -->
                <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                <!--in here method = form method -->

                @csrf
                 <!--Here is the Button method method -->
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger" type="" >Delete</button>
                        </form>


                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection