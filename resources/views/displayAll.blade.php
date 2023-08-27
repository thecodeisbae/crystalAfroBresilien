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
                        <a
                        id="filter"
                            class="btn btn-primary mb-2 btn-lg text-light px-4 h2"
                            data-bs-toggle="collapse"
                            href="#collapseExample"
                            role="button"
                            aria-expanded="false"
                            aria-controls="collapseExample"
                        >
                        Voir les options de filtres
                        </a>
                        <div class="collapse" id="collapseExample">
                            <section class="">


                                <fieldset class="row b-radius mt-3 mb-3 bg-light-success">
                                    <legend>Localisation de l'objet</legend>
                                    <hr>
                                    <div class="row p-2">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="departement">Département :</label>
                                                <select required class="form-select" onchange="getCommune()" id="departement"
                                                    name="departement">
                                                    <option value="">Selectionner le département</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="commune">Commune :</label>
                                                <select required class="form-select" onchange="getArrondissement()"
                                                    id="commune" name="commune">

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
                                                <input required type="text" class="form-control" id="quartier"
                                                    name="quartier" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row p-2">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="location1">Latitude :</label>
                                                <input required type="number" class="form-control" id="latitude"
                                                    name="latitude" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="location1">Longitude :</label>
                                                <input required type="number" class="form-control" id="longitude"
                                                    name="longitude" />
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="row b-radius mt-3 bg-dark text-light">
                                    <legend>Droit et propriété</legend>
                                    <hr>
                                    <div class="row p-2">
                                        <div class="col-md-6 ">
                                            <label for="location1">Propriété publique :</label>
                                            <div class="col-md-12 pt-1 b-radius ">
                                                <div class="row p-2">
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppub" id=""
                                                                value="Gouvernementale" class="custom-control-input">
                                                            <span class="custom-control-indicator">Gouvernement</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppub" id=""
                                                                value="Communautaire" class="custom-control-input">
                                                            <span class="custom-control-indicator">Communautaire</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row p-2">
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppub" id=""
                                                                value="Departementale" class="custom-control-input">
                                                            <span class="custom-control-indicator">Departement</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppub" id=""
                                                                value="Autrepub" class="custom-control-input">
                                                            <span class="custom-control-indicator">Autres</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row p-2">
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppub" id=""
                                                                value="Municipale" class="custom-control-input">
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
                                                            <input type="checkbox" name="proppriv" id=""
                                                                value="Familiale" class="custom-control-input">
                                                            <span class="custom-control-indicator">Familiale</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppriv" id=""
                                                                value="Individuel" class="custom-control-input">
                                                            <span class="custom-control-indicator">Individuel</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row p-2">
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppriv" id=""
                                                                value="Associative" class="custom-control-input">
                                                            <span class="custom-control-indicator">Associative</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppriv" id=""
                                                                value="Communautaire" class="custom-control-input">
                                                            <span class="custom-control-indicator">Communautaire</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row p-2">
                                                    <div class="col-md-6">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="proppriv" id=""
                                                                value="Autrepriv" class="custom-control-input">
                                                            <span class="custom-control-indicator">Autres</span>
                                                            <span class="custom-control-description"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>

                                <fieldset class="row b-radius mt-3 bg-dark text-light">
                                    <legend>Qualification patrimoniale</legend>
                                    <hr>
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
                                                        <input type="checkbox" name="bienimmeuble" id=""
                                                            value="Monument" class="custom-control-input">
                                                        <span class="custom-control-indicator">Monument</span>
                                                        <span class="custom-control-description"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="bienimmeuble" id=""
                                                            value="Ensemble" class="custom-control-input">
                                                        <span class="custom-control-indicator">Ensemble</span>
                                                        <span class="custom-control-description"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="bienimmeuble" id=""
                                                            value="Site" class="custom-control-input">
                                                        <span class="custom-control-indicator">Site</span>
                                                        <span class="custom-control-description"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="bientype" id=""
                                                    value="Biens meubles associés" class="custom-control-input">
                                                <span class="custom-control-indicator">Biens meubles associés</span>
                                            </label>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" name="bientype" id=""
                                                    value="Biens immatériels associés" class="custom-control-input">
                                                <span class="custom-control-indicator">Biens immatériels associés</span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="row mb-3">
                                    <fieldset class="b-radius mt-3 mb-3 col-md-6 bg-danger text-light">
                                        <legend>Conservation</legend>
                                        <hr>
                                        <div class="p-2">
                                            <div class="col-md-12 mb-4">
                                                <label for="location1">Etat général :</label>
                                                <div class="col-md-12 pt-1 b-radius">
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="etatgene" id=""
                                                                    value="Bonetat" class="custom-control-input">
                                                                <span class="custom-control-indicator">Bon état</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="etatgene" id=""
                                                                    value="Ruine" class="custom-control-input">
                                                                <span class="custom-control-indicator">Ruine</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="etatgene" id=""
                                                                    value="Degradationavance" class="custom-control-input">
                                                                <span class="custom-control-indicator">Dégradation
                                                                    avancée</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="etatgene" id=""
                                                                    value="Degradationentame" class="custom-control-input">
                                                                <span class="custom-control-indicator">Dégradation
                                                                    entamée</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="etatgene" id=""
                                                                    value="Demoli" class="custom-control-input">
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
                                                                <input type="checkbox" name="modif" id=""
                                                                    value="Nonmodifie" class="custom-control-input">
                                                                <span class="custom-control-indicator">Non modifié</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="modif" id=""
                                                                    value="Modificationlegere" class="custom-control-input">
                                                                <span class="custom-control-indicator">Modification
                                                                    légère</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="modif" id=""
                                                                    value="Modificationprof" class="custom-control-input">
                                                                <span class="custom-control-indicator">Modification
                                                                    profonde</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="modif" id=""
                                                                    value="Modificationreussie" class="custom-control-input">
                                                                <span class="custom-control-indicator">Modification
                                                                    réussie</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="modif" id=""
                                                                    value="Modificationdegra" class="custom-control-input">
                                                                <span class="custom-control-indicator">Modification
                                                                    dégradante</span>
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
                                                                <input type="checkbox" name="occup" id=""
                                                                    value="Residence" class="custom-control-input">
                                                                <span class="custom-control-indicator">Résidence</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="occup" id=""
                                                                    value="Commerce" class="custom-control-input">
                                                                <span class="custom-control-indicator">Commerce</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="occup" id=""
                                                                    value="Bureau" class="custom-control-input">
                                                                <span class="custom-control-indicator">Bureau</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="occup" id=""
                                                                    value="Abandonne" class="custom-control-input">
                                                                <span class="custom-control-indicator">Abandonné</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="occup" id=""
                                                                    value="Squatte" class="custom-control-input">
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
                                        <legend>Protection</legend>
                                        <hr>
                                        <div class="p-2">
                                            <div class="col-md-12 mb-4">
                                                <label for="location1">Protection actuelle :</label>
                                                <div class="col-md-12 pt-1 b-radius">
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protact" id=""
                                                                    value="Gouvernementale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Gouvernementale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protact" id=""
                                                                    value="Ministerielle" class="custom-control-input">
                                                                <span class="custom-control-indicator">Ministérielle</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protact" id=""
                                                                    value="Prefectorale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Préfectorale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protact" id=""
                                                                    value="Municipale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Municipale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protact" id=""
                                                                    value="Aucune" class="custom-control-input">
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
                                                                <input type="checkbox" name="protsug" id=""
                                                                    value="Gouvernementale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Gouvernementale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protsug" id=""
                                                                    value="Ministerielle" class="custom-control-input">
                                                                <span class="custom-control-indicator">Ministérielle</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protsug" id=""
                                                                    value="Prefectorale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Préfectorale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protsug" id=""
                                                                    value="Municipale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Municipale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="protsug" id=""
                                                                    value="Aucune" class="custom-control-input">
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
                                                                <input type="checkbox" name="classesug" id=""
                                                                    value="Mondiale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Mondiale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="classesug" id=""
                                                                    value="Nationale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Nationale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="classesug" id=""
                                                                    value="Departementale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Départementale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="classesug" id=""
                                                                    value="Municipale" class="custom-control-input">
                                                                <span class="custom-control-indicator">Municipale</span>
                                                                <span class="custom-control-description"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-md-6">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="classesug" id=""
                                                                    value="Aucune" class="custom-control-input">
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
                                <div class="row mb-3 justify-content-evenly">

                                    <button class="btn btn-danger col-md-5 btn-lg" type="button"
                                        onclick="reset()">Réinitialiser</button>
                                    <button class="btn btn-primary col-md-5 btn-lg" id="searchBtn" type="button"
                                        onclick="searchFor()">Rechercher</button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                            <h5 class="mb-0">Liste</h5>
                        </div>
                        <p class="card-subtitle mb-3">
                        </p>
                        <div class="table-responsive p-2" id="showTable">
                            <div id="zero_config_wrapper" class="dataTables_wrapper">
                                <table id="zero_config"
                                    class="table border table-striped table-bordered text-nowrap dataTable"
                                    aria-describedby="zero_config_info">
                                    <thead>
                                        <!-- start row -->
                                        <tr>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                rowspan="1" colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 123.15px;">#</th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="zero_config"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 164.675px;">N° de fiche</th>
                                            <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending"
                                                style="width: 271.525px;">Actions</th>

                                        </tr>
                                        <!-- end row -->
                                    </thead>
                                    <tbody>
                                        @foreach ($fiches as $key => $fiche)
                                            <tr class="odd">
                                                <td class="sorting_1">{{ $key+1 }}</td>
                                                <td>{{$fiche->Codeident}}</td>
                                                <td align="center">
                                                    <a href="/showFiche/{{$fiche->Codeident}}" class="text-primary"><i class="me-2 fa fa-eye"></i></a>
                                                    <a href="/editFiche/{{$fiche->Codeident}}" class="text-success"><i class="me-2 fa fa-edit"></i></a>
                                                    <a href="/deleteFiche/{{$fiche->Codeident}}" onclick="return confirm('Supprimer cette fiche ?');" class="text-danger"><i class="me-2 fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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

        $("#zero_config").DataTable({
                        "language": {
                            "sProcessing": "Traitement en cours ...",
                            "sLengthMenu": "Afficher _MENU_ lignes",
                            "sZeroRecords": "Aucun résultat trouvé",
                            "sEmptyTable": "Aucune donnée disponible",
                            "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
                            "sInfoEmpty": "Aucune ligne affichée",
                            "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
                            "sInfoPostFix": "",
                            "sSearch": "Chercher:",
                            "sUrl": "",
                            "sInfoThousands": ",",
                            "sLoadingRecords": "Chargement...",
                            "oPaginate": {
                            "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
                            },
                            "oAria": {
                            "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
                            }
                        }
                    });

        function getCommune() {
            $('#arrondissement').html('');
            var data = $('#departement').val();
            $.ajax({
                type: "get",
                url: "/getCommuneAjax",
                data: {
                    data: data
                },
                success: function(response) {
                    response = JSON.parse(response);
                    var output = '<option value="">Selectionner la commune</option>';
                    response.forEach(element => {
                        output += '<option value="' + element.Codecommune + '">' + element.Commune +
                            '</option>';
                    });
                    $('#commune').html(output)
                }
            });
        }

        function getArrondissement() {
            var data = $('#commune').val();
            $.ajax({
                type: "get",
                url: "/getArrondissementAjax",
                data: {
                    data: data
                },
                success: function(response) {
                    response = JSON.parse(response);
                    var output = '<option value="">Selectionner l\'arrondissement</option>';
                    response.forEach(element => {
                        output += '<option value="' + element.Codearrondis + '">' + element
                            .Arrondissement + '</option>';
                    });
                    $('#arrondissement').html(output)
                }
            });
        }

        function getDepartement() {
            $('#arrondissement').html('');
            $('#commune').html('')
            $.ajax({
                type: "get",
                url: "/getDepartementAjax",
                data: {},
                success: function(response) {
                    response = JSON.parse(response);
                    var output = '';
                    response.forEach(element => {
                        output += '<option value="' + element.Codedepartement + '">' + element
                            .Departement + '</option>';
                    });
                    $('#departement').append(output)
                }
            });
        }


        function searchFor()
        {
            var departement = $('#departement').val();
            var commune = $('#commune').val();
            var arrondissement = $('#arrondissement').val();
            var quartier = $('#quartier').val();
            var latitude = $('#latitude').val();
            var longitude = $('#longitude').val();
            var proppub = $('input[name="proppub"]:checked').val();
            var proppriv = $('input[name="proppriv"]:checked').val();
            var bientype = $('input[name="bientype"]:checked').val();
            var bienimmeuble = $('input[name="bienimmeuble"]:checked').val();
            var etatgene = $('input[name="etatgene"]:checked').val();
            var modif = $('input[name="modif"]:checked').val();
            var occup = $('input[name="occup"]:checked').val();
            var protact = $('input[name="protact"]:checked').val();
            var protsug = $('input[name="protsug"]:checked').val();
            var classesug = $('input[name="classesug"]:checked').val();

            $('#searchBtn').html('Patienter...');

            $.ajax({
                type: "get",
                url: "/getFichesAjax",
                data:
                {
                    departement:departement,
                    commune:commune,
                    arrondissement:arrondissement,
                    quartier:quartier,
                    latitude:latitude,
                    longitude:longitude,
                    proppub:proppub,
                    proppriv:proppriv,
                    bientype:bientype,
                    bienimmeuble:bienimmeuble,
                    etatgene:etatgene,
                    modif:modif,
                    occup:occup,
                    protact:protact,
                    protsug:protsug,
                    classesug:classesug
                },
                success: function(response) {
                    console.log(response);

                    $('#searchBtn').html('Rechercher');
                    $('#showTable').empty();

                    response = JSON.parse(response);

                    var body = '';

                    response.forEach((element,index) => {
                        body += '<tr class="odd">'+
                                    '<td class="sorting_1">'+(index+1)+'</td>'+
                                    '<td>'+element.Codeident+'</td>'+
                                    '<td align="center">'+
                                        '<a href="/showFiche/'+element.Codeident+'"class="text-primary"><i class=" me-2 fa fa-eye"></i></a>'+
                                        '<a href="/editFiche/'+element.Codeident+'" class="text-success"><i class="me-2 fa fa-edit"></i></a>'+
                                        '<a href="/deleteFiche/'+element.Codeident+'" onclick="return confirm(\'Supprimer cette fiche ?\');" class="text-danger"><i class="me-2 fa fa-trash"></i></a>'+
                                    '</td>'+
                                '</tr>'
                    });

                    var output = '<div id="zero_config_wrapper" class="dataTables_wrapper">'+
                                '<table id="zero_config"'+
                                    'class="table border table-striped table-bordered text-nowrap dataTable"'+
                                    'aria-describedby="zero_config_info">'+
                                   ' <thead>'+
                                        '<tr>'+
                                            '<th class="sorting" tabindex="0" aria-controls="zero_config"'+
                                               ' rowspan="1" colspan="1"'+
                                               ' aria-label="Office: activate to sort column ascending"'+
                                               ' style="width: 123.15px;">#</th>'+
                                            '<th class="sorting sorting_asc" tabindex="0" aria-controls="zero_config"'+
                                              '  rowspan="1" colspan="1" aria-sort="ascending"'+
                                               ' aria-label="Name: activate to sort column descending"'+
                                               ' style="width: 164.675px;">N° de fiche</th>'+
                                           ' <th class="sorting" tabindex="0" aria-controls="zero_config"'+
                                              '  rowspan="1" colspan="1"'+
                                               ' aria-label="Position: activate to sort column ascending"'+
                                               ' style="width: 271.525px;">Actions</th>'+
                                        '</tr>'+
                                    '</thead>'+
                                    '<tbody>'+body+
                                    '</tbody>'+
                                '</table>'+
                            '</div>';


                    $('#showTable').html(output);
                    $('#showTable').get(0).scrollIntoView();

                    $('#filter').addClass('collapsed');
                    $('#collapseExample').removeClass('show');
                    $("#zero_config").DataTable({
                        "language": {
                            "sProcessing": "Traitement en cours ...",
                            "sLengthMenu": "Afficher _MENU_ lignes",
                            "sZeroRecords": "Aucun résultat trouvé",
                            "sEmptyTable": "Aucune donnée disponible",
                            "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
                            "sInfoEmpty": "Aucune ligne affichée",
                            "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
                            "sInfoPostFix": "",
                            "sSearch": "Chercher:",
                            "sUrl": "",
                            "sInfoThousands": ",",
                            "sLoadingRecords": "Chargement...",
                            "oPaginate": {
                            "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
                            },
                            "oAria": {
                            "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
                            }
                        }
                    });
                }
            });
        }

        $(function() {
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
