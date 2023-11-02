<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo base_url('dashboard')?>">Home</a>
            <i class="icon-angle-right"></i> 
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="<?php echo base_url('edit/brand/'.$brand_info_by_id->brand_id)?>">Editar Marca</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Editar Marca</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message');?></p>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="<?php echo base_url('update/brand/'.$brand_info_by_id->brand_id)?>" method="post">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Nombre de la Marca</label>
                            <div class="controls">
                                <input value="<?php echo $brand_info_by_id->brand_name?>" class="span6 typeahead" name="brand_name" id="fileInput" type="text"/>
                            </div>
                        </div>          
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Descripción de la marca</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" name="brand_description" rows="3">
                                    <?php echo $brand_info_by_id->brand_description;?>
                                </textarea>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Estado Publacaión</label>
                            <div class="controls">
                                <select name="publication_status">
                                    <option value="1">Publicado</option>
                                    <option value="0">Inédito</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            <button type="reset" class="btn">Cancelar</button>
                        </div>
                    </fieldset>
                </form>   

            </div>
        </div><!--/span-->

    </div><!--/row-->


</div><!--/.fluid-container-->

<!-- end: Content -->