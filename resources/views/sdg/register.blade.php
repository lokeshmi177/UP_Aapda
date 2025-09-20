@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="bg-gray-100 p-6 font-sans">
    <div class="container mx-auto bg-white shadow-md rounded-lg p-6">
      <div class="flex flex-wrap justify-between items-end gap-4 mb-6">
        <div class="flex flex-wrap items-end gap-4">
          <div>
            <label class="block font-medium mb-1">जनपद</label>
            <select class="w-full border rounded px-3 py-2 min-w-[150px]">
              <option>Lucknow (लखनऊ)</option>
              <option>Kanpur (कानपुर)</option>
            </select>
          </div>

          <div>
            <label class="block font-medium mb-1">वर्ष</label>
            <select class="w-full border rounded px-3 py-2 min-w-[100px]">
              <option>2023</option>
              <option>2024</option>
            </select>
          </div>

          <div>
            <label class="block font-medium mb-1">माह</label>
            <select class="w-full border rounded px-3 py-2 min-w-[100px]">
              <option>जनवरी</option>
              <option>फ़रवरी</option>
            </select>
          </div>

          <button
            class="bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600 mt-6 sm:mt-0"
          >
            डाटा देखें
          </button>
        </div>

        <div class="flex flex-wrap justify-end gap-4">
          <button
            class="bg-blue-700 text-white py-2 px-6 rounded hover:bg-blue-800"
          >
            खोजे
          </button>
          <button
            class="bg-green-500 text-white py-2 px-6 rounded hover:bg-green-600"
          >
            निवेश करें
          </button>
          <button
            class="bg-red-600 text-white py-2 px-6 rounded hover:bg-red-700"
          >
            रद्द करें
          </button>
        </div>
      </div>

      <div class="text-md font-semibold mt-2 mb-5 text-gray-700">
        <hr>
        <ul class="flex flex-col pt-2 sm:flex-row justify-between gap-2">
          <li class="text-sm">
            जनपद का नाम : <span class="text-xs">Lucknow</span> (लखनऊ)
          </li>
          <li class="text-xs">
            विभिन्न प्रकार की देवी आपदाओं से प्रभावित व्यक्तियों हेतु राहत
          </li>
          <li class="text-sm">
            प्रगति माह : अप्रैल, <span class="text-xs">2023</span>
          </li>
        </ul>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto border text-sm">
          <thead class="bg-gray-200">
            <tr>
              <th class="border border-gray-300 px-2 py-2 min-w-[200px]" rowspan="2"> 
                दैविक जायदा का प्रकार
              </th>
              <th class="border border-gray-300 px-2 py-2" colspan="7">
                प्रतिवेदित माह अप्रैल के 1 से 30 तक
              </th>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">आपदा से प्रभावित व्यक्तियों की संखया</th>
              <th class="border border-gray-300 px-2 py-2">
                आपदा से प्रभावित व्यक्तियों जिनको वित्तीय मदद दी गयी की संखग
              </th>
              <th class="border border-gray-300 px-2 py-2">ताभार्थियों का प्रतिशत</th>
              <th class="border border-gray-300 px-2 py-2">चयनित माह में नयी आवंटित धनराशि (रु० में) <br> <span class="text-red-500">यदि नहीं है तो शून्य(0) भरे</span></th>
              <th class="border border-gray-300 px-2 py-2">माह में उपलब्ध धनराशि (मडवार) (२० में) <br> <span class="text-red-500">पूर्व माह के अवोध का योग - नयी जावटित धनराशि</span></th>
              <th class="border border-gray-300 px-2 py-2">वितरित धनराशि</th>
              <th class="border border-gray-300 px-2 py-2">वित्तीय प्रतिषात (रु० में)</th>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">1</th>
              <th class="border border-gray-300 px-2 py-2">2</th>
              <th class="border border-gray-300 px-2 py-2">3</th>
              <th class="border border-gray-300 px-2 py-2">4 = (3/2)*100</th>
              <th class="border border-gray-300 px-2 py-2">5</th>
              <th class="border border-gray-300 px-2 py-2">6</th>
              <th class="border border-gray-300 px-2 py-2">7</th>
              <th class="border border-gray-300 px-2 py-2">8 = (7/6)*100</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="border px-2 py-2">
                <select class="w-full border rounded px-2 py-1">
                  <option>--अपना चयन करें--</option>
                  <option>शिक्षा स्तर</option>
                  <option>स्वास्थ्य सेवाएं</option>
                </select>
              </td>
              <td class="border px-2 py-2">
                <input
                  type="text"
                  placeholder="0"
                  class="w-full border rounded px-2 py-1"
                />
              </td>
              <td class="border px-2 py-2">
                <input
                  type="text"
                  placeholder="0"
                  class="w-full border rounded px-2 py-1"
                />
              </td>
              <td class="border px-2 py-2">
                <input
                  type="text"
                  placeholder="0.00"
                  class="w-full border rounded px-2 py-1"
                />
              </td>
              <td class="border px-2 py-2">
                <input
                  type="text"
                  placeholder="3000000"
                  class="w-full border rounded px-2 py-1"
                />
              </td>
              <td class="border px-2 py-2">
                <input
                  type="text"
                  placeholder="3000000"
                  class="w-full border rounded px-2 py-1"
                />
              </td>
              <td class="border px-2 py-2">
                <input
                  type="text"
                  placeholder="0"
                  class="w-full border rounded px-2 py-1"
                />
              </td>
              <td class="border px-2 py-2">
                <input
                  type="text"
                  placeholder="0.00"
                  class="w-full border rounded px-2 py-1"
                />
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="mt-4 text-left">
        <button
          class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
        >
          सुरक्षित कर
        </button>
      </div>
    </div>
</section>

@endsection