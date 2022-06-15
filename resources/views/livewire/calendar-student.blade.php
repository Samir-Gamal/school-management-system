<div>
    <div>
        <div>
            <div id='calendar-container' wire:ignore>
                <div id='calendar'></div>
            </div>
        </div>
        @push('scripts')
            <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>

            <script>
                document.addEventListener('livewire:load', function () {
                    var Calendar = FullCalendar.Calendar;
                    var Draggable = FullCalendar.Draggable;
                    var calendarEl = document.getElementById('calendar');
                    var checkbox = document.getElementById('drop-remove');
                    var data = @this.events;
                    var calendar = new Calendar(calendarEl, {
                        events: JSON.parse(data),
                    });
                    calendar.render();
                @this.on(`refreshCalendar`, () => {
                    calendar.refetchEvents()
                });
                });
            </script>
            <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet'/>
        @endpush
    </div>

</div>
