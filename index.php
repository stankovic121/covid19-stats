<?php

    require_once "vendor/autoload.php";

    \Controllers\MainController::index();
//
//    $pdo = new \PDO( "mysql:dbname=covid19;host=127.0.0.1", "root", "");
//
//    $urls = [];
//    $sql = $pdo->prepare("SELECT * FROM countries LIMIT 1");
//    $sql->execute();
//
//
//    foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $data)
//    {
//        $urls[$data['id']] = "https://api.covid19api.com/total/country/".$data['slug'];
//    }
//
//    $yesterday;
//    $fullData = [];
//
//    foreach ($urls as $id => $url)
//    {
//        //$data = getDataForUrl($url);
//        $data = file_get_contents('data.json');
//        $data = json_decode($data);
//
//
//        $count = 0;
//        foreach($data as $today)
//        {
//            $todaysData = [];
//
//            if(!isset($yesterday))
//            {
//                // first day?
//                $todaysData['new_cases'] = 0;
//                $todaysData['new_deaths'] = 0;
//                $todaysData['new_recovered'] = 0;
//                $todaysData['new_case_increase'] = 0;
//                $todaysData['difference'] = 0;
//            } else {
//
//                $todaysData['new_cases'] = ($today->Confirmed == 0) ?
//                    0 : $today->Confirmed-$yesterday['confirmed'];
//
//                $todaysData['new_deaths'] = ($today->Deaths == 0) ?
//                    0 : $today->Deaths-$yesterday['deaths'];
//
//                $todaysData['new_recovered'] = ($today->Recovered == 0) ?
//                    0 : $today->Recovered-$yesterday['recovered'];
//
//                $todaysData['new_case_increase'] = calculatePercentage($todaysData['new_cases'], $yesterday['new_cases']);
//                $todaysData['difference'] = $todaysData['new_cases']-$yesterday['new_cases'];
//            }
//
//            $date = new DateTime($today->Date);
//
//            $fullData[] = [
//                'yesterday' => (isset($yesterday)) ? $yesterday : null,
//                'today' => [
//                    'confirmed' => $today->Confirmed,
//                    'deaths' => $today->Deaths,
//                    'recovered' => $today->Recovered,
//                    'new_cases' => $todaysData['new_cases'],
//                    'new_deaths' => $todaysData['new_deaths'] ,
//                    'new_recovered' => $todaysData['new_recovered'],
//                    'date' => $date->format("Y/m/d"),
//                    'new_case_increase' => $todaysData['new_case_increase'],
//                    'difference' => $todaysData['difference']
//                ],
//            ];
//
//            $yesterday = [
//                'confirmed' => $today->Confirmed,
//                'deaths' => $today->Deaths,
//                'recovered' => $today->Recovered,
//                'new_cases' => $todaysData['new_cases'],
//                'new_deaths' => $todaysData['new_deaths'] ,
//                'new_recovered' => $todaysData['new_recovered'],
//                'date' => $date->format("Y/m/d"),
//                'new_case_increase' => $todaysData['new_case_increase'],
//                'difference' => $todaysData['difference']
//            ];
//
//
//
//
//
//
////            $stmt = $pdo->prepare("INSERT INTO death_stats
////            (country_id, new, total, difference, percentage, date)
////            VALUES (:country_id, :new_deaths, :total_deaths, :difference, :percentage, :date)
////            ");
////            $stmt->bindParam(":country_id", $id);
////            $stmt->bindParam(":new_deaths", $todaysData['new_deaths']);
////            $stmt->bindParam(":total_deaths", $today->Deaths);
////            $stmt->bindParam(":difference", $todaysData['difference']);
////            $stmt->bindValue(":date", $date->format( 'Y-m-d H:i:s' ));
////            $stmt->execute();
//        }
//    }
//
//    function calculatePercentage(int $today, int $yesterday): ?float
//    {
//        $decreaseValue = $yesterday - $today;
//
//        return $yesterday > 0 ? -(($decreaseValue / $yesterday) * 100) : 0;
//    }
//
//    function getDataForUrl(string $url)
//    {
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//
//        $output = curl_exec($ch);
//        curl_close($ch);
//        return json_decode($output);
//    }
//?>
<!---->
<!---->
<!--<html>-->
<!---->
<!--    <head>-->
<!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
<!--        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<!--        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>-->
<!--    </head>-->
<!---->
<!--    <body>-->
<!---->
<!---->
<!--    <div class="tableFixHead">-->
<!--        <table>-->
<!---->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <th>Danas ukupno slucajeva</th>-->
<!--                    <th>Juce ukupno slucajeva</th>-->
<!--                    <th>Danas novih</th>-->
<!--                    <th>Juce novih</th>-->
<!--                    <th>Rast/Pad</th>-->
<!--                    <th>Razlika</th>-->
<!--                    <th>Danasnji datum</th>-->
<!--                    <th>Jucerasnji datum</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!---->
<!---->
<!--            <tbody>-->
<!--                --><?php //foreach ($fullData as $data) : ?>
<!--                    <tr>-->
<!--                        <td>--><?//= $data['today']['confirmed'] ?><!--</td>-->
<!--                        <td>--><?//= isset($data['yesterday']['confirmed']) ? $data['yesterday']['confirmed'] : 'N/A' ?><!--</td>-->
<!--                        <td>--><?//= $data['today']['new_cases'] ?><!--</td>-->
<!--                        <td>--><?//= isset($data['yesterday']['new_cases']) ? $data['yesterday']['new_cases'] : 'N/A' ?><!--</td>-->
<!--                        <td>--><?//= $data['today']['new_case_increase'] ?><!--%</td>-->
<!--                        <td>--><?//= $data['today']['difference'] ?><!--</td>-->
<!--                        <td>--><?//= $data['today']['date'] ?><!--</td>-->
<!--                        <td>--><?//= isset($data['yesterday']['date']) ? $data['yesterday']['date'] : 'N/A' ?><!--</td>-->
<!--                        <td></td>-->
<!--                    </tr>-->
<!--                --><?php //endforeach; ?>
<!--            </tbody>-->
<!--        </table>-->
<!--    </div>-->
<!---->
<!--    <style>-->
<!--        .tableFixHead          { overflow-y: auto; height: 100vh; }-->
<!--        .tableFixHead thead th { position: sticky; top: 0; }-->
<!---->
<!--        /* Just common table stuff. Really. */-->
<!--        table  { border-collapse: collapse; width: 100%; }-->
<!--        th, td { padding: 8px 16px; }-->
<!--        th     { background:#eee; }-->
<!--    </style>-->
<!---->
<!--    </body>-->
<!---->
<!---->
<!--</html>-->
