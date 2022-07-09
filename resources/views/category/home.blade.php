@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card mb-3">
                    <div class="card-header text-bg-secondary ">category list</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">sl no</th>
                                    <th scope="col">id</th>
                                    <th scope="col">category_name</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">updated_at</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row"></th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">select your category</div>
                    <div class="card-body">
                        <form action="{{ url('category/post') }}"    method="POST">
                              
                            <div class="mb-3">
                                
                                <label class="form-label">category name</label>
                                @csrf
                                <input type="text" class="form-control"  name="category_name">
                              
                            </div>
                           
                                @error('category_name')
                                      <span class="text-danger">{{ $message }}</span>
                                @enderror
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection
