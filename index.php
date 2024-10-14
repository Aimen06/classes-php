<?php
require_once('user-pdo.php');

/*for ($i = 1; $i <= 15; $i++) {
    ${"user" . $i} = new User();
}

$user1->register('MarcDupont01', 'passMarc!123', 'marc.dupont@gmail.com', 'Marc', 'Dupont');
$user2->register('JulieS23', 'Julie@pass789', 'julie.smith@yahoo.fr', 'Julie', 'Smith');
$user3->register('TommyTiger', 'T0mmyTiger!', 'tommy.tiger@outlook.com', 'Tommy', 'Tiger');
$user4->register('AliceWonder123', 'Wonder@123Alice', 'alice.wonderland@gmail.com', 'Alice', 'Wonderland');
$user5->register('JohnDoe99', 'DoeJohn#99!', 'john.doe@hotmail.com', 'John', 'Doe');
$user6->register('SarahConnor08', 'SarahCon!08', 's.connor@gmail.com', 'Sarah', 'Connor');
$user7->register('LeoLion21', 'LeoL#on2021', 'leo.lion@aol.com', 'Leo', 'Lion');
$user8->register('LauraPalmer07', 'LauraP@lmer7', 'laura.palmer@yahoo.com', 'Laura', 'Palmer');
$user9->register('FrankCastle65', 'FrankC@stle65', 'frank.castle@protonmail.com', 'Frank', 'Castle');
$user10->register('SophiaSunshine', 'SophiaSun@567', 'sophia.sunshine@gmail.com', 'Sophia', 'Sunshine');
$user11->register('MaxSteel33', 'SteelMax!33', 'max.steel@gmail.com', 'Max', 'Steel');
$user12->register('EmmaWatson23', 'EmmaW!23Wat', 'emma.watson@outlook.com', 'Emma', 'Watson');
$user13->register('JamesBond007', 'Bond007James!', 'james.bond@gmail.com', 'James', 'Bond');
$user14->register('HannahMontana5', 'HannahM5@123', 'hannah.montana@protonmail.com', 'Hannah', 'Montana');
$user15->register('BruceWayneB', 'BatmanWayne#1', 'bruce.wayne@waynecorp.com', 'Bruce', 'Wayne');
*/

// $user16 = new User;
//$user16->getUserfromId(83);
//var_dump($user16);
//$user16  ->update('mario01','Pitch123456788!','mario@nintendo.com','mario','pomblier');

//$user16->delete();

//$user17 = new User;
//$user17->disconnect();
//var_dump($user17->isConnected());

$user18 = new Userpdo;
var_dump($user18->register('The Flash', 'Flash1234#1', 'flash@gmail.com', 'Barry', 'Allen'));