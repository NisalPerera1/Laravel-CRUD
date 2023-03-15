@extends('Items.layout')

@section('content')



    <head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">


</head>


<img src="{{ asset('Nisal Perera.png') }}" alt="Example Image" class="image" width="850" height="340">
<div >
    <h1 class="center">Get In Contact</h1>
    <p1 class="paraA">Address : 136/A , Pambala, Kakkapalliya</p1>
    <p1 class="paraM">Mobile </space> : +94 76 96 50 618</p1>
</div >
  
<div class="buttons">
    <div> <a class="btn btn-primary" href="mailto: Nisaldilesh14@gmaik.com">Email</a></div><br>
    <div><a class="btn btn-primary" href="https://github.com/NisalPerera1">GitHub</a></div><br>
    <div><a class="btn btn-primary" href="https://www.linkedin.com/in/nisal-perera-0a2515210/">LinkedIn</a></div>
</div>

@endsection


