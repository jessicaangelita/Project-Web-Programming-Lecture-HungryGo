@extends('template')

@section('title', 'create menu')

@section('body')
<div class="m-5">
    <h1 class="display-1 text-center">Create Menu</h1>
    <form action="{{ route('storemenu') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="NameMenu">Nama Menu</label>
            <input type="text" class="form-control" id="NameMenu" aria-describedby="emailHelp" placeholder="Enter Nama Menu" name="NameMenu">
        </div>
        <div class="form-group">
            <label for="DescriptionMenu">Description Menu</label>
            <input type="text" class="form-control" id="DescriptionMenu" placeholder="Enter Description Menu" name="DescriptionMenu">
        </div>
        <div class="form-group">
            <label for="PriceMenu">Price Menu</label>
            <input type="number" class="form-control" id="PriceMenu" placeholder="Enter Price Menu" name="PriceMenu">
        </div>
        <div class="form-group">
            <label for="ImageMenu">Image Menu</label>
            <input type="file" class="form-control" id="IamgeMenu" placeholder="Enter Image Menu" name="ImageMenu">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

@endsection
