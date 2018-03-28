<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reactr Student Form</title>
<link href="{{asset('_css/basic.css')}}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body id="blogPage">
<header>
  <h1 style="color:#b5d338; font-size:3em; text-align:center">Student Form<a href="/student.htm" title="home"></a></h1>
</header>
<div id="contentWrapper">
  <article id="mainContent">
<!-- action="students" -->
<form action="studentsform"  method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="status_id">Status</label>
<select type="text" name="status_id" required>
<option value="1">Alumni</option>
<option value="2">Current</option>
<option value="3">Prospective</option>
</select>

<label for="profile_image">Profile Image</label>
<input type="file" name="profile_image" null>

<label for="first_name">First Name</label>
<input type="text" name="first_name" required>

<label for="last_name">Last Name</label>
<input type="text" name="last_name" required>

<label for="fol_email">FOL Email</label>
<input type="email" name="fol_email" required>

<label for="nonfol_email">Non-FOL Email</label>
<input type="email" name="nonfol_email" required>

<label for="student_number">Student Number</label>
<input type="text" name="student_number" required>

<label for="address">Address</label>
<input type="text" name="address" required>

<label for="phone">Phone</label>
<input type="text" name="phone" required>

<label for="linkedin">LinkedIn Account</label>
<input type="text" name="linkedin_account" required>

<label for="programs_id">Program</label>
<select type="text" name="programs_id" required>
<option value="1">Interactive Media Design - Level 1</option>
<option value="2">Interactive Media Design - Level 2</option>
<option value="3">Interactive Media Design - Level 3</option>
<option value="4">Interactive Media Design - Level 4</option>
<option value="5">Interactive Media Specialist - Level 1</option>
<option value="6">Interactive Media Specialist - Level 2</option>
</select>

<label for="projects_id">Projects</label>
<select type="text" name="projects_id" required>
<option value="1">Work Study</option>
<option value="2">HR Downloads</option>
<option value="3">JE Bearing</option>
<option value="4">Dental Strategy</option>
</select>

<label for="roles_id">Role</label>
<select type="text" name="roles_id" required>
<option value="1">Front-end developer and Designer</option>
<option value="2">Front-end developer</option>
<option value="3">Back-end developer</option>
</select>

<label for="emergency_contact">Emergency Contact</label>
<input type="text" name="emergency_contact" required>

<label for="emergency_number">Emergency Number</label>
<input type="text" name="emergency_number" required>

<label for="graduation_year">Graduation Year</label>
<input type="text" name="graduation_year" required>

<label for="current_title">Current Title</label>
<input type="text" name="current_title">

<label for="current_company">Current Company</label>
<input type="text" name="current_company">

<label for="contact_info">Contact Info</label>
<input type="text" name="contact_info">

<button name="submit" class="submit" action="submit" method="submit" type="submit">SUBMIT</button>

</form>

  </article>

</div>
</body>
</html>
