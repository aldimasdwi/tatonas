<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah</title>
    <link rel="shortcut icon" href="img/1.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>


<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t bg-white mb-0 px-6 py-6">
      <div class="text-center flex justify-between">
        <h6 class="text-blueGray-700 text-xl font-bold">
          Transaksi
        </h6>
        <a href="/dashboard" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
          beck
    </a>
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

      <form action="/tambahtransaksi" method="post">
        @csrf
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          data
        </h6>
        <div class="flex flex-wrap">
          
          <div class="w-full lg:w-6/12 px-4">
            <label class="text-dark dark:text-gray-200" for="passwordConfirmation">hardware	</label>
            <select name="hardware_id" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                @foreach ($har as $hr )
                <option value="{{ $hr->id }}">{{ $hr->hardware }}</option>
                @endforeach
            </select>
        </div>

          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                parameter
              </label>
              <input type="text" name="parameter" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" >
            </div>
          </div>

          <div class="w-full lg:w-6/12 px-4">
            <label class="text-dark dark:text-gray-200" for="passwordConfirmation">created_by	</label>
            <select name="created_by_id" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                @foreach ($har as $heer )
                <option value="{{ $heer->id }}">{{ $heer->hardware }}</option>
                @endforeach
            </select>
        </div>

          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                created_at
              </label>
              <input type="datetime-local" name="waktu" id="">
            </div>
          </div>

        </div>
        <input type="submit" class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" value="Tambah">
      </form>
    </div>
  </div>
</div>
</section>
</body>
</html>