    
    <div class="container">
            <h1 style="text-align: center;margin: 20px;">Dar de alta salon</h1>
            <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-md-center justify-content-lg-center">
                <div class="card" style="margin-right: 0px;padding-left: 0px;margin-left: 0px;width: 500px;max-width: 500px;">
                    <div class="card-body">
                        <form style="margin: 50px;padding-left: 0px;padding-right: 0px;" method="post" target="_self" action=<?=route_to("up");?>>
                            <label class="form-label" style="padding-left: 0px;padding-right: 0px;">Salon:</label>
                            <input class="form-control" type="text" id="salon" name="salon">
                            <label class="form-label" style="padding-top: 20px;">Status:</label>
                            <select class="form-select" name="status">
                                <option value="1" selected="">Habilitado</option>
                                <option value="0">Deshabilitado</option>
                            </select>
                            <div class="d-lg-flex justify-content-lg-center">
                                <?= $validation->listErrors(); ?> <br>
                                <button class="btn btn-dark d-lg-flex align-content-center justify-content-lg-center" type="submit" style="margin-top: 31px;margin-left: 0px;position: static;transform: translate(0px) scale(1) skew(0deg);">Enviar</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>