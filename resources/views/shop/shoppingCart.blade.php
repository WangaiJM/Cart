@extends('layouts.master')

@section('title')
    Academind Shopping cart
@endsection

@section('content')
    @if (Session::has('cart'))
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Academind Shopping cart </div>
    
                    <div class="card-body">
                        @foreach ($products as $product)
                            <li class="list-group-item text-center">
                                <span class="badge col-md-2">{{$product['qty']}}</span>
                                <strong class="col-md-6">{{$product['item']['title']}}</strong>
                                <span class="label label-success">Ksh. {{$product['price']}}</span>
                                <div class="btn btn-group col-md-4">
                                    <button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" type="button">
                                        Action <span class="caret float-right"></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="dropdown-item"> Reduce by 1 </a></li>
                                            <li><a href="#" class="dropdown-item">Reduce all </a></li>
                                        </ul>
                                    </button>
                                </div>
                            </li>
                        @endforeach
                </div>
            </div>

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body text-center">
                                <strong>Total: Ksh. {{ $totalPrice}}</strong>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <hr>

                <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-success col-md-12" type="button"> Checkout</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
    

    
        
    
        
    @else
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>No item in the cart</h2>
                    </div>
                </div>
                
            </div>
        </div>
    @endif
@endsection