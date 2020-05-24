@extends('layout')

@section('content')
    <div class="section pt-lg-5 pb-lg-5">
        <br>
        @include('flash-message')
        <br>

        <h2 class="flaresy-title pt-lg-5">ADMINISTRATION</h2>

        <div class="custom-underlines">
            <div class="line"></div>
            <div class="box"></div>
            <div class="line"></div>
        </div>

        <div class="mr-5 ml-5">
            <div class="row">
                <div class="col-3">
                    <div class="list-group" style="padding-left: 100px;" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action" id="list-newuser-list" data-toggle="list" href="#list-newuser" role="tab" aria-controls="newuser">Créer un utilisateur</a>
                        <a class="list-group-item list-group-item-action" id="list-newprojet-list" data-toggle="list" href="#list-newprojet" role="tab" aria-controls="newprojet">Ajouter un projet à un client</a>
                        <a class="list-group-item list-group-item-action" id="list-newfichier-list" data-toggle="list" href="#list-newfichier" role="tab" aria-controls="newfichier">Ajouter un fichier à un projet</a>
                        <a class="list-group-item list-group-item-action" id="list-newreseau-list" data-toggle="list" href="#list-newreseau" role="tab" aria-controls="newreseau">Ajouter un réseau social</a>
                        <a class="list-group-item list-group-item-action" id="list-newservice-list" data-toggle="list" href="#list-newservice" role="tab" aria-controls="newservice">Créer un service</a>
                        <a class="list-group-item list-group-item-action" id="list-newprod-list" data-toggle="list" href="#list-newprod" role="tab" aria-controls="newprod">Nouvelle production</a>
                        <a class="list-group-item list-group-item-action" id="list-newcat-list" data-toggle="list" href="#list-newcat" role="tab" aria-controls="newcat">Nouvelle catégorie de production</a>
                        <a class="list-group-item list-group-item-action" id="list-delete-list" data-toggle="list" href="#list-delete" role="tab" aria-controls="delete">Supprimer un élément</a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="list-newuser" role="tabpanel" aria-labelledby="list-newuser-list">
                            @include('administration.new-user')
                        </div>
                        <div class="tab-pane fade" id="list-newprojet" role="tabpanel" aria-labelledby="list-newprojet-list">
                            @include('administration.new-projet')
                        </div>
                        <div class="tab-pane fade" id="list-newfichier" role="tabpanel" aria-labelledby="list-newfichier-list">
                            @include('administration.new-fichier')
                        </div>
                        <div class="tab-pane fade" id="list-newreseau" role="tabpanel" aria-labelledby="list-newreseau-list">
                            @include('administration.new-reseau')
                        </div>
                        <div class="tab-pane fade" id="list-newservice" role="tabpanel" aria-labelledby="list-newservice-list">
                            @include('administration.new-service')
                        </div>
                        <div class="tab-pane fade" id="list-newprod" role="tabpanel" aria-labelledby="list-newprod-list">
                            @include('administration.new-prod')
                        </div>
                        <div class="tab-pane fade" id="list-newcat" role="tabpanel" aria-labelledby="list-newcat-list">
                            @include('administration.new-cat')
                        </div>
                        <div class="tab-pane fade" id="list-delete" role="tabpanel" aria-labelledby="list-delete-list">
                            @include('administration.delete')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
