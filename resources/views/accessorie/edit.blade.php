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
      <th scope="col">الاسم</th>
      <th scope="col">التفاصيل </th>
      <th scope="col">الصورة</th>
      <th scope="col">السعر </th>
      
    </tr>
  </thead>
  <tbody>
   
    <tr>
        <form action="{{ route('accessorie.update',$accessorie->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <td>{{ $accessorie->id }}</td>
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $accessorie->name }}">
                </div>
            </td>
           
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="description" value="{{ $accessorie->description }}"/>
                </div>
            </td>
            <td>

                <div class="mb-3">
                    <img src="{{ asset('images/accessories/'.$accessorie-> path_image)}}" width="70px" height="70px" alt="sameh"/>
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="file" class="form-control" name="path_image" value="{{ $accessorie->path_image }}"/>
                </div>
            </td>

              <td class="px-5 border">
                <select name="featured" value="Yes">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
               </td>          
            </div>
           
            
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" value="{{ $accessorie->price	}}"/>
                </div>
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
