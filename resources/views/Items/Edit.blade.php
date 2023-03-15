@extends('Items.layout')

@section('content')
<br>
<h2>Enter Your New Item Details</h2><br>
<!--this form is for create items  -->

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<!--onsubmit sending inputs to the itemcontroller's store function with POST method  -->
<form action="{{route('items.update', $item->id)}}" method="POST">
@csrf
@method('PUT')
<div class="row">

<div class="col-lg-12">
<div class= " form-group"> 
<label>Item Name</label>
<input type="text" class="form-control" id="itemname" name="name" value="{{$item->name}}" placeholder="Enter Item Name">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<label>Item Description</label>
<input type="text" class="form-control" id="itemdescription" name="description" value="{{$item->description}}"placeholder="Enter Item Description">
<br>
</div>
</div>

<div class="col-lg-12">
<div class= " form-group"> 
<button type="submit" class="btn btn-primary" >Submit</button>

<!--href is assigned tovindex-->
<a class="btn btn-danger" href="{{route('items.index')}}">Back</a>

</div>
</div>

</div>
</form>

@endsection