<?php require 'model/roles/select.php'; ?>
<div class="container-xl">
	<div class="table-responsive mt-5 offset-3 col-6">
		<div class="table-wrapper mt-5">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>M<span class="">a</span>nage <b>roles</b></h2>
					</div>
					<div class="col-sm-4">
						<a href="index.php?p=roles&action=create" class="btn btn-success">
                            <i class="material-icons">&#xE147;</i> <span>Ajouter un rôle</span>
                        </a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

				<?php if(count($result) > 0 ): ?>

					<?php foreach($result as $value): ?>
						<tr>
							<td><?php echo $value['libelle']?></td>
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal">
									<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
								</a>
								<a href="index.php?p=roles&action=delete&id=<?php echo $value['id'] ?>" class="delete">
									<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					
				<?php endif ?>
					
				</tbody>
			</table>
		</div>
	</div>        
</div>