@extends('master')

@section('content')
<section class="content">
 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="/uploads">
                	{{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                  <div class="form-group">
                  <label for="title">Keywords</label>
                  <input type="text" class="form-control" id="title" name="keywords">
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Keyword</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div> --}}
                <div class="form-group">
                  <label for="uploadFile">ไฟล์</label>
                  <input type="file" id="uploadFile" name="photo">

                  <p class="help-block">เลือกไฟล์เพื่ออัพโหลด</p>
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
</section> 
@endsection

