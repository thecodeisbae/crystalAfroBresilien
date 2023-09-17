@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center gap-4 mb-4">
          <div class="position-relative">
            <div class="border border-2 border-primary rounded-circle">
              <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle m-1" alt="user1" width="60" />
            </div>

          </div>
          <div>
            <h3 class="fw-semibold">Bonjour, <span class="text-dark">{{session()->get('user')->prenoms}}</span>
            </h3>
            <span>Salutations, et bon travail - <span id="showCurrentDate"></span></span>
          </div>
        </div>
        <div class="card">
          {{-- <div class="card-body">
            <div class="row pb-4">
              <div class="col-lg-4 d-flex align-items-stretch">
                <div class="d-flex flex-column align-items-start w-100">
                  <div class="text-start">
                    <h5 class="card-title fw-semibold">Financial Income</h5>
                  </div>
                  <div class="mt-lg-auto mt-4 mb-4">
                    <span class="text-dark">Total Revenue <span class="text-success">+9.78%</span>
                    </span>
                    <h2 class="mt-2 fw-bold">$8,240,00</h2>
                    <span>Increased 15% from last month</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 d-flex align-items-stretch">
                <div class="w-100">
                  <div class="d-md-flex align-items-start gap-3">
                    <div>
                      <h6 class="mb-0">Product Condition</h6>
                      <div class="d-flex align-items-center gap-3">
                        <h2 class="mt-2 fw-bold">75%</h2>
                        <span class="badge bg-primary  px-2 py-1 d-flex align-items-center">
                          <i class="ti ti-chevron-down fs-4"></i>2.8% </span>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div id="financial"></div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="border-top">
            <div class="row gx-0">
              <div class="col-md-4 border-end">
                <div class="p-4 py-3 py-md-4">
                  <p class="fs-4 text-danger mb-0">
                    <span class="text-danger">
                      <span class="round-8 bg-danger rounded-circle d-inline-block me-1"></span>
                    </span>Fiches
                  </p>
                  <h3 class=" mt-2 mb-0">3</h3>
                </div>
              </div>
              <div class="col-md-4 border-end">
                <div class="p-4 py-3 py-md-4">
                  <p class="fs-4 text-primary mb-0">
                    <span class="text-primary">
                      <span class="round-8 bg-primary rounded-circle d-inline-block me-1"></span>
                    </span>Impressions
                  </p>
                  <h3 class=" mt-2 mb-0">15</h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="p-4 py-3 py-md-4">
                  <p class="fs-4 text-info mb-0">
                    <span class="text-info">
                      <span class="round-8 bg-info rounded-circle d-inline-block me-1"></span>
                    </span>Utilisateurs
                  </p>
                  <h3 class=" mt-2 mb-0">560</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container-fluid over -->
  </div>
@endsection
