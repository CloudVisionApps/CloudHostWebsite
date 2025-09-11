<div class="absolute top-full mt-4 left-1/2 transform -translate-x-1/2 w-[900px] max-w-[90vw] bg-white/10 backdrop-blur-2xl backdrop-saturate-150 backdrop-contrast-125 border border-white/5 rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-50 ">
    <div class="p-8">

        @php
        $gridCols = 'grid-cols-1';
        if (count($sections) >= 2) {
            $gridCols = 'grid-cols-2';
        }
        @endphp

        <div class="grid {{$gridCols}} gap-8">

            @if(!empty($sections))
            @foreach($sections as $section)
            <div class="relative {{ $section->url ? 'cursor-pointer group/section' : '' }} {{ $section->url ? 'hover:bg-gradient-to-br from-white/5 to-white/10 rounded-2xl p-6 -m-6 transition-all duration-500 ease-out' : '' }} {{ $section->url ? 'hover:shadow-xl hover:shadow-black/20' : '' }}">
                @if($section->url)
                    <a href="{{$section->url}}" class="block">
                @endif

                <div class="flex items-start gap-4">
                    @if($section->icon)
                    <div class="w-12 h-12 from-[#1683ab] to-[#1e9975] bg-gradient-to-br rounded-2xl flex items-center justify-center shadow-lg {{ $section->url ? 'group-hover/section:scale-110 group-hover/section:rotate-3 transition-all duration-500 ease-out' : '' }}">
                        <x-icon class="text-white w-6 h-6" :name="$section->icon" />
                    </div>
                    @endif
                    <div class="flex-1">
                        <h3 class="text-white font-bold text-xl mb-2 {{ $section->url ? 'group-hover/section:text-[#fff] transition-colors duration-500' : '' }}">
                            {{$section->name}}
                        </h3>
                        <p class="text-white/70 text-sm leading-relaxed {{ $section->url ? 'group-hover/section:text-white/90 transition-colors duration-500' : '' }}">
                            {{$section->description}}
                        </p>
                    </div>
                </div>

                @if(!empty($section->items))
                <div class="ml-16">
                    <ul class="space-y-2">
                        @foreach($section->items as $item)
                        <li>
                            <a href="{{$item->url}}"
                               class="text-white/80 hover:text-white transition-all duration-300 py-2 px-3 rounded-lg hover:bg-white/10 hover:translate-x-1 flex items-center gap-2 group/item">
                                <span>{{$item->name}}</span>
                                <i class="fas fa-arrow-right text-xs opacity-0 group-hover/item:opacity-100 group-hover/item:translate-x-1 transition-all duration-300"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($section->url)
                    <div class="absolute top-4 right-4 opacity-0 group-hover/section:opacity-100 transition-opacity duration-500">
                        <i class="fas fa-external-link-alt text-white/60 text-sm"></i>
                    </div>
                    </a>
                @endif
            </div>
            @endforeach
            @endif


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
