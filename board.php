<?php include('assets/design/head.php'); ?>
<body>
    <?php include('assets/design/menu.php'); ?>

    <!-- Body -->
    <section class="container mt-6">
        <!-- Titre -->
        <h5 class="mr-0">T<span class="lettre-couleur">a</span>bleau de bord</h5>
        <div class="row mt-5">
            <div class="col-xl-4">
                <div class="card height-limit mb-3">
                    <h6 class="mb-3">Journal des tâches</h6>
                    <div class="mb-4 my-auto" >
                        <canvas id="myChart" class="m"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card overflow-hidden p-1 height-limit">
                    <div class="d-flex mb-3 mt-2">
                        <h6 class="my-auto">Liste des tâches</h6>
                        <button type="submit" class="btn btn-jaune text-btn-interface p-2 my-auto">ajouter une tâche +</button>
                        <div class="btn-group ml-auto p-2" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn text-btn-interface dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filtre statut
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="#">Clos</a>
                                <a class="dropdown-item" href="#">En cours</a>
                                <a class="dropdown-item" href="#">Nouveau</a>
                                <a class="dropdown-item" href="#">Résolu</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Nom de la tâche</th>
                                    <th>Nombre d'actions</th>
                                    <th>TAG</th>
                                    <th>Date Départ</th>
                                    <th>Date Fin</th>
                                    <th>Équipe</th>
                                    <th>Statut</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="overflow-auto">
                                <tr>
                                    <td>1,001</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-clos">Clos</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-encours">En cours</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-nouveau">Nouveau</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-team">UNIX</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-resolu">Résolu</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,001</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-clos">Clos</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-encours">En cours</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-nouveau">Nouveau</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-team">UNIX</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-resolu">Résolu</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,001</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-clos">Clos</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-encours">En cours</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-primary">bootstrap</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-nouveau">Nouveau</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>responsive</td>
                                    <td><span class="badge badge-team">UNIX</span></td>
                                    <td>cards</td>
                                    <td>grid</td>
                                    <td>TEAM 1</td>
                                    <td><span class="badge badge-pill badge-resolu">Résolu</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-nothing" type="button" data-toggle="dropdown">...
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="a-nothing" href="#">Modifier</a></li>
                                                <li><a class="a-nothing"href="#">Supprimer</a></li>
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


<script>
    var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'doughnut',
        
            // The data for our dataset
            data: {
                labels: ['Clos', 'Nouveau', 'Résolu', 'En cours'],
                datasets: [{
                    label: 'Journal des tâches',
                    backgroundColor: ["#E86262", "#D682FF", "#FFDA82", "#5C9DF2"],
                    hoverBackgroundColor: ["#CB3A3A", "#B25ADD", "#E0BB63", "#3D7DD2"],
                    data: [25, 20, 30, 45],
                }]
            },
        
            // Configuration options go here
            options: {
                legend: { 
                position: 'right',
                },
                
            }
        });
    </script>