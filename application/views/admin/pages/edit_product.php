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
            <a href="<?php echo base_url('edit/product/'.$product_info_by_id->product_id)?>">Editar Producto</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Editar Producto</h2>
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
                <form name="formName" class="form-horizontal" action="<?php echo base_url('update/product/'.$product_info_by_id->product_id);?>" method="post" enctype="multipart/form-data">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="fileInput">Titulo del producto</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $product_info_by_id->product_title;?>" name="product_title" id="fileInput" type="text"/>
                            </div>
                        </div>          
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Breve descripción del producto</label>
                            <div class="controls">
                                <textarea class="cleditor" name="product_short_description" id="textarea2" rows="2">
                                    <?php echo $product_info_by_id->product_short_description;?>
                                </textarea>
                            </div>
                        </div>        
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Descripción larga del producto</label>
                            <div class="controls">
                                <textarea class="cleditor" name="product_long_description" id="textarea2" rows="4">
                                    <?php echo $product_info_by_id->product_long_description;?>
                                </textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Imagen del producto</label>
                            <div class="controls">
                                <input class="span6 typeahead" name="product_image" id="fileInput" type="file"/>
                                <input class="span6 typeahead" name="product_delete_image" value="<?php echo base_url('uploads/'.$product_info_by_id->product_image);?>" type="hidden"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div class="controls">
                                <img src="<?php echo base_url('uploads/'.$product_info_by_id->product_image);?>" style="width:500px;height:200px"/>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Precio del producto</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $product_info_by_id->product_price;?>" name="product_price" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Cantidad de producto</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="<?php echo $product_info_by_id->product_quantity;?>" name="product_quantity" id="fileInput" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">categoria de producto</label>
                            <div class="controls">
                                <select id="product_category" name="product_category">
                                    <?php foreach($all_published_category as $single_category){?>
                                    <option value="<?php echo $single_category->id;?>"><?php echo $single_category->category_name;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Producto de marca</label>
                            <div class="controls">
                                <select id="product_brand" name="product_brand">
                                    <?php foreach($all_published_brand as $single_brand){?>
                                    <option value="<?php echo $single_brand->brand_id;?>"><?php echo $single_brand->brand_name;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div> 
                        
                        <div class="control-group">
                            <label class="control-label" for="fileInput">Producto destacado</label>
                            <div class="controls">
                                <input class="span6 typeahead" value="0" name="product_feature" id="fileInput" type="radio"/> Sin destacar
                                <input class="span6 typeahead" value="1" name="product_feature" id="fileInput" type="radio" />Presentado
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="textarea2">Estado de publicación</label>
                            <div class="controls">
                                <select id="publication_status" name="publication_status">
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

<script>
document.getElementById('publication_status').value = <?php echo $product_info_by_id->pstatus;?>;
document.formName.product_feature.value=<?php echo $product_info_by_id->product_feature;?>;
document.getElementById('product_brand').value = <?php echo $product_info_by_id->product_brand;?>;
document.getElementById('product_category').value = <?php echo $product_info_by_id->product_category;?>;
</script>