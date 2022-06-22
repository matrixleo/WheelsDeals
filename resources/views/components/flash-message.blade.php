return redirect('/')->with('message', 'Posted successfully!');
    
@if (session()->has('message'))
    <div 
    x-data="{show: true}" x-init="setTimeout(()=> show = false, 4000)" x-show="show" 
    class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-varaler text-white px-48 py-3">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif