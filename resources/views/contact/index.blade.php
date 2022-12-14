@include('layouts.headerDash')

<div  class="big-div" style="overflow: scroll; width: 1000px;">
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
        {{-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة قسم </button> --}}
        <h2 class="fw-bold">رسائل العملاء</h2>
  </div>

   <div class="">
    <table class="table text-center">
  <thead class="text-center">
    <tr>
      <th class="border" scope="col">الرقم</th>
      <th class="border" scope="col">الاسم </th>
      <th class="border" scope="col">الايميل</th>
      <th class="border" scope="col">رقم الهاتف</th>
      <th class="border" scope="col" style="width:300px">موضوع الرسالة</th>      
      {{-- <th class="border" scope="col">التعديل</th> --}}
      <th class="border" scope="col">الحذف</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($contact as $contacts)
  <tr>
       <td class="px-5 border">{{ $contacts-> name }}</td>
       <td class="px-5 border">{{ $contacts-> email }}</td>
       <td class="px-5 border">{{ $contacts-> phone }}</td>
       
       <td class="px-5 border">{{ $contacts-> subject }}</td>
       <td class="px-5 border" style="width:300px">{{ $contacts-> message }}</td>
       {{-- <td class="px-5 border"><a href="{{ route('contact.edit',$contacts->id) }}" class="btn btn-warning ">تعديل</a></td> --}}
       <td class="px-5 border">
        <form action="{{ route('contact.destroy',$contacts->id) }}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger d-flex align-items-center">حذف</button>
        </form>
       </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $contact->links() }}
</div>
</div>




@include('layouts.footerDash')
