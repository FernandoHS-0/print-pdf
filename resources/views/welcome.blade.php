<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Print PDF</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <nav class="flex justify-between px-10 xl:px-80 py-3 bg-emerald-950 w-full">
            <img src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg" alt="logo" width="98.5" height="29">
        </nav>
        <div class="w-full xl:w-4/6 lg:px-10 py-10 mx-auto" id="to-print">
            <div class="flex justify-between">
                <div>
                    <img src="{{asset('img/gep-transparent.png')}}" alt="Gobierno del estado de Puebla" width="150" height="50">
                </div>
                <div>
                    <div class="flex flex-col text-center text-sm font-bold">
                        <p>ENTREGA - RECEPCIÓN</p>
                        <P>H. AYUNTAMIENTO DE _______________________</P>
                        <p>7.17 RELACIÓN DE SELLOS OFICIALES</p>
                    </div>
                </div>
                <div class="font-bold">
                    <p class="border border-black px-10 py-2 rounded-xl">ANEXO 7.17</p>
                </div>
            </div>
            <x-table-descripcion-uso />
            <x-table-descripcion-uso />
            <div class="flex justify-between mt-10 font-bold">
                <div class="flex flex-col">
                    <p class="text-center mb-3">SERVIDOR PÚBLICO QUE ENTREGA:</p>
                    <x-card-nametag />
                </div>
                <div class="flex flex-col">
                    <p class="text-center mb-3">SERVIDOR PÚBLICO QUE ENTREGA:</p>
                    <x-card-nametag />
                </div>
            </div>
            <p class="text-center mt-10">RESPONSABLE DE INFORMACIÓN CONTENIDA EN EL PRESENTE ANEXO:</p>
            <div class="flex justify-end mt-10 font-bold">
                <x-card-nametag />
            </div>
        </div>
        <div class="flex justify-center my-20">
            <button class="px-10 py-2 text-white bg-emerald-950 hover:bg-emerald-900 duration-300" onclick="window.print()">Imprimir</button>
        </div>
    </body>
</html>
