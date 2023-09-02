@extends('home')
@section('content')

<div class="row">
    @foreach($products as $product)

   <div class="col-xs-18 col-sm-6 col-md-4 col-m-10">
       <div class="card product-item border-2 mb-4">
           <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-30 ">
               <img class="img-fluid w-100" src="{{ asset('img/img-produit') }}/{{ $product->photo }}" alt="">
           </div>
           <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
               <h6 class="text-truncate mb-3">{{ $product->product_name }}</h6>
               <div class="d-flex justify-content-center">
                   <h6>{{ $product->price }}</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
               </div>
           </div>
           <div class="card-footer d-flex justify-content-between bg-light border">
               <a href="{{ url('product_detail',$product->id) }}"  class="btn btn-danger"  class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
               <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
           </div>
       </div>
   </div>


@endforeach
</div>
@endsection
