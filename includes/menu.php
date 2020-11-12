<nav>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-image: url('https://factorypyme.thestandardit.com/wp-content/uploads/sites/5/2016/03/Ecommerce-1.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  overflow-x: hidden;
  transition: 1s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.9s;
}

.sidebar a:hover {
  color: white;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 10px;
  font-size: 36px;
  margin-left: 5px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: transparent;
  color: white;
  padding: 1px 70px;
  border: none;
}

.openbtn:hover {
  background-color: transparent;
}

#main {
  transition: margin-left 25s;
  padding: 0px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="../../index.php">Cerrar Sesión</a>
  <a href="../../vistas/articulos/add_articulo.php">Agregar Artículos</a>
  <a href="../../vistas/articulos/admin_articulo.php">Administar Artículo</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">Cuenta</button>  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "100px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</nav>