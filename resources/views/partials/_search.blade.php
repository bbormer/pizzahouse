<form action="">
  <div class="relative border-2 border-gray-100 m-4 rounded-lg">
      <div class="absolute top-4 left-3">
          <i
              class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
          ></i>
      </div>
      <input
          type="search"
          name="search"
          class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow 
          focus:outline-none"
          placeholder="Search pizza order..."
          autofocus
          {{-- value={{ old('search') }} --}}
          value="@php
        //   isset($_GET['search']) && $_GET['search'] !='' ? strip_tags($_GET['search']) : ''
          if(isset($_GET['search']) && $_GET['search'] !='') {
            echo strip_tags($_GET['search']);
          } else {
            echo '';
          }
        @endphp"
         
      />
      <div class="absolute top-2 right-2">
          <button
              type="submit"
              class="h-10 w-16 text-white rounded-lg bg-pizza hover:bg-red-600"
          >
              検索
          </button>
      </div>
  </div>
</form>
