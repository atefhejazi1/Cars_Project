@include('layouts.headerDash')

<div   class="big-div" style="overflow: scroll; width: 1000px;">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

<div class=" d-flex justify-content-between mb-5 mt-3">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة اضافة </button>
        <h2 class="fw-bold"> الاضافات</h2>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header d-flex">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">اضافة اضافة</h1>
        <button type="button " class="btn-close ms-1" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('extras.store')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">اسم الاضافة :</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">وصف الاضافة :</label>
            <input type="text" class="form-control" id="recipient-name" name="description">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">صورة الاضافة :</label>
            <input type="file" name="path_image">
          </div>  
          <div class="mb-3">
            <label for="message-text" class="col-form-label">سعر الاضافة :</label>
            <input type="text" class="form-control" id="recipient-name" name="price">
          </div>

            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">المميزة :</label>
              <td class="border">
                <select name="featured" value="Yes">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
               </td>          
            </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-primary" name="submit">اضافة</button>
      </div>
        </form>

    </div>
  </div>
</div>
   <div class="">
    <table class="table text-center">
  <thead class="text-center">
    <tr>
      <th class="border" scope="col">الرقم</th>
      <th class="border" scope="col">اسم الاضافة</th>
      <th class="border" scope="col" style="width:400px">وصف الاضافة</th>
      <th class="border" scope="col">صورة الاضافة</th>
      <th class="border" scope="col">سعر الاضافة</th>
            <th class="border" scope="col">المميزة</th>

      <th class="border" scope="col">التعديل</th>
      <th class="border" scope="col">الحذف</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($extras as $extrase)
  <tr>
       <td class="border">{{ $extrase-> id }}</td>
       <td class="border">{{ $extrase-> name }}</td>
       <td class="border">
         <div style="height: 100px ; overflow-y: scroll; text-align: right ">
          {{ $extrase-> description }}
        </div>
       </td>
       <td class="border">
        <img src="{{ asset('images/extras/'.$extrase-> path_image)}}" width="70px" height="70px" alt="sameh"/>
       </td>
       <td class="border">{{ $extrase-> price }}</td>
       @if ($extrase-> featured == '1')
        <td class="border fs-1">✅</td>
        @else
        <td class="border fs-1">❌</td>         
        @endif
       <td class="border"><a href="{{ route('extras.edit',$extrase->id) }}" class="btn btn-warning ">تعديل</a></td>
       <td class="border">
        <form action="{{ route('extras.destroy',$extrase->id) }}" method="post" style="margin-right: 10%;">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger d-flex align-items-center">حذف</button>
        </form>
       </td>
    </tr>
    @endforeach
  </tbody>
</table>
   </div>
   
</div>
   <!-- JavaScript Bundle with Popper -->


@include('layouts.footerDash')
