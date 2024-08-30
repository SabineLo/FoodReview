<?php
$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

//This is for 6th college
if(isset($_POST["rating_data"]) && !isset($_POST["user_name1"]))
{

	$data = array(
		':user_name'		=>	$_POST["user_name"],
		':user_rating'		=>	$_POST["rating_data"],
		':user_review'		=>	$_POST["user_review"],
		':datetime'			=>	time()
	);

	$query = "
	INSERT INTO review_table 
	(user_name, user_rating, user_review, datetime) 
	VALUES (:user_name, :user_rating, :user_review, :datetime)
	";

	$statement = $connect->prepare($query);

	$statement->execute($data);

	echo "Success Thanks :D";

}
if(isset($_POST["action"]) && !isset($_POST["user_name1"]))
{
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

	$query = "
	SELECT * FROM review_table 
	ORDER BY review_id DESC
	";

	$result = $connect->query($query, PDO::FETCH_ASSOC);

	foreach($result as $row)
	{
		$review_content[] = array(
			'user_name'		=>	$row["user_name"],
			'user_review'	=>	$row["user_review"],
			'rating'		=>	$row["user_rating"],
			'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
		);

		if($row["user_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["user_rating"];

	}

	$average_rating = $total_user_rating / $total_review;

	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

	echo json_encode($output);

}



/**Data base number two for warren */
if(isset($_POST["rating_data1"]) && isset($_POST["user_name1"]))
{
    if (isset($_POST["user_name1"]) && isset($_POST["user_review1"]) && isset($_POST["rating_data1"])) {
        $data = array(
            ':user_name'    => $_POST["user_name1"],
            ':user_rating'  => $_POST["rating_data1"],
            ':user_review'  => $_POST["user_review1"],
            ':datetime'     => time()
        );

        $query = "
        INSERT INTO review_table1 
        (user_name1, user_rating1, user_review1, datetime1) 
        VALUES (:user_name, :user_rating, :user_review, :datetime)
        ";

        $statement = $connect->prepare($query);
        $statement->execute($data);

        echo "Thank YOU :D";
    } else {
        echo "Error: Missing required fields for review_table1.";
    }
}

// Fetch review data for the second table
//check many tings lolol
if(isset($_POST["action"]) && isset($_POST["user_name1"])) 
{
    $average_rating = 0;
    $total_review = 0;
    $five_star_review = 0;
    $four_star_review = 0;
    $three_star_review = 0;
    $two_star_review = 0;
    $one_star_review = 0;
    $total_user_rating = 0;
    $review_content = array();

    $query = "
    SELECT * FROM review_table1 
    ORDER BY review_id1 DESC
    ";

    $result = $connect->query($query, PDO::FETCH_ASSOC);

    foreach($result as $row)
    {
        $review_content[] = array(
            'user_name'    => $row["user_name1"],
            'user_review'  => $row["user_review1"],
            'rating'       => $row["user_rating1"],
            'datetime'     => date('l jS, F Y h:i:s A', $row["datetime1"])
        );

        switch($row["user_rating1"]) {
            case '5': $five_star_review++; break;
            case '4': $four_star_review++; break;
            case '3': $three_star_review++; break;
            case '2': $two_star_review++; break;
            case '1': $one_star_review++; break;
        }

        $total_review++;
        $total_user_rating += $row["user_rating1"];
    }

    if ($total_review > 0) {
        $average_rating = $total_user_rating / $total_review;
    }

    $output = array(
        'average_rating'    => number_format($average_rating, 1),
        'total_review'      => $total_review,
        'five_star_review'  => $five_star_review,
        'four_star_review'  => $four_star_review,
        'three_star_review' => $three_star_review,
        'two_star_review'   => $two_star_review,
        'one_star_review'   => $one_star_review,
        'review_data'       => $review_content
    );

    echo json_encode($output);
}
?>
