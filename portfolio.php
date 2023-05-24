<?php
       
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <link rel="icon" type="img/png" href="/assets/logo.png">
  <link rel="stylesheet" href="style.css">
  <title>Portefeuille Sébastien</title>
</head>
<p class="w-100 bg-warning2 text-center rounded-4 pb-4"><a class="display-3 no-link text-decoration-none txt-black" href="index.php">Retour à l'accueil</a></p>
<body class="p-4 m-2 bg-secondary">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
          <!-- Card 1 -->
      <div class="card bg-info2 mb-3" style="box-shadow:4px 4px 8px var(--orange-color);">

        <div class="row">
          <div class="col">
            <img src="/assets/aka_logo.svg" class="card-img-top mx-4 mt-4" style="width:125px;" alt="...">
          </div>
          <div class="col text-light styleul">
          <div class="m-0" data-toggle="collapse" data-target="#myElement" onclick="launchAnimation()">
            <p class="mt-2 text-decoration-underline text-success2 text-space" id="noPointerElement" style="cursor:pointer;">Technologies</p>
            
          <div id="myElement">

</div>

          </div>
          </div>
        </div>

        <div class="card-body hover-bg-success clickable-div click-div txt-black" data-target="#hidden-div" onclick="toggleHiddenDiv()">

          <h5 class="card-title">Aka project</h5>
          <p class="card-text mx-2">Application mobile réalisée dans le cadre du stage de fin de formation de developpeur web et web mobile.
          <ul style="list-style-type:none;">
            <li>
              <h3>01/2023 – 03/2023, GONCALVES Dalida – Aurillac, 15</h3>
            </li>
            <li><h4>Prestataire de formations de développeurs web.</h4></li>
            <p>
            <h5>Stage Full Remote, développement d’une application mobile sous React Native et Firebase.</h5>
            </p>
            <p>
            <ul style="list-style-type:none;">Conception et réalisation d’un agenda culturel communautaire.</ul>
            </p>
          </ul>
          </p>
          <p>

          </p>
         
        </div>

       

        <div id="hidden-div" class="collapse">
          <p class="m-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ea, consequuntur minus accusamus hic at placeat commodi earum, iusto nostrum optio quis beatae velit! Ducimus laborum inventore delectus eius! Vitae!</p>


        </div>
        <div class="bg-info2 p-2">
          <div id="carouselExampleCaptions" class="carousel px-2">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height:325px;">
              <div class="carousel-item active">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal">
                  <img src="/assets/aka_framework.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade dialog modal-dialog-scrollable" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-warning2">Wireframe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_framework.png" class="d-block align-item-center w-50 mx-auto my-auto h-50" style="max-width: 100%; max-height:50%;" alt="Wireframe de l'application">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Wireframe de l'application</h5>
                  <p class="text-warning2">Création du wireframe de l'application...</p>
                </div>

              </div>

              <div class="carousel-item">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal2">
                  <img src="/assets/aka_addConcert.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade modal-dialog-scrollable" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning2">CREATE Concert</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_addConcert.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Wireframe de l'application">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page d'ajout de concerts</h5>
                  <p class="text-warning2">Page de création d'un concert avec Add.</p>
                </div>
              </div>

              <div class="carousel-item">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal3">
                  <img src="/assets/aka_connexion.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning2">Sign up Firebase</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_connexion.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Page de connexion et de création de compte">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page de connexion et de création de compte</h5>
                  <p class="text-warning2">Signup Google, Create account, Signin account...</p>
                </div>

              </div>

            </div>
            <button class="carousel-control-prev rounded-2" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next rounded-2" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="card-footer bg-gray">
          <small class=""><a href="" class="text-warning2 text-decoration-none">github</a></small>
        </div>
      </div>
    </div>


    <!-- Card 2 -->
    <div class="col">
      <div class="card bg-info2 mb-3" style="box-shadow:4px 4px 8px var(--blue-color);">

        <div class="row">
          <div class="col">
            <img src="/assets/equipiers.png" class="card-img-top mx-4 mt-4" style="width:275px;" alt="Equipiers du jeu">
          </div>
          <div class="col text-light styleul">
          <div class="m-0" data-toggle="collapse" data-target="#myElement2" onclick="launchAnimation2()">
            <p class="mt-2 text-decoration-underline text-success2 text-space" id="noPointerElement2" style="cursor:pointer;">Technologies</p>
            
          <div id="myElement2">
            
            
