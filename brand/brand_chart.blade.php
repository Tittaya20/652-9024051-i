<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brand Chart</title>
</head>
<body>
    <h1>กราฟสรุปจำนวนสินค้าจากยี่ห้อสินค้า </h1>
    <canvas id="myChart" height="80px"></canvas>    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  {{ Js::from($labels) }};
    var datas =  {{ Js::from($data) }};
  
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            data: [65, 59, 80, 81, 56, 55, 40],
        backgroundColor: [
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
        ],
        borderColor: [
            'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
          'rgba(16, 40, 255)',
           ],
        borderWidth: 1
      }]
    };
  
    const config = {
        type: 'bar',
        data: data,
        options: {}
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>
</html>
</x-app-layout>