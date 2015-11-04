var growthData = {
  labels : [2012, 2013, 2014, 2015],
  datasets : [
    {
      fillColor : "#79BD9A",
      highlightFill: "#3B8686",
      data : [
        210,
        297,
        390,
        562
      ]
    }
  ]
};

var volumeData = [
    {
        value: 562.66,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "China"
    },
    {
        value: 349.06,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "USA"
    },
    {
        value: 93.89,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "UK"
    }
]

var audienceData = [
    {
        value: 1357,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "China"
    },
    {
        value: 316.5,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "USA"
    },
    {
        value: 64.1,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "UK"
    }
]

window.onload = function() {
  //grab context
  var growthCtx = document.getElementById('growth').getContext('2d');
  var volumeCtx = document.getElementById('volume').getContext('2d');
  var audienceCtx = document.getElementById('audience').getContext('2d');


  window.myBar = new Chart(growthCtx).Bar(growthData, {
      responsive : true,
      scaleShowGridLines : true,
      scaleShowVerticalLines: false,
      barShowStroke : false,
      barValueSpacing : 5,
      scaleFontFamily: "'Proxima Nova', sans-serif",
      tooltipFontFamily: "'Proxima Nova', sans-serif",
      tooltipTemplate: "<%=label%> - $<%= value %> B",
      showScale: false
  });
  window.myBar = new Chart(volumeCtx).Doughnut(volumeData, {
      responsive : true,
      animationEasing: "easeOutQuart",
      tooltipFontFamily: "'Proxima Nova', sans-serif",
      tooltipTemplate: "<%=label%> - $<%= value %> B"
  });
  window.myBar = new Chart(audienceCtx).PolarArea(volumeData, {
      responsive : true,
      animationEasing: "easeOutQuart",
      tooltipFontFamily: "'Proxima Nova', sans-serif",
      tooltipTemplate: "Population of <%=label%> - <%= value %> M",
  });
}
