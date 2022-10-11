<div class="card">
    <div class="card-header text-center text-bold">{{"Sidebar"}}</div>
    <div class="card-body text-decoration-none">
        <div class="mb-3">
            <a class="form-control" href="{{route('home')}}">Dashboard</a>
        </div>
        <div class="mb-3">
            <a class="form-control" href="{{route('category.index')}}">Category</a>
        </div>
        <div class="mb-3">
            <a class="form-control" href="{{route('sub-category.index')}}">Sub-Category</a>
        </div>
        <div class="mb-3">
            <a class="form-control" href="{{route('new-product.create')}}">Products</a>
        </div>
        <div class="mb-3">
            <a class="form-control" href="{{route('new-product.index')}}">New Products</a>
        </div>
    </div>
</div>