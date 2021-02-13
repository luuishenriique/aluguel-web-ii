<style type="text/css">

  table{
   border-collapse: collapse;
   text-align: center;
 }
 table td{
   border: 1px dotted black;
 }
 table th{
  border: 1px dotted black;
}
</style>

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12 flex items-stretch">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="block text-center textx1 pb-3">
            <b>Instrumentos Cadastrados</b> -> 
            <a href="{{ route('instruments') }}" class="bg-green-200 rounded hover:bg-green-300 text-justify">Cadastrar instrumento</a>
            <br>
            <br>
            @php
            $instrumentos = App\Models\Instrument::all();
            @endphp
            <table class="table-auto">
              <thead>
                <tr class="bg-emerald-200">
                  <th>Nº Instrumento</th>
                  <th>Nome</th>
                  <th>Modelo</th>
                  <th>Ano</th>
                  <th>Valor($)</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tbody>
                @foreach($instrumentos as $instrument)
                <tr>
                  <td>{{$instrument->id}}</td>
                  <td>{{$instrument->name}}</td>
                  <td>{{$instrument->model}}</td>
                  <td>{{$instrument->year}}</td>
                  <td>{{$instrument->price}}</td>
                  <td><a class="bg-red-200 rounded hover:bg-red-300" href="{{ route('rm-instrument', $instrument)}}">Excluir</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>