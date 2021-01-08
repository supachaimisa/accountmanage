

const getFetch = async (req='',id='') => {
    const response = await fetch(
      window.base_url + "controllers/Api.php?typeRequire="+req +"&key="+id
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
// variable
const customer_ids =  document.querySelector('#customer_id')
const customer_name =   document.querySelector('#customer_name')
const customer_type =    document.querySelector('#customer_type')
const customer_address =    document.querySelector('#customer_address')
const customer_tax_number =    document.querySelector('#customer_tax_number')
const customer_email =   document.querySelector('#customer_email')
const customer_tel =    document.querySelector('#customer_tel')

const getCustomerType = () => {
  const customer_types = document.querySelector('#customer_type');
  getFetch('getCustomerType','')
  .then(res => {
    res.result.map((item,idx) => {
      return (customer_types.innerHTML += `
      <option value="${item[0]}">${item[1]}</option>
      `);
    });
  });
}
getCustomerType();

const getCustomerByCode = (customer_id) => {
    // const customer_id = document.querySelector('#customer_type');
    getFetch('getCustomerByCode',customer_id)
    .then(res => {
      console.log(res.result);
      customer_ids.value = res.result.customer_id;
      customer_name.value = res.result.customer_name;
      customer_address.value = res.result.customer_address;
      customer_email.value = res.result.customer_email;
      customer_type.value = res.result.customer_type;
      customer_tax_number.value = res.result.customer_tax_number;
      customer_tel.value = res.result.customer_tel;
    });
}
if(window.customer_id != ''){
  getCustomerByCode(window.customer_id);
}
// console.log(window.customer_id);
const btnUpdate = () => {
  let data = {
    customer_name: document.querySelector('#customer_name').value,
    customer_type: document.querySelector('#customer_type').value,
    customer_address: document.querySelector('#customer_address').value,
    customer_tax_number: document.querySelector('#customer_tax_number').value,
    customer_email: document.querySelector('#customer_email').value,
    customer_tel: document.querySelector('#customer_tel').value,
  }
  console.log(data);
  // return
  let customer_id = document.querySelector('#customer_id').value
  let url = window.base_url + "controllers/Api.php?typeRequire=customerUpdate&key="+customer_id;
  postFetch(url, data).then((res) => {
    console.log(res);
    if (res.result == true) {
      Swal.fire(
        'สำเร็จ!',
        'แก้ไขลูกค้าสำเร็จ.',
        'success'
      ).then(result => {
        window.location = window.base_url+'views/customer/customer.php';
      })
    }
  });
};

