var invoiceTable = document.querySelector("#invoiceTable");
var dataTable = new DataTable(invoiceTable);

const addInvoice = () => {
    window.location = window.base_url+'views/invoice/insert.php';
}
