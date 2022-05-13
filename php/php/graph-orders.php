<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="mainPageAfSign.css">
<script src="chart/dist/chart.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/graph.css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<title>GRAPHS</title>
<?php
session_start();
include "navbar-market.php";
  ?>
<div class="container">
  <table>
    <tr>
      <td class="rank">
      <?php
      include  "connection.php" ;
          $market_id = $_SESSION['id'];
          $popularityMarket = $db->popularity("market_id = ? ", $market_id)->fetch();
          $popularity = $popularityMarket['popularity'];
          $totalPopularity = 0;
          foreach ($db->popularity() as $market)
          {
              $totalPopularity += $market['popularity'];
          }
          $percentage = ($popularity / $totalPopularity)*100;
          $percentage= round($percentage,2);
           $popularity_market = $db->popularity()->order("popularity desc");
          $i=0;
          foreach ($popularity_market as $market) {
            $i++;
            if ($market_id == $market['market_id'])
            {
                $rank = $i;
            }
          }
      ?>
      <p><b>You are ranked<h1><?php echo $rank; ?><h1></b></p>
      </td>
      <td class="rank">
          <p><b>You popularity growth is of<h1><?php echo $percentage; ?>%</h1></b></p>
      </td>
    </tr>
    <tr>
      <td class="graph">
        <p>Number of customers comared to other markets</p>
      </td>
      <td>
          <p>  </p>
      </td>
    </tr>
<tr>
<td>
<canvas id="chart1" width="400px" height="400px"></canvas>
<?php

$markets = $db->popularity();
$lables = array();
foreach($markets as $market)  {
  $name="anonymous";
  if($market['market_id']==$market_id)
    {
    $user = $db->professional("id= ?", $market_id)->fetch();
    $name = $user['market_name'];
    }
  array_push($lables,$name) ;


}

$expences = array();
foreach($markets as $market)  {

    $popularity = $market['popularity'];
  array_push($expences,$popularity) ;

}

?>
<script>
var ctx = document.getElementById('chart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
              <?php
                $first_value = true;
                foreach($lables as $lable) {
                  if ($first_value) {
                    $first_value = false;
                  } else {
                    echo ",";
                  }
                  echo '"' . $lable . '"';
                }
              ?>
            ],
        datasets: [{
            label: '# of Votes',
            data: [
              <?php
                $first_value = true;
                foreach($expences as $expence) {
                  if ($first_value) {
                    $first_value = false;
                  } else {
                    echo ",";
                  }
                  echo $expence;
                }
              ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
</td>
<br>
<td>
  <center>

<script>
window.onload = function() {

var chart3 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title: {
		text: "  Popularity Growth Progress "
	},
	data: [{
		type: "pie",
		startAngle: 240,
		dataPoints: [
			{y: <?php echo $popularity ?> , label: "Your Customers", exploded: true, color: "mediumturquoise"},
			{y: <?php  echo $totalPopularity ?> , label: "Total Customers", color: "yellowgreen"}
		]
	}]
});
chart3.render();

<?php


$lables = array();
$markets = $db->professional();
foreach($markets as $market)  {

  $marketIdProduct = $market['id'];
  $products = $db->product();
  $j = 0;
  foreach ($products as $product){
    if ( $marketIdProduct == $product['market_id']  )
    {
      $j++;
    }
   }
  if ($market_id == $marketIdProduct)
  {
    $numProduct = $j;
    echo $numProduct;
  }
  else{
    array_push($lables,$j) ;
  }
}
$user = $db->professional("id = ?", $market_id)->fetch();
?>


var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Your Dominance In The Market"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		dataPoints: [
			{y: <?php echo $numProduct ?> , label: "<?php echo $user['market_name']; ?>", exploded: true, color: "gray"},
			<?php

            foreach($lables as $value) { ?>
              {y: <?php echo $value ?> , label: "Anonymous", },
            <?php }
            ?>
		]
	}]
});


chart2.render();

}


</script>
<div class="graph "id="chartContainer1" style="height: 300px; width: 300px;"></div>
<br>
<div class="graph" id="chartContainer2" style="height: 300px; width: 500px;"></div>
</td>
</tr>
</table>
</div>
