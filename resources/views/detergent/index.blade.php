@include('layouts.headerDash')

<div  style="max-width: 70%; margin-right: 25%">
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
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة قسم </button>
        <h2 class="fw-bold"> المنظفات</h2>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة منظف</h1>
        <button type="button " class="btn-close mx-1" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('detergent.store')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">اسم المنظف :</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">وصف المنظف :</label>
            <textarea class="form-control" id="message-text" name="description"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">صورة المنظف :</label>
            <input type="file" name="path_image">
          </div>
          
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">السعر :</label>
            <input type="text" class="form-control" id="recipient-name" name="price">
          </div>

            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">المميزة :</label>
              <td class="px-5 border">
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
    <table class="table">
  <thead class="text-center">
    <tr>
      <th class="border" scope="col">الرقم</th>
      <th class="border" scope="col">اسم المنظف</th>
      <th class="border" scope="col">وصف المنظف</th>
      <th class="border" scope="col">صورة المنظف</th>
      <th class="border" scope="col">سعر المنظف</th>    
            <th class="border" scope="col">المميزة</th>
  
      <th class="border" scope="col">التعديل</th>
      <th class="border" scope="col">الحذف</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($detergent as $detergents)
  <tr>
       <td class="px-5 border">{{ $detergents-> id }}</td>
       <td class="px-5 border">{{ $detergents-> name }}</td>
       <td class="px-5 border">{{ $detergents-> description }}</td>
       <td class="px-5 border">
        <img src="{{ asset('images/detergent/'.$detergents-> path_image)}}" width="70px" height="70px" alt="sameh"/>
       </td>
       <td class="px-5 border">{{ $detergents-> price }}</td>
        @if ($detergents-> featured == '1')
        <td class="px-5 border fs-1">✅</td>
        @else
        <td class="px-5 border fs-1">❌</td>         
        @endif       <td class="px-5 border"><a href="{{ route('detergent.edit',$detergents->id) }}" class="btn btn-warning ">تعديل</a></td>
       <td class="px-5 border">
        <form action="{{ route('detergent.destroy',$detergents->id) }}" method="post">
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
