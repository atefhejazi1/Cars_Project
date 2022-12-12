


@include('layouts.headerDash');
   


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
      <th scope="col">اسم القسم</th>
      <th scope="col">تفاصيل القسم</th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
   
    <tr>
        <form action="{{ route('department.update',$department->id) }}" method="post"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <td>{{ $department->id }}</td>
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" value="{{ $department->name }}">
                </div>
            </td>
           
            <td>
                <div class="mb-3">
                    <input type="text" class="form-control" name="description" value="{{ $department->description }}"/>
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

@include('layouts.footerDash');


    
