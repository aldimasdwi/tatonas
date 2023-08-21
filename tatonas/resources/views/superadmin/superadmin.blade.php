
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="/a/assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="/a/assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="/a/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    

    <!-- Tambahkan CSS Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Tambahkan JavaScript Bootstrap (jQuery harus di-load sebelumnya) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="/a/assets/styles/tailwind.css" />
    <title>home</title>
    <link rel="shortcut icon" href="img/1.png" type="image/x-icon">
  </head>
  <body class="text-blueGray-700 antialiased">
    <div id="root">
      <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
      >
        
          <form action="/logout" method="post">
            @csrf
            <button type="submit"><i class="bi bi-box-arrow-right"></i> Logout</button>
          </form>

                <a
                  href="/dashboard"
                  class="text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600"
                >
                  <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                  Dashboard
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            
        </div>
      </nav>

      
      <div class="relative md:ml-64 bg-blueGray-50">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="./index.html"
              >Dashboard</a
            >
          </div>
        </nav>



        <!-- Header -->



        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full">
            <div>



              <div class="flex flex-wrap mt-4">
                <div class="w-full  mb-12 xl:mb-0 px-4">
                  <div
                    class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
                  >
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                      <div class="flex flex-wrap items-center">
                        <div
                          class="relative w-full px-4 max-w-full flex-grow flex-1"
                        >
                          <h3 class="font-semibold text-base text-blueGray-700">
                            Data
                          </h3>
                         <div class="flex gap-3">

                          <div>
                            <a href="/dashboard" type="submit" class="btn active btn-danger" > Refresh </a>
                          </div>

                          <button type="button" class=" active btn btn-primary" data-toggle="modal" data-target="#myModal">
                              PDF
                            </button>

                            <button type="button" class=" active btn btn-success" data-toggle="modal" data-target="#myModalx">
                              EXCEL
                            </button>

                         </div>
                         <br>
                        </div>
                      </div>
                    </div>

                    
                      <form action="/dashboard" method="post">
                        @csrf
                      <div class="mx-auto ml- mb-[35px] flex h-full items-end gap-5">
                         <div>
                         </div>
                         <div>
                        </div><div>
                        </div><div>
                        </div>
                        
                          <div>
                            <label for="a">Date From</label> <br>
                            <input type="date" id="a" name="from" id="" >
                          </div>
    
                          <div>
                            <label for="a">Date End</label> <br>
                            <input type="date" name="end" id="">
                          </div>

                          <div class=" h-full flex items-end ">
                            <div>
                              <label for="a">Hardware</label> <br>
                              <select class="py-2 px-24" name="hardware">
                                @foreach ( $har as $hr )
                                <option value="{{ $hr->hardware }}">{{ $hr->hardware }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          <div class="h-full flex items-end ">
                            <div class="border-2 border-red-500 py-2 px-6 hover:bg-red-500 hover:text-white">
                              <button type="submit" > Cari Data</button>
                            </div>
                          </div>
                        
                      </div>
                      </form>


                      {{-- ///////////////////////// --}}

                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                            <!-- Header modal -->
                            <div class="modal-header">
                              <h4 class="modal-title">PDF Yang Mau Dicetak</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Konten modal -->
                            <div class="modal-body">
                  
                  <form method="Post" action="/pdf">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="contoh1">Date From</label>
                        <input type="date" name="from" class="form-control" id="contoh1" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="contoh2">Date End</label>
                        <input type="date" name="end" class="form-control" id="contoh2" placeholder="Pekerjaan Ayah">
                      </div>
                      <div class="form-group">
                        <label for="pekerjaan">Hardware</label>
                        <select id="pekerjaan" name="hardware" class="form-control">
                          @foreach ( $har as $hr )
                           <option value="{{ $hr->hardware }}">{{ $hr->hardware }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                   
                    <button type="submit" class="btn active btn-primary">Cetak PDF</button>
                  </form>
                </div>
                          </div>
                        </div>
                      </div>


                      {{-- --------------------------- --}}
                      
                      <div class="modal" id="myModalx">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                            <!-- Header modal -->
                            <div class="modal-header">
                              <h4 class="modal-title">EXCEL Yang Mau Dicetak</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Konten modal -->
                            <div class="modal-body">
                  
                  <form method="get" action="/excel">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="contoh1">Date From</label>
                        <input type="date" name="from" class="form-control" id="contoh1" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="contoh2">Date End</label>
                        <input type="date" name="end" class="form-control" id="contoh2" placeholder="Pekerjaan Ayah">
                      </div>
                      <div class="form-group">
                        <label for="pekerjaan">Hardware</label>
                        <select id="pekerjaan" name="hardware" class="form-control">
                          @foreach ( $har as $hr )
                           <option value="{{ $hr->hardware }}">{{ $hr->hardware }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                   
                    <button type="submit" class="btn active btn-primary">Cetak EXCEL</button>
                  </form>
                </div>
                          </div>
                        </div>
                      </div>
                  
                      
                    
                       @if(isset($data) && $data)

                       <div class="container">
                        <section class="mx-auto my-5" style="position: relative; padding-bottom: 56.25%; /* 16:9 aspect ratio */ max-width: 100%;">
                            @php
                                $zoom = 13;
                            @endphp
                             
                    
                            <iframe src="https://maps.google.com/maps?q={{ $idsemua->latitude }}, {{ $idsemua->longitude }}&z={{ $zoom }}&output=embed" frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen></iframe>
                        </section>
                      </div>
                    
                       {{-- ------------------- --}}
                    
                       <div class="flex flex-col">
                         <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                           <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                             <div class="overflow-hidden">
                               <table class="min-w-full text-left text-sm font-light">
                                 <thead
                                   class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                   <tr>
                                     <th scope="col" class="px-6 py-4">Data</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr
                                     class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                                     
                                     <td class="whitespace-nowrap px-6 py-4">
                                       <b>Location : {{ $idsemua->location }}</b> <br>
                                       <b>Coordinate : {{ $idsemua->latitude }} , {{ $idsemua->longitude }}</b> <br>
                                       <b>Last Send : {{ $idsemua->local_time }}</b> <br>
                                       <b>Maximal Value : {{ $max }}</b> <br>
                                       <b>Minimal Value : {{ $min }}</b> <br>
                                     </td>
                                   </tr>
                                 </tbody>
                               </table>
                             </div>
                           </div>
                         </div>
                       </div>
   
   
                       {{-- ------------------------- --}}
   
                       <div class="flex flex-wrap">
                         <div class="w-full  mb-12 xl:mb-0 px-4">
                           <div
                             class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-700"
                           >
                             <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                               <div class="flex flex-wrap items-center">
                                 <div class="relative w-full max-w-full flex-grow flex-1">
                                   <h6
                                     class="uppercase text-blueGray-100 mb-1 text-xs font-semibold"
                                   >
                                     
                                   </h6>
                                   <h2 class="text-white text-xl font-semibold">
                                     Grafik
                                   </h2>
                                 </div>
                               </div>
                             </div>
                             <div class="p-4 flex-auto">
                               <!-- Chart -->
                               <div class="relative h-350-px">
                                 <canvas id="line-chart"></canvas>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
   
                       {{-- ------------------------- --}}
   
   
                       <div class="flex flex-col">
                         <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                           <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                             <div class="overflow-hidden">
                               <table class="min-w-full text-left text-sm font-light">
                                 <thead
                                   class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                   <tr>
                                     <th scope="col" class="px-6 py-4">No</th>
                                     <th scope="col" class="px-6 py-4">Local Time</th>
                                     @if ($sensor === "4001")
                                       <th scope="col" class="px-6 py-4">Rainfall (mm)</th>
                                      @elseif ($sensor === "4002")
                                       <th scope="col" class="px-6 py-4">Water Level (cm)</th>
                                       <th scope="col" class="px-6 py-4">Battery (Volt)</th>
                                      @elseif ($sensor === "4003")
                                       <th scope="col" class="px-6 py-4">Air Humidity (%)</th>
                                       <th scope="col" class="px-6 py-4">Wind Speed (m/s)</th>
                                       <th scope="col" class="px-6 py-4">Battery (Volt)</th>
                                      @endif
                                   </tr>
                                 </thead>
                                 <tbody>
                                   @foreach ($tde as $td)
                                   @php
                                    $collectedData[] = $td->value;
                                    @endphp
                                   @endforeach
                                   @foreach ($data as $index => $d)
                                      <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-gray-200' }}">
                                     <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $index + 1 }}</td>
                                     <td class="whitespace-nowrap px-6 py-4">{{ $d->waktu }}</td>
                                     <td class="whitespace-nowrap px-6 py-4">
                                     @if (isset($collectedData[$index]))
                                     {{ $collectedData[$index] }}
                                      @endif
                                     </td>
                                      </tr>
                                     @endforeach
   
                                   </tbody>
                                 </table>
                                 
                               </div>
                           </div>
                         </div>
                       </div>
   
                       
                      @endif
   

    
                    
                    
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          


          {{-- -------MasterSensor------------ --}}

          <div class="flex flex-wrap mt-4">
            <div class="w-full  mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-base text-blueGray-700">
                        Tabel Master Sensor
                      </h3>
                    </div>
                    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                    >
                      <a href="/tambah"
                        class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button"
                      >
                        Tambah
                  </a>
                  @if (auth()->user()->role === 'superadmin')
                  <form action="/backsensor" method="post">
                    @csrf
                    <input  class="bg-red-500 cursor-pointer text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="submit" value="Callback Data">
                  </form>
                  @endif
                    </div>
                    @endif
                  </div>
                </div>

                        <table class="min-w-full text-left text-sm font-light">
                          <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                              <th scope="col" class="px-6 py-4">no</th>
                              <th scope="col" class="px-6 py-4">sensor</th>
                              <th scope="col" class="px-6 py-4">sensor_name</th>
                              <th scope="col" class="px-6 py-4">unit</th>
                              <th scope="col" class="px-6 py-4">created_by</th>
                              <th scope="col" class="px-6 py-4">created_at</th>
                              @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                              <th scope="col" class="px-6 py-4">update</th>
                              <th scope="col" class="px-6 py-4">delete</th>
                              @if (auth()->user()->role === 'superadmin')
                              <th scope="col" class="px-6 py-4">Hard Delete</th>
                              @endif
                              @endif

                            </tr>
                          </thead>
                          <tbody>
                          <?php $a= 1 ?>
                            @foreach ($sen as $sensor)
                              
                            <div class="overflow-x-auto">
                              <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                            <tr class="border-b dark:border-neutral-500">
                              <td class="whitespace-nowrap px-6 py-4">{{ $a }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $sensor->sensor }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $sensor->sensor_name }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $sensor->unit }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $sensor->created_by }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $sensor->waktu }}</td>
                    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                              <td class="whitespace-nowrap px-6 py-4">  
                                <a href="/tam/{{ $sensor->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                update
                                </a>
                                </td>
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/del/{{ $sensor->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  delete
                                  </a>
                              </td>
                              @if (auth()->user()->role === 'superadmin')
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/harddel/{{ $sensor->id }}"  class=" cursor-pointer bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  HardDelete
                                  </a>
                              </td>
                              @endif
                            </tr>
                            @endif
                            <?php $a++ ?>
                            @endforeach
                          </tbody>
                        </table>
              
                        

              </div>
            </div>
          </div>

          {{-- -----Hardwere----- --}}

          <div class="flex flex-wrap mt-4">
            <div class="w-full  mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-base text-blueGray-700">
                        Tabel Hardware
                      </h3>
                    </div>
                    @if (auth()->user()->role === 'admin' || auth()->user()->role ==='superadmin')
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                    >
                    <a href="/tambahhardware"
                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button"
                  >
                    Tambah
              </a>
              @if ( auth()->user()->role ==='superadmin')
                
              <form action="/backhardware" method="post">
                @csrf
                <input  class="bg-red-500 cursor-pointer text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                type="submit" value="Callback Data">
              </form>
              @endif
                    </div>
                    @endif
                  </div>
                </div>

                <div class="overflow-x-auto">
                        <table class="min-w-full text-left text-sm font-light">
                          <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                              <th scope="col" class="px-6 py-4">no</th>
                              <th scope="col" class="px-6 py-4">hardware</th>
                              <th scope="col" class="px-6 py-4">location</th>
                              <th scope="col" class="px-6 py-4">timezone</th>
                              <th scope="col" class="px-6 py-4">local_time</th>
                              <th scope="col" class="px-6 py-4">latitude</th>
                              <th scope="col" class="px-6 py-4">longitude</th>
                              <th scope="col" class="px-6 py-4">created_by</th>
                              <th scope="col" class="px-6 py-4">created_at</th>
                              <th scope="col" class="px-6 py-4">update</th>
                              @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                              <th scope="col" class="px-6 py-4">delete</th>
                              @if ( auth()->user()->role ==='superadmin')
                              <th scope="col" class="px-6 py-4">Hard delete</th>
                              @endif
                              @endif
                            </tr>
                          </thead>
                          <tbody>
                            <?php $a=1 ?>
                            @foreach ($har as $har)
                              
                            <tr class="border-b dark:border-neutral-500">
                              <td class="whitespace-nowrap px-6 py-4">{{ $a }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $har->hardware }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $har->location }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $har->timezone }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $har->local_time }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $har->latitude }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $har->longitude }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $har->created_by }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $har->waktu }}</td>
                              <td class="whitespace-nowrap px-6 py-4">  
                                
                                <a href="/hardwareupdate/{{ $har->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                update
                                </a>
                                </td>
                              @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/hardwaredelete/{{ $har->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  delete
                                  </a>
                              </td>
                              @if ( auth()->user()->role ==='superadmin')
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/hharddel/{{ $har->id }}"  class=" cursor-pointer bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  HardDelete
                                  </a>
                              </td>
                              @endif
                              @endif
                            </tr>
                            <?php $a++ ?>
                            @endforeach
                          </tbody>
                        </table>
                </div>

              </div>
            </div>
          </div>

          {{-- ------Hardware Detail------ --}}
          <div class="flex flex-wrap mt-4">
            <div class="w-full  mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-base text-blueGray-700">
                        Tabel Hardware Detail
                      </h3>
                    </div>
          @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                    >
                    <a href="/tambahharditail"
                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button"
                  >
                    Tambah
              </a>
              @if ( auth()->user()->role ==='superadmin')
              <form action="/backhd" method="post">
                @csrf
                <input  class="bg-red-500 cursor-pointer text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                type="submit" value="Callback Data">
              </form>
              @endif
                    </div>
                    @endif
                  </div>
                </div>

                <div class="overflow-x-auto">
                        <table class="min-w-full text-left text-sm font-light">
                          <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                              <th scope="col" class="px-6 py-4">no</th>
                              <th scope="col" class="px-6 py-4">hardware</th>
                              <th scope="col" class="px-6 py-4">sensor</th>
                              <th scope="col" class="px-6 py-4">update</th>
                              @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                              <th scope="col" class="px-6 py-4">delete</th>
                              @if ( auth()->user()->role ==='superadmin')
                              <th scope="col" class="px-6 py-4">Hadwer Delete</th>
                              @endif
                              @endif
                            </tr>
                          </thead>
                          <tbody>
                            <?php $a=1 ?>
                            @foreach ($detail as $det)
                              
                            <tr class="border-b dark:border-neutral-500">
                              <td class="whitespace-nowrap px-6 py-4">{{ $a }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $det->hardware->hardware }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $det->sensor->sensor }}</td>
                              <td class="whitespace-nowrap px-6 py-4">  
                                
                                <a href="/hardetailupdate/{{ $det->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                update
                                </a>
                                </td>
                               @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/hardetaildelete/{{ $det->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  delete
                                  </a>
                              </td>
                              @if ( auth()->user()->role ==='superadmin')
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/hardhddetail/{{ $det->id }}"  class=" cursor-pointer bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  HardDelete
                                  </a>
                              </td>
                              @endif
                              @endif
                            </tr>
                            <?php $a++?>
                            @endforeach
                          </tbody>
                        </table>
                </div>

              </div>
            </div>
          </div>

          @if (auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
              
          {{-- ------Transaksi------ --}}
          <div class="flex flex-wrap mt-4">
            <div class="w-full  mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-base text-blueGray-700">
                        Tabel Transaksi
                      </h3>
                    </div>
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                    >
                    <a href="/tambahtransaksi"
                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button"
                  >
                    Tambah
              </a>
              @if ( auth()->user()->role ==='superadmin')
                  <form action="/backtransaksi" method="post">
                    @csrf
                    <input  class="bg-red-500 cursor-pointer text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="submit" value="Callback Data">
                  </form>
                  @endif
                    </div>
                  </div>
                </div>

                <div class="overflow-x-auto">
                        <table class="min-w-full text-left text-sm font-light">
                          <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                              <th scope="col" class="px-6 py-4">no</th>
                              <th scope="col" class="px-6 py-4">hardware</th>
                              <th scope="col" class="px-6 py-4">parameter</th>
                              <th scope="col" class="px-6 py-4">created_by</th>
                              <th scope="col" class="px-6 py-4">created_at</th>
                              <th scope="col" class="px-6 py-4">update</th>
                              <th scope="col" class="px-6 py-4">delete</th>
                              @if ( auth()->user()->role ==='superadmin')
                              <th scope="col" class="px-6 py-4">Hard delete</th>
                              @endif
                            </tr>
                          </thead>
                          <tbody>
                            <?php $a=1; ?>
                            @foreach ($trans as $ter)
                              
                            <tr class="border-b dark:border-neutral-500">
                              <td class="whitespace-nowrap px-6 py-4">{{ $a }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $ter->hardware->hardware }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $ter->parameter}}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $ter->created_by->hardware}}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $ter->waktu}}</td>
                              <td class="whitespace-nowrap px-6 py-4">  
                                
                                <a href="/transaksiupdate/{{ $ter->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                update
                                </a>
                                </td>
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/transaksidelete/{{ $ter->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  delete
                                  </a>
                              </td>
                              @if ( auth()->user()->role ==='superadmin')
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/hardtransaksi/{{ $ter->id }}"  class=" cursor-pointer bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  HardDelete
                                  </a>
                              </td>
                              @endif
                            </tr>
                            <?php $a++ ;?>
                            @endforeach
                          </tbody>
                        </table>
                </div>

              </div>
            </div>
          </div>

          {{-- ------td------ --}}
          <div class="flex flex-wrap mt-4">
            <div class="w-full  mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-base text-blueGray-700">
                        Tabel Transaksi Detail
                      </h3>
                    </div>
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                    >
                    <a href="/tambahtransaksidetail"
                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button"
                  >
                    Tambah
              </a>
              @if ( auth()->user()->role ==='superadmin')
              <form action="/backtrd" method="post">
                @csrf
                <input  class="bg-red-500 cursor-pointer text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                type="submit" value="Callback Data">
              </form>
              @endif
                    </div>
                  </div>
                </div>

                <div class="overflow-x-auto">
                        <table class="min-w-full text-left text-sm font-light">
                          <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                              <th scope="col" class="px-6 py-4">no</th>
                              <th scope="col" class="px-6 py-4">trans_id</th>
                              <th scope="col" class="px-6 py-4">hardware</th>
                              <th scope="col" class="px-6 py-4">sensor</th>
                              <th scope="col" class="px-6 py-4">value</th>
                              <th scope="col" class="px-6 py-4">update</th>
                              <th scope="col" class="px-6 py-4">delete</th>
                              @if ( auth()->user()->role ==='superadmin')
                              <th scope="col" class="px-6 py-4">Hard delete</th>
                              @endif
                            </tr>
                          </thead>
                          <tbody>
                            <?php $a=1 ?>
                            @foreach ($tra as $tr)
                              
                            <tr class="border-b dark:border-neutral-500">
                              <td class="whitespace-nowrap px-6 py-4">{{ $a }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $tr->transaksi->id }}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $tr->hardware->hardware}}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $tr->sensor->sensor}}</td>
                              <td class="whitespace-nowrap px-6 py-4">{{ $tr->value}}</td>
                              <td class="whitespace-nowrap px-6 py-4">  
                                
                                <a href="/transaksidetailupdate/{{ $tr->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                update
                                </a>
                                </td>
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/transaksidetaildelete/{{ $tr->id }}"  class=" cursor-pointer bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  delete
                                  </a>
                              </td>
                              @if ( auth()->user()->role ==='superadmin')
                              <td class="whitespace-nowrap px-6 py-4">
                                <a href="/hardttd/{{ $tr->id }}"  class=" cursor-pointer bg-red-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                  HardDelete
                                  </a>
                              </td>
                              @endif
                            </tr>
                            <?php $a++?>
                            @endforeach
                          </tbody>
                        </table>
                </div>

              </div>
            </div>
          </div>

          @endif

        </div>
      </div>
    </div>

    @if(isset($data) && $data)
        
    
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        /* Make dynamic date appear */
        (function () {
            if (document.getElementById("get-current-year")) {
                document.getElementById("get-current-year").innerHTML =
                    new Date().getFullYear();
            }
        })();

        /* Sidebar - Side navigation menu on mobile/responsive mode */
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("bg-white");
            document.getElementById(collapseID).classList.toggle("m-2");
            document.getElementById(collapseID).classList.toggle("py-3");
            document.getElementById(collapseID).classList.toggle("px-6");
        }

        /* Function for dropdowns */
        function openDropdown(event, dropdownID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start"
            });
            document.getElementById(dropdownID).classList.toggle("hidden");
            document.getElementById(dropdownID).classList.toggle("block");
        }

        (function () {
            /* Chart initialisations */
            /* Line Chart */
            var config = {
                type: "line",
                data: {
                    labels: [
                        @foreach ($data as $d)
                        '{{$d->waktu}}',
                        @endforeach
                    ],
                    datasets: [
                        {
                            label: new Date().getFullYear(),
                            backgroundColor: "#4c51bf",
                            borderColor: "#4c51bf",
                            data: [
                                @foreach ($tde as $t)
                                '{{$t->value}}',
                                @endforeach
                            ],
                            fill: false
                        },
                    ]
                },

                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    title: {
                        display: false,
                        text: "Sales Charts",
                        fontColor: "white"
                    },
                    legend: {
                        labels: {
                            fontColor: "white"
                        },
                        align: "end",
                        position: "bottom"
                    },
                    tooltips: {
                        mode: "index",
                        intersect: false
                    },
                    hover: {
                        mode: "nearest",
                        intersect: true
                    },
                    scales: {
                        xAxes: [
                            {
                                ticks: {
                                    fontColor: "rgba(255,255,255,.7)"
                                },
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: "Month",
                                    fontColor: "white"
                                },
                                gridLines: {
                                    display: false,
                                    borderDash: [2],
                                    borderDashOffset: [2],
                                    color: "rgba(33, 37, 41, 0.3)",
                                    zeroLineColor: "rgba(0, 0, 0, 0)",
                                    zeroLineBorderDash: [2],
                                    zeroLineBorderDashOffset: [2]
                                }
                            }
                        ],
                        yAxes: [
                            {
                                ticks: {
                                    fontColor: "rgba(255,255,255,.7)"
                                },
                                display: true,
                                scaleLabel: {
                                    display: false,
                                    labelString: "Value",
                                    fontColor: "white"
                                },
                                gridLines: {
                                    borderDash: [3],
                                    borderDashOffset: [3],
                                    drawBorder: false,
                                    color: "rgba(255, 255, 255, 0.15)",
                                    zeroLineColor: "rgba(33, 37, 41, 0)",
                                    zeroLineBorderDash: [2],
                                    zeroLineBorderDashOffset: [2]
                                }
                            }
                        ]
                    }
                }
            };
            var ctx = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(ctx, config);
        })();
    </script>
    @endif

    
   


  </body>
</html>
