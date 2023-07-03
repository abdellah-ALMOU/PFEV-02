@extends('layouts.blankLayout')







<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
        <a  type="button" class="btn-close" disabled aria-label="Close"  style="background-color: blue ; text-align: right; " href="{{route('index')}}"  ></a>

          <div class="row g-0">
              
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">

              
              @if((session()->get('user')) )

              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />

              <h3>{{session()->get('user') ->name }}</h3>
              <h4>{{session()->get('user') ->lastname }}</h4>
              <p>Web Designer</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6> 
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">{{session()->get('user') ->login }}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">{{session()->get('user') ->phone }}</p>
                  </div>
                </div>
            

                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>genre</h6>
                    <p class="text-muted">{{session()->get('user') ->genre }}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6> CIN</h6>
                    <p class="text-muted">{{session()->get('user') ->cin }}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6> adresse</h6>
                    <p class="text-muted">{{session()->get('user') ->	address }}</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
