<div class="container">
        <h1 style="text-align: center;margin: 20px;">Selecciona el salón a actualizar</h1>
        <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-md-center justify-content-lg-center">
            <div class="card" style="margin-right: 0px;padding-left: 0px;margin-left: 0px;width: 500px;max-width: 500px;">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Salones</th>
                                    <th class="text-center">Actualizar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($select as $key => $i):?>
                                        <tr>
                                            <td class="text-center"><?= $i->Salon?></td>
                                                <form action="<?=route_to("actualizar")?>" method="post">
                                                <input type="hidden" name="id" value="<?= $i->idSalon?>" />
                                                <td class="text-center"><button class="btn btn-primary" type="submit" style="background: rgb(10,21,37);">^</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>