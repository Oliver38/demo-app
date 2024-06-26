@extends('layouts.auth')

@section('content')

<!-- Recent Sales -->
<div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                <div class="card-header">
                  
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Add Service
              </button>
            </div>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach( $services as $service)
                      <tr>
                        
                        <td>{{$service->name}}</td>
                        <td><a href="#" class="text-primary">{{$service->description}}</a></td>
                        <td>{{$service->icon}}</td>
                        <td><span class="badge bg-success">{{$service->status}}</span></td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->



            <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Service</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('addservice')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="modal-body">
                    <div class="mb-3">
    <label for="name" class="form-label">Service Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp"></textarea>
  </div>
  <div class="mb-3">
    <label for="CompanyName" class="form-label">Company Name</label>
    <select name="icon" id="icon" class="form-control">
        <option value="bi bi-activity"> bi bi-activity</option>
        <option value="bi bi-bounding-box-circles"> bi bi-bounding-box-circles</option>
        <option value="bi bi-calendar4-week"> bi bi-calendar4-week</option>
        <option value="bi bi-broadcast"> bi bi-broadcast</option>
    </select>
  </div>
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->
@endsection
