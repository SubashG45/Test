@extends('home')
@section('main')
<section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form action="{{route('search')}}" method="GET" class="d-flex items-center">
                    <div class="form-group" class="col-8">
                        <input type="search" id="search" name="search" placeholder="Search by Name">
                    </div>
                    <button class="btn btn-primary">Search</button>
                </form>
                <div class="row">
                <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="card-title">All Products</h3>
                                <span class="ml-3 badge bg-info"></span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-sm table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <div>
                                            <th class="d-flex justify-content-around">Name
                                                <a href="{{route('sort')}}" class="sort">sort</a>
                                            </th>
                                            </div>
                                            <!-- <th>Image</th> -->
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($newProducts as $newProduct)
                                            <tr>
                                                <td>{{ $newProduct->id }}</td>
                                                <td>{{ $newProduct->name }}</td>
                                                <!-- <td>{{ $newProduct->name }}</td> -->
                                                <td class="project-actions text-right">
                                                    <form
                                                        action="{{route('new-product.destroy', ['new_product'=>$newProduct->id])}}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')

                                                        <a href="{{route('new-product.edit', ['new_product'=>$newProduct->id])}}" type="submit" class="btn btn-info btn-sm ps-1">
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