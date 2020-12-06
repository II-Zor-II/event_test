<template>
    <div>
        <div class="alert-dark alert p-2">
            <label for="event"><h2 class="display-4">Events</h2></label>
        </div>
        <div>
            <input class="form-control" name="event" type="text" id="calender_event" v-model="eventName"
                   placeholder="Enter Event Name here...">
        </div>
        <br>
        <div class="input-group row">
            <div class="col col-md-6">
                <label for="start_date">From</label>
                <input class="form-control" type="date" id="start_date" name="start_date" v-model="startDate">
            </div>
            <div class="col col-md-6">
                <label for="end_date">To</label>
                <input class="form-control" type="date" id="end_date" name="end_date" v-model="endDate">
            </div>
        </div>
        <ul id="weekdays">
            <li v-for="(calendarValue, day) in weekdays" class="p-1">
                <label :for="`${day}_checkbox`">{{day}}</label><br>
                <input class="form-control" type="checkbox" :id="`${day}_checkbox`" :name="day" checked="true"
                       :value="calendarValue"
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
                eventName: '',
                startDate: '',
                endDate: '',
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
                    alert('Event Saved. Refreshing Calendar..');
                    this.$dashboardEventHub.$emit('refreshCalendar');
                })
            }
        }
    }
</script>
<style>
    ul {
        display: flex;
        list-style: none;
    }
</style>
