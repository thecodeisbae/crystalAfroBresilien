@extends('layout')
@section('content')
<div class="container-fluid">
    <!-- --------------------------------------------------- -->
    <!--  Form Wizard Start -->
    <!-- --------------------------------------------------- -->
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
      <div class="card-body px-4 py-3">
        <div class="row align-items-center">
          <div class="col-9">
            <h4 class="fw-semibold mb-8">Gestion des fiches</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a class="text-muted text-decoration-none" href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Fiche</li>
              </ol>
            </nav>
          </div>
          <div class="col-3">
            <div class="text-center mb-n5">
              <img src="dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="mb-2">
                        <h5 class="mb-0">Liste</h5>
                    </div>
                    <p class="card-subtitle mb-3">
                    </p>
                    <div class="table-responsive p-2">
                        <div id="zero_config_wrapper" class="dataTables_wrapper">
                        <table id="zero_config" class="table border table-striped table-bordered text-nowrap dataTable" aria-describedby="zero_config_info">
                            <thead>
                                <!-- start row -->
                                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 164.675px;">Name</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 271.525px;">Position</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 123.15px;">Office</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50.25px;">Age</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 113.988px;">Start date</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 109.213px;">Salary</th></tr>
                                <!-- end row -->
                            </thead>
                            <tbody>

                            <tr class="odd">
                                    <td class="sorting_1">Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr><tr class="even">
                                    <td class="sorting_1">Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr><tr class="odd">
                                    <td class="sorting_1">Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr><tr class="even">
                                    <td class="sorting_1">Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr><tr class="odd">
                                    <td class="sorting_1">Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr><tr class="even">
                                    <td class="sorting_1">Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr><tr class="odd">
                                    <td class="sorting_1">Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                </tr><tr class="even">
                                    <td class="sorting_1">Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr><tr class="odd">
                                    <td class="sorting_1">Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                </tr><tr class="even">
                                    <td class="sorting_1">Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr></tbody>
                            <tfoot>
                                <!-- start row -->
                                <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                                <!-- end row -->
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------- -->
    <!--  Form Wizard End -->
    <!-- --------------------------------------------------- -->
  </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getCommune()
        {
            $('#arrondissement').html('');
            var data = $('#departement').val();
            $.ajax({
                type: "get",
                url: "/getCommuneAjax",
                data: {data:data},
                success: function (response) {
                   response =JSON.parse(response);
                   var output = '<option value="">Selectionner la commune</option>';
                   response.forEach(element => {
                    output += '<option value="'+element.Codecommune+'">'+element.Commune+'</option>';
                   });
                   $('#commune').html(output)
                }
            });
        }

        function getArrondissement()
        {
            var data = $('#commune').val();
            $.ajax({
                type: "get",
                url: "/getArrondissementAjax",
                data: {data:data},
                success: function (response) {
                   response =JSON.parse(response);
                   var output = '<option value="">Selectionner l\'arrondissement</option>';
                   response.forEach(element => {
                    output += '<option value="'+element.Codearrondis+'">'+element.Arrondissement+'</option>';
                   });
                   $('#arrondissement').html(output)
                }
            });
        }

        function getDepartement()
        {
            $('#arrondissement').html('');
            $('#commune').html('')
            $.ajax({
                type: "get",
                url: "/getDepartementAjax",
                data: {},
                success: function (response) {
                   response =JSON.parse(response);
                   var output = '';
                   response.forEach(element => {
                    output += '<option value="'+element.Codedepartement+'">'+element.Departement+'</option>';
                   });
                   $('#departement').append(output)
                }
            });
        }


        $(function()
        {
            getDepartement();

            $('input[name="proppub"]').click(function() {
                $('input[name="proppub"]').not(this).prop('checked', false);
            });

            $('input[name="proppriv"]').click(function() {
                $('input[name="proppriv"]').not(this).prop('checked', false);
            });

            $('input[name="bienimmeuble"]').click(function() {
                $('input[name="bienimmeuble"]').not(this).prop('checked', false);
            });

            $('input[name="bientype"]').click(function() {
                $('input[name="bientype"]').not(this).prop('checked', false);
            });

            $('input[name="etatgene"]').click(function() {
                $('input[name="etatgene"]').not(this).prop('checked', false);
            });

            $('input[name="modif"]').click(function() {
                $('input[name="modif"]').not(this).prop('checked', false);
            });

            $('input[name="occup"]').click(function() {
                $('input[name="occup"]').not(this).prop('checked', false);
            });

            $('input[name="protact"]').click(function() {
                $('input[name="protact"]').not(this).prop('checked', false);
            });

            $('input[name="protsug"]').click(function() {
                $('input[name="protsug"]').not(this).prop('checked', false);
            });

            $('input[name="classesug"]').click(function() {
                $('input[name="classesug"]').not(this).prop('checked', false);
            });
        });
    </script>
@endsection
