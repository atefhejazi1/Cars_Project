@include('layouts.headerDash')



    <div  class="big-div div-edit" style="overflow: scroll; width: 1000px; ">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif
        <table class="table table-dark table-striped ">
  <thead>
    <tr class="text-center">
      <th scope="col" style="width:50px">الرقم</th>
      <th scope="col" style="width:200px">اسم الاكسسوار</th>
      <th scope="col" style="width:400px">تفاصيل الاكسسوار</th>
      <th scope="col" style="width:200px">صورة الاكسسوار</th>
      <th scope="col" style="width:300px" >صورة الاكسسوار الجديدة</th>
      <th scope="col" style="width:100px">سعر الاكسسوار</th>
      <th scope="col" style="width:100px">المميزة</th>
      <th style="width:100px"></th>
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
                <textarea class="form-control" name="description">{{ $accessorie->description }}</textarea>
                </div>
            </td>
            <td>

                <div class="mb-3">
                    <img src="{{ asset('images/accessories/'.$accessorie-> path_image)}}" width="110px" height="70px" alt="sameh"/>
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="file" class="form-control" name="path_image" value="{{ $accessorie->path_image }}"/>
                </div>
            </td>

              <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" value="{{ $accessorie->price	}}"/>
                </div>
            </td>

              <td class="px-5">
                <select name="featured" value="Yes">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
               </td>          
            </div>
           
            
          
          
            <td>
                <button type="submit" class="btn btn-primary">تعديل</button>
            </td>
        </form>
    </tr>
    
  </tbody>
</table>

    </div>

    

@include('layouts.footerDash')
