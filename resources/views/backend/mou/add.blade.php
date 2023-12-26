@extends('backend.layouts.app')

@section('style')
@endsection
  
@section('content')

<section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New MOU</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Title*</label>
                  <input type="text" class="form-control" value="{{ old('title')}}" name="title" required id="inputNanme4">
                  <div style="color:red">{{ $errors->first('title') }}</div>

                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Category*</label>
                  <select class="form-control" name="category_id">
                    <option value="">Select Category</option>
                    @foreach($getCategory as $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Image *</label>
                  <input type="file" class="form-control" value="{{ old('title')}}" name="image_file" required id="inputNanme4">
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Description</label>
                  <textarea class="form-control tinymce-editor"name="description"></textarea>
                  <div style="color:red">{{ $errors->first('description') }}
                </div>

                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Publish</label>
                  <select class="form-control" name="status">
                    <option {{(old('status')==1)?'selected':''}} value="1">Yes</option>
                    <option {{(old('status')==1)?'selected':''}} value="0">No</option>
                  </select>
                </div>
            
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

                
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection

@section('script')
<script src="{{ url('assets/vendor/tinymce/tinymce.min.js') }}"></script>

@endsection


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 