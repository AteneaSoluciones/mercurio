<div class="titulo">Suscriptores<div class="opciones_menu"><a href="<?= base_url() ?>admin/suscriptores/crear"><img class="ico_agregar" src="<?= base_url(); ?>css/general/img/t.gif" title="Añadir usuario"></a></div></div><div class="contenido">    <?php    $atributos = array('id' => 'form_buscar');    echo form_open('admin/suscriptores', $atributos);    ?>    <div class="contenedortablabuscar">        <table>            <tbody>                <tr>                    <td>Buscar:</td>                    <td>                        <input type="text" name="w_buscar" id="w_buscar" value="<?= $w_buscar ?>">                        <input name="desde" id="desde" type="hidden" value="0" />                    </td>                    <td><img src="<?= base_url(); ?>css/general/img/t.gif" class="buscar" title='Buscar usuario'></td>                </tr>            </tbody>        </table>        <?php echo form_close() ?>    </div>    <div class="contenedortabla">        <table>            <tbody>                <tr>                    <th width="2%">Id</th>                    <th width="43%">Nombre</th>                    <th width="40%">Correo</th>                    <th width="15%">Opciones</th>               </tr>                <?= $html ?>            </tbody>            <tfoot>                <tr>                    <td colspan="4">                        <?= $paginado ?>                    </td>                </tr>            </tfoot>        </table>    </div></div><script src="<?= base_url() ?>js/admin/suscriptores.js"></script>