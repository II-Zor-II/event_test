<script>
    import FullCalendar from '@fullcalendar/vue'
    import dayGridPlugin from '@fullcalendar/daygrid'

    export default {
        components: {
            FullCalendar // make the <FullCalendar> tag available
        },
        data() {
            return {
                calendarOptions: {
                    plugins: [dayGridPlugin],
                    initialView: 'dayGridMonth',
                    initialEvents: [
                        {
                            id: 1,
                            title: 'All-day event',
                            start: this.getDateToday()
                        },
                        {
                            id: 2,
                            title: 'Timed event',
                            start: this.getDateToday() + 'T12:00:00'
                        }
                    ],
                }
            }
        },
        methods: {
            getDateToday() {
                return new Date().toISOString().replace(/T.*$/, '')
            }
        }
    }
</script>
<template>
    <FullCalendar defaultView="dayGridMonth" :options="calendarOptions"/>
</template>
