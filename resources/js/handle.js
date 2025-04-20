document.addEventListener('DOMContentLoaded', () => {
    // ⛔ Don't run this unless the body has the 'linkcheck' class
    if (!document.body.classList.contains('linkcheck')) return;

    // ✅ Only act on an <a> element with data-action="handle"
    if (e.target.tagName !== 'A' || e.target.dataset.action !== 'handle') return;

    const el = e.target;

    const renderFrom = el.dataset.renderfrom;
    const renderTo = el.dataset.renderto;
    const renderAs = el.dataset.renderas;
    const value = el.dataset.value || '';
    const key = el.dataset.key || '';
    const isapp = el.dataset.isapp || '0';

    if (!renderFrom || !renderTo || !renderAs) {
        console.error('Missing data-renderfrom, data-renderto, or data-renderas');
        return;}

    e.preventDefault();

    // Validate required attributes
    if (!renderFrom || !renderTo || !renderAs) {
        console.error('Missing data-renderfrom or data-renderto');
        return;}

    // Build endpoint URL based on body context
    const section = document.body.dataset.section || '';
    const endpoint = section ? `/${section}/handle` : '/handle';

    // Build POST data
    const postData = new URLSearchParams({
        renderFrom,
        renderto: renderTo,
        value,
        key,
        isapp
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
