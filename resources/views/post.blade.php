@extends('layouts.main')

@section('container')
    <a href="/">Back</a>

    <div class="bg-gray-100 p-6 rounded-2xl mt-8"><p></p>
        <a href="/user/{{ $post["user"] }}" class="font-bold text-its-blue">{{ $post["user"] }}</a>
      <span class="text-gray-400"> on {{ $post["date"] }} at {{ $post["time"] }}</span>
      <h1 class="mt-4 text-3xl font-bold">{{ $post["text"] }}</h1>

      <div class="mt-8 flex space-x-4 items-center">
        <div class="flex space-x-1 items-center">
          <span class="material-icons" style="font-size:20px">arrow_upward</span>
          <span>32</span>
        </div>

        <div class="flex space-x-1 items-center">
          <span class="material-icons" style="font-size:20px">arrow_downward</span>
          <span>2</span>
        </div>

        <div class="flex space-x-1 items-center">
          <span class="material-icons" style="font-size:20px">comment</span>
          <span>6</span>
        </div>
      </div>
    </div>
    <div class="bg-gray-100 p-6 rounded-2xl mt-2">
        <form>
            <label for="Comment" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Add your comment here</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" ></path></svg>
                </div>
                <input type="Comment" id="Comment" class="block w-full p-4 pl-10 text-sm text-white focus:ring-blue-500 focus:border-blue-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 rounded-2xl" placeholder="Add your comment here!" maxlength="150" required>
                <div class="text-sm text-gray-500 mt-1 ml-1"><span id="charCount">0</span>/150 characters used</div>
                <button type="submit" class="text-white absolute right-2.5 bottom-8 bg-blue-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-2xl">Comment</button>
            </div>
        </form>
        <script>
            const charCount = document.getElementById('charCount');
            const commentInput = document.getElementById('Comment');
            commentInput.addEventListener('input', function() {
                charCount.textContent = commentInput.value.length;
            });
        </script>
    </div>



    <script>
        function updateCommentCount() {
            const commentInput = document.getElementById("Comment");
            const commentCount = document.getElementById("commentCount");
            commentCount.innerText = `${commentInput.value.length}/500`;
        }
    </script>


    <div class="bg-gray-100 p-7 rounded-2xl mt-2 max-w-xl">
        <span class="text-its-blue font-bold">shintaeyon</span>
        <span class="text-gray-400"> on {{ $post["date"] }} at {{ $post["time"] }}</span>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin facilisis felis eu pellentesque imperdiet. Vivamus id justo venenatis lorem vestibulum.</p>
    </div>
@endsection
