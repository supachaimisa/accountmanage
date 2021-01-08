

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
const getCustomerCode = () => {
    const customer_id = document.querySelector('#customer_id');
    getFetch('getCustomerCode')
    .then(res => {
      let count = String(res.result).split().length ;
      if(count == 1){
        customer_id.value = 'CTM000'+(res.result+1);
      }else if(count == 2){
        customer_id.value = 'CTM00'+(res.result+1);
      }else if(count == 3){
        customer_id.value = 'CTM0'+(res.result+1);
      }else if(count == 4){
        customer_id.value = 'CTM'+(res.result+1);
      }
    });
}
getCustomerCode();
const getCustomerType = () => {
    const customer_type = document.querySelector('#customer_type');
    getFetch('getCustomerType')
    .then(res => {
      // console.log(res);
      res.result.map((item,idx) => {
        return (customer_type.innerHTML += `
        <option value="${item[0]}">${item[1]}</option>
        `);
      });
    });
}
getCustomerType();

const btnInsert = () => {
  let data = {
    customer_id: document.querySelector('#customer_id').value,
    customer_name: document.querySelector('#customer_name').value,
    customer_type: document.querySelector('#customer_type').value,
    customer_address: document.querySelector('#customer_address').value,
    customer_tax_number: document.querySelector('#customer_tax_number').value,
    customer_email: document.querySelector('#customer_email').value,
    customer_tel: document.querySelector('#customer_tel').value,
  }
  // console.log(data);
  let url = window.base_url + "controllers/Api.php?typeRequire=customerInsert";
  postFetch(url, data).then((res) => {
    console.log(res);
    if (res.result == true) {
      Swal.fire(
        'สำเร็จ!',
        'สร้างลูกค้าสำเร็จ.',
        'success'
      ).then(result => {
        window.location = window.base_url+'views/customer/customer.php';
      })
    }
  });
};

