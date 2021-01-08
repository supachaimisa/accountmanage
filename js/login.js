const getFetch = async () => {
    await fetch(window.base_url+'controllers/Api.php')
    .then(res => res.json())
    .then(result => {
        console.log(result)
    });
}
const postFetch = async (url = '', data = {}) => {
    const response = await fetch(url, {
        method: 'POST', 
        mode: 'cors', 
        cache: 'no-cache', 
        credentials: 'same-origin', 
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', 
        referrerPolicy: 'no-referrer', 
        body: JSON.stringify(data) 
      });
      return response.json(); 
}
// getFetch();
const checkLogin = () => {
    let data = {
        username: document.querySelector('#Username').value,
        password: document.querySelector('#Password').value,
    }
    let url = window.base_url+'controllers/Api.php?typeRequire=checkLogin';
    postFetch(url,data)
    .then(res => {
        console.log(res);
        window.location = window.base_url+'views/home.php';
    });
}

// console.log(window);