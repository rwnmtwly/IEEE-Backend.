SELECT DISTINCT CITY FROM STATION WHERE RIGHT(UPPER(CITY),1) NOT IN ('A','I','O','U','E') OR LEFT(UPPER(CITY),1) NOT IN ('A','I','O','U','E');