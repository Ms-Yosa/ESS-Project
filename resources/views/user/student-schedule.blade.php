@extends('layouts.student')
@section('title') {{'Schedule'}} @endsection
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 mb-3 pt-5">
        <div class="stretch-card">
            <div class="card" style="border:1px solid black">
              <div class="card-body">
                <h4 class="card-title">Schedule</h4>
                <p class="card-description">
                </p>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                  <table class="table table-hover mb-0" >
                    <thead>
                      <tr style="border-bottom: 2px solid #FDC921">
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    {{-- @if (isset($feedback[0])) --}}
                    <tbody >

                    {{-- @else --}}
                      <tr>
                        <td colspan="7" class="text-center">
                          <img
                            src="{{asset('Assets/no-data.png')}}"
                            alt="no-data-image"
                            class="no-data-img"
                          >
                          <p class="card-description mt-3">No Data Yet</p>
                        </td>
                      </tr>
                    {{-- @endif --}}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- partial -->
<!-- main-panel ends -->
@endsection