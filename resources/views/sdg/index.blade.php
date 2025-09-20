@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="bg-gray-100 flex justify-center py-10">
    <div class="w-full max-w-3xl bg-white rounded shadow">
        
        <div class="bg-blue-100 text-center py-3 text-lg font-semibold border-b">
        SDG कार्ड हेतु डैशबोर्ड
        </div>

        <div class="p-4">
            <div class="border rounded">
                
                <button 
                onclick="toggleAccordion()" 
                class="w-full flex justify-between items-center bg-green-100 px-4 py-2  text-base font-semibold">
                <span>SDG कार्ड पीढ़िंग हेतु</span>
                <div id="accordionIcon" class="text-white font-bold text-xl w-5 h-5 rounded-full bg-red-300 flex justify-center items-center pb-1">−</div>
                </button>
                
                <div id="accordionContent" class="divide-y">
                <div class="px-6 py-3 hover:bg-gray-100 cursor-pointer">
                    1. <span class="font-semibold">SDG</span> मानक अनुसार पीढ़िंग करने हेतु
                </div>
                <div class="px-6 py-3 hover:bg-gray-100 cursor-pointer">
                    2. <span class="font-semibold">SDG</span> मानक अनुसार पीढ़िंग को लॉक करने हेतु
                </div>
                <div class="px-6 py-3 hover:bg-gray-100 cursor-pointer">
                    3. <span class="font-semibold">SDG</span> मानक अनुसार पीढ़िंग रिपोर्ट देखने हेतु
                </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- js -->
  <script>
    function toggleAccordion() {
      const content = document.getElementById('accordionContent');
      const icon = document.getElementById('accordionIcon');
      content.classList.toggle('hidden');
      icon.textContent = content.classList.contains('hidden') ? '+' : '−';
    }
  </script>
@endsection