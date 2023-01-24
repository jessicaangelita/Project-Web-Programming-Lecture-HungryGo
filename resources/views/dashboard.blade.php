@extends('template')

@section('title', 'Dashboard')

@section('body')
    <div class="container-fluid px-0">
        <div class="pt-sm-5">
            <div class="position-relative">
                <img src="./images/page_title_bg.png" alt="Pizza" class="img-fluid">
                <h1 class="title text-yellow position-absolute center-of-image">Dashboard</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="subtitle text-black text-center mb-5">All Dishes</h1>
        <div class="row">
            @foreach ($menus as $menu)
                <div class="col-6 col-lg-3 mt-2 mb-4">
                    <div class="card p-3">
                        <img src="{{asset('/storage/menus/'.$menu->image)}}" class="card-img-top zoom" alt="Food Image">
                        <div class="card-body">
                            <h5 class="food-name text-center">{{$menu->name}}</h5>
                            <p class="food-price text-center mb-2">Rp{{number_format($menu->price)}}</p>
                            <div class="row">
                                <div class="col-12">
                                    @can('admin')
                                        <a href="/editmenu/{{$menu->id}}" class="btn btn-red-border">Edit Menu</a>
                                        <form method="post" action="/deletemenu/{{$menu->id}}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-red mt-2">Delete</button>
                                        </form>
                                    @else
                                        <a class="btn btn-red-border" href="{{ route('showmenu', ['id'=> $menu->id]) }}" role="button">Add To Cart</a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection