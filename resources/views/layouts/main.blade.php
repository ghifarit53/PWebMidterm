<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
</head>
<body>
  <nav class="bg-blue-500 sticky top-0">
    <div class="mx-auto">
      <div class="flex justify-between">
          <div>
            <a href="/" class="flex items-center text-xl px-2 py-4 ml-8 text-white font-bold">Facebook</a>
          </div>
          <!-- Navbar items -->
          <div class="ml-auto flex items-center space-x-10 mr-8">
            <a href="/" class="px-2 py-4 text-white font-semibold hover:text-white {{ $title === "Home" ? '' : 'text-opacity-40 hover:transition duration-50 ' }}">Home</a>
            <a href="/post" class="px-2 py-4 text-white font-semibold hover:text-white {{ $title === "Post" ? '' : 'text-opacity-40 hover:transition duration-50 ' }} ">New Post</a>
            <a href="/profile" class="px-2 py-4 text-white font-semibold hover:text-white {{ $title === "Profile" ? '' : 'text-opacity-40 hover:transition duration-50 ' }}" >Profile</a>
            <a href="/logout" class="px-4 py-2 text-white bg-red-500 hover:bg-red-400 border-2 border-red-500 hover:border-red-400 rounded-md font-semibold transition duration-50">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="mx-10 my-8">
    @yield('container')
  </div>
  <script>
      feather.replace()
  </script>
</body>
</html>
