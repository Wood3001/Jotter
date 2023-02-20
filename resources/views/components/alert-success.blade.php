@if(session('success'))
    <div class="mb-4 px-4 py-4 rounded-md success-box">
         {{ $slot }}
    </div>
    <!-- bg-green-100 border border-green-200 text-green-700 -->
@endif