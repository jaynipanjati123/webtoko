<div class="relative overflow-x-auto shadow-md sm:rounded-lg" >
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400" >
            <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
            <tr>
                <th scope="col" class="px-4 py-1">
                    No
                </th>
                <th scope="col" class="px-4 py-1">
                    Nama Produk
                </th>
                <th scope="col" class="px-4 py-1">
                    Deskripsi Produk
                </th>
                <th scope="col" class="px-4 py-1">
                    Harga Produk
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($nama as $index => $item)
            <tr>
                <th scope="row" class="px-4 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$index + 1}}
                </th>
                <td class="px-4 py-1">
                {{ $item }}
                </td>
                <td class="px-4 py-1">
                {{ $desc[$index]}}
                </td>
                <td class="px-4 py-1">
                {{ $harga[$index] }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>