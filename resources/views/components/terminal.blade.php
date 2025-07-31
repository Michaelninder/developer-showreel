<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terminal (test)</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      ::selection {
        background-color: #4ade80;
        color: #1a202c;
      }

      ::-webkit-scrollbar {
        display: none;
      }

      .terminal-container {
        display: flex;
        flex-direction: column;
        height: 100vh;
      }

      .terminal-output {
        flex-grow: 1;
        overflow-y: auto;
        padding-bottom: 1rem;
      }

      .terminal-input-area {
        flex-shrink: 0;
        padding-top: 1rem;
      }

      .modal-terminal .terminal-container {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div
      class="terminal-container bg-gray-900 text-green-400 p-4 font-mono"
    >
      <div class="text-red-400 mb-2">
        <h1>Terminal Initiated...</h1>
      </div>
      <div id="output" class="terminal-output whitespace-pre-wrap"></div>
      <div class="terminal-input-area flex">
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