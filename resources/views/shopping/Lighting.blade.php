@extends('layouts.appuserui')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            @foreach($product as $item)
            <div class="row">
                <div class="col">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="row mt-2">
                               
                                <div class="col">
                                    <h1 class="alert alert-light text-start">{{$item->name}}</h1>
                                    <table className="p-3">
                         <tr>
                        <td className=" p-1">
                          <small><i class="  bi bi-star-fill text-warning "></i></small>
                          <small><i class="  bi bi-star-fill text-warning"></i></small>
                          <small><i class="  bi bi-star-fill text-warning"></i></small>
                          <small><i class="  bi bi-star-fill text-warning"></i></small>
                          <small><i class="  bi bi-star-half text-warning"></i></small>
                        </td>
                       </tr> 
                      </table> 
                                    <p>{{$item->Description}}</p>
                                </div>
                                   <div class="col">
                                    
                                   </div>
                            </div>
                       
                            <div class="row mt-2">
                                <div class="col ">
                                    <a href="{{route('proddet',['id'=>$item->id])}}" class="btn btn-black text-light  bg-dark mt-2">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
