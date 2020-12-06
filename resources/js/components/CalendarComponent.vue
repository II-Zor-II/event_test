<script>
    import FullCalendar from '@fullcalendar/vue'
    import dayGridPlugin from '@fullcalendar/daygrid'

    export default {
        props : ["events"],
        components: {
            FullCalendar // make the <FullCalendar> tag available
        },
        data() {
            return {
                calendarOptions: {
                    plugins: [dayGridPlugin],
                    initialView: 'dayGridMonth',
                    events: this.events
                }
            }
        },
        methods: {

        },
        watch: {
            events : {
                deep: true,
                handler() {
                    this.calendarOptions.events = this.events;
                    this.$refs.calendar.$emit('refetch-events')
                }
            }
        }
    }
</script>
<template>
    <FullCalendar defaultView="dayGridMonth" ref="calendar" :options="calendarOptions" :event-sources="calendarOptions.events"/>
</template>
