@extends('layouts.admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Massage List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('website.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Massage</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                          
                          <div class=" d-flex justify-content-between align-item-center ">
                                <h3 class="card-title">Massages</h3>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th style="width: 40px">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($massages->count() > 0)
                                @foreach ($massages as $massage)
                            
                                <tr>
                                  <td>{{ $massage->id }}</td>

  
                                  <td>{{ $massage->name }}</td>
                                  <td>{{ $massage->email}}</td>
                                  <td>{{ $massage->subject }}</td>
                                  <td class="d-flex">
                                    <a href="{{ route('contact.show',[$massage->id]) }}" class="btn btn-success mr-1"> <i class="fas fa-eye"></i> </a>

                                    <form action="{{ route('contact.destroy',[$massage->id]) }}" method="POST" class="mr-1">
                                      @method('DELETE')
                                      @csrf
                                      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                    
                                    </form>

                                  </td>
                                </tr>
                                @endforeach
                              
                              @else

                                <td colspan="6">
                                  <h5 class="text-center">No massage Found</h5>
                                </td>
                              
                              @endif 
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection