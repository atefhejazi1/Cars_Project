@include('layouts.headerDash')




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
      <th scope="col">اسم الاضافة</th>
      <th scope="col">تفاصيل الاضافة</th>
      <th scope="col">صورة الاضافة</th>
      <th scope="col">سعر الاضافة</th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
   
    <tr>
        <form action="{{ route('extras.update',$extras->id) }}" method="post"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <td>{{ $extras->id }}</td>
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $extras->name }}">
                </div>
            </td>
           
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="description" value="{{ $extras->description }}"/>
                </div>
            </td>
            <td>
               <div class="mb-3">
                        <img src="{{ asset('images/extras/'.$extras-> path_image)}}" width="70px" height="70px" alt="sameh"/>

                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="file" class="form-control" name="path_image" value="{{ $extras->path_image }}"/>
                </div>
            </td>
           
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" value="{{ $extras->price	}}"/>
                </div>
            </td>

            <td class="px-5 border">
                <select name="featured" value="Yes">
                    <option>Yes</option>
                    <option>No</option>
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
