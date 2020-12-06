<template>
    <div>
        <label for="event"><h2>Events</h2></label><br>
        <input name="event" type="text" id="calender_event" value="" placeholder="">
        <br>
        <label for="start_date">From</label>
        <input type="date" id="start_date" name="start_date">
        <label for="end_date">To</label>
        <input type="date" id="end_date" name="end_date">
        <br>
        <ul id="weekdays" v-for="day in weekdays">
            <li>
                <label :for="`${day}_checkbox`">{{day}}</label><br>
                <input type="checkbox" :id="`${day}_checkbox`" :name="day" :value="day">
            </li>
        </ul>
        <br>
        <button class="btn btn-outline-primary" id="save_events">Save</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Manual Event Component.')
        },
        data() {
            return {
                weekdays: [
                    'monday',
                    'tuesday',
                    'wednesday',
                    'thursday',
                    'friday',
                    'saturday',
                    'sunday'
                ]
            }
        }
    }
</script>
