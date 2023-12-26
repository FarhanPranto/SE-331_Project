@extends('layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
      <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
          <h4 class="text-white mb-4 mt-5 mt-lg-0">DIU Mou Management</h4>
          <h1 class="display-3 font-weight-bold text-white">
            MOU Management
          </h1>
          <p class="text-white mb-4">
          Daffodil International University is a private research university 
          located in Daffodil Smart City, Birulia, Savar, Dhaka, Bangladesh. 
          It was established on 24 January 2002 under the Private University Act of 1992.
          The 2023 QS Asian University Rankings placed DIU between 351st and 
          400th among Asian universities and 5th among Bangladeshi universities.
          DIU has been ranked within the top 400 universities in the Times Higher
          Education Impact Rankings 2022.[4] DIU is the first university in
          Bangladesh to have signed the UN's Commitment to Sustainable Practices
          of Higher Education Institutions.[5] According to the SCOPUS indexed 
          research publications in 2022, Daffodil International University has 
          been positioned 2nd among all universities and 1st among all private 
          universities in Bangladesh.
          </p>
          <a href="" class="btn btn-secondary mt-1 py-3 px-5">Learn More</a>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <img class="img-fluid mt-5" src="{{('front/img/diu.png')}}" alt="" />
        </div>
      </div>
    </div>

    <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">MOU</span>
          </p>
          <h1 class="mb-4">List Of MOU</h1>
        </div>


    <div class="row p-0 p-2">
      @foreach($data as $data)
      <div class="col-12 shadow-sm bg-white p-2 d-flex mb-2">
        <div class="image">
          <img src="{{'upload/blog/' .$data->image_file }}"height="100" width="100p">
        </div>
        <div>
          <p> {{ $data-> title}}</p>
          <p>{{ $data-> created_at}}</p>
        </div>


      </div>
      @endforeach
    </div>
    <!-- Header End -->

    <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Category</span>
          </p>
          <h1 class="mb-4">List Of Category</h1>
        </div>


    <div class="row p-0 p-2">
      @foreach($datac as $datac)
      <div class="col-12 shadow-sm bg-white p-2 d-flex mb-2">
        <div>
          <p> {{ $data-> title}}</p>
          <p>{{ $data-> created_at}}</p>
        </div>
      </div>
      @endforeach
    </div>




    @endsection

 

