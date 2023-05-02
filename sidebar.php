<!DOCTYPE html>
<html>
  <head>
</head> 

<style> 
.container {
  display: flex;
}

.sidebar {
  width: 250px;
  background-color: #f1f1f1;
  padding: 20px;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

li {
  margin-bottom: 10px;
}

a {
  text-decoration: none;
  color: #333;
  font-size: 16px;
}

a:hover {
  color: #555;
}

.content {
  flex: 1;
  padding: 20px;
}

</style>

<div class="container">
  <div class="sidebar">
    <ul>
    
      <li><a href="#">Loan Calculator</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
  
  <div class="content">
    <!-- Your loan application form goes here -->
  </div>
</div>
</html>