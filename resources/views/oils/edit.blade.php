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
      <th scope="col">اسم الزيت</th>
      <th scope="col">تفاصيل الزيت</th>
      <th scope="col">صورة الزيت القديمة</th>
      <th scope="col">صورة الزيت الجديدة</th>
      <th scope="col">سعر الزيت</th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
   
    <tr>
        <form action="{{ route('oils.update',$oil->id) }}" method="post"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <td>{{ $oil->id }}</td>
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $oil->name }}">
                </div>
            </td>
           
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="description" value="{{ $oil->description }}"/>
                </div>
            </td>
            <td>
              <div class="mb-3">
                  <img src="{{ asset('images/oils/'.$oil-> path_image)}}" width="70px" height="70px" alt="sameh"/>
              </div>
            </td>
            <td>
                
                <div class="mb-3">
                    <input type="file" class="form-control" name="path_image" value="{{ $oil->path_image }}"/>
                </div>
            </td>
          
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" value="{{ $oil->price	}}"/>
                </div>
            </td>

            <td class="px-5 border">
                 <select name="featured" value="1">
                    <option disabled selected>{{$oil->featured}}</option>
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
