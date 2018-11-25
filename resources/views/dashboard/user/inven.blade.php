@extends('dashboard.template')

@section('title', 'Inventaris')

@section('content')

<div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
        	<div class="row align-items-center">
        		<div class="col"><h3 class="mb-0">List Inventaris MB</h3></div>
        	</div>        
        </div> 
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
              	<th scope="col">No</th>
                <th scope="col">Nama Inventaris</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Kategori</th>
              </tr>
            </thead>
            <tbody>  
            @for($i = 1; $i<=15; $i++)
              <tr>
              	<td valign="middle" width="5%"><span>{{$i}}</span></td>
                <th scope="row" width="30%">
                  <div class="media align-items-center">
                    <div class="media-body">
                    	<span class="text-sm">barang {{$i}}</span>
                    </div>
                  </div>
                </th>
                <td>
                	<span class="text-sm">{{7*$i}}</span>
                </td>
                <td>
                	<span class="text-sm">Sarana</span>
                </td>
            </tr>
            @endfor
            </tbody>
          </table> 
        </div>
        {{-- pagination --}}
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination pagination-sm justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

@endsection