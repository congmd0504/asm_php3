<div class="container py-5">
    <h1 class="mb-0">Fresh Organic Vegetables</h1>
    <div class="owl-carousel vegetable-carousel justify-content-center">
        @foreach ($products as $product)
            <div class="border border-primary rounded position-relative vesitable-item">
                <a href="{{route('client.show',$product->id)}}">
                    <div class="vesitable-img">
                        <img src="{{ asset($product->image) }}" style="height: 200px" class="img-fluid w-100 rounded-top"
                            alt="">
                    </div>
                    <div class="text-white bg-primary px-3 py-1 rounded position-absolute"
                        style="top: 10px; right: 10px;">{{ $product->name_cate }}</div>
                    <div class="p-4 rounded-bottom">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->description }}</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">{{ $product->price }}vnđ</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
