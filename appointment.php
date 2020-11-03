<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://fullcalendar.io/js/fullcalendar-3.0.1/fullcalendar.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/css/bootstrap-datetimepicker.min.css">

	 <link rel="stylesheet" type="text/css" href="http://localhost:8080/all_page/Hospital_single_page/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<style>
    .error{
        color: red !important;
    }
    
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-black bg-dark text-white">
	<!-- <div class="container">  -->
	<div class="row m-auto">		
		<div class="col-md-3 text-center pb-1 order-md-1">
			<span class="contact-clinic">8409313131,8409313131</span>
		</div>
		<div class="col-md-9 d-inline text-center order-md-2">
			<p class="time-table">Clinic Time 10:30 A.M - 05:00 P.M / Sunday 10:30 am - 02:00 pm </p>
		</div>
	<!-- </div> -->
	</div> 
</nav>

         <!-- navbar Start  -->

         <nav class="navbar shadow-sm rounded navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
  <a class="navbar-brand Logo" href="#">
  	<img src="http://localhost:8080/all_page/Hospital_single_page/logo/images.jpg">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav custome-menu ml-auto">
      <li class="nav-item  active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="index.php">About </a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="index.php">Service </a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="index.php">Gallery </a>
      </li> 
      <li class="nav-item ">
        <a class="nav-link" href="appointment.php">Appointment </a>
      </li> 
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Contact </a>
      </li>          
      
    </ul>
   
  </div>
  </div>
