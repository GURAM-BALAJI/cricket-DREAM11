<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
        $starting_four=$_POST['starting_four'];
        $starting_six=$_POST['starting_six'];
		$cricket_name = $_POST['cricket_name'];
        $cricket_date = $_POST['cricket_date'];
        $cricket_time = $_POST['cricket_time'];
        $cricket_category_id=$_POST['cricket_category_id'];
        $team1 = $_POST['team1'];
        if(!empty($_POST['four_team1_player1']))
        $four_team1_player1 = $_POST['four_team1_player1']; 
        else
            $four_team1_player1 ='';
        if(!empty($_POST['six_team1_player1']))
        $six_team1_player1 = $_POST['six_team1_player1']; 
        else
            $six_team1_player1 ='';
        if(!empty($_POST['four_team1_player2'])) 
        $four_team1_player2 = $_POST['four_team1_player2']; 
        else
            $four_team1_player2 ='';
        if(!empty($_POST['six_team1_player2']))
        $six_team1_player2 = $_POST['six_team1_player2']; 
        else
            $six_team1_player2 ='';
        if(!empty($_POST['four_team1_player3'])) 
        $four_team1_player3 = $_POST['four_team1_player3']; 
        else
            $four_team1_player3 ='';
        if(!empty($_POST['six_team1_player3']))
        $six_team1_player3 = $_POST['six_team1_player3']; 
        else
            $six_team1_player3 ='';
        if(!empty($_POST['four_team1_player4'])) 
        $four_team1_player4 = $_POST['four_team1_player4']; 
        else
            $four_team1_player4 ='';
        if(!empty($_POST['six_team1_player4']))
        $six_team1_player4 = $_POST['six_team1_player4']; 
        else
            $six_team1_player4 ='';
        if(!empty($_POST['four_team1_player5'])) 
        $four_team1_player5 = $_POST['four_team1_player5']; 
        else
            $four_team1_player5 ='';
        if(!empty($_POST['six_team1_player5']))
        $six_team1_player5 = $_POST['six_team1_player5']; 
        else
            $six_team1_player5 ='';
        if(!empty($_POST['four_team1_player6'])) 
        $four_team1_player6 = $_POST['four_team1_player6']; 
        else
            $four_team1_player6 ='';
        if(!empty($_POST['six_team1_player6']))
        $six_team1_player6 = $_POST['six_team1_player6']; 
        else
            $six_team1_player6 ='';
        if(!empty($_POST['four_team1_player7'])) 
        $four_team1_player7 = $_POST['four_team1_player7']; 
        else
            $four_team1_player7 ='';
        if(!empty($_POST['six_team1_player7']))
        $six_team1_player7 = $_POST['six_team1_player7']; 
        else
            $six_team1_player7 ='';
        if(!empty($_POST['four_team1_player8'])) 
        $four_team1_player8 = $_POST['four_team1_player8']; 
        else
            $four_team1_player8 ='';
        if(!empty($_POST['six_team1_player8']))
        $six_team1_player8 = $_POST['six_team1_player8']; 
        else
            $six_team1_player8 ='';
        if(!empty($_POST['four_team1_player9'])) 
        $four_team1_player9 = $_POST['four_team1_player9']; 
        else
            $four_team1_player9 ='';
        if(!empty($_POST['six_team1_player9']))
        $six_team1_player9 = $_POST['six_team1_player9']; 
        else
            $six_team1_player9 ='';
        if(!empty($_POST['four_team1_player10'])) 
        $four_team1_player10 = $_POST['four_team1_player10']; 
        else
            $four_team1_player10 ='';
        if(!empty($_POST['six_team1_player10']))
        $six_team1_player10 = $_POST['six_team1_player10']; 
        else
            $six_team1_player10 ='';
        if(!empty($_POST['four_team1_player11'])) 
        $four_team1_player11 = $_POST['four_team1_player11']; 
        else
            $four_team1_player11 ='';
        if(!empty($_POST['six_team1_player11']))
        $six_team1_player11 = $_POST['six_team1_player11']; 
        else
            $six_team1_player11 ='';
        if(!empty($_POST['four_team1_player12'])) 
        $four_team1_player12 = $_POST['four_team1_player12']; 
        else
            $four_team1_player12 ='';
        if(!empty($_POST['six_team1_player12']))
        $six_team1_player12 = $_POST['six_team1_player12']; 
        else
            $six_team1_player12 ='';
        $team2 = $_POST['team2'];
        if(!empty($_POST['four_team2_player1']))
        $four_team2_player1 = $_POST['four_team2_player1']; 
        else
            $four_team2_player1 ='';
        if(!empty($_POST['six_team2_player1']))
        $six_team2_player1 = $_POST['six_team2_player1']; 
        else
            $six_team2_player1 ='';
        if(!empty($_POST['four_team2_player2'])) 
        $four_team2_player2 = $_POST['four_team2_player2']; 
        else
            $four_team2_player2 ='';
        if(!empty($_POST['six_team2_player2']))
        $six_team2_player2 = $_POST['six_team2_player2']; 
        else
            $six_team2_player2 ='';
        if(!empty($_POST['four_team2_player3'])) 
        $four_team2_player3 = $_POST['four_team2_player3']; 
        else
            $four_team2_player3 ='';
        if(!empty($_POST['six_team2_player3']))
        $six_team2_player3 = $_POST['six_team2_player3']; 
        else
            $six_team2_player3 ='';
        if(!empty($_POST['four_team2_player4'])) 
        $four_team2_player4 = $_POST['four_team2_player4']; 
        else
            $four_team2_player4 ='';
        if(!empty($_POST['six_team2_player4']))
        $six_team2_player4 = $_POST['six_team2_player4']; 
        else
            $six_team2_player4 ='';
        if(!empty($_POST['four_team2_player5'])) 
        $four_team2_player5 = $_POST['four_team2_player5']; 
        else
            $four_team2_player5 ='';
        if(!empty($_POST['six_team2_player5']))
        $six_team2_player5 = $_POST['six_team2_player5']; 
        else
            $six_team2_player5 ='';
        if(!empty($_POST['four_team2_player6'])) 
        $four_team2_player6 = $_POST['four_team2_player6']; 
        else
            $four_team2_player6 ='';
        if(!empty($_POST['six_team2_player6']))
        $six_team2_player6 = $_POST['six_team2_player6']; 
        else
            $six_team2_player6 ='';
        if(!empty($_POST['four_team2_player7'])) 
        $four_team2_player7 = $_POST['four_team2_player7']; 
        else
            $four_team2_player7 ='';
        if(!empty($_POST['six_team2_player7']))
        $six_team2_player7 = $_POST['six_team2_player7']; 
        else
            $six_team2_player7 ='';
        if(!empty($_POST['four_team2_player8'])) 
        $four_team2_player8 = $_POST['four_team2_player8']; 
        else
            $four_team2_player8 ='';
        if(!empty($_POST['six_team2_player8']))
        $six_team2_player8 = $_POST['six_team2_player8']; 
        else
            $six_team2_player8 ='';
        if(!empty($_POST['four_team2_player9'])) 
        $four_team2_player9 = $_POST['four_team2_player9']; 
        else
            $four_team2_player9 ='';
        if(!empty($_POST['six_team2_player9']))
        $six_team2_player9 = $_POST['six_team2_player9']; 
        else
            $six_team2_player9 ='';
        if(!empty($_POST['four_team2_player10'])) 
        $four_team2_player10 = $_POST['four_team2_player10']; 
        else
            $four_team2_player10 ='';
        if(!empty($_POST['six_team2_player10']))
        $six_team2_player10 = $_POST['six_team2_player10']; 
        else
            $six_team2_player10 ='';
        if(!empty($_POST['four_team2_player11'])) 
        $four_team2_player11 = $_POST['four_team2_player11']; 
        else
            $four_team2_player11 ='';
        if(!empty($_POST['six_team2_player11']))
        $six_team2_player11 = $_POST['six_team2_player11']; 
        else
            $six_team2_player11 ='';
        if(!empty($_POST['four_team2_player12'])) 
        $four_team2_player12 = $_POST['four_team2_player12']; 
        else
            $four_team2_player12 ='';
        if(!empty($_POST['six_team2_player12']))
        $six_team2_player12 = $_POST['six_team2_player12']; 
        else
            $six_team2_player12 ='';
  
		$conn = $pdo->open();

