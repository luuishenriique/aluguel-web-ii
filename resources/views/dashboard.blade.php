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
                        <b>Histórico de Aluguéis</b>
                        <br>
                        <br>
                        @php
                        $rents = App\Models\Rent::where('client_id', Auth::user()->id)->get();
                        @endphp
                        <table class="table-auto">
                            <thead>
                                <tr class="bg-emerald-200">
                                    <th>Nº Protocolo</th>
                                    <th>Data de aluguel</th>
                                    <th>Data de devolução</th>
                                    <th>Cod. Instrumento</th>
                                    <th>Valor($)</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rents as $rent)
                                @php
                                $orders = App\Models\Order::where('rent_id', $rent->id)->get();
                                @endphp
                                <tr>
                                    <td>{{$rent->id}}</td>
                                    <td>{{$rent->date_out}}</td>
                                    <td>{{$rent->date_in}}</td>
                                    <td>{{$rent->instrument_id}}</td>
                                    @foreach($orders as $order)
                                    <td>{{$order->total}}</td>
                                    @endforeach
                                    <td><a class="bg-red-200 rounded hover:bg-red-300" href="{{ route('rm-rent', $rent)}}">Excluir</a></td>
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
