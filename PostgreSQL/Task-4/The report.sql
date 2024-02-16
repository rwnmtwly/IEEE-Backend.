SELECT IF (GRADES.GRADE>=8, STUDENTS.NAME, NULL),GRADES.GRADE, STUDENTS.MARKS 
FROM GRADES, STUDENTS 
WHERE STUDENTS.MARKS BETWEEN GRADES.MIN_MARK AND GRADES.MAX_MARK 
ORDER BY GRADES.GRADE DESC, STUDENTS.NAME;

