@props([
    'statuses'
])

@foreach($statuses as $key => $status)
                    @if($key > 0)
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                      </svg>
                    </span>
                    @endif
                        <button class="bg-gray-300 text-sm hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                          <span>{{ $status->label }}</span>
                        </button>
                    @endforeach