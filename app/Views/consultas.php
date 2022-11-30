    <div class="container">
        <div class="text-center" style="margin-left: 0px;padding-left: 250px;padding-right: 250px;padding-top: 50px;">
            <div class="table-responsive border-dark shadow">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Salones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($select as $key => $i):?>
                        <tr>
                            <td><?= $i->Salon ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>