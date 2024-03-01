<?php $this->view('includes/header', $data) ?>
<?php $this->view('includes/nav', $data) ?>

<!--Main content-->
<main>
    <section class="position-relative">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12 col-xl-12 h-100 pt-lg-5 pb-5">


                    <h4>Home Javascript</h4>

                    <?PHP if ($column_name) { ?>
                    
                        
                       <h4>Input</h4>
                        <?PHP echo cleanOut('&lt;input type="text" class="form-control" name="'.$column_name.'" id="'.$column_name.'" placeholder="'.getUcwords($column_name).'"/&gt;')?>
                        <code>
                            &lt;input type="text" class="form-control" name="<?=$column_name?>" id="<?=$column_name?>" placeholder="<?=getUcwords($column_name)?>"/&gt;
                        </code>

                        <h4>Select</h4>
                        <?PHP echo cleanOut('&lt;select class="form-select" name="'.$column_name.'" id="'.$column_name.'"&gt;&lt;option value=""&gt;Select '.getUcwords($column_name).'&lt;/option&gt;&lt;/select&gt;')?>
                        <code>
                        &lt;select class="form-select" name="<?=$column_name?>" id="<?=$column_name?>"&gt;&lt;option value=""&gt;Select <?=getUcwords($column_name)?>&lt;/option&gt;&lt;/select&gt;
                            
                        </code>



                    <?PHP }else if ($result) { ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <?PHP foreach ($columns as $column) {; ?>
                                        <th><?= getUcwords($column->COLUMN_NAME) ?></th>
                                    <?PHP } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?PHP foreach ($result as $row) {; ?>
                                        <?PHP foreach ($columns as $column) {
                                            $COLUMN_NAME = $column->COLUMN_NAME; ?>
                                            <td><?= getUcwords($row->$COLUMN_NAME) ?></td>
                                        <?PHP } ?>
                                </tr>
                            <?PHP } ?>
                            </tbody>
                        </table>
                    <?PHP } ?>
                </div>




            </div>
        </div>
    </section>

</main>

<?php $this->view('includes/footer', $data) ?>