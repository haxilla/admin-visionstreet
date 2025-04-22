if (document.body.classList.contains('linkcheck')) {

  const handlers = {
    onClientsLoaded: () => {
      console.log('Clients have been loaded');
    },
    // other handler functions
  };

  document.addEventListener('click', (e) => {
    if (
      e.target.tagName !== 'A' ||
      e.target.dataset.action !== 'handle'
    ) return;

    e.preventDefault();

    //checks for all data-attributes on click target
    const dataset = { ...el.dataset };
    //makes datafile.$$ convert back to $$ for script processing
    window.__tempGlobals = window.__tempGlobals || [];
    for (const [key, value] of Object.entries(dataset)) {
      window[key] = value;
      window.__tempGlobals.push(key);}

    const csrf = document.querySelector('meta[name="csrf-token"]')?.content || '';
    const section = document.body.dataset.section || '';
    const endpoint = `/${section}/handle`;
    const postData = new URLSearchParams({ renderFrom, renderTo, renderAs, key, value, isapp });

    if (renderAs === 'html') {
      renderHTML(endpoint, postData, csrf);
    } else if (renderAs === 'json') {
      renderJSON(endpoint, postData, csrf);
    } else {
      console.warn('Unknown renderAs:', renderAs);
      alert('error-line37-handler.js');
    }

    // Immediately clean up temporary globals
    if (Array.isArray(window.__tempGlobals)) {
      for (const key of window.__tempGlobals) {
        delete window[key];
      }
      delete window.__tempGlobals;
    }

  });

  document.addEventListener('submit', (e) => {
    const form = e.target;
    if (!(form instanceof HTMLFormElement)) return;
    if (form.dataset.action !== 'handle') return;

    e.preventDefault();
    handleFormSubmission(form);
    
  });

  function handleFormSubmission(form) {
    const renderFrom = form.dataset.renderfrom;
    const renderTo   = form.dataset.renderto;
    const renderAs   = form.dataset.renderas;
    const isapp      = form.dataset.isapp || '0';

    if (!renderFrom || !renderTo || !renderAs) {
      console.error('❌ Missing render info for form');
      return;
    }

    const formData = new FormData(form);
    formData.append('renderFrom', renderFrom);
    formData.append('renderTo', renderTo);
    formData.append('renderAs', renderAs);
    formData.append('isapp', isapp);

    const postData = new URLSearchParams([...formData.entries()]);
    const csrf = document.querySelector('meta[name="csrf-token"]')?.content || '';
    const endpoint = '/' + renderFrom.replace('.', '/');

    if (renderAs === 'html') {
      renderHTML(endpoint, postData, renderTo, csrf);
    } else if (renderAs === 'json') {
      renderJSON(endpoint, postData, csrf);
    } else {
      console.warn('⚠️ Unknown renderAs:', renderAs);
    }
  }

  function renderHTML(endpoint, postData, renderTo, csrf) {
    fetch(endpoint, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        ...(csrf ? { 'X-CSRF-TOKEN': csrf } : {})
      },
      body: postData.toString()
    })
    .then(res => res.text())
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

      if (json?.funcName) {
        const fn = handlers[json.funcName];
        if (typeof fn === 'function') {
          try {
            fn();
          } catch (err) {
            console.error('⚠️ Handler error for', json.funcName, err);
          }
        } else {
          console.warn('⚠️ No handler defined for', json.funcName);
        }
      }
    })
    .catch(err => {
      console.error('❌ JSON Fetch failed:', err.message);
    });
  }
}