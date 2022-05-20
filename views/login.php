<main class="flex flex-col h-screen md:flex-row overflow-hidden">
<div class="w-11/12 bg-cover" style="background-image: url('cendiipn.png')"></div>
<!--<div class="w-1/2 items-center justify-center">-->
<div class="flex flex-col items-center justify-center p-2 md:w-11/12">
  <form class="p-12 rounded-md " method="POST" action="/">
      <?php include_once './../includes/templates/errores.php' ?>
      <div>
          <p class="text-gray-600 text-center font-medium text-4xl">Iniciar sesión </p></br></br>
          <label class="text-gray-600 font-normal text-2xl" for="usuario">Usuario: </label> </br>
          <input class="mb-7 block w-full px-1 py-1 pl-8 border-b-2 text-gray-700 focus:outline-none focus:border-green-500" type="text" name="usuario" id="usuario" />
      </div>

      <div>
          <label class="text-gray-600 font-normal text-2xl" for="password"> Contraseña: </label> </br>
          <input class="block w-full px-1 py-1 pl-8 border-b-2 text-gray-700 focus:outline-none focus:border-green-500"  type="password" name="password" id="password" /> </br>
      </div></br>
      <div class="flex flex-col justify-center items-center">
      <button class=" bg-blue-600 text-gray-200 rounded hover:bg-blue-500 px-4 py-2 focus:outline-none" type="submit">Iniciar sesión</button>
      </div>
  </form>
</div>
</main>
