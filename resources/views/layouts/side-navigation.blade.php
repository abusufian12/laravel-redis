<!-- Sidebar -->
@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
@endphp
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

<nav id="sidebar" class="nav-bg">
    <!-- Primary Navigation Menu -->

    <!-- <div class="sidebar-header">
        <h3>Bootstrap Sidebar</h3>
    </div> -->

    <ul class="list-unstyled components">
        <!-- <p>Dummy Heading</p> -->
        <li>
            <a href="/menus"><i class="fa fa-fw fa-navicon"></i>  Menus</a>
        </li>
        @foreach($menus as $menu)
        <li><a href="{{$menu->url}}"><i class="{{$menu->icon}}"></i> {{$menu->title}} </a></li>
        @endforeach

        <!-- <li>
            <a href="#pageSubmenu12" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Transactions</a>
            <ul class="collapse list-unstyled" id="pageSubmenu12">
                <li>
                    <a href="#">Daily Received</a>
                </li>
                <li>
                    <a href="#">Daily Payment</a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-alarm-fill"></i> Page 3</a>
                </li>
            </ul>
        </li> -->
        <li>
            <button type="button" class="collapsible" aria-expanded="false"><i class="fa fa-credit-card"></i> Transactions <i class="fa fa-fw fa-caret-down float-right"></i></button>

            <div class="content">
                <ul class="list-unstyled" id="">
                    <li>
                        <a href="#">Daily Received</a>
                    </li>
                    <li>
                        <a href="#">Daily Payment</a>
                    </li>
                </ul>
            </div>
            <!-- <button type="button" class="collapsible">Open Section 2</button>
            <div class="content">
              collapse 2
            </div> -->
            
        </li>
    </ul>
</nav>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

<style>
.collapsible {
  /*background-color: #777;*/
  color: white;
  cursor: pointer;
  padding: 6px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 18px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>

<style type="text/css">
.nav-bg{
    background: #313131e0 !important;
}  
.nav-bg ul, .nav-bg div, .nav-bg ul li, .nav-bg ul li a {
    background: #313131e0 !important;
}

</style>