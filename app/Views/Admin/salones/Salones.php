
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 data-aos="fade" data-aos-duration="500" data-aos-delay="500">Salones</h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <!-- Value 2 para Actualizar-->
                <div class="card">
                    <div class="card-body border rounded border-4 p-4" data-aos="fade" data-aos-duration="800">
                        <h4 class="card-title" style="text-align: center;">Actualizar</h4>
                        <p class="text-center card-text">Actualiza los datos de algún salon.</p>
                        <form action=<?=route_to("showUp");?> method="post">
                            <input type="hidden" name="variable" value="2" />
                            <div style="text-align: center;">
                                <button class="btn btn-outline-secondary" role="submit" style="text-align:center;">Ir!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Value 1 para Consultar-->
                <div class="card">
                    <div class="card-body border rounded border-4 p-4" data-aos="fade" data-aos-duration="800" data-aos-delay="200">
                        <h4 class="card-title" style="text-align: center;">Consultar</h4>
                        <p class="text-center card-text">Consulta los datos de algún salon.</p>
                        <form action=<?=route_to("consulta");?> method="post">
                        <input type="hidden" name="variable" value="1" />
                        <div style="text-align: center;"><button class="btn btn-outline-secondary" type="submit" style="text-align:center;">Ir!</button></form></div>
                        
                    </div>
                </div>
            </div>
            <!-- Value 3 para dar de baja-->
            <div class="col">
                <div class="card">
                    <div class="card-body text-center border rounded border-4 p-4" data-aos="fade" data-aos-duration="800" data-aos-delay="400">
                        <h4 class="card-title">Dar de baja</h4>
                        <p class="card-text">Da de baja algún salon.</p>
                        <form action=<?=route_to("showUp");?> method="post">
                        <input type="hidden" name="variable" value="3" />
                        <div style="text-align: center;"><button class="btn btn-outline-secondary" type="submit" style="text-align: center;">Ir!</button></form></div>
                    
                    </div>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <!-- Value 4 para dar de alta-->
                <div class="card">
                    <div class="card-body text-center border rounded border-4 p-4" data-aos="fade" data-aos-duration="800" data-aos-delay="500">
                        <h4 class="card-title">Dar de alta</h4>
                        <p class="card-text">Da de alta algún salon.</p>
                        <form action=<?=route_to("showUp");?> method="post">
                        <input type="hidden" name="variable" value="4" />
                        <div style="text-align: center;"><button class="btn btn-outline-secondary" type="submit" style="text-align: center;">Ir!</button></form></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>