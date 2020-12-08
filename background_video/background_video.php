<div class="card">
    <?php $status = $_GET['route']; 
    if($status==0){ $parametro = "{}"; $tipo=0;}else{
        $conect =DBRead('background_video','*' ,"WHERE id = '{$status}'")[0];
    $parametro = json_encode($conect);
    $tipo= $conect['tipo'];
    }
    ?>
    <form action="?props=<?php echo $status ?>" method="POST" id="form" enctype="multipart/form-data">
        <div class="card-header white">
                <strong>{{status}}</strong>
        </div>
        <div class="card-body white" v-for='infor in infors'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6'> 
                        <div class='form-group'> 
                            <label for='nome'>Nome:</label> 
                            <input required type='text' class='form-control' id='nome' name='nome'   v-bind:value='infor.nome'> 
                        </div>
                    </div>
                    <div class='col-md-3'> 
                        <div class='form-group'> 
                            <label for='largura'>Largura:</label> 
                            <input required type='number' min='0' step='0.01' class='form-control' id='largura' name='largura'  v-bind:value='infor.largura'> 
                        </div>
                    </div>
                    <div class='col-md-3'> 
                        <div class='form-group'> 
                            <label for='largura'>Altura:</label> 
                            <input required type='number' min='0' step='0.01' class='form-control' id='altura' name='altura'  v-bind:value='infor.altura'> 
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'> 
                        <div class='form-group'> 
                            <label for='tipo'>Tipo:</label> 
                            <select id='tipo'  required name='tipo' class='form-control'  v-bind:value="infor.tipo" v-model='tipo'> 
                                <option value='0' disabled>Selecione uma opção…</option>
                                <option value='vimeo'>Vimeo</option>
                                <option value='youtube'>YouTube</option>
                                <option value='local'>Local</option>
                            </select>
                        </div>
                    </div>
                    <div class='col-md-6'  v-if='tipo == "local"'> 
                        <div class='form-group'> 
                            <label for='path'>Arquivo:</label> 
                            <input type='file' multiple accept='video/*'class='form-control' id='path' name='path'> 
                            <small>{{infor.path}}</small>
                        </div>
                    </div>
                    <div class='col-md-6' v-else> 
                        <div class='form-group'> 
                            <label for='path'>ID do Vídeo:</label> 
                            <input type='text' class='form-control' id='path' name='path'   v-bind:value="infor.path"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <campos></campos>
    </form>
</div>
<script>
let campos = Vue.extend({
    props: {
        id: String,
        tipo: String, 
        nome: String, 
        largura: String, 
        altura: String, 
        path: String 
    },
    template: 
        '<div class="card-footer white">'+
            '<button style="margin-bottom: 7px;" class="btn btn-primary float-right" type="submit">Salvar</button>'+
        '</div>'
});
Vue.component('campos', campos)
new Vue({
    el: '#form',
    data:{
        
        tipo: "<?php echo $tipo ?>",
        status: "<?php if($status == 0){echo 'Adicionar';}else{echo 'Editar';}?> Background",
        infors: [<?php echo $parametro ?>]
    }
})
</script>

