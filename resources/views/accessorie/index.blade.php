@include('layouts.headerDash')


<div class="big-div" style="overflow: scroll; width: 1000px;">
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
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة اكسسوار</button>
          <h2 class="fw-bold"> اكسسوارات</h2>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة اكسسوار</h1>
                <button type="button " class="btn-close mx-1" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{route('accessorie.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">اسم اكسسوار :</label>
                    <input type="text" class="form-control" id="recipient-name" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">وصف اكسسوار :</label>
                    <textarea class="form-control" id="message-text" name="description"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">صورة اكسسوار :</label>
                    <input type="file" name="path_image">
                  </div>
                  
                  
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">السعر :</label>
                    <input type="text" class="form-control" id="recipient-name" name="price">
                  </div>
                  
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">المميزة :</label>
                    <td class="px-5 border">
                      <select name="featured" value="Yes">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                    </td>          
                  </div>
                  
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                  <button type="submit" class="btn btn-primary" name="submit">اضافة</button>
                </div>
              </form>
              
            </div>
          </div>
        </div>
        <div class="">
          {{-- <table class="table">
            <thead class="text-center">
              <tr>
                <th class="border" scope="col">الرقم</th>
                <th class="border" scope="col">اسم الاكسسوار</th>
                <th class="border" scope="col">وصف الاكسسوار</th>
                <th class="border" scope="col">صورة الاكسسوار</th>
                <th class="border" scope="col">سعر الاكسسوار</th>      
                <th class="border" scope="col">المميزة</th>      
                <th class="border" scope="col">التعديل</th>
                <th class="border" scope="col">الحذف</th>
              </tr>
            </thead>
            <tbody class="">
              @foreach ($accessorie as $accessories)
              <tr>
                <td class="px-5 border">{{ $accessories-> id }}</td>
                <td class="px-5 border">{{ $accessories-> name }}</td>
                <td class="px-5 border">{{ $accessories-> description }}</td>
                <td class="px-5 border">
                  <img src="{{ asset('images/accessories/'.$accessories-> path_image)}}" width="70px" height="70px" alt="sameh"/>
                </td>
                <td class="px-5 border">{{ $accessories-> price }}</td>
                @if ($accessories-> featured == '1')
                <td class="px-5 border fs-1">✅</td>
                @else
                <td class="px-5 border fs-1">❌</td>         
                @endif
                <td class="px-5 border"><a href="{{ route('accessorie.edit',$accessories->id) }}" class="btn btn-warning ">تعديل</a></td>
                <td class="px-5 border">
                  <form action="{{ route('accessorie.destroy',$accessories->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger d-flex align-items-center">حذف</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
 --}}


 <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
														
														<th class="text-end min-w-100px">الرقم</th>
														<th class="text-end min-w-100px">اسم</th>
														<th class="text-end min-w-100px">الوصف</th>
														<th class="text-end min-w-70px">الصورة</th>
														<th class="text-end min-w-100px">السعر</th>
														<th class="text-end min-w-100px">المميزة</th>
														<th class="text-end min-w-70px">الآحداث</th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-semibold text-gray-600 ">
                                        @foreach ($accessorie as $accessories)

													<!--begin::Table row-->
													<tr class="align-middle">
														<!--begin::Checkbox-->
														
														<!--end::Checkbox-->
														<!--begin::Category=-->
														
														<!--end::Category=-->
														<!--begin::SKU=-->
														<td class="text-end pe-0">
															<span class="fw-bold">{{ $accessories-> id }}</span>
														</td>
														<!--end::SKU=-->
														<!--begin::Qty=-->
														<td class="text-end pe-0" data-order="16">
															<span class="fw-bold ms-3">{{ $accessories-> name }}</span>
														</td>
														<!--end::Qty=-->
														<!--begin::Price=-->
														<td class="text-end pe-0">{{ $accessories-> description }}</td>
														<!--end::Price=-->
														<!--begin::Rating-->
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-start">
																<div class="rating-label checked">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
																	<span class="svg-icon svg-icon-2">
										                  <img src="{{ asset('images/accessories/'.$accessories-> path_image)}}" width="70px" height="70px" alt="sameh"/>
																	</span>
																	<!--end::Svg Icon-->
																</div>
														
														</td>
														<!--end::Rating-->
														<!--begin::Status=-->
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															{{ $accessories-> price }}
															<!--end::Badges-->
														</td>
															 @if ($accessories-> featured == '1')

														<td class="text-end pe-0" data-order="Scheduled">✅</td>
															<!--begin::Badges-->
                              
                                @else
                               <td class="text-end pe-0" data-order="Scheduled">❌</td>

                                  
                                @endif
															<!--end::Badges-->
														</td>
														<!--end::Status=-->
														<!--begin::Action=-->
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('accessorie.edit',$accessories->id) }}" class="menu-link px-3">تعديل</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->

                                <form action="{{ route('accessorie.destroy',$accessories->id) }}" method="post" style="margin-right: 20%;">
                                  @method('DELETE')
                                  @csrf
                                  <div class="menu-item px-3 m-0 ">
																	<button type="submit" href="{{ route('accessorie.destroy',$accessories->id) }}" class="menu-link px-3">حذف</button>
                                  </div>
                                </form>
																
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
														<!--end::Action=-->
													</tr>
													<!--end::Table row-->
													<!--begin::Table row-->
												@endforeach
												</tbody>
												<!--end::Table body-->
											</table>


        </div>
        
        
      </div>
        
        @include('layouts.footerDash')
        