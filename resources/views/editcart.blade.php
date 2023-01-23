@extends('template')

@section('title', $cartDetail->Menu->name)

@section('body')

<div class="card" style="width: 18rem;">
    <img src="{{ asset('/storage/menus/'.$cartDetail->Menu->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$cartDetail->Menu->name}}</h5>
      <p class="card-text">{{$cartDetail->Menu->description}}</p>
      <p class="card-text">{{$cartDetail->Menu->price}}</p>
      <p class="card-text">Quantity</p>
      <form action="{{ route('storecart', ['id'=>$cartDetail->Menu->id]) }}" method="POST">
        @csrf
        <input type="number" class="form-control" name="quantity" value="{{$cartDetail->quantity}}">
        @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary mt-3" type="submit">Update Cart</button>
      </form>

    </div>
</div>

@endsection
