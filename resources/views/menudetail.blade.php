@extends('template')

@section('title', $menu->name)

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
        @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary mt-3 btn-red" type="submit">Add to Cart</button>
      </form>

    </div>
</div>

@endsection
