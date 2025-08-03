<div class="set-locale-container relative z-20">
    <button class="flex items-center text-sm focus:outline-none px-2 py-1 rounded-md current-locale">
        <img src="{{ asset('img/flags/' . app()->getLocale() . '.png') }}"
             class="w-8 h-5 mr-1" alt="{{ app()->getLocale() }}">
        <i class="bi bi-chevron-down text-xs"></i>
    </button>
    
    <div class="">
    @foreach(File::directories(resource_path('lang')) as $langDir)
       @php $lang = basename($langDir); @endphp
       @if($lang !== app()->getLocale())
           <form method="POST" action="{{ route('set-locale') }}">
               @csrf
               <input type="hidden" name="locale" value="{{ $lang }}">
               <button type="submit" class="">
                   <img src="{{ asset('img/flags/' . $lang . '.png') }}" class="w-7 h-5 mr-1" alt="{{ $lang }}">
                   {{ strtoupper($lang) }}
               </button>
           </form>
       @endif
    @endforeach
    </div>
</div>