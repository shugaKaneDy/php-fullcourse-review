// traversing
$(document).ready(function() {
  let recipeTextbox = $("#recipe-textbox");
  let addBtn = $("#add-btn");
  let cart = $(".cart");
  let deleteList = $("#delete-list");


  addBtn.on("click", function() {

    if(recipeTextbox.val().length > 0) {
      cart.append(`<div>Item List <p>Recipe: ${recipeTextbox.val()} <button class="btn btn-danger delete-btn">Delete</button></p> </div>`);
      recipeTextbox.val('');

      $('.delete-btn').on("click", function() {

        // $(this).parent().remove();
        // $(this).parent().parent().remove();
        // $(this).parents().remove(); = remove all the elements
        $(this).parentsUntil(".cart").remove();
      });
    } else {
      
      alert("Required");
    }

  });

  deleteList.on("click", function() {

    // $("#check-list").children().css({
    //   "color" : "red"
    // });
    // $("#check-list").find(".unq").css({
    //   "color" : "red"
    // });
    // $("#check-list > ul > li").first().css({
    //   "color" : "red",
    //   "font-size" : "32px"
    // });
    // $("#check-list > ul > li").last().css({
    //   "color" : "red",
    //   "font-size" : "32px"
    // });

    // specify index of the element
    // $("#check-list > ul > li").eq(3).css({
    //   "color" : "red",
    //   "font-size" : "32px"
    // });

    // $("#check-list > ul > li").filter(".unq").css({
    //   "color" : "red",
    //   "font-size" : "32px"
    // });
    $("#check-list > ul > li").not(".unq").css({
      "color" : "red",
      "font-size" : "32px"
    });



  });

  // this won't work because we are just appending it
  // $('.delete-btn').on("click", function() {
  //   $(this).
  // });
})