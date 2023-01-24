@extends('template')

@section('title', 'create menu')

@section('body')
<div class="container-fluid px-0">
    <div class="pt-sm-5">
        <div class="position-relative">
            <img src="./images/page_title_bg.png" alt="Pizza" class="img-fluid">
            <h1 class="title text-yellow position-absolute center-of-image">Create Menu</h1>
        </div>
    </div>
</div>

<div class="m-5">
    <form action="{{ route('storemenu') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="background-color:#f4e3e2" class="form-group m-3">
            <label for="NameMenu" style="color:#660601; font-size:20px">Menu Name</label>
            <input type="text" class="form-control" id="NameMenu" aria-describedby="emailHelp" placeholder="Enter Menu Name" name="NameMenu">
            @error('NameMenu')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div style="background-color:#f4e3e2" class="form-group m-3">
            <label for="DescriptionMenu" style="color:#660601; font-size:20px">Menu Description</label>
            <input type="text" class="form-control" id="DescriptionMenu" placeholder="Enter Menu Description" name="DescriptionMenu">
            @error('DescriptionMenu')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div style="background-color:#f4e3e2" class="form-group m-3">
            <label for="PriceMenu" style="color:#660601; font-size:20px">Menu Price</label>
            <input type="number" class="form-control" id="PriceMenu" placeholder="Enter Menu Price" name="PriceMenu">
            @error('PriceMenu')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div style="background-color:#f4e3e2" class="form-group m-3">
            <label for="ImageMenu" style="color:#660601; font-size:20px">Menu Image</label>
            <input type="file" class="form-control" id="IamgeMenu" placeholder="Enter Image Menu" name="ImageMenu">
            @error('ImageMenu')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3 m-3 btn-red" style="border-radius: 4px; font-size:20px">Submit</button>
    </form>
</div>

@endsection
