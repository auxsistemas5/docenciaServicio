<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>BUSQUEDA INDIVIDUAL DE RESULTADOS</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <input type="text" name="estudiante" id="estudiante" class="form-control col-md-9">
                <button class="form-control col-md-3 btn btn-success" id="buscar">BUSCAR</button>
            </div>
            <div class="mt-3" id="suggestions">
                    
            </div>

            <div class="mt-3 table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>DOCENTE</th>
                            <th>MES CALIFICADO</th>
                            <th>CONOCIMIENTO</th>
                            <th>ACTITUD</th>
                            <th>SEMINARIO</th>
                            <th>OBSERVACIONES</th>
                        </tr>
                    </thead>
                    <tbody id="resultados">
                    
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

<script>
    $('#buscar').click(function(){
        nombre = $('#estudiante').val();
        metadata = "nombre="+nombre;
        if(nombre == ""){
            alert("NO SE PUEDE BUSCAR SI ESTA VACIO");
        }else{

            $.ajax({
                url: '../logica/search_results.php',
                type: 'POST',
                data: metadata,
            })
            .done(function(res) {
                $('#resultados').html(res)
            })
        }
    });
</script>