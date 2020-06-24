<?php include('assets/design/head.php'); ?>
<body>
    <?php include('assets/design/menu.php'); ?>

    <!-- Body -->
    <section class="container mt-6">
        <!-- Titre -->
        <h5 class="mr-0">P<span class="lettre-couleur">r</span>ofil</h5>
        <div class="row mt-5">

            <!-- Zone profil -->

            <div class="col-lg-6">
                <div class="card height-limit">
                    <h6 class="mb-3">PSEUDO DU MEMBRE</h6>
                    <div class="row mt-4 ml-3 ml-sm-0">
                        <div class="mb-4 container-fluid col-sm-4 col-12" >
                            <img src="assets/img/profil_pic.svg" class=" text-center rounded-circle float-left profil-pic" alt="...">
                        </div>
                        <div class="col-sm-7 col-12">
                            <form>
                                <input type="email" id="login" name="mail" placeholder="E-mail du membre">
                                <input type="text" id="login" name="surname" placeholder="Prénom du membre">
                                <input type="text" id="login" name="name" placeholder="Nom du membre">
                                <input type="date" id="login" name="password" value="1991-06-12">
                                <input type="text" id="login" name="profession" placeholder="Profession">
                                <input type="submit" class="btn btn-jaune text-btn mt-3" value="Mettre à jour">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- zone équipe -->
            <div class="col-lg-6">
                <div class="card height-limit overflow-hidden">
                        <h6 class="mb-3">Mes équipes</h6>
                    <div class="table-responsive col-12">
                        <table class="table table-striped ">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Équipe</th>
                                    <th class="text-right">Rang</th>
                                </tr>
                            </thead>
                            <tbody class="overflow-auto">
                                <tr>
                                    <td class="text-uppercase">adobe</td>
                                    <td class="text-uppercase text-right">ux</td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">Bayer</td>
                                    <td class="text-uppercase text-right">Merch</td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">adobe</td>
                                    <td class="text-uppercase text-right">ux</td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">Bayer</td>
                                    <td class="text-uppercase text-right">Merch</td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">adobe</td>
                                    <td class="text-uppercase text-right">ux</td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">Bayer</td>
                                    <td class="text-uppercase text-right">Merch</td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">adobe</td>
                                    <td class="text-uppercase text-right">ux</td>
                                </tr>
                                <tr>
                                    <td class="text-uppercase">Bayer</td>
                                    <td class="text-uppercase text-right">Merch</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Zone activité -->
        <div class="row mt-4 mb-5">
            <div class="col-lg-12 mb-5">
                <div class="card height-limit overflow-hidden">
                        <h6 class="mb-3">Mes activités en cours</h6>
                    <div class="table-responsive col-12 overflow-auto">
                        <table class="table table-striped ">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Nom de l'action</th>
                                    <th>Nom de la tâche</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>TAG</th>
                                    <th>Priorité</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Réaliser le mockup</td>
                                    <td>Création e-shop</td>
                                    <td>01-08-2020</td>
                                    <td>15-08-2020</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td><span class="badge badge-dot-urgent"> </span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Voir plus</a></li>
                                                <li><a class="a-nothing"href="#">Changer le statut</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Footer -->
<?php include('assets/design/footer.php'); ?>
