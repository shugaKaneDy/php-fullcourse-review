// traversing

// shit reload to recache


$(document).ready(function() {
  let recipeTextbox = $("#recipe-textbox");
  let addBtn = $("#add-btn");
  let cart = $(".cart");
  let deleteList = $("#delete-list");

  let fname = $("#fname");
  let lname = $("#lname");
  let form = $("#form");


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


  $('#load-btn').on("click", function() {

    // $('#main-container').load('sample.txt #data');

    $.get("https://jsonplaceholder.typicode.com/users", function(data, status) {

      data.forEach(element => {
        $('#main-container').append(`<p>${element.name}</p>`);
      });
    });
  });

  // lname.on("keyup", function() {

  //   let lg = $(this).val().length;
  //   console.log(lg);
  // });
  // lname.on("blur", function() {

  //   let lg = $(this).val().length;
  //   console.log("This was selected");
  // });
  // lname.on("focus", function() {

  //   let lg = $(this).val().length;
  //   console.log("This is selected");
  // });

  form.on("submit", function(e) {

    e.preventDefault(); // to cancel out the relaod feature

    // console.log("this was submitted");

    $.ajax({
      type: 'POST',
      url: 'process.php',
      data: {
        firstname: fname.val(),
        lastname: lname.val()
      },
      success: function(response) {
        // console.log(JSON.parse(response));
        let data = JSON.parse(response);

        $('#main-container').append(`<p>${data.firstname} ${data.lastname}</p>`)
      }
    })
  });


})