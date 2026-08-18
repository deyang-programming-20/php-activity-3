<?php
$lagdamin_number = 99;


// Display the numeric grade
echo "Grade: " . $lagdamin_number."\n";

// Determine if the student passed or failed
if ($lagdamin_number >= 74.5)
    {echo "Result: Passed";
      } else 
      {echo "Result: Failed";
      }
 // Determine the letter grade
    if ($lagdamin_number >= 90 && $lagdamin_number <= 100) 
    {echo "\n"."Letter Grade: A";
        } elseif ($lagdamin_number >= 80 && $lagdamin_number <= 89) 
    {echo "\n"."Letter Grade: B";
        } elseif ($lagdamin_number >= 70 && $lagdamin_number <= 79) 
    {echo "\n"."Letter Grade: C";
        } elseif ($lagdamin_number >= 60 && $lagdamin_number <= 69) 
    {echo "\n"."Letter Grade: D";
        } elseif ($lagdamin_number >= 0 && $lagdamin_number <= 59) 
    {echo "\n"."Letter Grade: F";
        } else 
    {echo "\n"."Invalid Grade";
        }
        ?>