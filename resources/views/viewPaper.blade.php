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
            <h4 class="fw-semibold mb-8">Voir fiche de création</h4>
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
              <img src="{{asset('dist/images/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="row">

        <div class="col-12">
          <!-- --------------------- start Custom Design Example ---------------- -->
          <div class="card">
            <div class="card-body wizard-content">
              <h4 class="card-title mb-0">Formulaire</h4>
              <h6 class="card-subtitle mb-3"></h6>
              <form action="/savePaper" method="POST" enctype="multipart/form-data" class="validation-wizard wizard-circle mt-5 wizard clearfix" novalidate="novalidate">
                @csrf
                <!-- Step 1 -->
                <h6>Etape 1</h6>
                <section class="">
                <fieldset class="b-radius bg-light-success">
                  <legend>Opération et acteurs</legend><hr>
                  <div class="row p-2">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="firstName1">Opération :</label>
                        <input type="text" value="Crystal Afro-brésilien" readonly required class="form-control" id="operation" name="operation" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="lastName1">Acteurs :</label>
                        <input type="text" value="Acteur" readonly required class="form-control" id="acteur" name="acteur" />
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="b-radius mt-3 bg-light-success ">
                    <legend>Identification de l'objet</legend><hr>
                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="emailAddress1">Nature de l'objet :</label>
                            <input type="text" value="{{$result->Nature}}" readonly required class="form-control" id="nature" name="nature" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phoneNumber1">Dénomination officielle :</label>
                            <input type="text" value="{{$result->Denominationof}}" readonly required class="form-control" id="denominationOff" name="denominationOff" />
                        </div>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="emailAddress1">Dénomination populaire :</label>
                            <input type="text" value="{{$result->Denominationpop}}" readonly required class="form-control" id="denominationPop" name="denominationPop" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phoneNumber1">Autres dénomination :</label>
                            <input type="text" value="{{$result->Autredenomination}}" class="form-control" id="autresDenomination" name="autresDenomination" />
                        </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="b-radius mt-3 mb-3 bg-light-success">
                    <legend>Localisation de l'objet</legend><hr>
                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="departement">Département :</label>
                            <select disabled required class="form-select" id="departement" name="departement">
                                <option value="">Selectionner le département</option>
                                @foreach ($departements as $dep)
                                    <option value="{{$dep->Codedepartement}}" {{$dep->Codedepartement == $result->Codedepartement ? 'selected' : '' }}>{{$dep->Departement}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="commune">Commune :</label>
                            <select disabled required class="form-select" id="commune" name="commune">
                                @foreach ($communes as $com)
                                    <option value="{{$com->Codecommune}}" {{$com->Codecommune == $result->commune ? 'selected' : '' }}>{{$com->Commune}}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location1">Arrondissement :</label>
                            <select disabled required class="form-select" id="arrondissement" name="arrondissement">
                                @foreach ($arrondissements as $arr)
                                    <option value="{{$arr->Codearrondis}}" {{$arr->Codearrondis == $result->arrondissement ? 'selected' : '' }}>{{$arr->Arrondissement}}</option>
                                @endforeach 
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jobTitle1">Quartier/Village :</label>
                            <input value="{{$result->Localite}}" readonly required type="text" class="form-control" id="quartier" name="quartier" />
                        </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12">
                        <div class="mb-3">
                            <label for="location1">Adresse complète (n° rue) indications complémentaires :</label>
                            <input value="{{$result->Adresse}}" readonly required type="text" class="form-control" id="adresse" name="adresse" />
                        </div>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location1">Latitude :</label>
                            <input readonly value="{{$result->Latitude}}"  type="number" class="form-control" id="latitude" name="latitude" />
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location1">Longitude :</label>
                            <input readonly value="{{$result->Longitude}}"  type="number" class="form-control" id="longitude" name="longitude" />
                        </div>
                        </div>
                    </div>
                </fieldset>
                </section>
                <!-- Step 2 -->
                <h6>Etape 2</h6>
                <section>

                <fieldset class="b-radius mt-3 bg-dark text-light">
                    <legend>Droit et propriété</legend><hr>
                    <div class="row p-2">
                        <div class="col-md-6 ">
                        <label for="location1">Propriété publique :</label>
                        <div class="col-md-12 pt-1 b-radius ">
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->proppubGouvernementale ? 'checked' : '' }} type="checkbox" name="proppub" id="" value="Gouvernementale"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Gouvernement</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->proppubCommunautaire ? 'checked' : '' }} type="checkbox" name="proppub" id="" value="Communautaire"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Communautaire</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->proppubDepartementale ? 'checked' : '' }} type="checkbox" name="proppub" id="" value="Departementale"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Departement</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->proppubAutrepub ? 'checked' : '' }} type="checkbox" name="proppub" id="" value="Autrepub"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Autres</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->proppubMunicipale ? 'checked' : '' }} type="checkbox" name="proppub" id="" value="Municipale"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Municipale</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <label for="location1">Propriété privée :</label>
                        <div class="col-md-12 pt-1 b-radius">
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->propprivFamiliale ? 'checked' : '' }} type="checkbox" name="proppriv" id="" value="Familiale"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Familiale</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->propprivIndividuelle ? 'checked' : '' }} type="checkbox" name="proppriv" id="" value="Individuelle"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Individuel</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->propprivAssociative ? 'checked' : '' }} type="checkbox" name="proppriv" id="" value="Associative"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Associative</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->propprivCommunautaire ? 'checked' : '' }} type="checkbox" name="proppriv" id="" value="Communautaire"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Communautaire</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input onclick="return false;" {{$result->propprivAutrepriv ? 'checked' : '' }} type="checkbox" name="proppriv" id="" value="Autrepriv"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Autres</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                        </div>
                        </div>
                        <h6 class="pt-4 pb-3 text-light">Identification propriétaire / référent</h6>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jobTitle1">Nom/prenoms :</label>
                            <input readonly required type="text" value="{{$result->Nompren}}" class="form-control text-light" id="nomPrenom" name="nomPrenom" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="videoUrl1">Lien avec l'objet :</label>
                            <input readonly required type="text" value="{{$result->Lienobj}}" class="form-control text-light" id="lien" name="lien" />
                        </div>
                        </div>

                        <div class="col-md-12">
                        <div class="mb-3">
                            <label for="videoUrl1">Résidence :</label>
                            <input readonly required type="text" value="{{$result->propResidence}}" class="form-control text-light" id="residence" name="residence" />
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="videoUrl1">Contact 1 :</label>
                            <input readonly required type="text" value="{{$result->Contact1}}" class="form-control text-light" id="contact1" name="contact1" />
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="videoUrl1">Contact 2 :</label>
                            <input type="text" class="form-control text-light" value="{{$result->Contact2}}" id="contact2 " name="contact2" />
                        </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="b-radius mt-3 mb-3 bg-dark text-light">
                    <legend>Qualification patrimoniale</legend><hr>
                    <div class="row p-2">
                      <div class="col-md-4">
                        <label class="custom-control custom-checkbox">
                            <input onclick="return false;" {{$result->Codebienimmeuble ? 'checked' : '' }} type="checkbox" name="bientype" id="" value="Bien immeuble"
                              class="custom-control-input">
                            <span class="custom-control-indicator">Bien immeuble :</span>
                        </label>
                        <div class="col-md-12 pt-1 b-radius">

                          <div class="col-md-12">
                            <label class="custom-control custom-checkbox">
                              <input onclick="return false;" {{$result->Monument ? 'checked' : '' }} type="checkbox" name="bienimmeuble" id="" value="Monument"
                                class="custom-control-input">
                              <span class="custom-control-indicator">Monument</span>
                              <span class="custom-control-description"></span>
                            </label>
                          </div>
                          <div class="col-md-12">
                            <label class="custom-control custom-checkbox">
                              <input onclick="return false;" {{$result->Ensemble ? 'checked' : '' }} type="checkbox" name="bienimmeuble" id="" value="Ensemble"
                                class="custom-control-input">
                              <span class="custom-control-indicator">Ensemble</span>
                              <span class="custom-control-description"></span>
                            </label>
                          </div>
                          <div class="col-md-12">
                            <label class="custom-control custom-checkbox">
                              <input onclick="return false;" {{$result->Site ? 'checked' : '' }} type="checkbox" name="bienimmeuble" id="" value="Site"
                                class="custom-control-input">
                              <span class="custom-control-indicator">Site</span>
                              <span class="custom-control-description"></span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label class="custom-control custom-checkbox">
                            <input onclick="return false;" {{$result->Cochebienmeuble ? 'checked' : '' }} type="checkbox" name="bientype" id="" value="Biens meubles associés"
                              class="custom-control-input">
                            <span class="custom-control-indicator">Biens meubles associés :</span>
                        </label>
                        <div class="col-md-12 pt-1 b-radius">
                          <div class="col-md-12">

                            <label for="location1">Description :</label>
                            <input readonly type="text" value="{{$result->Descriptionbienmeuble}}" class="form-control text-light" id="jobTitle1" name="bienmeubleassocieDescription" />

                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label class="custom-control custom-checkbox">
                            <input onclick="return false;" {{$result->Cochebienimmat ? 'checked' : '' }} type="checkbox" name="bientype" id="" value="Biens immatériels associés"
                              class="custom-control-input">
                            <span class="custom-control-indicator">Biens immatériels associés :</span>
                        </label>
                        <div class="col-md-12 pt-1 b-radius">
                          <div class="col-md-12">

                            <label for="location1">Description :</label>
                            <input readonly type="text" value="{{$result->Descriptionbienimmat}}" class="form-control text-light" id="jobTitle1"  name="bienimmaterielassocieDescription"/>

                          </div>
                        </div>
                      </div>
                    </div>
                </fieldset>

                </section>
                <!-- Step 3 -->
                <h6>Etape 3</h6>
                <section>
                  <div class="row mb-3">
                    <fieldset class="b-radius mt-3 mb-3 col-md-6 bg-danger text-light">
                        <legend>Conservation</legend><hr>
                        <div class="p-2">
                            <div class="col-md-12 mb-4">
                                <label for="location1">Etat général :</label>
                                <div class="col-md-12 pt-1 b-radius">
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Bonetat ? 'checked' : '' }} type="checkbox" name="etatgene" id="" value="Bonetat"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Bon état</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Ruine ? 'checked' : '' }} type="checkbox" name="etatgene" id="" value="Ruine"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Ruine</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Degradationavance ? 'checked' : '' }} type="checkbox" name="etatgene" id="" value="Degradationavance"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Dégradation avancée</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Degradationentame ? 'checked' : '' }} type="checkbox" name="etatgene" id="" value="Degradationentame"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Dégradation entamée</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Demoli ? 'checked' : '' }} type="checkbox" name="etatgene" id="" value="Demoli"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Démoli</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="location1">Modification :</label>
                                <div class="col-md-12 pt-1 b-radius">
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Nonmodifie ? 'checked' : '' }} type="checkbox" name="modif" id="" value="Nonmodifie"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Non modifié</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Modificationlegere ? 'checked' : '' }} type="checkbox" name="modif" id="" value="Modificationlegere"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Modification légère</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Modificationprof ? 'checked' : '' }} type="checkbox" name="modif" id="" value="Modificationprof"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Modification profonde</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Modificationreussie ? 'checked' : '' }} type="checkbox" name="modif" id="" value="Modificationreussie"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Modification réussie</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Modificationdegra ? 'checked' : '' }} type="checkbox" name="modif" id="" value="Modificationdegra"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Modification dégradante</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="location1">Occupation :</label>
                                <div class="col-md-12 pt-1 b-radius">
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Residence ? 'checked' : '' }} type="checkbox" name="occup" id="" value="Residence"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Résidence</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Commerce ? 'checked' : '' }} type="checkbox" name="occup" id="" value="Commerce"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Commerce</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Bureau ? 'checked' : '' }} type="checkbox" name="occup" id="" value="Bureau"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Bureau</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Abandonoccup ? 'checked' : '' }} type="checkbox" name="occup" id="" value="Abandonoccup"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Abandonné</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->Squatte ? 'checked' : '' }} type="checkbox" name="occup" id="" value="Squatte"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Squatté</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="b-radius mt-3 mb-3 col-md-6 bg-danger text-light">
                        <legend>Protection</legend><hr>
                        <div class="p-2">
                            <div class="col-md-12 mb-4">
                                <label for="location1">Protection actuelle :</label>
                                <div class="col-md-12 pt-1 b-radius">
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->protactGouvernementale ? 'checked' : '' }} type="checkbox" name="protact" id="" value="Gouvernementale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Gouvernementale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->protactMinisterielle ? 'checked' : '' }} type="checkbox" name="protact" id="" value="Ministerielle"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Ministérielle</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->protactPrefectorale ? 'checked' : '' }} type="checkbox" name="protact" id="" value="Prefectorale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Préfectorale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->protactMunicipale ? 'checked' : '' }} type="checkbox" name="protact" id="" value="Municipale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Municipale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->protactAucune ? 'checked' : '' }} type="checkbox" name="protact" id="" value="Aucune"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Aucune</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="location1">Echelle de protection suggérée :</label>
                                <div class="col-md-12 pt-1 b-radius">
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echprotsugGouvernementale ? 'checked' : '' }} type="checkbox" name="protsug" id="" value="Gouvernementale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Gouvernementale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echprotsugMinisterielle ? 'checked' : '' }} type="checkbox" name="protsug" id="" value="Ministerielle"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Ministérielle</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echprotsugPrefectorale ? 'checked' : '' }} type="checkbox" name="protsug" id="" value="Prefectorale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Préfectorale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echprotsugMunicipale ? 'checked' : '' }} type="checkbox" name="protsug" id="" value="Municipale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Municipale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echprotsugAucune ? 'checked' : '' }} type="checkbox" name="protsug" id="" value="Aucune"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Aucune</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="location1">Echelle de classement suggérée :</label>
                                <div class="col-md-12 pt-1 b-radius">
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echclassesugMondiale ? 'checked' : '' }} type="checkbox" name="classesug" id="" value="Mondiale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Mondiale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echclassesugNationale ? 'checked' : '' }} type="checkbox" name="classesug" id="" value="Nationale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Nationale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echclassesugDepartementale ? 'checked' : '' }} type="checkbox" name="classesug" id="" value="Departementale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Départementale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echclassesugMunicipale ? 'checked' : '' }} type="checkbox" name="classesug" id="" value="Municipale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Municipale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input onclick="return false;" {{$result->echclassesugAucune ? 'checked' : '' }} type="checkbox" name="classesug" id="" value="Aucune"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Aucune</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                  </div>
                </section>
                <!-- Step 4 -->
                <h6>Etape 4</h6>
                <section>
                    <fieldset class="b-radius mt-3 bg-success text-light">
                        <legend>Syntheses historique et architecturale</legend><hr>
                        <div class="row p-2">
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="behName1">Synthèse historique :</label>
                                <textarea readonly disabled required name="synthese" id="synthese" rows="4" class="form-control">{{$result->Synthesehisto}}</textarea>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="behName1">Diagnostic architectural :</label>
                                <textarea readonly disabled required name="diagnostic" id="diagnostic" rows="4" class="form-control">{{$result->Diagnosticarch}}</textarea>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Date d'inventaire :</label>
                                <input readonly required type="date" class="form-control text-dark" id="dateInvent" value="{{$result->Dateinvent}}" name="dateInvent" />
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Inventoriste du patrimoine :</label>
                                <input readonly required type="text" class="form-control text-dark" id="inventoriste" value="{{$result->Inventoriste}}" name="inventoriste" />
                            </div>
                            </div>

                            <div class="col-md-12">
                            <div class="mb-3">

                                <label for="location1">Institution demandeuse :</label>
                                <input readonly value="Ambassade de France au Bénin" required type="text" class="form-control text-dark" id="institution" name="institution" />
                            </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="b-radius mt-3 mb-3 bg-success text-light">
                        <legend>Photos</legend><hr>
                        <div class="row p-2">
                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Photos entiers :</label>
                                @if ($imagesEntier)
                                    <ul class="text-dark p-4">
                                        @foreach ($imagesEntier as $picEntier)
                                            <li><a class="text-dark" href="/storage/{{$picEntier->Cheminphoto}}" target="_blank">{{$picEntier->Cheminphoto}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Photos détails :</label>
                                @if ($imagesDetails)
                                    <ul class="text-dark p-4">
                                        @foreach ($imagesDetails as $picDetails)
                                            <li><a class="text-dark" href="/storage/{{$picDetails->Cheminphoto}}" target="_blank">{{$picDetails->Cheminphoto}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Photos aériennes objet :</label>
                                @if ($imagesAerobj)
                                    <ul class="text-dark p-4">
                                        @foreach ($imagesAerobj as $picAerobj)
                                            <li><a class="text-dark" href="/storage/{{$picAerobj->Cheminphoto}}" target="_blank">{{$picAerobj->Cheminphoto}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Photos aériennes ilot :</label>
                                @if ($imagesAerIlot)
                                    <ul class="text-dark p-4">
                                        @foreach ($imagesAerIlot as $picAerilot)
                                            <li><a class="text-dark" href="/storage/{{$picAerilot->Cheminphoto}}" target="_blank">{{$picAerilot->Cheminphoto}}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            </div>
                        </div>
                    </fieldset>
                </section>
              </form>
            </div>
          </div>
          <!-- --------------------- end Custom Design Example ---------------- -->
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

        $(function() {
            $('a[href="#finish"]').remove();
        });

        /*$(function()
        {

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
        }); */
    </script>
@endsection
