<?php

$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome =
    ($incomeSegments[0][0] * $incomeSegments[0][1]) +
    ($incomeSegments[1][0] * $incomeSegments[1][1]) +
    ($incomeSegments[2][0] * $incomeSegments[2][1])
;

$annualIncome = $netIncome - $socialSecurity;

echo "Annual income: ".$annualIncome."\n";

$annualIncome -= ($annualExpenses["vacations"] + $annualExpenses["carRepairs"]);

echo "Annual income minus annual expenses: ".$annualIncome."\n";

$monthlyIncome = $annualIncome / 12;

echo "Monthly income: ".$monthlyIncome."\n";

$monthlyIncome -= ($monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"]);

echo "Monthly income minus monthly expenses: ".$monthlyIncome."\n";

$weeklyIncome = $monthlyIncome / 4.33;

echo "Weekly income: ".$weeklyIncome."\n";

$weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
];

foreach ($weeklyExpenses as $expense => $amount) {
    $weeklyIncome -= $amount;
}

echo "Weekly income minus Weekly expenses: ".$weeklyIncome."\n";

$savings = $weeklyIncome * 52;

echo "Annual savings: ".$savings."\n";
