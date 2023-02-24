// jQuery( '#clickme' ).click(function() {
//   jQuery( "#book" ).fadeIn( "slow", function() {
//     // Animation complete
    
//   });
// });

jQuery(function(){
        console.log("Yes I do actually work!!!");
})

jQuery(document).ready(function(){
    jQuery("#clickme").click(function(){
      jQuery("#book").slideUp(1500);
    });
  });