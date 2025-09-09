<div class="absolute top-full mt-4 left-1/2 transform -translate-x-1/2 w-[900px] max-w-[90vw] bg-white/10 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50 ">
    <div class="p-8">

        @php
        $gridCols = 'grid-cols-1';
        if (count($sections) >= 2) {
            $gridCols = 'grid-cols-2';
        }
        @endphp

        <div class="grid {{$gridCols}} gap-8">

            @foreach($sections as $section)
            <div class="space-y-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-11 h-11 from-[#1683ab] to-[#1e9975] bg-gradient-to-r rounded-xl flex items-center justify-center">
                        <x-icon class="text-white w-5" :name="$section->icon" />
                    </div>
                    <h3 class="text-white font-semibold text-lg">
                        {{$section->name}}
                    </h3>
                </div>
                <div>
                    <p class="text-white text-sm">
                        {{$section->description}}
                    </p>
                </div>

                @if(!empty($section->items))
              <ul class="space-y-3">
                    @foreach($section->items as $item)
                    <li>
                        <a href="{{$item->url}}"
                           class="text-white/90 hover:text-white transition-colors duration-200 py-1.5 px-2 rounded-lg hover:bg-white/10">
                            {{$item->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endif

            </div>
            @endforeach


        </div>


            <!-- Bottom CTA -->
        <div class="mt-8 pt-6 border-t border-white/20 text-center">
            <a href="{{$url}}" class="inline-flex items-center gap-2 text-white hover:text-[#1e9975] transition-colors duration-200 font-semibold">
                <span>
                    {{$name}}
                </span>
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-200"></i>
            </a>
        </div>

    </div>
</div>
