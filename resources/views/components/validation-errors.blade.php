@if ($errors->any())
    <div {{ $attributes }}>
   

        <ul class="border border-red-500 bg-red-200 text-red-400 font-bold uppercase p-2 ,t-2 text-xs">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
