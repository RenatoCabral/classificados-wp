jQuery.ajax({
    url: ajaxurl,
    type: "POST",
    data: "action=get_manufacturer"
}).success(function (results) {
    console.log(results);
    // console.log(jQuery.parseJSON(results));
    console.log('sucesso');
    // console.log('------------//----------');

}).error(function (result) {
    console.log("fail => " + result);
});
