function minesCart(){
    num = parseInt($("#quantity").val());
    if (num > 1) {
      let tem = num - 1;
      $("#quantity").val(tem);
    }
  }
  function plusCart(){
    // alert("xxx");
    num = parseInt($("#quantity").val());
    if (num < 10) {
      let tem = num + 1;
      $("#quantity").val(tem);
    //   let total = (tem*parseInt(price)).toLocaleString();
    //   alert(total);

    }
  }

//   $('body').on('click', '.plus', function () {
//     num = parseInt($(this).closest('.record-product').find("#quantity").val()) + 1;

//     price = parseInt($(this).closest('.record-product').find("#quantity").attr('data-product'));

//     let totalProduct = (num*price).toLocaleString();

//     let totalCart = $('.total-cart').attr('data-total-cart');


//     totalCart = ((parseInt(totalProduct)) + parseInt(totalCart)).toLocaleString();
//     $('.total-cart').text(totalCart);
//     $(this).closest('tr').find('.total-product').text(totalProduct);

// });



  function validateQuantityCart() {
    let quantity = parseInt($("#quantity").val());
    if (isNaN(quantity) || quantity < 1 || quantity > 10) {
      alert("Số lượng chỉ trong khoảng 1 -> 10");
      $("#quantity").val(1); // Set the value to 1 if it's out of range
    }
  }
  $("#quantity").on("input", validateQuantityCart);
  