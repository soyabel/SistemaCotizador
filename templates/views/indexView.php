<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORIZADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header>
        <div class="bg-dark collapse" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Nosotros</h4>
                        <p class="text-muted">Agregue información sobre el álbum a continuación, el autor o cualquier
                            otro contexto de fondo. Haz que sea de unas pocas oraciones para que la gente pueda recoger
                            algunos datos informativos.Luego, enlácelos a algunos sitios de redes sociales o información
                            de contacto.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contacto</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Twitter</a></li>
                            <li><a href="#" class="text-white">Facebook</a></li>
                            <li><a href="#" class="text-white">Email</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Cotizador App</strong>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                    aria-label="Navegación de palanca">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <!--contenido principal-->
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-8 col-12">

                <div class="card mb-3">
                    <div class="card-header">Informacion del cliente</div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">

                                <div class="col-4">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Walter White" required>
                                </div>
                                <div class="col-4">
                                    <label for="empresa">Empresa</label>
                                    <input type="text" class="form-control" id="empresa" name="empresa"
                                        placeholder="Breaking Bad" required>
                                </div>
                                <div class="col-4">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Walter@White.com" required>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Agregar nuevo concepto</div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">

                                <div class="col-3">
                                    <label for="concepto">Concepto</label>
                                    <input type="text" class="form-control" id="concepto" name="concepto"
                                        placeholder="Guitarra electrica" required>
                                </div>
                                <div class="col-3">
                                    <label for="tipo">Tipo de producto</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="producto">Producto</option>
                                        <option value="servicio">Servicio</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="precio_unitario">Precio unitario</label>
                                    <input type="number" class="form-control" id="cantidad" name="cantidad" min="1"
                                        max="99999" value="1" required>
                                </div>
                                <div class="col-3">
                                    <label for="concepto">Concepto</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" id="concepto" name="concepto"
                                            placeholder="0.00" required>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <button class="btn btn-success" type="submit">Agregar concepto</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header text-center">Resumen de cotización</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered">

                                <thead>
                                    <tr>
                                        <th>Concepto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th class="text-end">Subtotal</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>Playera</td>
                                        <td>1</td>
                                        <td>$399.00</td>
                                        <td class="text-end">$399.00</td>
                                    </tr>

                                    <tr>
                                        <td>Ukelele</td>
                                        <td>2</td>
                                        <td>$250.00</td>
                                        <td class="text-end">$500.00</td>
                                    </tr>

                                    <tr>
                                        <td class="text-end" colspan="3">Subtotal</td>
                                        <td class="text-end">$123.00</td>                                      
                                    </tr>

                                    <tr>
                                        <td class="text-end" colspan="3">Impuestos</td>
                                        <td class="text-end">$123.00</td>                                       
                                    </tr>

                                    <tr>
                                        <td class="text-end" colspan="3">Envio</td>
                                        <td class="text-end">$123.00</td>
                                    </tr>

                                    <tr>
                                        <td class="text-end" colspan="4"><b>Total</b><h3 class="text-success"><b>$799.00</b></h3></td>                                       
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary">Descargar PDF</button>
                        <button class="btn btn-success">Enviar por correo</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--contenido final-->

    <footer class="bg-light text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Arriba</a>
            </p>
            <p class="mb-0"><a href="">Cotizador App</a>&copy;. Todos los derechos reservados <?php echo date('Y');?>
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>