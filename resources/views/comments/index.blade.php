<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add comment</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-sky-100 min-h-screen flex flex-col items-center py-10">

  <form action="{{ route('comments.store') }}" method="post" class="bg-white p-6 rounded-2xl shadow-md w-full max-w-md space-y-4">
    @csrf
    <label for="comment" class="block text-sky-900 font-bold">Comment</label>
    <textarea name="comment" rows="6" placeholder="Enter a comment"
              class="w-full border border-sky-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-sky-400 resize-none"></textarea>

    @error('comment')
    <span class="text-red-700 font-semibold block">{{ $message }}</span>
    @enderror

    <input type="submit" name="save_comment" value="Save comment"
           class="bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-xl transition duration-150 cursor-pointer">
  </form>

  <div class="mt-10 w-full max-w-md bg-white p-6 rounded-2xl shadow-md space-y-2">
    @forelse($comments as $comment)
      <p class="text-sky-800 bg-sky-50 rounded-xl p-3">{{ $comment->comment }}</p>
    @empty
      <p class="text-sky-700">No comments yet!</p>
    @endforelse
  </div>

</body>
</html>
