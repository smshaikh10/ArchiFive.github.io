<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Architectural Firm | Project X</title>
  <style>
    /* Reset Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
      color: #333;
    }

    /* Header */
    header {
      background-color: #333;
      padding: 20px;
      color: #fff;
      text-align: center;
    }

    header h1 {
      font-size: 32px;
      margin-bottom: 10px;
    }

    header p {
      font-size: 18px;
    }

    /* Navigation */
    nav {
      background-color: #222;
      padding: 10px;
    }

    nav ul {
      list-style-type: none;
      text-align: center;
    }

    nav ul li {
      display: inline-block;
      margin-right: 20px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      transition: color 0.3s;
    }

    nav ul li a:hover {
      color: #ccc;
    }

    /* Main Section */
    .main-section {
      background-color: #fff;
      padding: 40px;
      margin: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .main-section h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .main-section p {
      font-size: 16px;
      margin-bottom: 20px;
    }

    /* Services Section */
    .services-section {
      background-color: #f9f9f9;
      padding: 40px;
      margin: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .services-section h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .services-section p {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .service {
      margin-bottom: 20px;
    }

    .service h3 {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .service p {
      font-size: 16px;
    }

    /* Portfolio Section */
    .portfolio-section {
      background-color: #fff;
      padding: 40px;
      margin: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .portfolio-section h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .portfolio {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .portfolio-item {
      position: relative;
    }

    .portfolio-item img {
      width: 100%;
      height: auto;
    }

    .portfolio-item .title {
      position: absolute;
      bottom: 10px;
      left: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      padding: 10px;
      color: #fff;
      font-size: 16px;
    }

    /* Contact Section */
    .contact-section {
      background-color: #f9f9f9;
      padding: 40px;
      margin: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-section h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
    }

    .contact-form button {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #555;
    }

    /* Footer */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <h1>ArchiFive</h1>
    <p>Creating Innovative Spaces</p>
  </header>

  <!-- Navigation -->
  <nav>
    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- Main Section -->
  <section id="about" class="main-section">
    <h2>About Us</h2>
     <p>Welcome to our architectural firm, where we blend creativity, functionality, and sustainability to design exceptional spaces. With years of experience and a passion for architecture, our team is dedicated to transforming ideas into reality.</p>
      <p>At our firm, we believe that architecture has the power to shape communities, enhance experiences, and inspire the future. Our collaborative approach allows us to understand your unique vision and create customized solutions that exceed expectations.</p>
      <p>From residential projects to commercial developments, we tackle every design challenge with meticulous attention to detail. Our commitment to sustainable practices ensures that our projects are environmentally conscious and energy-efficient.</p>
      <p>Our talented team of architects, designers, and engineers bring a diverse range of expertise to every project. We combine artistic vision with technical knowledge to deliver innovative designs that not only meet your functional needs but also create spaces that inspire and delight.</p>
      <p>Throughout the design process, we prioritize effective communication and collaboration. We believe that understanding your goals and aspirations is crucial in creating spaces that truly reflect your vision. Our team will work closely with you, involving you in every step of the design journey to ensure that the final outcome exceeds your expectations.</p>
      <p>As advocates for sustainable architecture, we integrate environmentally friendly solutions into our designs. We strive to minimize the ecological footprint of our projects by incorporating energy-efficient systems, utilizing renewable materials, and embracing green building practices. By creating sustainable spaces, we contribute to a healthier planet and enhance the well-being of occupants.</p>
      <p>Our portfolio showcases our diverse range of projects, including residential homes, commercial buildings, educational institutions, and more. Each project represents our commitment to excellence and our ability to translate concepts into remarkable architectural expressions.</p>
      <p>Client satisfaction is at the core of our values. We understand that every project is unique, and we approach each one with an open mind, creativity, and professionalism. Our dedication to providing exceptional service and delivering high-quality results has earned us the trust and loyalty of our clients.</p>
      <p>Whether you are considering a new construction project, a renovation, or an expansion, we are here to bring your vision to life. Our team will guide you through the entire architectural process, from initial concept development to construction management, ensuring a seamless experience and remarkable end result.</p>
      <p>Thank you for considering our architectural firm for your next project. We look forward to the opportunity to collaborate with you and create spaces that inspire, innovate, and make a positive impact on the world.</p>
    </section>

  <!-- Services Section -->
  <section id="services" class="services-section">
    <h2>Our Services</h2>
      <p>At our architectural firm, we offer a comprehensive range of services designed to meet the diverse needs of our clients. Whether you are planning a residential project, a commercial development, or a community space, our team of skilled architects and designers will work closely with you to bring your vision to life. With our expertise, attention to detail, and commitment to excellence, we provide innovative solutions that transform spaces into functional, aesthetically pleasing environments.</p>
      
      <h3>1. Architectural Design</h3>
      <p>Our architectural design services encompass everything from conceptualization to construction documentation. Our team combines creativity with technical expertise to develop unique, site-specific designs that optimize functionality, spatial flow, and visual appeal. We strive to create harmonious spaces that reflect the client's vision while integrating sustainable practices and adhering to local building codes and regulations.</p>
      
      <h3>2. Interior Design</h3>
      <p>With our interior design services, we focus on creating interior environments that seamlessly blend aesthetics, functionality, and user experience. From selecting finishes and materials to designing custom furniture and fixtures, our team pays meticulous attention to every detail. We consider factors such as ergonomics, lighting, acoustics, and sustainability to ensure that the interior spaces we create are not only visually stunning but also practical and comfortable.</p>
      
      <h3>3. Urban Planning</h3>
      <p>Our urban planning services encompass the development and revitalization of communities, neighborhoods, and public spaces. We collaborate with stakeholders, local authorities, and urban planners to create master plans that promote sustainable growth, enhance connectivity, and foster a sense of community. Our expertise in urban design and land use analysis enables us to design vibrant, inclusive spaces that accommodate diverse needs and reflect the unique character of each location.</p>
      
      <h3>4. Sustainable Design</h3>
      <p>As advocates for sustainable architecture, we integrate environmentally friendly solutions into all our projects. Our sustainable design services focus on maximizing energy efficiency, reducing carbon footprint, and promoting the use of renewable resources. We employ passive design strategies, implement green building practices, and utilize eco-friendly materials to create buildings that are not only environmentally responsible but also offer long-term cost savings and improved occupant well-being.</p>
      
      <h3>5. Project Management</h3>
      <p>Our project management services ensure seamless execution and successful completion of architectural projects. We oversee the entire construction process, coordinating with contractors, engineers, and suppliers to ensure that the project progresses smoothly and stays within budget and timeline. With our expertise in project planning, quality control, and communication, we strive to deliver exceptional results while minimizing disruptions and maximizing efficiency.</p>
      
      <h3>6. 3D Visualization</h3>
      <p>Using state-of-the-art software and technologies, we offer 3D visualization services that bring architectural designs to life. Through detailed renderings, virtual walkthroughs, and virtual reality experiences, we help clients visualize their projects before construction begins. This allows for better decision-making, improved communication, and a deeper understanding of the spatial qualities and design elements.</p>
      
      <h3>7. Renovation and Restoration</h3>
      <p>Our firm specializes in the renovation and restoration of historic buildings and structures. We understand the importance of preserving architectural heritage while incorporating modern amenities and functionality. Our team carefully assesses the existing structure, conducts thorough research, and develops renovation strategies that respect the original design intent while meeting contemporary needs. We strive to breathe new life into old spaces, creating a harmonious blend of past and present.</p>
      
      <p>These are just a few of the services we offer at our architectural firm. Each project is unique, and we tailor our services to meet your specific requirements. By collaborating closely with our clients, we ensure that every design solution is customized to reflect their vision, goals, and aspirations. Our commitment to excellence, innovation, and sustainable practices sets us apart as a leading architectural firm dedicated to creating remarkable spaces.</p>
    </div>
  </section>

 <!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section">
  <h2>Portfolio</h2>
  <div class="portfolio">
    <div class="portfolio-item">
      <a href="project1.php">
        <img src="commercial building.jpg" alt="Project">
        <div class="title">Commercial Building</div>
      </a>
    </div>
    <div class="portfolio-item">
      <a href="project2.php">
        <img src="urban landscape.jpg" alt="Project">
        <div class="title">Urban Landscape</div>
      </a>
    </div>
    <div class="portfolio-item">
      <a href="project3.php">
        <img src="industrial complex.jpg" alt="Project">
        <div class="title">Industrial Complex</div>
      </a>
    </div>
  </div>
</section>


 <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <h2>Contact Us</h2>
    <form class="contact-form" action="process_form.php" method="POST">
      <input type="text" placeholder="Your Name" name="name">
      <input type="email" placeholder="Your Email" name="email">
      <textarea placeholder="Your Message"></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>


  <!-- Footer -->
  <footer>
    &copy; 2023 Architectural Firm. All rights reserved.
  </footer>
</body>
</html>
