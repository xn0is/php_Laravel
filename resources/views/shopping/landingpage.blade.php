@extends('layouts.appuserui')

@section('content')
   <div className="background">
    <div className="container">
        <div className="row">
            <div className="col">
            <div class="w-100 overflow-hidden bg-gray-100" id="top">
  
  <div class="container position-relative">
    <div class="col-12 col-lg-8 mt-0 h-100 position-absolute top-0 end-0 bg-cover" data-aos="fade-left">
      
    </div>
      <div class="row">
  
  <div class="col-lg-7 py-vh-6 position-relative" data-aos="fade-right">
    <h1 class="display-1 fw-bold mt-5">Life needs a magic touch</h1>
    <p class="lead">A unique experience awaits you! Enjoy comfort and style with our luxury products</p>
    <Link to='/list'> <a href="{{route('Lighting')}}" class="btn btn-dark btn-xl shadow me-3 rounded-0 my-5">Home Furniture</a></Link>
  </div>
  
  
  
  </div>
  </div>
  
  </div>
            </div>
        </div>

        </div>

        <div className="row text-start d-flex justify-content  mt-5">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active img-fluid rounded">
                    <img className=" rounded" src="https://i.pinimg.com/736x/0a/a5/6c/0aa56cffc1587aaf82de288b94d5fd37.jpg"  width={300} height={300} alt="" /> <span className="badge bg-body-secondary text-dark ">  </span>    
                    </div>
                    <div class="carousel-item">
                    <img className=" rounded" src="https://i.pinimg.com/564x/6c/cb/0e/6ccb0e6292b55ec3ae9e6879d5ffb543.jpg"  width={300} height={300} alt="" /> <span className="badge bg-body-secondary text-dark">   </span>
                    </div>
                    <div class="carousel-item ">
                    <img className=" rounded" src="https://i.pinimg.com/564x/1d/3d/8f/1d3d8f9946ce167d8e5a9ecd76ff8c04.jpg"  width={300} height={300} alt="" /> <span className="badge bg-body-secondary text-dark"> </span>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
               </div>
</div>
<section class="py-5">
                    <div class="container">
                        <div class="row  gx-4 text-end">
                            
                            <div class="col-md-6 ">
                                <div class="ms-md-2 ms-lg-5">
                                       
                                <div class="ms-md-2 ms-lg-5">
                                    <img class="img-fluid rounded-3" src="" /></div>
                                </div>
                            </div>
                            <div class="col-md-5 text-start">
                            <span class="text-muted"> <h4>Welcome to our online store</h4></span>
                                    <h2 class="display-5 fw-bold ">Who we are?</h2>
                                    <p class="lead text-start">A leading company in the field of e-commerce we cherish our customers and their trust in US</p>
                            
                            </div>
                        </div>
                    </div>
                </section>
                </div>


@endsection