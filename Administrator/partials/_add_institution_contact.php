<div class="container">
    <div class="card bg-light">

        <div class="card-header">
            <h4>INGRESAR CONTACTO</h4>
        </div>
        <div class='card-body '>
            <div class='card bg-light col-md-12'>
                <form class='form-v1' action='../logica/add_institution_contact.php' method='POST'>
                    <div class="row">
                        <div class="">
                            <label for=""></label>
                            <input hidden type="text" name="id_institucion" value="<?php echo $res[0]?>">
                        </div>
                        <div class="col-md-6">
                            <label for="">Nombre:</label>
                            <input class="form-control"  type="text" name="name">
                        </div>
                        <div class="col-md-6">
                            <label for="">Cargo:</label>
                            <input class="form-control"  type="text" name="position">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Telefono:</label>
                            <input class="form-control"  type="text" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="">Correo:</label>
                            <input class="form-control"  type="text" name="email">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            
                            <button class="btn btn-warning" type=" submit">Agregar</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>