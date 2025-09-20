@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="bg-gray-100 p-6 font-sans">
    <div class="bg-white shadow-md rounded-lg p-6">
      <!-- Dropdowns -->
      <div class="grid grid-cols-1 md:grid-cols-7 gap-20">
        <label class="block mb-1 font-medium">जनपद</label>
        <label class="block mb-1 font-medium">वर्ष</label>
        <label class="block mb-1 font-medium">माह</label>
      </div>
      <div class="flex justify-between item-center">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
          <div>
            <select class="w-full border rounded px-3 py-2">
              <option>Lucknow (लखनऊ)</option>
              <option>Kanpur (कानपुर)</option>
            </select>
          </div>
          <div>
            <select class="w-full border rounded px-3 py-2">
              <option>2023</option>
              <option>2024</option>
            </select>
          </div>
          <div>
            <select class="w-full border rounded px-3 py-2">
              <option>जनवरी</option>
              <option>फ़रवरी</option>
            </select>
          </div>
          <a href="#">
            <button
              class="bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600"
            >
              डाटा देखें
            </button>
          </a>
        </div>

        <div class="flex gap-4 mb-6 justify-end">
          <a href="#">
            <button
              class="bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700"
            >
              खोजे
            </button>
          </a>
          <a href="#">
            <button
              class="bg-green-600 text-white py-2 px-6 rounded hover:bg-green-700"
            >
              निवेश करें
            </button>
          </a>
          <a href="#">
            <button
              class="bg-red-600 text-white py-2 px-6 rounded hover:bg-red-700"
            >
              रद्द करें
            </button>
          </a>
        </div>
      </div>

      <!-- Table -->
       <hr>
      <div class="text-md font-semibold mt-2 mb-5 text-gray-700">
        <ul class="flex justify-between items-center">
          <li class="text-sm">जनपद का नाम : <span class="text-xs">Lucknow</span> (लखनऊ)</li>
          <li class="text-xs">विभिन्न प्रकार की देवी आपदाओं से प्रभावित व्यक्तियों हेतु राहत</li>
          <li class="text-sm">प्रगति माह : अप्रैल, <span class="text-xs">2023</span></li>
        </ul>
      </div>
      <table class="w-full table-auto border overflow-auto">
        <thead class="bg-gray-200">
          <tr>
            <th class="border border-gray-300 px-2 py-2" rowspan="2" colspan="3">दैविक जायदा का प्रकार</th>
            <th class="border border-gray-300 px-2 py-2" colspan="7">प्रतिवेदित माह अप्रैल के 1 से 30 तक</th>
          </tr>
          <tr>
            <th class="border border-gray-300 px-2 py-2">आपदा से प्रभावित व्यक्तियों की संखया</th>
            <th class="border border-gray-300 px-2 py-2">आपदा से प्रभावित व्यक्तियों जिनको वित्तीय मदद दी गयी की संखग</th>
            <th class="border border-gray-300 px-2 py-2">ताभार्थियों का प्रतिशत</th>
            <th class="border border-gray-300 px-2 py-2">चयनित माह में नयी आवंटित धनराशि (रु० में) <br> <span class="text-red-500">यदि नहीं है तो शून्य(0) भरे</span></th>
            <th class="border border-gray-300 px-2 py-2">माह में उपलब्ध धनराशि (मडवार) (२० में) <span class="text-red-500">पूर्व माह के अवोध का योग - नयी जावटित धनराशि</span></th>
            <th class="border border-gray-300 px-2 py-2">वितरित धनराशि</th>
            <th class="border border-gray-300 px-2 py-2">वित्तीय प्रतिषात (रु० में)</th>
          </tr>
          <tr>
            <th class="border border-gray-300 px-2 py-2" colspan="3">1</th>
            <th class="border border-gray-300 px-2 py-2">2</th>
            <th class="border border-gray-300 px-2 py-2">3</th>
            <th class="border border-gray-300 px-2 py-2">4 = (3/2)*100 </th>
            <th class="border border-gray-300 px-2 py-2">5</th>
            <th class="border border-gray-300 px-2 py-2">6</th>
            <th class="border border-gray-300 px-2 py-2">7</th>
            <th class="border border-gray-300 px-2 py-2">8 = (7/6)*100</th>
          </tr>
        </thead>
        <tbody id="dataRows">
          <tr>
            <td class="border px-4 py-2 text-center" colspan="3">
              <select class="w-full border rounded px-2 py-1 outline-none hover:border-blue-500">
                <option>--अपना चयन करें--</option>
                <option>शिक्षा स्तर</option>
                <option>स्वास्थ्य सेवाएं</option>
              </select>
            </td>
          <td class="border px-2 py-1 text-center">
            <input type="text" class="w-full border rounded px-2 py-1 outline-none hover:border-blue-500" />
          </td>
          <td class="border px-2 py-1 text-center">
            <input type="text" class="w-full border rounded px-2 py-1 outline-none hover:border-blue-500" />
          </td>
          <td class="border px-2 py-1 text-center">
            <input type="text" class="w-full border rounded px-2 py-1 outline-none hover:border-blue-500" />
          </td>
          <td class="border px-2 py-1 text-center">
            <input type="text" class="w-full border rounded px-2 py-1 outline-none hover:border-blue-500" />
          </td>
          <td class="border px-2 py-1 text-center">
            <input type="text" class="w-full border rounded px-2 py-1 outline-none hover:border-blue-500" />
          </td>
          <td class="border px-2 py-1 text-center">
            <input type="text" class="w-full border rounded px-2 py-1 outline-none hover:border-blue-500" />
          </td>
          <td class="border px-2 py-1 text-center">
            <input type="text" class="w-full border rounded px-2 py-1 outline-none hover:border-blue-500" />
          </td>
          </tr>
        </tbody>
      </table>

      <!-- Entry Button -->
      <div class="mt-4 text-left">
        <button
          class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
        >
          सुरवित कर
        </button>
      </div>
    </div>
</section>
@endsection