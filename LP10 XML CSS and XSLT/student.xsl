<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html>
<head>
    <title>Student Information</title>
</head>

<body>

<h2>Student Information</h2>

<table border="1">
    <tr>
        <th>Field</th>
        <th>Details</th>
    </tr>

    <tr>
        <td>USN</td>
        <td><xsl:value-of select="student/USN"/></td>
    </tr>

    <tr>
        <td>Name</td>
        <td><xsl:value-of select="student/Name"/></td>
    </tr>

    <tr>
        <td>College Name</td>
        <td><xsl:value-of select="student/CollegeName"/></td>
    </tr>

    <tr>
        <td>Branch</td>
        <td><xsl:value-of select="student/Branch"/></td>
    </tr>

    <tr>
        <td>Year Of Joining</td>
        <td><xsl:value-of select="student/YearOfJoining"/></td>
    </tr>

    <tr>
        <td>Email ID</td>
        <td><xsl:value-of select="student/EmailID"/></td>
    </tr>
</table>

</body>
</html>

</xsl:template>

</xsl:stylesheet>