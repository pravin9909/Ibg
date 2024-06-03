<div class="row col-row product-options row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-2">
    @foreach ($products as $product)
    <div class="item col-item">
        <div class="product-box">
            <!-- Start Product Image -->
            <div class="product-image">
                <a href="{{ route('product.show', $product->id) }}" class="product-img rounded-0">
                    <img class="rounded-0 blur-up lazyload" src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->title }}" title="{{ $product->title }}" width="625" height="808" />
                </a>
            </div>
            <!-- End Product Image -->
            
            <!-- Start Product Details -->
            <div class="product-details text-center">
                <!--Product Vendor-->
                <div class="product-vendor">{{ $category->title }}</div>
                <!--End Product Vendor-->
                
                <!-- Product Name -->
                <div class="product-name">
                    <a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a>
                </div>
                <!-- End Product Name -->
            </div>
            <!-- End product details -->
        </div>
    </div>
    @endforeach
</div>
