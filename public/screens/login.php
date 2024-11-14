<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel='stylesheet' href='../css/login.css'>
</head>

<body>
    <a href="../../index.php" class="btn mt-4" onclick="toggleIcon()">
        <i id="icon" class="uil uil-football"></i> Regresar
    </a>

    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Iniciar Sesión</span><span>Regístrate</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Iniciar Sesión</h4>
                                            <div class="form-group">
                                                <input type="email" name="logemail" class="form-style"
                                                    placeholder="Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style"
                                                    placeholder="Contraseña" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <button type="submit" class="btn mt-4">Enviar</button>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">¿Olvidaste tu contraseña?</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Regístrate</h4>
                                            <form id="registerForm">
                                                <div class="form-group">
                                                    <input type="text" name="logname" class="form-style"
                                                        placeholder="Nombre" id="nombre" autocomplete="off">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="loglastname" class="form-style"
                                                        placeholder="Apellido" id="apellido" autocomplete="off">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="lognumber" class="form-style"
                                                        placeholder="Teléfono" id="telefono" autocomplete="off">
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="logemail" class="form-style"
                                                        placeholder="Email" id="email" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass" class="form-style"
                                                        placeholder="Contraseña" id="password" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpassconfirm" class="form-style"
                                                        placeholder="Confirma tu Contraseña" id="passwordConfirm" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4">Enviar</button>
                                                <p id="message" class="mt-4"></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function toggleIcon() {
        const icon = document.getElementById('icon');
        if (icon.classList.contains('uil-football')) {
            icon.classList.remove('uil-football');
            icon.classList.add('uil-tennis-ball');
        } else {
            icon.classList.remove('uil-tennis-ball');
            icon.classList.add('uil-football');
        }
    }
    </script>

    <script type ="module" src="../js/login.js"></script>
    <script type="module" src="../js/register.js"></script>

</body>

</html>
