<?php require_once('includes/funcoes.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/menu.php'); ?>
<?php require_once('controller/background_video.php'); ?>
<?php $TitlePage = 'Background Vídeo'; ?>
<?php $UrlPage	 = 'background_video.php'; ?>
<div class="has-sidebar-left">
	<header class="blue accent-3 relative nav-sticky">
		<div class="container-fluid text-white">
			<div class="row p-t-b-10 ">
				<div class="col">
					<h4><i class="icon-file-video-o"></i> <?php echo $TitlePage; ?></h4>
				</div>
			</div>
		</div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
	</header>

    <div class="container-fluid animatedParent animateOnce my-3">
            

                <!-- LISTAR ITENS -->
                <?php
                    if(isset($_GET['route'])){
                        require_once('background_video/background_video.php');
                    }else {?>
                        
        <div class="card">
            <div class="card-header white">
            <p>
                <?php if (checkPermission($PERMISSION, $_SERVER['SCRIPT_NAME'], 'background', 'adicionar')) { ?>
                <a class="btn btn-sm btn-primary" href="?route=0">Adicionar Background</a>
                <?php } ?>
            </p>
            </div>

            <?php 
                $Query = DBRead('background_video','*'); 
                if (is_array($Query)) {  
            ?>

            <div class="card-body p-0">
                <div>
                    <div>
                        <table id="DataTable" class="table m-0 table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Implementação</th>
                                <th width="53px">Ações</th>
                            </tr>

                            <?php
                                foreach ($Query as $dados) {
                                    $CodSite  = '<div id="BackgroundVideo"></div>'."\n";
                                    $CodSite .= '<script type="text/javascript">BackgroundVideo('.$dados['id'].');</script>';
                                    $id = $dados['id'];
                                    $itens = DBRead('background_video','*',"WHERE id = '{$id}'")[0];
                            ?>
                            <tr>
                                <td><?php  echo $id; ?></td>
                                <td><?php echo LimitarTexto($dados['nome'],'80','...'); ?></td>                        
                                    <td>
                                        <?php if (checkPermission($PERMISSION, $_SERVER['SCRIPT_NAME'], 'background', 'adicionar')) { ?>
                                        <button
                                        id="btnCopiarCodSite<?php echo $dados['id']; ?>"
                                        class="btn btn-primary btn-xs"
                                        onclick="CopiadoCodSite('<?php echo $dados['id']; ?>')"
                                        data-clipboard-text='<?php echo $CodSite; ?>'>
                                            <i class="icon icon-code"></i> Copiar Cód. do Site
                                        </button>
                                    <?php } ?>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="" href="#" data-toggle="dropdown">
                                                <i class="icon-apps blue lighten-2 avatar"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                                                <?php if (checkPermission($PERMISSION, $_SERVER['SCRIPT_NAME'], 'background', 'editar')) { ?>
                                                <a class="dropdown-item" href="?route=<?php echo $dados['id']; ?>"><i class="text-primary icon icon-pencil"></i> Editar</a>
                                            <?php } ?>
                                                <?php if ($dados['id'] != 0) { ?>
                                                    <?php if (checkPermission($PERMISSION, $_SERVER['SCRIPT_NAME'], 'background', 'deletar')) { ?>
                                                    <a class="dropdown-item" href="#" onclick="DeletarItem(<?php echo $dados['id']; ?>, 'DeletarBackground');"><i class="text-danger icon icon-remove"></i> Excluir</a>
                                                <?php } } ?>                                       
                                            </div>
                                        </div>
                                    </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="card-body">
                <div class="alert alert-info">Nenhuma background adicionado até o momento
            </div>
        <?php } } ?>
        </div>
    </div>
</div>
<?php require_once('includes/footer.php'); ?>