
@include('layouts.headerDash');

    <div class="big-div div-edit" style="overflow: scroll; ">

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif
        <table class="table table-dark table-striped" style="width: 200%">
  <thead>
    <tr class="text-center">
      <th scope="col" style="width:50px">الرقم</th>
      <th scope="col" style="width:200px">اسم قطعة الغيار</th>
      <th scope="col" style="width:400px">تفاصيل قطعة الغيار</th>
      <th scope="col" style="width:200px">صورة قطعة الغيار</th>
      <th scope="col" style="width:300px" >صورة قطعة الغيار الجديدة</th>
      <th scope="col" style="width:100px">سعر قطعة الغيار</th>
      <th scope="col" style="width:100px">القسم</th>
      <th scope="col" style="width:100px">المميزة</th>
      <th style="width:100px"></th>
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
                <textarea class="form-control" name="description">{{ $item->description }}</textarea>
                </div>
            </td>
            <td>
                <div class="mb-3">
                     <img src="{{ asset('images/sparePartsItems/'.$item-> path_image)}}" width="110px" height="70px" alt="sameh"/>
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
           
            <td class="px-5">
                <select name="spare_parts_items_id" >
                  @foreach ($sparePartsDepartment as $sparePartsDepartments)
                    <option value="{{ $sparePartsDepartments-> id }}">{{ $sparePartsDepartments-> name }}</option>
                  @endforeach
                </select>
               </td>   
            </td>

            <td class="px-5">
                 <select name="featured" value="Yes">
                    {{-- <option disabled selected>{{$item->featured}}</option> --}}
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
   