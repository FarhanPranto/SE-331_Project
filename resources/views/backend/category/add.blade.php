@extends('backend.layouts.app')

@section('style')
@endsection
  
@section('content')

<section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Category</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="" method="post">
              {{ csrf_field() }}
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Name*</label>
                  <input type="text" class="form-control" value="{{ old('name')}}" name="name" required id="inputNanme4">
                  <div style="color:red">{{ $errors->first('name') }}</div>

                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Title*</label>
                  <input type="text" class="form-control" value="{{ old('title')}}" name="title" required id="inputNanme4">
                  <div style="color:red">{{ $errors->first('title') }}</div>

                </div>

                <hr>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Meta Title*</label>
                  <input type="text" class="form-control" value="{{ old('meta_title')}}" name="meta_title" required id="inputNanme4">
                  <div style="color:red">{{ $errors->first('title') }}</div>

                  <div class="col-12">
                  <label for="inputNanme4" class="form-label">Meta Description</label>
                  <textarea class="form-control"name="meta_description"></textarea>
                  <div style="color:red">{{ $errors->first('title') }}</div>

                  <div class="col-12">
                  <label for="inputNanme4" class="form-label">Meta Keywords</label>
                  <input type="text" class="form-control" value="{{ old('meta_keywords')}}" name="meta_keywords"  id="inputNanme4">
                  <div style="color:red">{{ $errors->first('title') }}</div>


                </div>


                </hr>
                

                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Status</label>
                  <select class="form-control" name="status">
                    <option {{(old('status')==1)?'selected':''}} value="1">Active</option>
                    <option {{(old('status')==1)?'selected':''}} value="0">Inactive</option>
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
@endsection


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 