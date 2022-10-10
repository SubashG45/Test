@extends('home')
@section('main')
<section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header" style="cursor: pointer" data-card-widget="collapse" title="Collapse">
                                <h3 class="card-title">Edit Sub-Category : {{$subCategory->sub_category}}</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('sub-category.update', ['sub_category'=>$subCategory->id])}}" method="POST">
                                    @csrf
                                    @method('put')
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="required fw-bold pb-1" for="inputName">Sub-Category</label>
                                                    <input autocomplete="off" type="text" id="inputName" name="sub_category"
                                                    class="form-control" required value="{{ $subCategory->sub_category }}"
                                                    placeholder="Sub-Category">

                                                    @error('sub_category')
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