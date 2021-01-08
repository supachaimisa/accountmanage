var customerTable = document.querySelector("#customerTable");
var dataTable = new DataTable(customerTable);
const getFetch = async (req) => {
    const response = await fetch(
      window.base_url + "controllers/Api.php?typeRequire=" + req
    ).then((res) => res.json());
    return response;
  };
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
const addCustomer = () => {
    window.location = window.base_url+'views/customer/insert.php';
}
const viewDetail = (customer_id) => {
    alert(customer_id);
    // window.location = window.base_url+'views/customer/insert.php';
}
const btnUpdate = (customer_id) => {
    // alert(customer_id);
    window.location = window.base_url+'views/customer/update.php?customer_id='+customer_id;
}
const btnDelete = (customer_id) => {
    alert(customer_id);
    // window.location = window.base_url+'views/customer/insert.php';
}
const getCustomerList = () => {
    const customerTableTbody = document.querySelector('#customerTableTbody');
    getFetch('getCustomerList')
    .then(res => {
      console.log(res);
      res.result.map((item,idx) => {
          return (customerTableTbody.innerHTML += `
            <tr>
                <th>${idx+1}</th>
                <td>${item[0]} ${item[1]}</td>
                <td>${item[3]}</td>
                <td>${item[8]}</td>
                <td width="20%" align="center">
                <button type="button" class="btn btn-secondary" onclick="viewDetail('${item[0]}')"><i class="fas fa-file-alt" style="font-size: 22px;"></i></button>
                <button type="button" class="btn btn-warning" onclick="btnUpdate('${item[0]}')"><i class="fas fa-edit" style="font-size: 22px;"></i></button>
                <button type="button" class="btn btn-danger" onclick="btnDelete('${item[0]}')"><i class="fas fa-trash-alt" style="font-size: 22px;"></i></button>
                </td>
            </tr>
          `);
      });

    });
}
getCustomerList();

