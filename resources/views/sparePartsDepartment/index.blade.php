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
        <h2 class="fw-bold"> اقسام قطع الغيار</h2>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة قسم</h1>
        <button type="button " class="btn-close mx-1" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('department.store')}}" method="post">
            @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">اسم القسم :</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">وصف القسم :</label>
            <textarea class="form-control" id="message-text" name="description"></textarea>
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
    <table class="table text-center" >
  <thead class="text-center">
    <tr>
      <th class="border" scope="col">الرقم</th>
      <th class="border" scope="col">الاسم</th>
      <th class="border" scope="col">الوصف</th>
      <th class="border" scope="col">التعديل</th>
      <th class="border" scope="col">الحذف</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($sparePartsDepartment as $department)
  <tr>
       <td class="px-5 border">{{ $department-> id }}</td>
       <td class="px-5 border">{{ $department-> name }}</td>
       <td class="px-5 border">{{ $department-> description }}</td>
       <td class="px-5 border"><a href="{{ route('department.edit',$department->id) }}" class="btn btn-warning ">تعديل</a></td>
       <td class="px-5 border">
        <form action="{{ route('department.destroy',$department->id) }}" method="post">
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