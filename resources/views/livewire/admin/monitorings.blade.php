<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Monitoring Penginapan Hewan
    </h2>
  </x-slot>
  
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white sm:rounded-lg">
            <div class="p-6">
                <div class="flex px-4 py-3 sm:px-6">
                 <div class="flex-1 float-left">   
                     Kembali
                 </div>
                </div>  
             
            <form wire:submit.prevent="store">
             <div class="flex flex-col">
                 <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                   <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                     <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <div class="block ml-2">
                            <span class="text-gray-700">Makan</span>
                            <div class="mt-2">
                              <div wire:model="food">
                                @foreach ($enumfood as $item)
                                {{-- @dump($item) --}}
                                  <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <option value="{{ $item }}">{{ $item}}</option>
                                  </label>     
                                @endforeach 
                                </div>
                            </div>
                          </div>
                          @error('food') <span class="error">{{ $message }}</span> @enderror
                          <div class="block ml-2">
                            <span class="text-gray-700">Suhu Badan</span>
                            <div class="mt-2">
                              <div wire:model="temperature">
                                @foreach ($enumtemperature as $item)
                                  <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <option value="{{ $item }}">{{ $item}}</option>
                                  </label>       
                                  @endforeach 
                              </div>
                            </div>
                          </div>     
                          <div class="block ml-2">
                            <span class="text-gray-700">Obat</span>
                            <div class="mt-2">
                              <div wire:model="medicine">
                                @foreach ($enummedicine as $item)
                                  <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox">
                                    <option value="{{ $item }}">{{ $item}}</option>
                                  </label>       
                                  @endforeach 
                              </div>
                            </div>
                          </div>
                        <div class="mt-4">
                            <label for="notes">Catatan</label>
                            <textarea wire:model.debounce.800ms="notes" id="notes-taskarea" class=""></textarea>
                        </div>
                           <div class="mt-4">   
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-black border border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                                    Simpan
                                </button>
                            </div>
                        </div>
                   </div>
                 </div>
               </div>
            </form>
                 <div class="mt-5">
                     
                 </div>
             </div>
        </div>
    </div>
  </div>
  @section('scripts')
    <script>
        ClassicEditor
    .create( document.querySelector( '#notes-taskarea' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    </script>
  @endsection
  