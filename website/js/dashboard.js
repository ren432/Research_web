
const trendCtx = document.getElementById('riskTrendChart');

new Chart(trendCtx, {
    type: 'bar',

    data: {
        labels: [
            'May 8',
            'May 9',
            'May 10',
            'May 11',
            'May 12',
            'May 13',
            'May 14'
        ],

        datasets:[
            {
                label:'High Warning',
                data:[0,1,0,2,2,5,1],
                backgroundColor:'#DC2626'
            },
            {
                label:'Medium Warning',
                data:[1,1,0,2,1,2,1],
                backgroundColor:'#F59E0B'
            },
            {
                label:'Low Warning',
                data:[1,1,1,1,1,1,1],
                backgroundColor:'#22C55E'
            }
            ]
    },

    options: {
        responsive: true,
        maintainAspectRatio: false,

        plugins: {
            legend: {
                display: false
            },

            tooltip: {
                callbacks: {
                    label: function(context) {
                        return context.raw + ' warnings';
                    }
                }
            }
        },

        scales: {
            y: {
                beginAtZero: true,

                ticks: {
                    stepSize: 1,
                    font: {
                        size: 15
                    }
                },

                title: {
                    display: true,
                    text: 'Number of Warnings',
                    font: {
                        size: 16,
                        weight: 'bold'
                    }
                }
            },

            x: {
                ticks: {
                    font: {
                        size: 15
                    }
                }
            }
        }
    }
}); 


// ----------------chart-------------------
const pieCtx  = document.getElementById('pieChart');

new Chart(pieCtx, {

type: 'doughnut',

data: {

labels: ['High Risk', 'Low Risk', 'Normal'],

  datasets: [{
    data: [4, 10, 12],

    backgroundColor: [
      '#ff4d4d',
      '#ffc107',
      '#3ddc6c'
    ],

    borderWidth: 0,
    hoverOffset: 6
  }]
},

options: {

  responsive: true,
  maintainAspectRatio: false,
  cutout: '65%',

  plugins: {

    legend: {

      position: 'right',

      labels: {
        color: '#000',
        padding: 20,
        boxWidth: 40,

        font: {
          size: 16
        }
      }
    }
  }
}
});



