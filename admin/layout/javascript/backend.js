$(function () {
  $("[placeholder]")
    .on("focus", function () {
      $(this).attr("data-text", $(this).attr("placeholder"));
      $(this).attr("placeholder", ""); // علشان لما أضعظ على النص يحدف النص
    })
    .blur(function () {
      $(this).attr("placeholder", $(this).attr("data-text")); //علشان لما أشيل الملوس يرجع النص
    });
});
