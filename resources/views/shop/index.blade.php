@extends('layouts.master')

@section('title')
    Home | welcome
@endsection

@section('content')
    @foreach ($products->chunk(3) as $productChunk)
        <div class="card-deck">
            @foreach ($productChunk as $product)
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top image-responsive" src="{{ $product->imagePath  }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title"> {{ $product->title  }} </h5>
                    <p class="card-text"> {{ $product->description  }}</p>
                    <a href="{{route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success float-right">Add to Cart</a>
                    <div class="card-footer">
                            <h4>Ksh. {{ $product->price }}</h4>
                        </div>
                    </div>
                </div>               
            @endforeach
        </div>
    @endforeach
@endsection