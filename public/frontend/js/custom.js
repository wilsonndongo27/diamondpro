function redirectUrl(item){
    const url = item.getAttribute('url');
    window.location.assign(url);
}