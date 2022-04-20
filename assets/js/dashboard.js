const charts = document.querySelectorAll(".chart");

charts.forEach(function (chart) {
  var ctx = chart.getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
      datasets: [
        {
          label: "# of Votes",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
          ],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});

$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
  $(document).on("click",".update-user-details",function() {
      var base_url=$("#path").val();
      var id=$("#editUserId").val();
      var row_num=$("#edit_row_num").val();
      var name=$("#edit_name").val();
      $.ajax({
          url:base_url+"dashboard/user/update",
          method:"GET",
          dataType: 'json',
          data:{
              id:id,
              row_no:row_num,
              name:name,
          },
          success:function(json){
              if (json.status==200) {
                  triggerAlert(json.msg,'success');
                  window.location.replace(base_url);
              } else {
                  triggerAlert(json.msg,'error');
              }
          }
      })
  })
});
