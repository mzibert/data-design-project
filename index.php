<!DOCTYPE>
<html lang ="en">
	<head>
		<meta charset ="utf8"/>
		<title> Persona </title>
	</head>
	<body>
		<h1> Persona</h1>
		<h2> Name:</h2>
		<img src="images/profilepic.jpg" alt="profilepic" height="300" width="250"/>
		Janet Nardi
		<h2>Age:</h2>
		mid 50’s
		<h2>Occupation:</h2>
		Director of Business Development
		<h2>Technology:</h2>
		<p>Conducts most of her business from a Lenovo Think Pad either at her desk or
			from a hotel room.  Carries an Ipad air for email on long flights, and has an iphone 6
			provided by the company for communication.</p>
		<h2>Background:</h2>
		<p>Janet is SUPER busy and spends 90% of her professional life in transit.
			She travels to client sites and potential client sites all over North America.  She is
			not a power user of technology and gets frustrated having to constantly figure out new
			features and apps.  She does not have time to learn between the airport, the office, the
			hotel, and multiple business meetings.</p>
		<p>Her business meetings can include a variety of people from entry level to CEO’s.
			Primarily her business meetings need to take place off of the clients site and are dinner
			meetings at local restaurants.  Janet enjoys fine wine and great food and likes to share
			her love and knowledge with her clients, so having a thorough review of the restaurant
			prior to booking is crucial.</p>
		<h2>Frustrations:</h2>
		<p>Janet is almost always meeting clients at different restaurants, so finding
			restaurants that meet her high class standards but stay within company budgets is always
			a challenge.  Janet needs a reliable source that give her up to the date information on
			restaurants in any city in North America.  She needs that information to include, pricing
			structure, hours of operations, large party accommodations, reservation availability,
			pictures of the actual restaurant inside and out, but most importantly thorough reviews.</p>
		<h2>Goals:</h2>
		<p>The site needs to be easy, fast to use and be able to provide a confirmation
			number.  It needs to be accessible from multiple technology platforms, and needs to have
			the ability to book multiple reservations in multiple cities and a way to see those
			reservations in a personal account or tie it into an Outlook or Google calendar.  The
			review needs to include a rating system that provides an overall rating of the entire
			restaurant but also allows secondary ratings of ancillary categories.  The review also
			needs to include free form text so that individual reviewers can type their experiences
			andopinions.</p>
		<h1> Use Case</h1>
		<p>Janet has a BIG meeting coming up with Squaw Valley Resort Ski Resort (home of the 1960
			Olympics).  There will be 6 executives attending the meeting, one will be the executive
			chef.  Janet needs to find a fantastic restaurant to take the executives too off property
			so she is sure to have their uninterrupted attention.  Because chef is also attending, she
			needs the food to be spectacular and the wine to be even better.  She is on the plane
			traveling from New York to Reno so she wants to research all of the local restaurants so
			she can be sure that she selects one that will meet her standards and impress chef.
			She lands at 5:15pm and the meeting is scheduled at 6:00.  She needs to be able to book
			the place for a party of 7 and send an email with all of the details (including address
			details) to the 6 executives using the plane wifi.</p>
		<h1>Conceptual Schema</h1>
		<table>Entities
			<tr>
				<th>Profile</th>
				<th>Review</th>
				<th>Ratings</th>
			</tr>
			<tr>
				<td>profileId</td>
				<td>userName</td>
				<td>userSalt</td>
				<td>userHash</td>
				<td>primaryDiningCity</td>
			</tr>
			<tr>
				<td>userName</td>
				<td>review</td>
				<td>reviewTags</td>
				<td>null</td>
				<td>null</td>
			</tr>
			<tr>
				<td>food</td>
				<td>ambience</td>
				<td>service</td>
				<td>value</td>
				<td>null</td>
			</tr>
		</table>
	</body>
</html>
