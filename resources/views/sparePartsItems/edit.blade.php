
@include('layouts.headerDash');

    <div style="max-width: 75%;  margin-right: 22%">

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif
        <table class="table table-dark table-striped">
  <thead>
    <tr class="text-center">
      <th scope="col">الرقم</th>
      <th scope="col">اسم قطعة الغيار</th>
      <th scope="col">تفاصيل قطعة الغيار</th>
      <th scope="col">صورة قطعة الغيار</th>
      <th scope="col">صورة قطعة الغيار الجديدة</th>
      <th scope="col">سعر قطعة الغيار</th>
      <th scope="col">الفسم</th>
      <th scope="col">المميزة</th>
      <th scope="col">تعديل</th>
      
    </tr>
  </thead>
  <tbody>
   
    <tr>
        <form action="{{ route('sparePartsItems.update',$item->id) }}" method="post"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <td>{{ $item->id }}</td>
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                </div>
            </td>
           
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="description" value="{{ $item->description }}"/>
                </div>
            </td>
            <td>
                <div class="mb-3">
                     <img src="{{ asset('images/sparePartsItems/'.$item-> path_image)}}" width="70px" height="70px" alt="sameh"/>
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="file" class="form-control" name="path_image" value="{{ $item->path_image }}"/>
                </div>
            </td>
            
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" value="{{ $item->price	}}"/>
                </div>
            </td>
           
            <td class="px-5 border">
                <select name="spare_parts_items_id" >
                  @foreach ($sparePartsDepartment as $sparePartsDepartments)
                    <option value="{{ $sparePartsDepartments-> id }}">{{ $sparePartsDepartments-> name }}</option>
                  @endforeach
                </select>
               </td>   
            </td>

            <td class="px-5 border">
                 <select name="featured" value="Yes">
                    <option disabled selected>{{$sparePartsDepartments->featured}}</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
               </td>  
            <td>
                <button type="submit" class="btn btn-primary">تعديل</button>
            </td>
        </form>
    </tr>
    
  </tbody>
</table>

    </div>

@include('layouts.footerDash');
   