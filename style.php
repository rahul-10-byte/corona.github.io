<style type="text/css">


html{
	scroll-behavior: smooth;
}


	*{margin: 0; padding: 0; box box-sizing: border-box; font-family: 'Muli', sans-serif; }
	.row{
		margin-left: 0!important; margin-right: 0!important;
	}


.nav_style{
	background-color: #a29bfe!important;
	
}

.nav_style a{
	color: white; 
}


/*//////////main header\\\\\\\\\*/

.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size: 3rem;
}

.corona_rot img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0%{ transform: rotate(0); }
	100%{ transform: rotate(360deg); }

}

.leftside img{
	animation: heartbeat 5s linear infinite;
}

@keyframes heartbeat
{
		0%
	{
		transform: scale(.75);
	}
	20%
	{
		transform: scale(1);
	}
	40%
	{
		transform: scale(.75);
	}
	60%
	{
		transform: scale(1);
	}
	80%
	{
		transform: scale(.75);
	}
	100%
	{
		transform: scale(.75);
	}
}


/*////////////////////////corona update\\\\\\\\\\\\\*/\

.corona_update{
	margin: 0 0 30px 0;
}
.corona_update h3{ color: #ff7675; }

.corona_update h1{ font-size: 2rem; text-align: center; }


/*////////////////////about section\\\\\\\\\\\\\\\\\\\\\*/
.sub_section{
	background-color: #fbfafd;
}

/*////////////////////footer\\\\\\\\\\\\\\\\\\\\\*/

.footer_style{
	background-color: #a29bfe!important;
}

.footer_style p{
    margin-bottom: 0!important;
}


/*////////////////back to top cursor\\\\\\\\\\\\\\\\\\*/

#button {
  display: inline-block;  
  background-color: #FF9800;
  width: 50px;
  height: 50px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  transition: background-color .3s, 
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}
#button::after {
  content: "\f077";
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  font-size: 2em;
  line-height: 50px;
  color: #fff;
}
#button:hover {
  cursor: pointer;
  background-color: #333;
}
#button:active {
  background-color: #555;
}
#button.show {
  opacity: 1;
  visibility: visible;
}


/*/////////////////responsive\\\\\\\\\\\\\\\\\\*/

@media(max-width: 768px){
	main_header{
		height: 700px; text-align: center;
	}
	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}
	.count_style{
		display: inline!important;
	}
	.count_style p{
		text-align: center;
	}
	.about_res{
		margin-left: 0!important;
	}
}



</style>













