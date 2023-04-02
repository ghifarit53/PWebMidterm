<nav class="bg-its-blue sticky top-0">
<div class="mx-auto">
    <div class="flex justify-between">
        <div>
        <a href="/" class="flex items-center text-xl px-2 py-4 ml-8 text-white font-bold">reddITS</a>
        </div>
        <!-- Navbar items -->
        <div class="ml-auto flex items-center space-x-10 mr-8">
        <a href="/" class="px-2 py-4 text-white font-semibold hover:text-white {{ $title === "Home" ? '' : "text-opacity-40 hover:transition duration-50" }}">Home</a>
        <a href="/newpost" class="px-2 py-4 text-white font-semibold hover:text-white {{ $title === "New Post" ? '' : "text-opacity-40 hover:transition duration-50" }} ">New Post</a>
        <a href="/profile" class="px-2 py-4 text-white font-semibold hover:text-white {{ $title === "Profile" ? '' : "text-opacity-40 hover:transition duration-50" }}" >Profile</a>
        <a href="/logout" class="px-4 py-1 text-white bg-red-600 hover:bg-red-500 border-2 border-red-600 hover:border-red-500 rounded-md font-semibold hover:transition hover:duration-50">Logout</a>
        </div>
    </div>
    </div>
</div>
</nav>