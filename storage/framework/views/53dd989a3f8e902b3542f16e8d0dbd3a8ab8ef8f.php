
<?php $__env->startSection('title'); ?>
   Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('/assets/libs/fullcalendar/fullcalendar.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Apps
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Booking List
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#booking-modal"><i class="mdi mdi-plus"></i> New 
                                Booking</button>

                          
                        </div>
                    </div>
                    <div class="card shadow-none">
                        <div class="card-body bg-soft-info rounded">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar text-info icon-dual-info"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="fs-15">Welcome to your Calendar!</h6>
                                    <p class="text-muted mb-0">Event that applications book will appear here. Click on an
                                        event to see the details and manage applicants event.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end card-->
                    <div>
                        <h5 class="mb-1">Upcoming Events</h5>
                        <p class="text-muted">Don't miss scheduled events</p>
                        <div class="pe-2 me-n1 mb-3" data-simplebar="init" style="height: 430px"><div class="simplebar-wrapper" style="margin: 0px -8px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 8px 0px 0px;">
                            <div id="upcoming-event-list"><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">4 Jan 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> World Braille Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">30 Jan 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> World Leprosy Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">21 Feb 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> International Mother Language Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">22 Feb 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> World Thinking Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">8 Mar 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> International Women's Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">21 Mar 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> International Mother Language Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">22 Mar 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> World Water Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">7 Apr 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> World Health Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">16 Apr 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> International Special Librarians Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">22 Apr 2022 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">5:30 AM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> Earth Day</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-primary"></i><span class="fw-medium">1 Aug 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> All Day Event</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> An all-day event is an event that lasts an entire day or longer</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-warning"></i><span class="fw-medium">14 Aug 2023 to 16 Aug 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> Visit Online Course</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Long Term Event means an incident that last longer than 12 hours.</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-success"></i><span class="fw-medium">19 Aug 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">12:30 PM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> Meeting With Designer</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Tell how to boost website traffic</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-success"></i><span class="fw-medium">20 Aug 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">7:00 PM to 12:00 AM</small></div>                            </div>                            <h6 class="card-title fs-16"> Birthday Party</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Family slumber party – Bring out the blankets and pillows and have a family slumber party! Play silly party games, share special snacks and wind down the fun with a special movie.</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-primary"></i><span class="fw-medium">23 Aug 2023 to 27 Aug 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> Repeating Event</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> A recurring or repeating event is simply any event that you will occur more than once on your calendar. </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-danger"></i><span class="fw-medium">28 Aug 2023 to 29 Aug 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> Weekly Strategy Planning</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Strategies for Creating Your Weekly Schedule</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-dark"></i><span class="fw-medium">28 Aug 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">Full day event</small></div>                            </div>                            <h6 class="card-title fs-16"> Click for Google</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> </p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-danger"></i><span class="fw-medium">10 Sept 2023 to 11 Sept 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">8:00 PM to 4:00 PM</small></div>                            </div>                            <h6 class="card-title fs-16"> Client Meeting with Alexis</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> A meeting is a gathering of two or more people that has been convened for the purpose of achieving a common goal through verbal interaction, such as sharing information or reaching agreement.</p>                        </div>                    </div><div class="card mb-3">                        <div class="card-body">                            <div class="d-flex mb-3">                                <div class="flex-grow-1"><i class="mdi mdi-checkbox-blank-circle me-2 text-info"></i><span class="fw-medium">11 Sept 2023 </span></div>                                <div class="flex-shrink-0"><small class="badge badge-soft-primary ms-auto">8:00 PM to 4:00 PM</small></div>                            </div>                            <h6 class="card-title fs-16"> Velzon Project Discussion with Team</h6>                            <p class="text-muted text-truncate-two-lines mb-0"> Tell how to boost website traffic</p>                        </div>                    </div></div>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 2503px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 73px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div></div>
                    </div>
                </div> <!-- end col-->

                <div class="col-xl-9">
                    <div class="card card-h-100">
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!--end row-->

            <div style='clear:both'></div>

            <div class="modal fade" id="booking-modal" tabindex="-1" role="dialog" aria-labelledby="booking-modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-soft-info">
                            <h5 class="modal-title" id="modal-title">New Booking</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form method="post" action="<?php echo e(route('bookings.store')); ?>">
                                 <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label class="form-label text-muted">Select Property</label>
                                    <select name="property_id" class="form-control" >
                                        <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($property->id); ?>"><?php echo e($property->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>     

                                <div class="mb-3">
                                    <label class="form-label text-muted">Select Customer</label>
                                    <select name="customer_id" class="form-control" >
                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Booking date</label>
                                    <input type="text" name="book_date" class="form-control" data-provider="flatpickr" data-date-format="d-m-Y" data-range-date="true">
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">No Of people</label>
                                    <input type="number" name="number_of_people"  class="form-control" placeholder="No Of People">
                                    
                                </div>

                               

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Advance Payment</label>
                                    <input type="text" name="advance_payment"  class="form-control" placeholder="Advance">
                                    
                                </div>

                               
                                    
                            
                                <!--end row-->
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-soft-danger" id="btn-delete-event" hidden="true"><i class="ri-close-line align-bottom"></i> Delete</button>
                                    <button type="submit" class="btn btn-success">Add Booking</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end modal-content-->
                </div> <!-- end modal dialog-->
            </div>
            <!-- end modal-->
        </div>
    </div> <!-- end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/fullcalendar/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
   
    <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            timeZone: 'local',      
            themeSystem: 'bootstrap',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            events: [
                {
            id: 1,
            title: "World Braille Day",
            start: "2023-08-04",
            className: "bg-soft-info",
            allDay: true

        },
        {
            id: 2,
            title: "World Leprosy Day",
            start: "2023-08-30",
            className: "bg-soft-info",
            allDay: true
        },

        {
            id: 3,
            title: "International Mother Language Day",
            start: "2023-08-21",
            className: "bg-soft-info",
            allDay: true
        },

        {
            id: 4,
            title: "International Women's Day",
            start: "2023-08-08",
            className: "bg-soft-info",
            allDay: true
        },

        {
            id: 5,
            title: "World Thinking Day",
            start: "2023-08-22",
            className: "bg-soft-info",
            allDay: true
        },

        {
            id: 6,
            title: "International Mother Language Day",
            start: "2023-08-21",
            className: "bg-soft-primary",
            allDay: true
        },

        {
            id: 7,
            title: "World Water Day",
            start: "2023-08-22",
            className: "bg-soft-danger",
            allDay: true
        },

        {
            id: 8,
            title: "World Health Day",
            start: "2023-08-07",
            className: "bg-soft-info",
            allDay: true
        },


        {
            id: 9,
            title: "International Special Librarians Day",
            start: "2023-08-16",
            className: "bg-soft-info",
            allDay: true
        },

        {
            id: 10,
            title: "Earth Day",
            start: "2023-08-22",
            className: "bg-soft-warning",
            allDay: true
        },
                    ],
          });
          calendar.render();
        });
  
      </script>

    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sathe\Documents\projects\dstays\resources\views/index.blade.php ENDPATH**/ ?>