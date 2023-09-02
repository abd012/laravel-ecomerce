
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styless.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="https://www.facebook.com/abdelhadi.lahbouch">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a class="text-dark px-2" href="https://www.linkedin.com/in/abdo-ab-901728252/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="https://www.instagram.com/abdo__lahbouch/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="https://www.youtube.com/channel/UC6gUCUEpkbcG7O_9qRgKDAw">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-danger font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-danger">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-danger"></i>
                    <span class="badge">2</span>
                </a>
                <a href="" class="btn border">
                </a>
            </div>
        </div>
    </div>

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
<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-danger font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
            </a>
            <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-danger mr-3"></i>9000, Mghougha, tangier, Maroc</p>
            <p class="mb-2"><i class="fa fa-envelope text-danger mr-3"></i>abdelahdi13lhbouch2020@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-danger mr-3"></i>+07 77 15 26 44</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-dark" href=""><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-dark mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                required="required" />
                        </div>
                        <div>
                            <button class="btn btn-danger btn-block border-0 py-3" type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-dark">
                &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>E shopper
                By
                <a class="text-dark font-weight-semi-bold" href="">Abdo lahbouch</a><br>
             <a href="" target="_blank"></a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->

</body>
</html>


