@extends('template')

@section('title', 'create menu')

@section('body')

<div class="card" style="width: 18rem;">
    <img src="{{ asset('/storage/menus/'.$menu->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$menu->name}}</h5>
      <p class="card-text">{{$menu->description}}</p>
      <p class="card-text">{{$menu->price}}</p>
      <p class="card-text">Quantity</p>
      <form action="{{ route('storecart', ['id'=>$menu->id]) }}" method="POST">
        @csrf
        <input type="number" class="form-control" name="quantity">
        <button class="btn btn-primary mt-3" type="submit">Add to Cart</button>
      </form>

    </div>
</div>

@endsection