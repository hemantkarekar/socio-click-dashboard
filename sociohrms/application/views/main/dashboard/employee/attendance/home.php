<!-- Attendance: Access Level > Employee -->

<!-- Plugin : FullCalendar -->
<!-- <link rel="stylesheet" href="<?= base_url('assets/vendors/') ?>fullcalendar/main.min.css"> -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
<!-- <script href="<?= base_url('assets/js/') ?>fullcalendar.js"></script> -->
	<!-- End plugin css for this page -->
<div class="page-content">
    <div class="d-none">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Your Leave Request for <strong>24th June 2024</strong> has been Approved!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 d-none d-md-block">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Full calendar</h6>
                            <div id='external-events' class='external-events'>
                                <h6 class="mb-2 text-muted">Draggable Events</h6>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>Birth Day</div>
                                </div>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>New Project</div>
                                </div>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>Anniversary</div>
                                </div>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                                    <div class='fc-event-main'>Clent Meeting</div>
                                </div>
                                <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event hii'>
                                    <div class='fc-event-main'>Office Trip</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div id='fullcalendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fullCalModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modalTitle1" class="modal-title"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
                </div>
                <div id="modalBody1" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Event Page</button>
                </div>
            </div>
        </div>
    </div>

    <div id="createEventModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modalTitle2" class="modal-title">Add event</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
                </div>
                <div id="modalBody2" class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Another label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     var calendarEl = document.getElementById('fullcalendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
</script>