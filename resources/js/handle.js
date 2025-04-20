document.addEventListener('click', (e) => {

    if (!document.body.classList.contains('linkcheck')) return;

    if (e.target.tagName !== 'A' || e.target.dataset.action !== 'handle') return;

    e.preventDefault();

    console.log('Clicked element:', e.target);

    const el = e.target;

    const renderFrom = el.dataset.renderfrom;
    const renderTo = el.dataset.renderto;
    const renderAs = el.dataset.renderas;

    // Validate required attributes
    if (!renderFrom || !renderTo || !renderAs) {
        console.error('error-line20-handle.js');
        return;}

    // Build endpoint URL based on body context
    const section = document.body.dataset.section || '';
    const endpoint = section ? `/${section}/handle` : '/handle';

    // Build POST data
    const postData = new URLSearchParams({
        renderTo,
        renderFrom,
        renderAs
    });

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
        if (!res.ok) throw new Error(`Failed request: ${res.status}`);
        return res.text();
    })
    .then(html => {
        const target = document.querySelector(`.${renderTo}`);
        if (target) {
            target.innerHTML = html;
        } else {
            console.warn(`Target container .${renderTo} not found`);
        }
    })
    .catch(err => {
        console.error('Handle request error:', err);
    });
});
