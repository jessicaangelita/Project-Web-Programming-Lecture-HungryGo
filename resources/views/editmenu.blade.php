@extends('template')

@section('title', 'Edit Menu')

@section('body')
    <div class="container-fluid px-0">
        <div class="pt-sm-5">
            <div class="position-relative">
                <img src="{{ asset('./images/page_title_bg.png') }}" alt="Pizza" class="img-fluid">
                <h1 class="title text-yellow position-absolute center-of-image">Edit Menu</h1>
            </div>
        </div>
    </div>

    <div class="m-5">
        <form action="/updatemenu/{{$menu->id}}" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div style="background-color:#f4e3e2" class="form-group m-3">
                <label for="NameMenu" style="color:#660601; font-size:20px">Menu Name</label>
                <input  value = {{$menu->name}} type="text" class="form-control" id="NameMenu" aria-describedby="emailHelp" placeholder="Enter Nama Menu" name="NameMenu">
                @error('NameMenu')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div style="background-color:#f4e3e2" class="form-group m-3">
                <label for="DescriptionMenu" style="color:#660601; font-size:20px">Menu Description</label>
                <input value = {{$menu->description}} type="text" class="form-control" id="DescriptionMenu" placeholder="Enter Description Menu" name="DescriptionMenu">
                @error('DescriptionMenu')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div style="background-color:#f4e3e2" class="form-group m-3">
                <label for="PriceMenu" style="color:#660601; font-size:20px" >Menu Price</label>
                <input value = {{$menu->price}} type="number" class="form-control" id="PriceMenu" placeholder="Enter Price Menu" name="PriceMenu">
                @error('PriceMenu')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div style="background-color:#f4e3e2" class="form-group m-3">
                <label for="ImageMenu"  style="color:#660601; font-size:20px">Image Menu</label>
                <input type="file" class="form-control" id="ImageMenu" placeholder="Enter Image Menu" name="ImageMenu">
                @error('ImageMenu')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn long-btn btn-red m-3">Update Menu</button>
                </div>
            </div>
        </form>
    </div>
@endsection