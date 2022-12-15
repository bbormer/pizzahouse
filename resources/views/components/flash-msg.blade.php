@if(session()->has('msg'))
  <p x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">{{ session('msg') }}</p>
@endif