</nav>

         <!-- navbar End  -->




         <!-- Specialities section start -->

         <div class="container custom-margin mb-5 specilitied-text-main">
         	<div class="row">
         		<div class="col-md-12">
         	<h6 class="heart-title text-center">Appointment</h6>
         	<h1 class="specilities-title text-center all-headings">Book Appointment</h1>
         	</div>
         	</div>

         	<div class="row  m-auto pt-5 ">
                <div class="col-lg-4">
                    <img src="http://localhost:8080/all_page/Hospital_single_page/images/img-bg.jpg" alt="doctor-image">
                </div>
                <div class="col-lg-8 dr-name">
                    <h3 class="pt-lg-3 pt-sm-3">Dr. Beena Acharya</h3>
                    <p>                    
                        MBBS, MD - General Medicine, DNB - Cardiology<br>
                        Interventional Cardiologist<br>
                        29 Years Experience Overall  (9 years as specialist)<br>
                        INR&nbsp;-1000<br>
                         <small class="veryfied-icone">Medical Registration Verified</small>                    

                    </p>
                    <p><b>Dr. Bina Mishra </b>is a Interventional Cardiologist in Kalyani Nagar, Pune and has an experience of 29 years in this field. <b>Dr. Bina Mishra</b> practices at <b>Metro Medical Clinic</b>  in Kalyani Nagar, Pune and N M Wadia Institute of Cardiology in Bund Garden.</p>
                    <button type="button" class="btn btn-primary btn-sm" id="book_apt" onclick="ShowCalender()">Book Appointment</button>

                    <!-- Add calnder Html  -->
                   

                </div>
                
            </div>

         </div>

         <!-- Specialities section End -->

        <!--  Calender start -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                              <div id='calendar' class="my-5"></div>
                               <div id='datepicker'></div>                   
                    </div>
                    
                </div>
                
            </div>

         <!--  Calender End -->



         	


         	<!-- footer Start -->
         		<footer class="bg-dark">
         		<!-- <nav class="navbar navbar-light bg-dark py-5 footer-nav"> -->
         			<div class="container">
         				<div class="row py-5 custom-foter">
         					<div class="col-lg-4">
         						<h4 class="hedind-footer">Metro Medical Clinic</h4>
         						<p>Heart Care today has evolved into a service which is in demand everywhere, especially in India and the developing world.</p>
         						<a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
         						<a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
         						<a href=""><i class="fa fa-envelope" aria-hidden="true"></i></a>		
         					</div>
         					<div class="col-lg-4 foter-menu ">
         						<h4 class="link-style">Links</h4>
         						<ul class="list-unstyled order-list-footer">
         							<li><a href="index.php">Home</a></li>
         							<li><a href="#about">About</a></li>
         							<li><a href="#specialities">Services</a></li>
         							<li><a href="#gallery">Gallery</a></li>
         							<li><a href="appointment.php">Appointment</a></li>
         							<li><a href="#contact">Contact</a></li>
         						</ul>
         					</div>
         					<div class="col-lg-4 info-contact">
         						<h4>Contact Us</h4>
         						<p class="add-para">
         							<address class="text-add">
         								2nd floor, Acharya House, Avisys Services Private Ltd., Bavdhan, Pune, Maharashtra.
         							</address>

         							<strong class="phn">Phone No  :</strong><span class="mob-no">&nbsp;&nbsp;+91 9087654321 </span> <br>
         							<strong class="mob">Mobile No :</strong><span class="phon-no">&nbsp;&nbsp;+91 9087654321</span><br>
         							<strong class="eml">Email Id  :</strong> <span class="email">&nbsp;&nbsp;info@avisys.co.in</span> 

         						</p>

         					</div>   
         					<!-- <hr style=" border:1px solid #f4f4f4; width: 100%;"> 
         					
         					<p class="text-center">© 2020 All Rights Reserved.</p>   -->    					
         				</div> 


         			</div>
         		<!-- </nav> -->

                <!-- Modal Code -->
                <div class="modal fade appointment_modal_form" tabindex="-1" role="dialog" id="addMyModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    
                                    <h4 class="modal-title text-center" style="padding-left: 59px;">Book Appointment</h4>
                                </div>
                                <form role="form" id="newModalForm">
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-md-2 botn-size mr-2">
                                            <button class="btn btn-primary btn-sm f-bton" type="submit">10:00 AM</button>
                                        </div>
                                        <div class="col-md-2 botn-size mr-2">
                                            <button class="btn btn-primary btn-sm f-bton" type="submit">11:00 AM</button>
                                        </div><div class="col-md-2 botn-size mr-2">
                                            <button class="btn btn-primary btn-sm f-bton" type="submit">12:00 PM</button>
                                        </div><div class="col-md-2 botn-size mr-2">
                                            <button class="btn btn-primary btn-sm f-bton" type="submit">01:00 PM</button>
                                        </div><div class="col-md-2 botn-size mr-2">
                                            <button class="btn btn-primary btn-sm f-bton" type="submit">02:00 PM</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-lg-4" for="name">Name :</label>
                                            <input type="text" name="name" id="name"  placeholder="Enter Name" />
                                            <small  class="form-text text-muted error col-lg-4" id="error_name"></small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-lg-4" for="email">Email :</label>
                                            <input type="email" name="email" id="email" placeholder="Enter email" />
                                            <small  class="form-text text-muted error col-lg-4" id="error_email"></small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="col-lg-4" for="mobile">Mobile :</label>
                                            <input type="number" name="mobile" id="mobile" minlength="10" maxlength="10" placeholder="Enter Mobile no"/>
                                            <small  class="form-text text-muted error col-lg-4" id="error_mobile"></small>
                                        </div>
                                    </div>


                                    <div class="row d-none">
                                        <div class="col-lg-12">
                                            <label class="col-lg-4" for="starts-at">Starts at</label>
                                            <input type="text" name="starts_at" id="starts-at" />
                                        </div>
                                    </div>
                                    <div class="row d-none">
                                        <div class="col-lg-12">
                                            <label class="col-lg-4" for="ends-at">Ends at</label>
                                            <input type="text" name="ends_at" id="ends-at" />
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <!-- <button type="button" class="btn btn-success text-right" id="save-event" >Book</button> -->
                                            <button type="submit" class="btn btn-success text-right" id="save-event">Book</button>
                                            <button type="button" class="btn btn-default text-right" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                   
                                </div>
                                <!-- <div class="modal-footer">
                                    
                                </div> -->
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


                    <div class="modal fade appointment_confirm_modal_form" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    
                                    <h4 class="modal-title text-center" style="padding-left: 59px;">Book Approval Status: <span class="text-warning">Pending</span></h4>
                                </div>
                                <form>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <strong>Dr. Bina Mishra</strong>
                                            <!-- <div>Title: Interventional Cardiologist</div> -->
                                            <!-- <div>Location: Pune</div> -->
                                            <div>Price: INR 1000</div>
                                         </div>
                                    </div>
                                   
                                   <div class="row my-5">
                                        <div class="col-md-8 col-md-offset-4">
                                            <strong>Booking Info</strong>
                                            <div>Booking ID: 76767</div>
                                            <div>Booking Date: Mon, 2 Nov 2020</div>
                                            <div>Booking Time-slot: 10.00AM - 10.30AM</div>
                                            <div>Name : Patient</div>
                                            <div>Phone no: 7788996655</div>
                                         </div>
                                    </div>

                                    <div class="row my-5">
                                        <div class="col-md-12 text-center">
                                            <strong>Thank You</strong><br/>
                                            <button type="button" class="btn btn-primary" id="finish"  data-dismiss="modal">FINISH</button>
                                         </div>
                                    </div>
                                   
                                </div>
                                <!-- <div class="modal-footer">
                                    
                                </div> -->
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->



         		</footer>

         	<!-- footer End -->







 
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
       <script  src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.0.1/fullcalendar.js"></script>
         <script  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">

    function get_calendar_height() {
      return $(window).height() - 30;
}
     $(document).ready(function() {
        let today = new Date().toISOString().slice(0, 10)
        console.log(today)
        $(window).resize(function() {
            //$('#calendar').fullCalendar('option', 'height', get_calendar_height());

        });
         $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: today,
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectHelper: true,
            windowResize: function (view) {
                return false;
                console.log(view)
                var current_view = view['name'];
                // var expected_view = $(window).width() > 576 ? 'agendaWeek' : 'agendaDay';
                // if (current_view !== expected_view) {
                //     $('#calendar').fullCalendar('changeView', expected_view);
                // }
            },
            selectAllow:function(date_json){
                console.log(date_json.start._d)
                var selected_date_milisecond =Date.parse(date_json.start._d)
                console.log(selected_date_milisecond)
                var select_format_date = new Date(selected_date_milisecond);

                var number_format_date = select_format_date.toLocaleDateString(); // "Dec 20"
                    console.log(number_format_date)
                  number_format_date.replace('/', '-').replace('/', '-') 
                  var d = new Date(number_format_date);
                   d_year = d.getFullYear();
                   d_month = d.getMonth();
                   d_date = d.getDate();
                   // selected date
                   select_date_one =  new Date(d_year,d_month,d_date);
                   var c_d = new Date();
                   c_d_year = c_d.getFullYear();
                   c_d_month = c_d.getMonth();
                   c_d_date = c_d.getDate();
                   //current date
                    current_date_two =  new Date(c_d_year,c_d_month,c_d_date);
                    console.log(select_date_one)
                    console.log(current_date_two)
                    if(select_date_one <  current_date_two ) {
                        return false;
                    } else {
                        return true;
                    }
                  
            },
            select: function(start, end) {
                //  alert(1)
                // console.log(start);
                // console.log(end);
                // Display the modal.
                // You could fill in the start and end fields based on the parameters
                $('.appointment_modal_form').modal('show');

            },
            eventClick: function(event, element) {
                // Display the modal and set the values to the event values.
                // console.log(event);
                $('.appointment_modal_form').modal('show');
                $('.appointment_modal_form').find('#title').val(event.title);
                $('.appointment_modal_form').find('#starts-at').val(event.start);
                $('.appointment_modal_form').find('#ends-at').val(event.end);

            },
            editable: true,
            eventLimit: true // allow "more" link when too many events

        });
        

       

        // Bind the dates to datetimepicker.
        // You should pass the options you need
        $("#starts-at, #ends-at").datetimepicker();

        // Whenever the user clicks on the "save" button om the dialog
        $('#save-event').on('click', function() {
             // alert(2);
            var title = $('#title').val();
            if (title) {
                var eventData = {
                    title: title,
                    start: $('#starts-at').val(),
                    end: $('#ends-at').val()
                };
                $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
            }
            $('#calendar').fullCalendar('unselect');

            // Clear modal inputs
           // $('.appointment_modal_form').find('input').val('');

            // hide modal
          //  $('.appointment_modal_form').modal('hide');
        });

         $("#calendar").css("display","none");
        $("#datepicker").css("display","none");

      
        
        
        $(function() {

          $("#newModalForm").validate({
            rules: {
              name: {
                required: true,
              },
              email: {
                required: true,
              },
              mobile: {
                required: true,
              }
            },
            messages: {
              name: {
                required: "Please enter name"
              },
              email: {
                required: "Please enter email"
              },
              mobile: {
                required: "Please enter mobile"
              },
            },
            submitHandler: function(form) {
                //alert(1);
                console.log($(form).serialize());
                $('.appointment_modal_form ').modal('hide');
                $('.appointment_confirm_modal_form').modal('show');
                return false;
            // $.ajax({
            //     url: './pay-vip.php',
            //     type: 'POST',
            //     data: $(form).serialize(),
            //     success: function(response) {
            //         location.replace(location + "pay-vip.php");
            //         alert("Send mail")
            //     }            
            // });
          }
          });
        });

    });
     function ShowCalender(){
        $("#calendar").toggle()
        $("#datepicker").toggle();
     }
</script>

<script type="text/javascript">
    
  

</script>




</body>
</html>