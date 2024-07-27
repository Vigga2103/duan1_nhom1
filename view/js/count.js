function minus(){
  num = parseInt($("#quantity").val());
  if (num > 1) {
    let tem = num - 1;
    $("#quantity").val(tem);
  }
}
function plus(){
  // alert("xxx");
  num = parseInt($("#quantity").val());
  if (num < 10) {
    let tem = num + 1;
    $("#quantity").val(tem);
  }
}
function validateQuantity() {
  let quantity = parseInt($("#quantity").val());
  if (isNaN(quantity) || quantity < 1 || quantity > 10) {
    alert("Số lượng chỉ trong khoảng 1 -> 10");
    $("#quantity").val(1); // Set the value to 1 if it's out of range
  }
}
$("#quantity").on("input", validateQuantity);

function addCart(id){
  num = parseInt($("#quantity").val());
  $.post("addCart.php",{'id':id,'number':num}, function(data,status){
    $("#numberCart").text(data);
  })
}