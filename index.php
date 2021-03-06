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
		<p> Goal:  Janet wants to use opentable to read reviews regarding her restaurant of choice for her business
			dinner meeting on her Lenovo Think Pad while flying the friendly skies.
		<ol>
			<li>0)Janet goes to www.opentable.com and clicks on the restaurant she has chosen.</li>
			<li>1)opentable generates a summarized list of all the user reviews written for this restaurant.</li>
			<li>2)Janet scrolls down to the review of her choice</li>
			<li>3)opentable displays the list and moves the list according to the direction of the scroll</li>
			<li>4)Janet clicks on the review she wants to read in its entirety</li>
			<li>5)opentable displays a individual review including the ratings, the free form text and the username</li>
		</ol>
		</p>
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
				<td>food</td>
			</tr>
			<tr>
				<td>userName</td>
				<td>review</td>
				<td>ambience</td>
			</tr>
			<tr>
				<td>userSalt</td>
				<td>tags</td>
				<td>service</td>
			</tr>
			<tr>
				<td>userHash</td>
				<td>null</td>
				<td>value</td>
			</tr>
		</table>
	</body>
</html>

