






<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold  text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Barangay Health Center Appointment Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12 col-md-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-center text-gray-900 dark:text-gray-100">


                  {{ __("Your recent appointments") }}

                  <div class="bg-red-100">
                      <table class=" table-auto w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                          <thead class=" text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                              <tr >
                                  
                                  
                                  {{-- <th scope="col" class="px-6 py-3">
                                      Name
                                  </th> --}}
                                  {{-- <th scope="col" class="px-6 py-3">
                                      Gender
                                  </th> --}}
                                  {{-- <th scope="col" class="px-6 py-3">
                                    Date of Birth
                                  </th> --}}
                                
                                  <th scope="col" class="px-6 py-3">
                                    Booked Service 
                                  </th>
                                
                                  <th scope="col" class="px-6 py-3">
                                    Your Concern Details
                                  </th>
                                  {{-- <th scope="col" class="px-6 py-3">
                                    Contact Number
                                  </th> --}}
                                  <th scope="col" class="px-6 py-3">
                                  Status
                                  </th>
                                  
                                  
                              </tr>
                            <hr/>
                              
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment )
                                <tr class="hover:bg-green-50 	">
                                  {{-- <th scope="col" class="px-6 py-3 font-normal text-gray-900">{{$appointment->id}}</td> --}}
                                    {{-- <th scope="col" class="px-6 py-3 font-normal	text-gray-900">{{$appointment->suffix_name}} {{$appointment->last_name}}, {{$appointment->first_name}} {{$appointment->middle_name}}</td> --}}
                                      {{-- <th scope="col" class="px-6 py-3 font-normal text-gray-900	">{{$appointment->gender}}</td> --}}
                                        {{-- <th scope="col" class="px-6 py-3 font-normal	 text-gray-900">{{$appointment->birth_date}}</td> --}}
                                          <th scope="col" class="px-6 py-3 font-normal	text-gray-900">{{$appointment->service_type}}</td>
                                            <th scope="col" class="px-6 py-3 font-normal	text-gray-900">{{$appointment->concern}}</td>
                                              {{-- <th scope="col" class="px-6 py-3 font-normal	text-gray-900">{{$appointment->phone}}</td> --}}
                                                {{-- <td>
                                                  <a href="{{route('appointment.edit', ['appointment' => $appointment])}}">Edit</a>
                                              </td> --}}
                                              <td>
                                                  <form method="post" action="{{route('appointment.destroy', ['appointment' => $appointment])}}">
                                                      @csrf
                                                      @method('delete')
                                          
                                                      <input type="submit" value="Cancel">
                                               
                                </tr>@endforeach
                            </tbody>
                      </table>
                  </div>
              </div>

              
              </div>
          </div>
      </div>
 
</x-app-layout>




















{{-- <x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold  text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Barangay Health Center Appointment Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12 col-md-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-center text-gray-900 dark:text-gray-100">
                  {{ __("Book your appointment here") }}
              </div>

              
              </div>
          </div>
      </div>
 
</x-app-layout> --}}
