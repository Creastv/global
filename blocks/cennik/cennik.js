jQuery(document).ready(function () {
  var oldStart = 0;
  jQuery("#pojazdy").DataTable({
    responsive: {
      details: {
        type: "column"
      }
    },
    columnDefs: [
      {
        className: "dtr-control",
        orderable: false,
        targets: 0
      }
    ],
    pageLength: 1000,
    // columns: [null, { orderable: false }, null, null, null, null, null, null, { orderable: false }],
    columns: [null, null, null, null, null, null, null, null, null],
    bLengthChange: false,
    // "scrollY": scrollY + "px",
    // "scrollCollapse": true,
    paging: false,
    // ordering: true,
    info: false,

    searching: false,

    fnDrawCallback: function (o) {
      if (o._iDisplayStart != oldStart) {
        var targetOffset = jQuery("#pojazdy").offset().top;
        jQuery("html,body").animate({ scrollTop: targetOffset - 100 }, 500);
        oldStart = o._iDisplayStart;
      }
    },

    language: {
      paginate: {
        previous: "« Poprzednie",
        next: "Następne »",
        lengthMenu: " _MENU_ "
      }
    }
  });
  document.querySelector("#pojazdy").style.display = "block";
  document.querySelector(".loader").style.display = "none";
});
