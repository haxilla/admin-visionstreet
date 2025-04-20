document.addEventListener('click', (e) => {
  if (
    !document.body.classList.contains('linkcheck') ||
    e.target.tagName !== 'A' ||
    e.target.dataset.action !== 'handle'
  ) return;

  e.preventDefault();

  const el = e.target;

  const renderFrom = el.dataset.renderfrom;
  const renderTo = el.dataset.renderto;
  const renderAs = el.dataset.renderas;
  const value = el.dataset.value || '';
  const key = el.dataset.key || '';
  const isapp = el.dataset.isapp || '0';

  if (!renderFrom || !renderTo || !renderAs) {
    console.error('Missing data-renderfrom, data-renderto, or data-renderas');
    return;
  }

  const csrf = document.querySelector('meta[name="csrf-token"]')?.content || '';
  const endpoint = '/' + renderFrom.replace('.', '/');
  const postData = new URLSearchParams({ renderFrom, renderTo, renderAs, key, value, isapp });

  if (renderAs === 'html') {
    renderHTML(endpoint, postData, renderTo, csrf);
  } else if (renderAs === 'json') {
    renderJSON(endpoint, postData, csrf);
  } else {
    console.warn('Unknown renderAs:', renderAs);
  }
});

function renderHTML(endpoint, postData, renderTo) {
  const csrf = document.querySelector('meta[name="csrf-token"]')?.content;

  fetch(endpoint, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
      ...(csrf ? { 'X-CSRF-TOKEN': csrf } : {})
    },
    body: postData.toString()
  })
  .then(res => {
    // Pass through HTML, even if it's a 500 error page
    return res.text();
  })
  .then(html => {
    const target = document.querySelector(`.${renderTo}`);
    if (target) {
      target.innerHTML = html;
    } else {
      console.warn(`⚠️ Target container .${renderTo} not found`);
    }
  })
  .catch(err => {
    console.error('💥 Handle request error:', err);
  });
}


function renderJSON(endpoint, postData, csrf) {
  fetch(endpoint, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
      ...(csrf ? { 'X-CSRF-TOKEN': csrf } : {})
    },
    body: postData.toString()
  })
  .then(async res => {
    if (!res.ok) {
      const errorText = await res.text();
      console.error(`🚨 JSON Error ${res.status}:\n`, errorText);
      return;
    }

    const json = await res.json();
    console.log('✅ JSON response:', json);

    // Optionally do something with JSON
    if (json?.funcName) {
      try {
        eval(json.funcName); // ⚠️ if you're intentionally doing this
      } catch (err) {
        console.error('⚠️ Failed to run funcName:', err);
      }
    }
  })
  .catch(err => {
    console.error('❌ JSON Fetch failed:', err.message);
  });
}

