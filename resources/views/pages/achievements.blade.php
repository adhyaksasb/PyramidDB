@section('page_title',"Achievements | PyramidDB")
{{-- <x-app-layout>
    <div class="w-full h-screen flex justify-center items-center text-custom">
        <span class="text-8xl pb-24">PyramidDB</span>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <div class="w-full h-screen flex sm:py-20 sm:px-40 text-gray-700">
        <div class="w-full flex flex-col align-center gap-12 justify-center">
            <div class="flex justify-center gap-10 sm:gap-40">
                <div class="w-[48px] h-[48px] text-2xl text-center">1</div>
                <div class="w-[48px] h-[48px] text-2xl text-center">2</div>
                <div class="w-[48px] h-[48px] text-2xl text-center">3</div>
                <div class="w-[48px] h-[48px] text-2xl text-center">4</div>
            </div>
            <div class="flex flex-col gap-6 digitsBg h-[1024px] sm:py-10 sm:px-20 justify-center rounded-b-xl">
                <div class="font-bold text-center text-[26px] leading-[38px]">
                    Silakan bawa berkas fisik anda ke SMK Telkom Bandung
                    dan tunggu pemberitahuan pada email bahwa berkas anda telah dikonfirmasi </div>
                <img src="{{asset('img/man.png')}}" class="max-h-[312px] max-w-[193px] mx-auto" alt="">
                <div class="mb-10">
                    <div class="flex gap-2">
                        <img src="{{asset('img/starRail/icon/path/Harmony.png')}}" class="w-[24px] h-[24px]" alt="test">
                        <p class="text-md font-bold text-gray-200">0812-1233-2344</p>
                    </div>
                    <div class="flex gap-2">
                        <img src="{{asset('img/starRail/icon/path/Harmony.png')}}" class="w-[24px] h-[24px]" alt="test">
                        <p class="text-md font-bold text-gray-200">0812-1233-2344</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>