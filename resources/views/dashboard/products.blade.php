@extends('layouts.appdash')

@section('content')
<div class="modal" tabindex="-1" id="addproducts">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">إضافة منتج</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('create_newproducts')}}" method="get">
            <div class="row">
                <div class="col">
                    <label for="productname" class="form-label"> اسم المنتج</label>
                    <input type="text" class="form-control p-2" name="productname" id="productname">
                </div>
                <div class="col">
                    <label for="descreption"  class="form-label"> وصف المنتج</label>
                    <input type="text" class="form-control p-2" name="descreption" id="descreption">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-success">حفظ</button>
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addproducts">
                اضافة
              </button>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">رسالة تأكيد </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هل بالفعل تريد حذف السجل</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء الأمر</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="confirm()">حذف</button>
      </div>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col">
    <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>رقم المنتج</th>
                <th>اسم المنتج</th>
                <th>وصف المنتج</th>
                <th colspn="2"> اجراء</th>
              </tr>
            </thead>
                 
            <tbody>
              @foreach($prod as $item)
              <tr>
                <td>
                  {{$item->id}}
                </td>
                <td>
                  {{$item->name}}
                </td>
                <td>{{$item->Description}}</td>
                <td><a href='#' onclick="lunch({{$item->id}})"><i class="bi bi-trash text-danger"></i></a></td>
              <td><a href= "{{route('edit',['id'=>$item->id])}}" ><i class="bi bi-pencil-square text-success"></i></td>
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