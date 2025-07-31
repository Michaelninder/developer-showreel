const outputElement = document.getElementById('output');
const commandInput = document.getElementById('commandInput');
const promptElement = document.getElementById('prompt');
let currentDirectory = '~';

function updatePrompt() {
  promptElement.textContent = `${currentUsername}@fabianternis.dev ${currentDirectory} %`;
}

const commands = {};
const hiddenCommands = {};

function registerCommand(name, func, isHidden = false) {
  if (isHidden) {
    hiddenCommands[name] = func;
  } else {
    commands[name] = func;
  }
}

function printToTerminal(text, type = 'output') {
  const line = document.createElement('div');
  line.textContent = text;
  if (type === 'error') {
    line.classList.add('text-red-400');
  } else if (type === 'prompt-input') {
    line.classList.add('text-green-400');
  }
  outputElement.appendChild(line);
  outputElement.scrollTop = outputElement.scrollHeight;
}

function runCommand(commandLine) {
  printToTerminal(`${promptElement.textContent} ${commandLine}`, 'prompt-input');
  const [command, ...args] = commandLine.split(' ');
  const fullCommand = commands[command] || hiddenCommands[command];

  if (fullCommand) {
    fullCommand(args);
    updatePrompt();
  } else {
    printToTerminal(`Command not found: ${command}`, 'error');
  }
}

registerCommand('help', () => {
  printToTerminal('Available commands:');
  for (const cmd in commands) {
    printToTerminal(`- ${cmd}`);
  }
});

registerCommand('echo', (args) => {
  printToTerminal(args.join(' '));
});

registerCommand('clear', () => {
  outputElement.innerHTML = '';
});

registerCommand('whoami', () => {
  printToTerminal(currentUsername);
});

registerCommand('cd', (args) => {
  const targetDir = args[0];

  if (!targetDir || targetDir === '.') {
    return;
  }

  if (targetDir === '~') {
    currentDirectory = '~';
  } else if (targetDir === '..') {
    if (currentDirectory === '~') {
      currentDirectory = '/';
    } else if (currentDirectory === '/') {
      // Stay at root
    } else {
      const parts = currentDirectory.split('/');
      parts.pop();
      currentDirectory = parts.join('/');
      if (currentDirectory === '') {
        currentDirectory = '/';
      }
    }
  } else if (targetDir.startsWith('/')) {
    currentDirectory = targetDir.replace(/\/+/g, '/').replace(/\/$/, '');
    if (currentDirectory === '') {
      currentDirectory = '/';
    }
  } else {
    let newPath;
    if (currentDirectory === '~') {
      newPath = '/' + targetDir;
    } else if (currentDirectory === '/') {
      newPath = currentDirectory + targetDir;
    } else {
      newPath = currentDirectory + '/' + targetDir;
    }
    currentDirectory = newPath.replace(/\/+/g, '/').replace(/\/$/, '');
  }
});

registerCommand(
  'secret',
  () => {
    printToTerminal('You found the secret command!');
  },
  true,
);

commandInput.addEventListener('keydown', (e) => {
  if (e.key === 'Enter') {
    const command = commandInput.value.trim();
    if (command) {
      runCommand(command);
      commandInput.value = '';
    }
  }
});

updatePrompt();
printToTerminal('Welcome to the Terminal! Type "help" for a list of commands.');