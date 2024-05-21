@extends('_layouts.main')

@section('content')
                <!-- ===== Main Content Start ===== -->
                <main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        <!-- Breadcrumb Start -->
                        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                                Tables
                            </h2>

                            <nav>
                                <a
                                    href="/create"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                >
                                    Create
                                </a>
                            </nav>
                        </div>
                        <!-- Breadcrumb End -->

                        <!-- ====== Table Section Start -->
                        <div class="flex flex-col gap-10">
                            <!-- ====== Table Two Start -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="font-medium">ID</p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Anime Name</p>
                                    </div>
                                    <div class="col-span-3 flex items-center">
                                        <p class="font-medium">Descrptions</p>
                                    </div>
                                    
                                </div>
                                
                                @foreach ($genres as $genre)

                                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                                    <div class="col-span-1 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                        {{  $genre['id']  }}
                                        </p>
                                    </div>

                                    <div class="col-span-3 flex items-center">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <div class="w-12 rounded-md">
                                            <img src="src/images/movie/{{  $genre['poster']  }}" alt="Product" />
                                            </div>
                                            <p class="text-sm font-medium text-black dark:text-white">
                                                {{  $genre['title']  }}
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-span-3 flex items-center">
                                        <p class="text-sm font-medium text-black dark:text-white">
                                        {{  $genre['descriptions']  }}
                                        </p>
                                    </div>
                                    
                                </div>
                                
                                </div>
                                @endforeach
                            </div>

                            <!-- ====== Table Two End -->
                        </div>
                        <!-- ====== Table Section End -->
                    </div>
                </main>
                <!-- ===== Main Content End ===== -->
@endsection