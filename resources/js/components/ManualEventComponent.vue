<template>
    <div>
        <label for="event"><h2>Events</h2></label><br>
        <input name="event" type="text" id="calender_event" v-model="eventName" placeholder="">
        <br>
        <label for="start_date">From</label>
        <input type="date" id="start_date" name="start_date" v-model="startDate">
        <label for="end_date">To</label>
        <input type="date" id="end_date" name="end_date" v-model="endDate">
        <br>
        <ul id="weekdays" v-for="(calendarValue, day) in weekdays">
            <li>
                <label :for="`${day}_checkbox`">{{day}}</label><br>
                <input type="checkbox" :id="`${day}_checkbox`" :name="day" checked="true" :value="calendarValue"
                       v-model="checkedDays">
            </li>
        </ul>
        <br>
        <button class="btn btn-outline-primary" id="save_events" @click="saveEvent">Save</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Manual Event Component.')
        },
        data() {
            return {
                checkedDays: [],
                eventName: 'Event Test',
                startDate: '2020-12-04',
                endDate: '2020-12-30',
                weekdays: {
                    'monday': '1',
                    'tuesday': '2',
                    'wednesday': '3',
                    'thursday': '4',
                    'friday': '5',
                    'saturday': '6',
                    'sunday': '0'
                }
            }
        },
        methods: {
            saveEvent: function () {
                let _self = this;
                console.log(
                    [
                        _self.checkedDays,
                        _self.eventName,
                        _self.startDate,
                        _self.endDate
                    ]
                );
                console.log('saving...');
                axios.post('/api/events', {
                    'api_token': USER.api_token,
                    'events': JSON.stringify({
                        'title': _self.eventName,
                        'daysOfWeek': _self.checkedDays,
                        'startRecur': _self.startDate,
                        'endRecur': _self.endDate
                    })
                }).then((response) => {
                    console.log(response);
                    this.$dashboardEventHub.$emit('refreshCalendar');
                })
            }
        }
    }
</script>
