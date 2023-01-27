@if (!(session()->has('message')))
    <div x-data="{show: true}" x-init="setTimeout(()=>show=false, 3000)" x-show="show" class="fixed top-0 left-1/2 trasnsorm-translate-x-1/2 bg-red-500 text-white px-40 py-3">
  <p>
      {{ session('message') }}
      ttt
  </p>
</div>
@endif