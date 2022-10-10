@extends('home')
@section('main')
<section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header" style="cursor: pointer" data-card-widget="collapse" title="Collapse">
                                <h3 class="card-title">Add New Category</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('category.store')}}" method="POST">
                                    @csrf
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="required fw-bold pb-1" for="inputName">Category</label>
                                                    <input autocomplete="off" type="text" id="inputName" name="category"
                                                    class="form-control" required value="{{ old('category') }}"
                                                    placeholder="Category">

                                                    @error('category')
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
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="card-title">All Categories</h3>
                                <span class="ml-3 badge bg-info"></span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-sm table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->category }}</td>
                                                <td class="project-actions text-right">
                                                    <form
                                                        action="{{route('category.destroy', ['category'=>$category->id])}}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')

                                                        <a href="{{route('category.edit', ['category'=>$category->id])}}" type="submit" class="btn btn-info btn-sm ps-1">
                                                            <i class="fas fa-edit">
                                                            </i>
                                                            edit
                                                        </a>


                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            delete
                                                        </button>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    
                    </div>
                </div>
            </div>
</section>
@endsection