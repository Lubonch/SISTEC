<div class="row">

              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" name="firstName" placeholder="" value="" >
                <div class="invalid-feedback">
                  Tu nombre es requerido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" name="lastName" placeholder="" value="" >
                <div class="invalid-feedback">
                  Tu apellido es requerido.
                </div>
              </div>
            </div>


 			<div class="row">
              <div class="col-md-3 mb-3">
                <label for="sexo">Sexo</label>
                <select class="custom-select d-block w-100" name="sexo" >
                  <option value="">Elegir...</option>
                  <option>Femenino</option>
			 		<option>Masculino</option>
                </select>
                <div class="invalid-feedback">
                  Seleccione una opción válida.
                </div>
              </div>


            <div class="col-md-4 mb-3">
                <label for="dni">DNI</label>
                <input type="text" class="form-control" name="dni" placeholder="" value="" >
                <div class="invalid-feedback">
                  Tu número de DNI es requerido.
                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label for="fechanac">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechanac" placeholder="" value="" >
                <div class="invalid-feedback">
                  Tu fecha de nacimiento es requerida.
                </div>
              </div>
            </div>


			  <div class="row">
			 <div class="col-md-6 mb-3">
              <label for="username">Nombre de Usuario</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Tu nombre de usuario es requerido.
                </div>
              </div>
            </div>
			<div class="col-md-6 mb-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="" value="" required>
                <div class="invalid-feedback">
                  La contraseña es requerida
                </div>
              </div>
            </div>



			  <div class="mb-3">
              <label for="email">Correo Electronico</label> <!--<span class="text-muted">(Optional)</span>-->
              <input type="email" class="form-control" name="email" placeholder="tunombre@correo.com" value= "" required>
              <div class="invalid-feedback">
                Por favor ingresa un correo electronico valido para poder activar tu cuenta y recibir novedades sobre los talleres.
              </div>
            </div>


            <div class="mb-3">
              <label for="address">Dirección</label>
              <input type="text" class="form-control" name="address" placeholder="" >
              <div class="invalid-feedback">
                Por favor ingresa tu dirección.
              </div>
            </div>

			<div class="row">
			<div class="col-md-5 mb-3">
                <label for="altura">Altura</label>
                <input type="number" class="form-control" name="altura" placeholder="" value="" >
                <div class="invalid-feedback">
                  La altura de tu dirección es requerida.
                </div>
              </div>

				<div class="col-md-4 mb-3">
                <label for="piso">Piso <span class="text-muted">(Opcional)</span></label>
                <input type="number" class="form-control" name="piso" placeholder="" value="" >

              </div>

				<div class="col-md-3 mb-3">
                <label for="zip">CP</label>
                <input type="number" class="form-control" name="zip" placeholder="" >
                <div class="invalid-feedback">
                  Código Postal requerido.
                </div>
              </div>

            </div>


			  <div class="row">
				<div class="col-md-6 mb-3">
                <label for="loca">Localidad</label>
                <input type="text" class="form-control" name="loca" placeholder="" >
                <div class="invalid-feedback">
                  Localidad requerida.
                </div>
              </div>
			  <div class="col-md-6 mb-3">
                <label for="state">Provincia</label>
                <select class="custom-select d-block w-100" name="state" >
                  <option value="">Elegir...</option>
                  <option>Ciudad Autónoma de Buenos Aires</option>
			      <option>Provincia de Buenos Aires</option>

                </select>
                <div class="invalid-feedback">
                  Seleccione una opción válida.
                </div>
              </div>


			    </div>


			  <div class="row">
            <div class="col-md-6 mb-3">
              <label for="telefono">Teléfono Fijo +549</label>
              <input type="tel" class="form-control" name="telefono" placeholder="" value="" >
				<div class="invalid-feedback">
                  Teléfono requerido.
                </div>
            </div>
			  <div class="col-md-6 mb-3">
              <label for="telemer">Teléfono Emergencia +549 </label>
              <input type="tel" class="form-control" name="telemer" placeholder="" value="" >
				  <div class="invalid-feedback">
                  Teléfono requerido.
                </div>
            </div>
			  <div class="col-md-6 mb-3">
              <label for="cel">Celular +549 </label>
              <input type="tel" class="form-control" name="cel" placeholder="Empezando con 11">
            </div>
 </div>

 <h4 class="mb-3">Estudios Cursados</h4>


			  <div class="mb-3">
                <label for="leer">Sabe leer y escribir? </label>
                <select class="custom-select d-block w-100" name="leer" >
                  <option value="">Elegir...</option>
                  <option>Sí</option>
			      <option>No</option>

                </select>
                <div class="invalid-feedback">
                  Seleccione una opción válida.
                </div>


			  <div class="row">

				  <div class="col-md-6 mb-3">
              <label for="nivel">Último nivel alcanzado?</label>
              <select class="custom-select d-block w-100" name="nivel" >
                  <option value="">Elegir...</option>
                  <option>Ninguno</option>
			      <option>Primario</option>
				  <option>Secundario</option>
				  <option>Terciario</option>
				  <option>Universitario</option>

			   </select>
                <div class="invalid-feedback">
                  Seleccione una opción válida.
                </div>
            </div>

		 <div class="col-md-6 mb-3">
              <label for="final">Finalizó ese nivel?</label>
              <select class="custom-select d-block w-100" name="final" >
                  <option value="">Elegir...</option>
                  <option>Sí</option>
			      <option>No</option>

			   </select>
                <div class="invalid-feedback">
                  Seleccione una opción válida.
                </div>
            </div>

              </div>

			<div class="row">

				  <div class="col-md-6 mb-3">
              <label for="cursos">¿Realizó otros cursos en Educación No Formal?</label>
              <select class="custom-select d-block w-100" name="cursos" >
                  <option value="">Elegir...</option>
                  <option>Sí</option>
			      <option>No</option>

			   </select>
                <div class="invalid-feedback">
                  Seleccione una opción válida.
                </div>
            </div>

		 <div class="col-md-6 mb-3">
              <label for="como">¿Cómo conoció estas actividades? ¡Contanos!  </label>
              <input type="text" class="form-control" name="como" placeholder="" value="" >

            </div>

              </div>

				  <h4 class="mb-3">Discapacidad</h4>

			  <div class="row">
			  <div class="col-md-6 mb-3">
                <label for="discap">¿Tiene alguna discapacidad? </label>
                <select class="custom-select d-block w-100" name="discap" >
                  <option value="">Elegir...</option>
                  <option>Sí</option>
			      <option>No</option>

                </select>
                <div class="invalid-feedback">
                  Seleccione una opción válida.
                </div>
				</div>

				<div class="col-md-6 mb-3">
              <label for="tipo">Tipo</label>
              <select class="custom-select d-block w-100" name="tipo" >
                  <option value="">Elegir...</option>
                  <option>Ninguna</option>
			      <option>Física</option>
				  <option>Intelectual</option>
				  <option>Sensorial</option>


			   </select>
                <div class="invalid-feedback">
                  Seleccione una opción válida.
                </div>
            </div>
			 </div>

	<div class="mb-3">
              <label for="apoyo">Describa brevemente su discapacidad y si necesita algún apoyo y de que tipo.  </label>
              <input type="text" class="form-control" name="apoyo" placeholder="" value="">

            </div>
            </div>

            <hr class="mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block"  name= "enviar">Registrarse</button>
