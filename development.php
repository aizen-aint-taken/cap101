<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Development Team</title>
    <style>
       
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-image: linear-gradient(to right,skyblue,blue);
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
}


header {
    text-align: center;
    padding: 20px 0;
    background: linear-gradient(to right, #4CAF50, #81C784); /* Gradient */
    color: #fff;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    letter-spacing: 1px;
}


.team-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 20px;
    gap: 20px;
}

.team-member {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    padding: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-member:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Team Member Image Styling */
.team-member img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-member:hover img {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Name and Role Styling */
.team-member h2 {
    font-size: 1.5rem;
    margin: 15px 0 10px;
    color: #4CAF50;
}

.team-member p {
    font-size: 1rem;
    color: #777;
}


.team-member a {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 12px;
    background-color: skyblue; 
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1rem;
    transition: background-color 0.3s ease, transform 0.3s ease;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.team-member a i {
    margin-right: 8px;
}

.team-member a:hover {
    background-color: #1e90ff; /* Slightly darker skyblue on hover */
    transform: translateY(-2px);
}

/* Styled Divider */
.team-member hr {
    border: none;
    height: 1px;
    background-color: #eee;
    margin: 20px 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .team-container {
        flex-direction: column;
        align-items: center;
    }
}

    </style>
</head>
<body>
    <header>
        <h1>Our Development Team</h1>
    </header>
    <section class="team-container">
        <div class="team-member">
          <img src="images/jems.jpg" alt="">
            <h2>Jems Sinday</h2>
            <a href="https://www.facebook.com/jems.sinday"> <i class="fa-brands fa-facebook"></i>Jems Sinday</a><br>
            <hr>
            <p>Frontend Developer</p>
        </div>
        <div class="team-member">
            <img src="beaver.jpg" alt="Team Member">
            <h2>Ely Gian Ga</h2>
            <a href="https://www.facebook.com/elywastaken/"> <i class="fa-brands fa-facebook"></i>Ely Gian Ga</a><br>
            <hr>
            <p>Full Stack Developer</p>
        </div>
        <div class="team-member">
            <img src="https://via.placeholder.com/150" alt="Team Member">
            <h2>Junel Sotil</h2>
            <a href=""> <i class="fa-brands fa-facebook"></i>Junel Sotil</a>
            <hr>
            <p>UI/UX Designer</p>
        </div>
        <div class="team-member">
            <img src="https://via.placeholder.com/150" alt="Team Member">
            <h2>Irene Duray</h2>
            <p>Data Analyst</p>
        </div>
        <div class="team-member">
            <img src="https://via.placeholder.com/150" alt="Team Member">
            <h2>Kristille Subrecaray</h2>
            <p>UI/UX Designer</p>
        </div>
    </section>
</body>
</html>
