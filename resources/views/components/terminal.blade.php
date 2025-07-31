<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Terminal (test)</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="terminal bg-gray-900 text-green-400 h-screen p-4 font-mono">
      <div class="text-red-400 mb-2">
        <h1>Terminal Initiated...</h1>
      </div>
      <div id="output" class="whitespace-pre-wrap"></div>
      <div class="flex">
        <span id="prompt" class="mr-2">guest@fabianternis.dev ~ %</span>
        <input
          type="text"
          id="commandInput"
          class="flex-grow bg-transparent outline-none text-green-400"
          autofocus
        />
      </div>
    </div>

    <script>
        let currentUsername = 'guest';

        @if (Auth::check())
            currentUsername = '{{ Auth::user()->username }}';
        @endif

        let theme = '{{ session('theme') }}';
        console.log('current Theme: ' + theme);
    </script>
    <script src="{{ asset('js/terminal-game.js') }}"></script>
  </body>
</html>