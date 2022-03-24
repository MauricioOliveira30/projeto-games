<section class="caixa mt-4">
				<div class="titulo h5 mb-0"> <h2>Lista de clientes</h2></div>
				<div class="base-lista">
					<div>
						<div class="text-end d-flex">
							<a href="<?php echo URL_BASE."cliente/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar cliente</a>
							<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
					<div class="lst mostraFiltro" style="">
						<form action="" method="">
						<div class="rows">
								<div class="col-4">
									<select name="txt_id_empresa">
										<option selected>Selecione o valor...</option>
										<option value="1">Código</option>
										<option value="2">Nome</option>
										<option value="3">Satisfação</option>
                                        <option value="4">Compra</option>
									
									</select>
								</div>
								<div class="col-6">
									<input type="text"  name="" placeholder="Valor da pesquisar..." >
								</div>
								<div class="col-2">
									<input type="submit" class="btn btn-azul" value="pesquisar">
								</div>
						</div>
						</form>
					</div>
						
				<div class="">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  <th align="left">ID</th>
							<th align="left">Nome</th>
							<th align="left">Satisfação</th>
							<th align="center">Compra</th>
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
							<?php  foreach($lista as $cliente) { ?>
							<tr>
								<td><?php echo$cliente->idcliente; ?></td>
								<td><?php echo$cliente->nome; ?></td>
								<td><?php echo$cliente->satisfacao; ?></td>
								<td align="center"><?php echo$cliente->compra; ?></td>
								<td align="center">
									<a   href="<?php echo URL_BASE."paciente/edit/".$cliente->idcliente ?>" class="btn btn-outline-warning" title="Editar"> <img src="<?php echo URL_BASE."assets/img/iconoir_edit.svg"?>" alt=""> </a>
									<a  href="<?php echo URL_BASE."paciente/excluir/".$cliente->idcliente ?>" class="btn btn-outline-danger" title="exlcluir"><img src="<?php echo URL_BASE."assets/img/iconoir_trash.svg"?>" alt=""></a>
								</td>
							</tr>
							<?php } ?>	
												
						</tbody> 
					</table>
					</div>
								
					</div>
				</div>
			</section>