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
            <h4 class="fw-semibold mb-8">Fiche de création</h4>
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
                <section>
                <fieldset class="b-radius">
                  <legend>Opération et acteurs</legend><hr>
                  <div class="row p-2">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="firstName1">Opération :</label>
                        <input type="text" required class="form-control" id="operation" name="operation" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="lastName1">Acteurs :</label>
                        <input type="text" required class="form-control" id="acteur" name="acteur" />
                      </div>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="b-radius mt-3">
                    <legend>Identification de l'objet</legend><hr>
                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="emailAddress1">Nature de l'objet :</label>
                            <input type="text" required class="form-control" id="nature" name="nature" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phoneNumber1">Dénomination officielle :</label>
                            <input type="text" required class="form-control" id="denominationOff" name="denominationOff" />
                        </div>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="emailAddress1">Dénomination populaire :</label>
                            <input type="text" required class="form-control" id="denominationPop" name="denominationPop" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phoneNumber1">Autres dénomination :</label>
                            <input type="text" class="form-control" id="autresDenomination" name="autresDenomination" />
                        </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="b-radius mt-3 mb-3">
                    <legend>Localisation de l'objet</legend><hr>
                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="departement">Département :</label>
                            <select required class="form-select" onchange="getCommune()" id="departement" name="departement">
                                <option value="">Selectionner le département</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="commune">Commune :</label>
                            <select required class="form-select" onchange="getArrondissement()" id="commune" name="commune">

                            </select>
                        </div>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location1">Arrondissement :</label>
                            <select required class="form-select" id="arrondissement" name="arrondissement">
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jobTitle1">Quartier/Village :</label>
                            <input required type="text" class="form-control" id="quartier" name="quartier" />
                        </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12">
                        <div class="mb-3">
                            <label for="location1">Adresse complète (n° rue) indications complémentaires :</label>
                            <input required type="text" class="form-control" id="adresse" name="adresse" />
                        </div>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location1">Latitude :</label>
                            <input required type="number" class="form-control" id="latitude" name="latitude" />
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location1">Longitude :</label>
                            <input required type="number" class="form-control" id="longitude" name="longitude" />
                        </div>
                        </div>
                    </div>
                </fieldset>
                </section>
                <!-- Step 2 -->
                <h6>Etape 2</h6>
                <section>

                <fieldset class="b-radius mt-3">
                    <legend>Droit et propriété</legend><hr>
                    <div class="row p-2">
                        <div class="col-md-6 ">
                        <label for="location1">Propriété publique :</label>
                        <div class="col-md-12 pt-1 b-radius ">
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppub" id="" value="Gouvernementale"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Gouvernement</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppub" id="" value="Communautaire"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Communautaire</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppub" id="" value="Departementale"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Departement</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppub" id="" value="Autrepub"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Autres</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppub" id="" value="Municipale"
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
                                <input type="checkbox" name="proppriv" id="" value="Familiale"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Familiale</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppriv" id="" value="Individuel"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Individuel</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppriv" id="" value="Associative"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Associative</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppriv" id="" value="Communautaire"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Communautaire</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                            <div class="row p-2">
                            <div class="col-md-6">
                                <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="proppriv" id="" value="Autrepriv"
                                    class="custom-control-input">
                                <span class="custom-control-indicator">Autres</span>
                                <span class="custom-control-description"></span>
                                </label>
                            </div>
                            </div>
                        </div>
                        </div>
                        <h6 class="pt-4 pb-3">Identification propriétaire / référent</h6>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jobTitle1">Nom/prenoms :</label>
                            <input required type="text" class="form-control" id="nomPrenom" name="nomPrenom" />
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="videoUrl1">Lien avec l'objet :</label>
                            <input required type="text" class="form-control" id="lien" name="lien" />
                        </div>
                        </div>

                        <div class="col-md-12">
                        <div class="mb-3">
                            <label for="videoUrl1">Résidence :</label>
                            <input required type="text" class="form-control" id="residence" name="residence" />
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="videoUrl1">Contact 1 :</label>
                            <input required type="text" class="form-control" id="contact1" name="contact1" />
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label for="videoUrl1">Contact 2 :</label>
                            <input type="text" class="form-control" id="contact2" name="contact2" />
                        </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="b-radius mt-3 mb-3">
                    <legend>Qualification patrimoniale</legend><hr>
                    <div class="row p-2">
                      <div class="col-md-4">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="bientype" id="" value="Bien immeuble"
                              class="custom-control-input">
                            <span class="custom-control-indicator">Bien immeuble :</span>
                        </label>
                        <div class="col-md-12 pt-1 b-radius">

                          <div class="col-md-12">
                            <label class="custom-control custom-checkbox">
                              <input type="checkbox" name="bienimmeuble" id="" value="Monument"
                                class="custom-control-input">
                              <span class="custom-control-indicator">Monument</span>
                              <span class="custom-control-description"></span>
                            </label>
                          </div>
                          <div class="col-md-12">
                            <label class="custom-control custom-checkbox">
                              <input type="checkbox" name="bienimmeuble" id="" value="Ensemble"
                                class="custom-control-input">
                              <span class="custom-control-indicator">Ensemble</span>
                              <span class="custom-control-description"></span>
                            </label>
                          </div>
                          <div class="col-md-12">
                            <label class="custom-control custom-checkbox">
                              <input type="checkbox" name="bienimmeuble" id="" value="Site"
                                class="custom-control-input">
                              <span class="custom-control-indicator">Site</span>
                              <span class="custom-control-description"></span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="bientype" id="" value="Biens meubles associés"
                              class="custom-control-input">
                            <span class="custom-control-indicator">Biens meubles associés :</span>
                        </label>
                        <div class="col-md-12 pt-1 b-radius">
                          <div class="col-md-12">

                            <label for="location1">Description :</label>
                            <input type="text" class="form-control" id="jobTitle1" name="bienmeubleassocieDescription" />

                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" name="bientype" id="" value="Biens immatériels associés"
                              class="custom-control-input">
                            <span class="custom-control-indicator">Biens immatériels associés :</span>
                        </label>
                        <div class="col-md-12 pt-1 b-radius">
                          <div class="col-md-12">

                            <label for="location1">Description :</label>
                            <input type="text" class="form-control" id="jobTitle1"  name="bienimmaterielassocieDescription"/>

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
                    <fieldset class="b-radius mt-3 mb-3 col-md-6">
                        <legend>Conservation</legend><hr>
                        <div class="p-2">
                            <div class="col-md-12 mb-4">
                                <label for="location1">Etat général :</label>
                                <div class="col-md-12 pt-1 b-radius">
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="etatgene" id="" value="Bonetat"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Bon état</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="etatgene" id="" value="Ruine"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Ruine</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="etatgene" id="" value="Degradationavance"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Dégradation avancée</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="etatgene" id="" value="Degradationentame"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Dégradation entamée</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="etatgene" id="" value="Demoli"
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
                                        <input type="checkbox" name="modif" id="" value="Nonmodifie"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Non modifié</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="modif" id="" value="Modificationlegere"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Modification légère</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="modif" id="" value="Modificationprof"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Modification profonde</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="modif" id="" value="Modificationreussie"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Modification réussie</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="modif" id="" value="Modificationdegra"
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
                                        <input type="checkbox" name="occup" id="" value="Residence"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Résidence</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="occup" id="" value="Commerce"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Commerce</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="occup" id="" value="Bureau"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Bureau</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="occup" id="" value="Abandonne"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Abandonné</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="occup" id="" value="Squatte"
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
                    <fieldset class="b-radius mt-3 mb-3 col-md-6">
                        <legend>Protection</legend><hr>
                        <div class="p-2">
                            <div class="col-md-12 mb-4">
                                <label for="location1">Protection actuelle :</label>
                                <div class="col-md-12 pt-1 b-radius">
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protact" id="" value="Gouvernementale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Gouvernementale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protact" id="" value="Ministerielle"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Ministérielle</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protact" id="" value="Prefectorale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Préfectorale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protact" id="" value="Municipale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Municipale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protact" id="" value="Aucune"
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
                                        <input type="checkbox" name="protsug" id="" value="Gouvernementale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Gouvernementale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protsug" id="" value="Ministerielle"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Ministérielle</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protsug" id="" value="Prefectorale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Préfectorale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protsug" id="" value="Municipale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Municipale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="protsug" id="" value="Aucune"
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
                                        <input type="checkbox" name="classesug" id="" value="Mondiale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Mondiale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="classesug" id="" value="Nationale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Nationale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="classesug" id="" value="Departementale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Départementale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="classesug" id="" value="Municipale"
                                        class="custom-control-input">
                                        <span class="custom-control-indicator">Municipale</span>
                                        <span class="custom-control-description"></span>
                                    </label>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="classesug" id="" value="Aucune"
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
                    <fieldset class="b-radius mt-3">
                        <legend>Syntheses historique et architecturale</legend><hr>
                        <div class="row p-2">
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="behName1">Synthèse historique :</label>
                                <textarea required name="synthese" id="synthese" rows="4" class="form-control"></textarea>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="behName1">Diagnostic architectural :</label>
                                <textarea required name="diagnostic" id="diagnostic" rows="4" class="form-control"></textarea>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Date d'inventaire :</label>
                                <input required type="date" class="form-control" id="dateInvent" name="dateInvent" />
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Inventoriste du patrimoine :</label>
                                <input required type="text" class="form-control" id="inventoriste" name="inventoriste" />
                            </div>
                            </div>

                            <div class="col-md-12">
                            <div class="mb-3">

                                <label for="location1">Institution demandeuse :</label>
                                <input required type="text" class="form-control" id="institution" name="institution" />
                            </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="b-radius mt-3 mb-3">
                        <legend>Photos</legend><hr>
                        <div class="row p-2">
                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Photos entiers :</label>
                                <input required type="file" multiple class="form-control" id="photosEntier" name="photosEntier[]" />
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Photos détails :</label>
                                <input required type="file" multiple class="form-control" id="photosDetails" name="photosDetails[]" />
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Photos aériennes objet :</label>
                                <input required type="file" multiple class="form-control" id="photosAerObj" name="photosAerObj[]" />
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">

                                <label for="location1">Photos aériennes ilot :</label>
                                <input required type="file" multiple class="form-control" id="photosAerIlot" name="photosAerIlot[]" />
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