</div>

          </div>
          </div>
        </div>
       
        <button type="button" class="btn btn-info w-25 mx-auto mt-4" style="margin-right: 4px;" onclick="window.open('http://devncohero/HistoireQueC-estToiQuiChoisis/', '_blank')">Démo</button>
        <div class="card-body hover-bg-success clickable-div click-div2 txt-black" data-target="#hidden-div2" onclick="toggleHiddenDiv2()">

          <h5 class="card-title">Hero's story</h5>
          <p class="card-text mx-2">Jeu.
          <ul style="list-style-type:none;">
            <li>
              <h3>TP - Réaliser une application en utilisant la méthode SCRUM</h3>
            </li>
            <li><h4>-</h4></li>
            <p>
            <h5>Travail pratique réalisé en binome.</h5>
            </p>
            <p>
            <ul style="list-style-type:none;">Conception et réalisation d’un jeu.</ul>
            </p>
          </ul>
          </p>
          <p>

          </p>
         
        </div>

       

        <div id="hidden-div2" class="collapse">
          <p class="m-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ea, consequuntur minus accusamus hic at placeat commodi earum, iusto nostrum optio quis beatae velit! Ducimus laborum inventore delectus eius! Vitae!</p>


        </div>
        <div class="bg-info2 p-2">
          <div id="carouselExampleCaptions2" class="carousel px-2">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height:325px;">
              <div class="carousel-item active">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal4">
                  <img src="/assets/devnhero_accueil.png" class="d-block mx-auto" style="max-width: 50%;" alt="Page d'accueil de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade dialog modal-dialog-scrollable" id="myModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-warning2">Page d'accueil de l'application</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/devnhero_accueil.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Page d'accueil l'application">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page d'accueil de l'application</h5>
                  <p class="text-warning2">Création de compte et connexion au compte...</p>
                </div>

              </div>

              <div class="carousel-item">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal5">
                  <img src="/assets/story_update.png" class="d-block" style="max-width: 100%;" alt="Story update">
                </button>

                <!-- Modal -->
                <div class="modal fade modal-dialog-scrollable" id="myModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning2">Update histoire</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/story_update.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Wireframe de l'application">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page de modification d'histoire</h5>
                  <p class="text-warning2">Requête SQL update.</p>
                </div>
              </div>

              <div class="carousel-item">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal6">
                  <img src="/assets/story_start.png" class="d-block" style="max-width: 100%;" alt="Déroulement d'une histoire">
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning2">Déroulement d'une histoire</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/story_start.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Déroulement d'une histoire">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page principale du déroulement de l'histoire</h5>
                  <p class="text-warning2">Choisir une réponse parmi les quatres possibilités...</p>
                </div>

              </div>

            </div>
            <button class="carousel-control-prev rounded-2" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next rounded-2" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="card-footer bg-gray">
          <small class=""><a href="" class="text-warning2 text-decoration-none">github</a></small>
        </div>
      </div>
    </div>









   <!-- Card 3 -->
   <div class="col">
      <div class="card bg-info2 mb-3">

        <div class="row">
          <div class="col">
            <img src="/assets/aka_logo.svg" class="card-img-top mx-4 mt-4" style="width:125px;" alt="...">
          </div>
          <div class="col text-light styleul">
          <div class="m-0" data-toggle="collapse" data-target="#myElement3" onclick="launchAnimation3()">
            <p class="mt-2 text-decoration-underline text-success2 text-space" id="noPointerElement3" style="cursor:pointer;">Technologies</p>
            
          <div id="myElement3">
            
            
