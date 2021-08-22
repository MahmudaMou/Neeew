@extends('layout.master')

@section('title')
     POSM TTEMS
@endsection

@section('content')

<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> POSM ITEMS
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD</button>
                 </h4>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Item Name
                      </th>
                      <th>
                        Amount
                      </th>
                      <th>
                        Update 
                      </th>
                      <th >
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach($posms as $data)
                      <tr>
                        <td>
                          {{$data->id}}
                        </td>
                        <td>
                        {{$data->itemname}}
                        </td>
                        <td>
                        {{$data->amount}}
                        </td>
                        <td>
                          <a href="{{url('posm/'.$data->id)}}" class= "btn btn-success">EDIT</a>
                        </td>
                        <td >
                        <a href="#" class= "btn btn-danger">DELETE</a>
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
@endsection

@section('scripts')
@endsection