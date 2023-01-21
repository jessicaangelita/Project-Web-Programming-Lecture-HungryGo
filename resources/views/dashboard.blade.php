
@extends('template')

@section('title', 'dashboard')

@section('body')
<div class="d-flex flex-column m-5">
    @foreach ($menus as $menu)
        <div class="card mb-3" style="max-width: 100vw;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('/storage/menus/'.$menu->image)}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$menu->name}}</h5>
                        {{-- <p class="card-text">{{$menu->description}}</p> --}}
                        <p class="card-text"><small class="text-muted">{{$menu->price}}</small></p>
                        @can('admin')
                            <a href="/editmenu/{{$menu->id}}" class="btn btn-primary">Edit menu</a>
                            <form method="post" action="/deletemenu/{{$menu->id}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-xl btn-dark btn-outline-danger mt-2">Delete</button>
                            </form>
                            @else
                            <a href="{{ route('showmenu', ['id'=> $menu->id]) }}" class="btn btn-primary">Add to cart</a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