</div>

          </div>
          </div>
        </div>

        <div class="card-body hover-bg-success clickable-div click-div3 txt-black" data-target="#hidden-div3" onclick="toggleHiddenDiv3()">

          <h5 class="card-title">Aka project</h5>
          <p class="card-text mx-2">Application mobile réalisée dans le cadre du stage de fin de formation de developpeur web et web mobile.
          <ul style="list-style-type:none;">
            <li>
              <h3>01/2023 – 03/2023, GONCALVES Dalida – Aurillac, 15</h3>
            </li>
            <li><h4>Prestataire de formations de développeurs web.</h4></li>
            <p>
            <h5>Stage Full Remote, développement d’une application mobile sous React Native et Firebase.</h5>
            </p>
            <p>
            <ul style="list-style-type:none;">Conception et réalisation d’un agenda culturel communautaire.</ul>
            </p>
          </ul>
          </p>
          <p>

          </p>
         
        </div>

       

        <div id="hidden-div3" class="collapse">
          <p class="m-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ea, consequuntur minus accusamus hic at placeat commodi earum, iusto nostrum optio quis beatae velit! Ducimus laborum inventore delectus eius! Vitae!</p>


        </div>
        <div class="bg-info2 p-2">
          <div id="carouselExampleCaptions3" class="carousel px-2">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height:325px;">
              <div class="carousel-item active">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal7">
                  <img src="/assets/aka_framework.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade dialog modal-dialog-scrollable" id="myModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-warning2">Wireframe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_framework.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Wireframe de l'application">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Wireframe de l'application</h5>
                  <p class="text-warning2">Création du wireframe de l'application...</p>
                </div>

              </div>

              <div class="carousel-item">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal8">
                  <img src="/assets/aka_addConcert.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade modal-dialog-scrollable" id="myModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning2">CREATE Concert</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_addConcert.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Wireframe de l'application">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page d'ajout de concerts</h5>
                  <p class="text-warning2">Page de création d'un concert avec Add.</p>
                </div>
              </div>

              <div class="carousel-item">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal9">
                  <img src="/assets/aka_connexion.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning2">Sign up Firebase</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_connexion.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Page de connexion et de création de compte">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page de connexion et de création de compte</h5>
                  <p class="text-warning2">Signup Google, Create account, Signin account...</p>
                </div>

              </div>

            </div>
            <button class="carousel-control-prev rounded-2" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next rounded-2" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="card-footer bg-gray">
          <small class=""><a href="" class="text-warning2 text-decoration-none">github</a></small>
        </div>
      </div>
    </div>

   <!-- Card 4 -->
   <div class="col">
      <div class="card bg-info2 mb-3">

        <div class="row">
          <div class="col">
            <img src="/assets/aka_logo.svg" class="card-img-top mx-4 mt-4" style="width:125px;" alt="...">
          </div>
          <div class="col text-light styleul">
          <div class="m-0" data-toggle="collapse" data-target="#myElement4" onclick="launchAnimation4()">
            <p class="mt-2 text-decoration-underline text-success2 text-space" id="noPointerElement4" style="cursor:pointer;">Technologies</p>
            
          <div id="myElement4">
            
            
</div>

          </div>
          </div>
        </div>

        <div class="card-body hover-bg-success clickable-div click-div4 txt-black" data-target="#hidden-div4" onclick="toggleHiddenDiv4()">

          <h5 class="card-title">Aka project</h5>
          <p class="card-text mx-2">Application mobile réalisée dans le cadre du stage de fin de formation de developpeur web et web mobile.
          <ul style="list-style-type:none;">
            <li>
              <h3>01/2023 – 03/2023, GONCALVES Dalida – Aurillac, 15</h3>
            </li>
            <li><h4>Prestataire de formations de développeurs web.</h4></li>
            <p>
            <h5>Stage Full Remote, développement d’une application mobile sous React Native et Firebase.</h5>
            </p>
            <p>
            <ul style="list-style-type:none;">Conception et réalisation d’un agenda culturel communautaire.</ul>
            </p>
          </ul>
          </p>
          <p>

          </p>
         
        </div>

       

        <div id="hidden-div4" class="collapse">
          <p class="m-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ea, consequuntur minus accusamus hic at placeat commodi earum, iusto nostrum optio quis beatae velit! Ducimus laborum inventore delectus eius! Vitae!</p>


        </div>
        <div class="bg-info2 p-2">
          <div id="carouselExampleCaptions4" class="carousel px-2">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height:325px;">
              <div class="carousel-item active">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal10">
                  <img src="/assets/aka_framework.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade dialog modal-dialog-scrollable" id="myModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-warning2">Wireframe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_framework.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Wireframe de l'application">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Wireframe de l'application</h5>
                  <p class="text-warning2">Création du wireframe de l'application...</p>
                </div>

              </div>

              <div class="carousel-item">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal11">
                  <img src="/assets/aka_addConcert.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade modal-dialog-scrollable" id="myModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning2">CREATE Concert</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_addConcert.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Wireframe de l'application">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page d'ajout de concerts</h5>
                  <p class="text-warning2">Page de création d'un concert avec Add.</p>
                </div>
              </div>

              <div class="carousel-item">

                <!-- Bouton pour ouvrir la modal -->
                <button type="button" class="btn py-0" data-bs-toggle="modal" data-bs-target="#myModal12">
                  <img src="/assets/aka_connexion.png" class="d-block" style="max-width: 100%;" alt="Wireframe de l'application">
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning2">Sign up Firebase</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-0">
                        <img src="/assets/aka_connexion.png" class="d-block align-item-center w-50 mx-auto" style="max-width: 100%; max-height:50%;" alt="Page de connexion et de création de compte">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="carousel-caption text-success2 bg-dark mx-2 rounded-2 opac75" style="position: sticky;">
                  <h5>Page de connexion et de création de compte</h5>
                  <p class="text-warning2">Signup Google, Create account, Signin account...</p>
                </div>

              </div>

            </div>
            <button class="carousel-control-prev rounded-2" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next rounded-2" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="card-footer bg-gray">
          <small class=""><a href="" class="text-warning2 text-decoration-none">github</a></small>
        </div>
      </div>
    </div>
  </div>
</body>

</html>