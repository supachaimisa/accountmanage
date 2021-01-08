
const mainGetFetch = async (req) => {
    const response = await fetch(
      window.base_url + "controllers/Api.php?typeRequire=" + req
    ).then((res) => res.json());
    return response;
  };
  const mainPostFetch = async (url = "", data = {}) => {
    const response = await fetch(url, {
      method: "POST",
      mode: "cors",
      cache: "no-cache",
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      redirect: "follow",
      referrerPolicy: "no-referrer",
      body: JSON.stringify(data),
    });
    return response.json();
  };
  const btnLogout = () => {
    let url = window.base_url + "controllers/Api.php?typeRequire=logout";
    mainPostFetch(url, {}).then((res) => {
      console.log(res);
      if (res.result == true) {
        window.location = window.base_url;
      }
    });
  }
  const backHome = () => {
    window.location = window.base_url+'views/home.php'
}