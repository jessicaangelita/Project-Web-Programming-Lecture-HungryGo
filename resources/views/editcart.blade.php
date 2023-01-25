@extends('template')

@section('title', $cartDetail->Menu->name)

@section('body')
	<div class="container-fluid px-0">
		<div class="pt-sm-5">
			<div class="position-relative">
				<img src="{{ asset('./images/page_title_bg.png') }}" alt="Pizza" class="img-fluid">
				<h1 class="title text-yellow position-absolute center-of-image">Edit Cart</h1>
			</div>
		</div>
	</div>

	<div class="container mt-5 p-5">
		<div class="row">
			<div class="col-12 col-md-4 mb-3 mb-md-0">
				<img src="{{ asset('/storage/menus/'.$cartDetail->Menu->image) }}" alt="Food" class="img-fluid food-img">
			</div>
			<div class="col-12 col-md-8">
				<p class="food-name-detail">{{ $cartDetail->Menu->name }}</p>
				<p class="food-desc text-gray">{{ $cartDetail->Menu->description }}</p>
				<p class="food-price-detail">Rp.{{ number_format($cartDetail->Menu->price) }}</p>
				<form action="{{ route('storecart', ['id'=>$cartDetail->Menu->id]) }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-2">
							<input type="number" class="form-control text-center" name="quantity" value="{{$cartDetail->quantity}}">
							@error('quantity')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="col-3">
							<button class="btn btn-red" type="submit">Update Cart</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection