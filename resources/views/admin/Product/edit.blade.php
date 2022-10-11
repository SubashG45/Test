@extends('home')
@section('main')
<section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header" style="cursor: pointer" data-card-widget="collapse" title="Collapse">
                                <h3 class="card-title">Edit Product : {{$newProduct->name}}</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('new-product.update', ['new_product'=>$newProduct->id])}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="required fw-bold pb-1" for="inputName">Name</label>
                                                    <input autocomplete="off" type="text" id="inputName" name="name"
                                                    class="form-control" required value="{{ $newProduct->name }}"
                                                    placeholder="Name">

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="required fw-bold pb-1" for="inputName">Price</label>
                                                    <input autocomplete="off" type="text" id="inputName" name="price"
                                                    class="form-control" required value="{{ $newProduct->price }}"
                                                    placeholder="Price">

                                                    @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="required fw-bold pb-1" for="inputName">Description</label>
                                                    <textarea autocomplete="off" type="text" id="inputName" name="description"
                                                    class="form-control" required value="{{ $newProduct->description }}"></textarea>

                                                    @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="required fw-bold pb-1" for="inputName">Image</label>
                                                    <input autocomplete="off" type="file" id="inputName" name="image"
                                                    class="form-control" required >

                                                    @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="required fw-bold pb-1" for="inputName">Category</label>
                                                    <select autocomplete="off" type="text" id="inputName" name="category_id"
                                                    class="form-control" required >
                                                    <option value="0">--Select--</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('category_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="required fw-bold pb-1" for="inputName">Sub-Category</label>
                                                    <select autocomplete="off" type="text" id="inputName" name="subcategory_id"
                                                    class="form-control" required >
                                                    <option value="0">--Select--</option>
                                                        @foreach($subcategories as $subcategory)
                                                        <option value="{{$subcategory->id}}">{{$subcategory->sub_category}}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('category_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-12 d-flex justify-content-center mt-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection