chrome.app.runtime.onLaunched.addListener(function() {
  chrome.app.window.create('index.html', {
    id: 'embedder',
    innerBounds: {
      width: 1430,
      height: 870
    }
  });
});
