<main class="md:grid md:place-items-center mt-3 p-2">
    <div class="flex flex-col md:flex-row md:justify-center gap-2 md:items-center mb-5">
    <button data-paso="1" class="btn btnActual uppercase font-medium text-white bg-red-700 px-3 py-2 hover:bg-red-900">Datos del niño</button>
    <button data-paso="2" class="btn uppercase font-medium text-white bg-red-700 px-3 py-2 hover:bg-red-900">Datos DERECHOHABIENTE</button>
    <button data-paso="3" class="btn uppercase font-medium text-white bg-red-700 px-3 py-2 hover:bg-red-900">Datos conyuge</button>
    </div>
    <form action=""method="POST" class="bg-blue-500 p-4 rounded-md shadow shadow-black">
        <div id="paso-1" class="mostrar">
            <legend>DATOS DEL NIÑO O DE LA NIÑA</legend>
            <div>
            <label for="Papellido">PRIMER APELLIDO: </label>
            <input class="block w-full" type="text" name="Papellido">
            </div>
            <div>
            <label for="Spellido">SEGUNDO APELLIDO: </label>
            <input class="block w-full" type="text" name="Sapellido">
            </div>
            <div>
            <label for="Nombre">NOMBRE: </label>
            <input class="block w-full" type="text" name="Nombre">
            </div>
            <div>
            <label for="fnac">FECHA DE NACIMIENTO: </label>
            <input class="block w-full" type="date" name="fnac">
            </div>
            <div>
            <label for="Edad">EDAD: </label>
            <input class="block w-full" type="number" name="Edad">
            </div>
            <div>
            <label for="CURP">CURP: </label>
            <input class="block w-full" type="text" name="CURP">
            </div>
        </div>

        <div id="paso-2" class="ocultar">
            <legend>DATOS DEL O DE LA DERECHOHABIENTE</legend>
            <div>
            <label for="PDE">PRIMER APELLIDO: </label>
            <input class="block w-full" type="text" name="PDE">
            </div>
            <div>
            <label for="SDE">SEGUNDO APELLIDO: </label>
            <input class="block w-full" type="text" name="SDE">
            </div>
            <div>
            <label for="nombreDE">NOMBRE(S): </label>
            <input class="block w-full" type="text" name="nombreDE">
            </div>
            <div>
            <label for="calle">CALLE: </label>
            <input class="block w-full" type="text" name="calle">
            </div>
            <div>
            <label for="noext">NO. EXT: </label>
            <input class="block w-full" type="number" name="noext">
            </div>
            <div>
            <label for="noint">NO. INT:  </label>
            <input class="block w-full" type="number" name="noint">
            </div>
            <div>
            <label for="colonia">COLONIA:  </label>
            <input class="block w-full" type="text" name="colonia">
            </div>
            <div>
            <label for="entidad">ENTIDAD FEDERATIVA:  </label>
            <select class="entidad block w-full text-center" name="entidad">
                <option selected disabled>---Seleccione una opción---</option>
            </select>
            </div>
            <div>
            <label for="alcmuni">ALCALDIA O MUNICIPIO:  </label>
            <select class="municipio block w-full text-center" id="municipio"  name="alcmuni">
                <option selected disabled>---Seleccione una opción---</option>
            </select>
            </div>
            <div>
            <label for="cp">C.P:  </label>
            <input class="block w-full" type="text" name="cp">
            </div>
            <div>
            <label for="telfijo">TELEFONO FIJO:  </label>
            <input class="block w-full" type="number" name="telfijo">
            </div>
            <div>
            <label for="telcel">TELEFONO CELULAR:  </label>
            <input class="block w-full" type="number" name="telcel">
            </div>
            <div>
            <label for="correo">CORREO ELECTRONICO:  </label>
            <input class="block w-full" type="email" name="correo">
            </div>
            <div>
            <label for="ocupacion">OCUPACION:  </label>
            <select name="ocupacion" class="block w-full">
                <option value="Docente">Docente</option>
                <option value="PAAE">PAAE</option>
                <option value="Funcionario">FUNCIONARIO(A)</option>
            </select>
            </div>
            <div>
            <label for="curpDE">CURP:  </label>
            <input class="block w-full" type="text" name="curpDE">
            </div>
            <div>
            <label for="puesto">NOMBRE DE PLAZA O PUESTO:  </label>
            <input class="block w-full" type="text" name="puesto">
            </div>
            <div>
            <label for="sueldo">SUELDO MENSUAL:  </label>
            <input class="block w-full" type="number" name="sueldo">
            </div>
            <div>
            <label for="noempleado">NUMERO DE EMPLEADO:  </label>
            <input class="block w-full" type="number" name="noempleado">
            </div>
            <div>
            <label for="adscripcion">ADSCRIPCION:  </label>
            <input class="block w-full" type="text" name="adscripcion">
            </div>
            <div>
            <label for="hortrabajo">HORARIO DE TRABAJO:  </label>
            <input class="block w-full" type="time" name="hortrabajo">
            </div>
            <div>
            <label for="extencionDE">EXTENCION:  </label>
            <input class="block w-full" type="number" name="extencionDE">
            </div>
        </div>

        <div id="paso-3" class="ocultar">
            <legend>DATOS DEL CONYUGE (PADRE,MADRE)</legend>
            <div>
            <label for="PapePM">PRIMER APELLIDO: </label>
            <input class="block w-full" type="text" name="PapePM">
            </div>
            <div>
            <label for="SapePM">SEGUNDO APELLIDO: </label>
            <input class="block w-full" type="text" name="SapePM">
            </div>
            <div>
            <label for="nombrePM">NOMBRE(S): </label>
            <input class="block w-full" type="text" name="nombrePM">
            </div>
            <div>
            <label for="callePM">CALLE: </label>
            <input class="block w-full" type="text" name="callePM">
            </div>
            <div>
            <label for="noextPM">NO. EXT: </label>
            <input class="block w-full" type="number" name="noextPM">
            </div>
            <div>
            <label for="nointPM">NO. INT:  </label>
            <input class="block w-full" type="number" name="nointPM">
            </div>
            <div>
            <label for="coloniaPM">COLONIA:  </label>
            <input class="block w-full" type="text" name="coloniaPM">
            </div>
            <div>
            <label for="entidadPM">ENTIDAD FEDERATIVA:  </label>
            <select class="entidad text-center block w-full" name="entidadPM">
            <option selected disabled>---Seleccione una opción---</option>
            </select>
            </div>
            <div>
            <label for="alcmuniPM">ALCALDIA O MUNICIPIO:  </label>
            <select class="municipio text-center block w-full" name="alcmuniPM">
            <option selected disabled>---Seleccione una opción---</option>
            </select>
            </div>
            <div>
            <label for="cpPM">C.P:  </label>
            <input class="block w-full" type="text" name="cpPM">
            </div>
            <div>
            <label for="telfijoPM">TELEFONO FIJO:  </label>
            <input class="block w-full" type="number" name="telfijoPM">
            </div>
            <div>
            <label for="telcelPM">TELEFONO CELULAR:  </label>
            <input class="block w-full" type="number" name="telcelPM">
            </div>
            <div>
            <label for="lugtrab">LUGAR DE TRABAJO:  </label>
            <input class="block w-full" type="text" name="lugtrab">
            </div>
            <div>
            <label for="domitrabajo">DOMICILIO DEL TRABAJO:  </label>
            <input class="block w-full" type="text" name="domitrabajo">
            </div>
            <div>
            <label for="teltrabajo">TELEFONO TRABAJO:  </label>
            <input class="block w-full" type="number" name="teltrabajo">
            </div>
            <div>
            <label for="extPM">EXTENSION:  </label>
            <input class="block w-full" type="number" name="extPM">
            </div>

            <button class="bg-rose-500 text-white p-2 mt-3 w-full uppercase" type="submit">Registrar</button>
        </div>
    </form>

    </div>