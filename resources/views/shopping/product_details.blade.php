@extends('layouts.appuserui')

@section('content')
<div class="container mt-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
               <div class="card ">
                 <div class="row">
                    <div class="col-md-6">
                    <a href="{{route('Lighting')}}" class="btn btn-black text-light bg-dark p-2"><i class="bi bi-arrow-left-short text-light"></i>Back</a>
                     
                    <div class="col">
                      <div class="product p-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center"> 
                                <i class="fa fa-long-arrow-left"></i> 
                            </div> 
                                <i class="fa fa-shopping-cart text-muted"></i>
                        </div>
                        <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"></span>
                        <h2 class="text-uppercase text-dark "><strong><p>{{$prod->name}} </p></strong></h2>
                        <table>
                         <tr>
                        <td>
                          <small><i class="bi bi-star-fill text-warning"></i></small>
                          <small><i class="bi bi-star-fill text-warning"></i></small>
                          <small><i class="bi bi-star-fill text-warning"></i></small>
                          <small><i class="bi bi-star-fill text-warning"></i></small>
                          <small><i class="bi bi-star-half text-warning"></i></small>
                        </td>
                       </tr> 
                      </table>
                      <div>
                      <p>{{$prod->price}}<i class="bi bi-currency-dollar"></i></p>
                      </div>
                                

                        <p>{{$prod->Description}}</p>
                        <p class="about text-success"><i class="bi bi-truck text-success p-2"></i>Free Delivery</p>
                               <div class="cart mt-4 align-items-center ">
                               <a href="{{route('add_to_cart')}} " class="btn btn-black text-light bg-dark mt-2" >Add to cart<i class="bi bi-basket2 p-2"></i></a>
                      </div>
                    </div>
                 </div>
               </div>
            </div>
          </div>
          </div>

@endsection