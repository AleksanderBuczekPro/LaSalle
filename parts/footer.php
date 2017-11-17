           <!--footer-->
            <section class="colored-section bg-inverse footer pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <ul class="nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mentions Légales</a>
                                </li>
                            </ul>
                            <p class="mt-4 text-muted">
                                &copy; 2017 La Salle - Dijon 
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        <script
              src="https://code.jquery.com/jquery-2.2.4.js"
              integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
              crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/fr.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.9.4/umd/popper.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="js/collapse.js"></script>
        <script type="text/javascript" src="js/transition.js"></script>
        
            <!-- Moment.js -->



            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

            <script type="text/javascript">
                $("#timepicker, #timepicker2").datetimepicker({

                   format: "HH:mm",
                    icons: {
                      up: "fa fa-chevron-up",
                      down: "fa fa-chevron-down"
                    }
                });

                $("#timepicker3").datetimepicker({
                    format: "YYYY-MM-DD HH:mm",

                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    }
                });
            </script>

            <script src="js/app.js"></script>
    </body>
</html>