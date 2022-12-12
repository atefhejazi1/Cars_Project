@include('layouts.headerDash')

  


<div class="big-div" style="overflow: scroll; width: 1000px;">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif


<div class=" d-flex justify-content-between px-5 mb-5 mt-3">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة قطع غيار </button>
        <h2 class="fw-bold"> قطع الغيار</h2>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة قطع غيار</h1>
        <button type="button " class="btn-close mx-1" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('sparePartsItems.store')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">اسم القطعة :</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">وصف القطعة :</label>
            <textarea class="form-control" id="message-text" name="description"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">صورة القطعة :</label>
            <input type="file" name="path_image">
          </div>
          
          
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">السعر :</label>
            <input type="text" class="form-control" id="recipient-name" name="price">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">القسم :</label>
              <td class="px-5 border">
               <select name="spare_parts_items_id" >
                  @foreach ($sparePartsDepartment as $sparePartsDepartments)
                    <option value="{{ $sparePartsDepartments-> id }}">{{ $sparePartsDepartments-> name }}</option>
                  @endforeach
                </select>
               </td>          
            </div>

              <div class="mb-3">
            <label for="recipient-name" class="col-form-label">المميزة :</label>
              <td class="px-5 border">
                <select name="featured" value="Yes">
                    <option value= "1">Yes</option>
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
   <div class="" >
    <table class="table text-center" style="background-color: transparent;">
  <thead class="text-center">
    <tr>
      <th class="border" scope="col">الرقم</th>
      <th class="border" scope="col">اسم القطعة</th>
      <th class="border" scope="col">وصف القطعة</th>
      <th class="border" scope="col">صورة القطعة</th>
      <th class="border" scope="col">سعر القطعة</th>
      <th class="border" scope="col">القسم</th>
            <th class="border" scope="col">المميزة</th>

      <th class="border" scope="col">التعديل</th>
      <th class="border" scope="col">الحذف</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($sparePartsItems as $item)
  <tr>
       <td class="px-5 border">{{ $item-> id }}</td>
       <td class="px-5 border">{{ $item-> name }}</td>
       <td class="px-5 border">{{ $item-> description }}</td>
       <td class="px-5 border">
         <img src="{{ asset('images/sparePartsItems/'.$item-> path_image)}}" width="70px" height="70px" alt="sameh"/>
        </td>
        <td class="px-5 border">{{ $item-> price }}</td>
        <td class="px-5 border">         
          {{$item->sparPartsDepartments->name}}          
        </td>
         @if ($item-> featured == '1')
        <td class="px-5 border fs-1">✅</td>
        @else
        <td class="px-5 border fs-1">❌</td>         
        @endif
        
       <td class="px-5 border"><a href="{{ route('sparePartsItems.edit',$item->id) }}" class="btn btn-warning ">تعديل</a></td>
       <td class="px-5 border">
        <form action="{{ route('sparePartsItems.destroy',$item->id) }}" method="post" style="margin-right: 10%;">
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



@include('layouts.footerDash')

