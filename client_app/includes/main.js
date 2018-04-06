$(document).ready(function(){
  $("form").submit(function(e){
    e.preventDefault();
      var num1 = $('input[name="num1"]').val();
      var num2 = $('input[name="num2"]').val();
      var num3 = $('input[name="num3"]').val();
      var func = $("input[name='func']:checked").val();
      var method =$("#method option:selected").val();
      var dataObj={'func':func, 'num1':num1, 'num2':num2, 'num3': num3};
      $.ajax({
        url:'http://shenkar.html5-book.co.il/2017-2018/dcs/dev_18/service_calculator/system.php',
        data:dataObj,
        type: method,
        success: function(data){
          $("#result").html(data.retVal);
        }
      });
  });
});