$stmt = $conn->prepare("INSERT INTO cricket (cricket_name, cricket_category, cricket_team1_id, cricket_team1_player1_four, cricket_team1_player1_six, cricket_team1_player2_four, cricket_team1_player2_six, cricket_team1_player3_four, cricket_team1_player3_six, cricket_team1_player4_four, cricket_team1_player4_six, cricket_team1_player5_four, cricket_team1_player5_six, cricket_team1_player6_four, cricket_team1_player6_six, cricket_team1_player7_four, cricket_team1_player7_six, cricket_team1_player8_four, cricket_team1_player8_six, cricket_team1_player9_four, cricket_team1_player9_six, cricket_team1_player10_four, cricket_team1_player10_six, cricket_team1_player11_four, cricket_team1_player11_six, cricket_team1_player12_four, cricket_team1_player12_six, cricket_team2_id, cricket_team2_player1_four, cricket_team2_player1_six, cricket_team2_player2_four, cricket_team2_player2_six, cricket_team2_player3_four, cricket_team2_player3_six, cricket_team2_player4_four, cricket_team2_player4_six, cricket_team2_player5_four, cricket_team2_player5_six, cricket_team2_player6_four, cricket_team2_player6_six, cricket_team2_player7_four, cricket_team2_player7_six, cricket_team2_player8_four, cricket_team2_player8_six, cricket_team2_player9_four, cricket_team2_player9_six, cricket_team2_player10_four, cricket_team2_player10_six, cricket_team2_player11_four, cricket_team2_player11_six, cricket_team2_player12_four, cricket_team2_player12_six, cricket_date, cricket_time,starting_four,starting_six ) 
VALUES
(:cricket_name, :cricket_category, :cricket_team1_id, :cricket_team1_player1_four, :cricket_team1_player1_six, :cricket_team1_player2_four, :cricket_team1_player2_six, :cricket_team1_player3_four, :cricket_team1_player3_six, :cricket_team1_player4_four, :cricket_team1_player4_six, :cricket_team1_player5_four, :cricket_team1_player5_six, :cricket_team1_player6_four, :cricket_team1_player6_six, :cricket_team1_player7_four, :cricket_team1_player7_six, :cricket_team1_player8_four, :cricket_team1_player8_six, :cricket_team1_player9_four, :cricket_team1_player9_six, :cricket_team1_player10_four, :cricket_team1_player10_six, :cricket_team1_player11_four, :cricket_team1_player11_six, :cricket_team1_player12_four, :cricket_team1_player12_six, :cricket_team2_id, :cricket_team2_player1_four, :cricket_team2_player1_six, :cricket_team2_player2_four, :cricket_team2_player2_six, :cricket_team2_player3_four, :cricket_team2_player3_six, :cricket_team2_player4_four, :cricket_team2_player4_six, :cricket_team2_player5_four, :cricket_team2_player5_six, :cricket_team2_player6_four, :cricket_team2_player6_six, :cricket_team2_player7_four, :cricket_team2_player7_six, :cricket_team2_player8_four, :cricket_team2_player8_six, :cricket_team2_player9_four, :cricket_team2_player9_six, :cricket_team2_player10_four, :cricket_team2_player10_six, :cricket_team2_player11_four, :cricket_team2_player11_six, :cricket_team2_player12_four, :cricket_team2_player12_six, :cricket_date, :cricket_time, :starting_four, :starting_six)");
$stmt->execute(['cricket_name'=>$cricket_name, 'cricket_category'=>$cricket_category_id, 'cricket_team1_id'=>$team1, 'cricket_team1_player1_four'=>$four_team1_player1, 'cricket_team1_player1_six'=>$six_team1_player1, 'cricket_team1_player2_four'=>$four_team1_player2, 'cricket_team1_player2_six'=>$six_team1_player2, 'cricket_team1_player3_four'=>$four_team1_player3, 'cricket_team1_player3_six'=>$six_team1_player3, 'cricket_team1_player4_four'=>$four_team1_player4, 'cricket_team1_player4_six'=>$six_team1_player4, 'cricket_team1_player5_four'=>$four_team1_player5, 'cricket_team1_player5_six'=>$six_team1_player5, 'cricket_team1_player6_four'=>$four_team1_player6, 'cricket_team1_player6_six'=>$six_team1_player6, 'cricket_team1_player7_four'=>$four_team1_player7, 'cricket_team1_player7_six'=>$six_team1_player7, 'cricket_team1_player8_four'=>$four_team1_player8, 'cricket_team1_player8_six'=>$six_team1_player8, 'cricket_team1_player9_four'=>$four_team1_player9, 'cricket_team1_player9_six'=>$six_team1_player9, 'cricket_team1_player10_four'=>$four_team1_player10, 'cricket_team1_player10_six'=>$six_team1_player10, 'cricket_team1_player11_four'=>$four_team1_player11, 'cricket_team1_player11_six'=>$six_team1_player11, 'cricket_team1_player12_four'=>$four_team1_player12, 'cricket_team1_player12_six'=>$six_team1_player12, 'cricket_team2_id'=>$team2, 'cricket_team2_player1_four'=>$four_team2_player1, 'cricket_team2_player1_six'=>$six_team2_player1, 'cricket_team2_player2_four'=>$four_team2_player2, 'cricket_team2_player2_six'=>$six_team2_player2, 'cricket_team2_player3_four'=>$four_team2_player3, 'cricket_team2_player3_six'=>$six_team2_player3, 'cricket_team2_player4_four'=>$four_team2_player4, 'cricket_team2_player4_six'=>$six_team2_player4, 'cricket_team2_player5_four'=>$four_team2_player5, 'cricket_team2_player5_six'=>$six_team2_player5, 'cricket_team2_player6_four'=>$four_team2_player6, 'cricket_team2_player6_six'=>$six_team2_player6, 'cricket_team2_player7_four'=>$four_team2_player7, 'cricket_team2_player7_six'=>$six_team2_player7, 'cricket_team2_player8_four'=>$four_team2_player8, 'cricket_team2_player8_six'=>$six_team2_player8, 'cricket_team2_player9_four'=>$four_team2_player9, 'cricket_team2_player9_six'=>$six_team2_player9, 'cricket_team2_player10_four'=>$four_team2_player10, 'cricket_team2_player10_six'=>$six_team2_player10, 'cricket_team2_player11_four'=>$four_team2_player11, 'cricket_team2_player11_six'=>$six_team2_player11, 'cricket_team2_player12_four'=>$four_team2_player12, 'cricket_team2_player12_six'=>$six_team2_player12, 'cricket_date'=>$cricket_date, 'cricket_time'=>$cricket_time, 'starting_four'=>$starting_four, 'starting_six'=>$starting_six ]);
				$_SESSION['success'] = 'cricket added successfully';

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up cricket form first';
	}
header('location: cricket.php');
	

?>