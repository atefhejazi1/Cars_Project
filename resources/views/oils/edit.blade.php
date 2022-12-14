@include('layouts.headerDash')




    <div class="big-div div-edit" style="overflow: scroll; width: 1000px; ">
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
      <th scope="col" style="width:50px">الرقم</th>
      <th scope="col" style="width:200px">اسم الزيت</th>
      <th scope="col" style="width:400px">تفاصيل الزيت</th>
      <th scope="col" style="width:200px">صورة الزيت</th>
      <th scope="col" style="width:300px" >صورة الزيت الجديدة</th>
      <th scope="col" style="width:100px">سعر الزيت</th>
      <th scope="col" style="width:100px">المميزة</th>
      <th style="width:100px"></th>
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
                <textarea class="form-control" name="description">{{ $oil->description }}</textarea>
                </div>
            </td>
            <td>
              <div class="mb-3">
                  <img src="{{ asset('images/oils/'.$oil-> path_image)}}" width="110px" height="70px" alt="sameh"/>
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

            <td class="px-5">
                 <select name="featured" value="Yes">
                    {{-- <option disabled selected>{{$oil->featured}}</option> --}}
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
