<?php
                                            if($select->Status == 1){
                                                $display = 'Habilitado';
                                            }else{
                                                $display = 'Deshabilitado';
                                            }
                                        ?>  
<div class="container">
        <h1 style="text-align: center;margin: 20px;">Datos a actualizar</h1>
        <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-md-center justify-content-lg-center">
            <div class="card" style="margin-right: 0px;padding-left: 0px;margin-left: 0px;width: 500px;max-width: 500px;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Salon</th>
                                    <th class="text-center">Status <br> Actualmente: <?=$display?></th>
                                    <th class="text-center">Actualizar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <form action="<?=route_to("actualizar")?>" method="post">
                                    <td class="text-center">
                                        <input type="text" name="salon" value="<?= $select->Salon?>">
                                        
                                    </td>  
                                    <td class="text-center"><select class="form-select" name="status">
                                        
                                        <option value="1" selected>Habilitado</option>;
                                        <option value="0">Deshabilitado</option>";
                                    </select></td>
                                    <td class="text-center">
                                            <input type="hidden" name="op" value="1" />
                                            <input type="hidden" name="id" value="<?= $select->idSalon?>" />
                                            <button class="btn btn-primary" type="submit" style="background: rgb(10,21,37);">&gt;</button>
                                        
                                    </td>
                                </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>