<template>
    <div>
        <label for="event"><h2>Events</h2></label><br>
        <input name="event" type="text" id="calender_event" value="Test Event" placeholder="">
        <br>
        <label for="start_date">From</label>
        <input type="date" id="start_date" name="start_date" value="2020-12-04">
        <label for="end_date">To</label>
        <input type="date" id="end_date" name="end_date" value="2020-12-30">
        <br>
        <ul id="weekdays" v-for="day in weekdays">
            <li>
                <label :for="`${day}_checkbox`">{{day}}</label><br>
                <input type="checkbox" :id="`${day}_checkbox`" :name="day" :value="day" checked="true">
            </li>
        </ul>
        <br>
        <button class="btn btn-outline-primary" id="save_events" v-on:click="saveEvent">Save</button>
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
        },
        methods: {
            saveEvent: function() {
                console.log('saving...');
            }
        }
    }
</script>
