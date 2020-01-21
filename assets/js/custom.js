$(document).ready(function() {
    var auto_heigth=


    $('#Campaign_page').DataTable( {
						language: {
        search: "_INPUT_",
        searchPlaceholder: "Search"
    },
        responsive: true,
        columnDefs: [ 
        	{ targets:"_all", orderable: true },
        	{ targets:[0,1,2,3,4,5], className: "desktop" },
        	{ targets:[0,1,2], className: "tablet" },
        	{ targets:[0], className: "mobile" }        	
        ],
        bAutoWidth: false, 
          aoColumns : [
            { sWidth: '10%' },
            { sWidth: '5%' },
            { sWidth: '5%' },
            { sWidth: '10%' },
            { sWidth: '10%' },
            { sWidth: '10%' }
          ]
    } );


    $('#Campaign_create').DataTable( {
                        language: {
        search: "_INPUT_",
        searchPlaceholder: "Search"
    },
        responsive: true,
        columnDefs: [ 
            { targets:"_all", orderable: true },
            { targets:[0,1,2,3,4], className: "desktop" },
            { targets:[0,1,2], className: "tablet" },
            { targets:[0], className: "mobile" }            
        ],
        bAutoWidth: false, 
  aoColumns : [
    { sWidth: '10%' },
    { sWidth: '5%' },
    { sWidth: '5%' },
    { sWidth: '10%' },
    { sWidth: '10%' }
  ]
    } );


$('#adv_page').DataTable( {
                        language: {
        search: "_INPUT_",
        searchPlaceholder: "Search"
    },
        responsive: true,
        columnDefs: [ 
            { targets:"_all", orderable: true },
            { targets:[0,1,2], className: "desktop" },
            { targets:[0,1,2], className: "tablet" },
            { targets:[0], className: "mobile" }            
        ],
        bAutoWidth: false, 
  aoColumns : [
    { sWidth: '10%' },
    { sWidth: '5%' },
    { sWidth: '5%' }
  ]
    } );


    $('#item_review').DataTable( {
                        language: {
        search: "_INPUT_",
        searchPlaceholder: "Search"
    },
        responsive: true,
        columnDefs: [ 
            { targets:"_all", orderable: true },
            { targets:[0,1,2,3], className: "desktop" },
            { targets:[0,1,2], className: "tablet" },
            { targets:[0], className: "mobile" }            
        ],
        bAutoWidth: false, 
  aoColumns : [
    { sWidth: '10%' },
    { sWidth: '5%' },
    { sWidth: '5%' },
    { sWidth: '10%' }
  ]
    } );

        $('#prod_inventory').DataTable( {
                        language: {
        search: "_INPUT_",
        searchPlaceholder: "Search"
    },
        responsive: true,
        columnDefs: [ 
            { targets:"_all", orderable: true },
            { targets:[0,1,2,3], className: "desktop" },
            { targets:[0,1,2], className: "tablet" },
            { targets:[0], className: "mobile" }            
        ],
        bAutoWidth: false, 
  aoColumns : [
    { sWidth: '10%' },
    { sWidth: '5%' },
    { sWidth: '5%' },
    { sWidth: '10%' }
  ]
    } );


$('#store_page').DataTable( {
                        language: {
        search: "_INPUT_",
        searchPlaceholder: "Search"
    },
        responsive: true,
        columnDefs: [ 
            { targets:"_all", orderable: true },
            { targets:[0,1,2], className: "desktop" },
            { targets:[0,1,2], className: "tablet" },
            { targets:[0], className: "mobile" }            
        ],
        bAutoWidth: false, 
      aoColumns : [
        { sWidth: '10%' },
        { sWidth: '5%' },
        { sWidth: '5%' }
      ]
        } );
    } );

 $('#adv_page01').DataTable( {
        responsive: true,
        bAutoWidth: false
         
    } );
 $('#adv_page02').DataTable( {
        responsive: true,
        bAutoWidth: false
         
    } );

/**profile**/

  $(".probtn").click(function(){
    $(".logblock").toggleClass("toggleprofile");
  });

/**end profile**/
$(".creat_camp").click(function(){
    $(".snackbar_msg").fadeIn(); 
    setTimeout(function(){
        $(".snackbar_msg").fadeOut();
     }, 3000);
    setTimeout(function(){
    location.href = "campaign.php"; 
     }, 3500);
});

/*$(".creat_prod").click(function(){
    $(".snackbar_msg").fadeIn(); 
    setTimeout(function(){
        $(".snackbar_msg").fadeOut();
     }, 3000);
    setTimeout(function(){
    location.href = "product_inventory.php"; 
     }, 3500);
});
*/


