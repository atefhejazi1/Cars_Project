@include('layouts.headerDash')



    <div class="big-div-edit" style="overflow: scroll; width: 1000px; ">
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
      <th scope="col">اسم المنظف</th>
      <th scope="col">تفاصيل المنظف</th>
      <th scope="col">صورة المنظف</th>
      <th scope="col">سعر المنظف</th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
   
    <tr>
        <form action="{{ route('detergent.update',$detergent->id) }}" method="post"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <td>{{ $detergent->id }}</td>
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $detergent->name }}">
                </div>
            </td>
           
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="description" value="{{ $detergent->description }}"/>
                </div>
            </td>
            <td>

                <div class="mb-3">
                    <img src="{{ asset('images/detergent/'.$detergent-> path_image)}}" width="70px" height="70px" alt="sameh"/>
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="file" class="form-control" name="path_image" value="{{ $detergent->path_image }}"/>
                </div>
            </td>
           
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" value="{{ $detergent->price	}}"/>
                </div>
            </td>

            <td class="px-5 border">
                <select name="featured" value="Yes">
                    <option disabled selected>{{$detergent->featured}}</option>
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

    

@include('layouts.footerDash')
