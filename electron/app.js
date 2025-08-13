// ===== HOT RELOAD =====
const path = require('path');
try {
  require('electron-reload')(path.join(__dirname, '../'), {
    electron: require(`${__dirname}/../../node_modules/electron`)
  });
} catch (err) {
  console.log('Hot reload não iniciado:', err);
}

// ===== ELECTRON =====
const { app, BrowserWindow, Menu } = require('electron');

function createWindow() {
  const mainWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      nodeIntegration: false,
      contextIsolation: true
    }
  });

  // Remove o menu padrão (File, Edit, View, etc.)
  Menu.setApplicationMenu(null);

  // Carrega o index.html da pasta html
  mainWindow.loadFile(path.join(__dirname, '../html/index.html'));
}

app.whenReady().then(createWindow);

// Fecha o app quando todas as janelas estiverem fechadas
app.on('window-all-closed', () => {
  if (process.platform !== 'darwin') app.quit();
});
