$(document).ready(function(){
    $.ajax({
        url: "http://localhost/GarudaCI/json/isna",
        method: "GET",
        type: 'GET',
         dataType: 'json',

        success: function(data) {
            console.log(data);
            var tipe = [];
            var percentage = [];

            for(var i in data) {
                tipe.push(data[i].unit);
                percentage.push(data[i].sum);
            }

            // var chartdata = {

            //  labels: tipe,

            //  datasets : [
            //      {
            //          label: 'Construct',
            //          backgroundColor: 'rgba(200, 200, 200, 0.75)',
            //          borderColor: 'rgba(200, 200, 200, 0.75)',
            //          hoverBackgroundColor: 'rgba(123, 200, 200, 1)',
            //          hoverBorderColor: 'rgba(123, 200, 200, 1)',
            //          data: percentage
            //      }
            //  ]
            // };

            var myChart = echarts.init(document.getElementById('gauge'));

        // specify chart configuration item and data
        var option = {


            tooltip: {},
            legend: {
              label : 'yeahs',
                data:['sdsdsd']
            },


            series: [{
                max:6,
                axisLine:{

                    show: true,
                    lineStyle: {
                    color: [
                    [0.5, '#ea6153'],
                    [0.8, '#fcff00'],
                    [1, '#90ee90']
                    ],
                    width: 20
                    }
                },
                label: '',
                name: 'Jumlah',
                type: 'gauge',
                data: percentage,
                startAngle:210,
                endAngle:-30

            }]
        };

        // use configuration item and data specified to show chart
        myChart.setOption(option);





        },
        error: function(data) {
            console.log(data);
        }
    });
});

function test() {
   alert('test');
}
