<?php include('assets/design/head.php'); ?>
<body>
    <?php include('assets/design/menu.php'); ?>

<!-- body -->
<section class="container mt-6">
    <!-- Titre -->
    <h5 class="mr-0">T<span class="lettre-couleur">â</span>ches</h5>
    <div class="row mt-5">

        <!-- zone historique -->
        <div class="col-lg-3 mb-3">
            <div class="card height-limit overflow-hidden">
                    <h6 class="mb-2">Historique</h6>
                <div class="table-responsive col-12 ">
                    <table class="table table-striped ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Tâche</th>
                                <th class="text-right">Statut</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-auto mb-5">
                            <tr>
                                <td class="text-uppercase">E-shop</td>
                                <td class="text-right"><span class="badge badge-pill badge-clos">Clos</span></td>
                            </tr>
                            <tr>
                                <td class="text-uppercase">E-shop</td>
                                <td class="text-right"><span class="badge badge-pill badge-nouveau">Nouveau</span></td>
                            </tr>
                            <tr>
                                <td class="text-uppercase">E-shop</td>
                                <td class="text-right"><span class="badge badge-pill badge-encours">En cours</span></td>
                            </tr>
                            <tr>
                                <td class="text-uppercase">E-shop</td>
                                <td class="text-right"><span class="badge badge-pill badge-clos">Clos</span></td>
                            </tr>
                            <tr>
                                <td class="text-uppercase">E-shop</td>
                                <td class="text-right"><span class="badge badge-pill badge-encours">En cours</span></td>
                            </tr>
                            <tr>
                                <td class="text-uppercase">E-shop</td>
                                <td class="text-right"><span class="badge badge-pill badge-nouveau">Nouveau</span></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Ajouter une tache -->

        <div class="col-lg-6">
            <div class="card height-limit overflow-hidden">
                    <h6 class="mb-3">Ajouter une nouvelle tâche</h6>
                <div class="table-responsive col-12">
                    <div class="d-flex mb-3 mt-2">
                        <form>
                            <div class="row ml-1">
                                <div class="mr-sm-6">
                                    <input type="text"  class="taskname" id="tache" name="mail" placeholder="Nom de la tâche">
                                </div>
                                <div class="float-right">
                                    <select class="btn form-control text-btn-interface dropdown-toggle" id="exampleFormControlSelect1">
                                        <option>Urgent</option>
                                        <option>Normal</option>
                                        <option>Calme</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row ml-1 ">
                                <div class="d-flex justify-content-start">
                                    <p class="taskp">Date de début:</p>
                                    <input class="taskdate" type="date" id="tache" name="datedebut" value="Date de début">
                                </div>
                                <div class="d-flex justify-content-start">
                                    <p class="taskp">Date de fin:</p>
                                    <input class="taskdate" type="date" id="tache" name="datefin" value="Date de fin">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input class="taskclient" type="text" id="login" name="name" placeholder="Nom du client">
                                </div>
                            </div>
                            <div class="row ml-1">
                                <div>
                                    <select class="btn form-control text-btn-interface dropdown-toggle" id="exampleFormControlSelect1">
                                        <option>TEAM1</option>
                                        <option>TEAM2</option>
                                        <option>TEAM3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="exampleFormControlTextarea1">Description de la tâche</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- Footer -->
<?php include('assets/design/footer.php'); ?>
