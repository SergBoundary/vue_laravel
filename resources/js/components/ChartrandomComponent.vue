<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <line-chart :chart-data="data" :height="100" :options="{responsive: true, maintainAspectRation: true}"></line-chart>
                <button @click="update" class="btn btn-primary btn-xs text mb-1 mh-10">Refresh</button>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'
    export default {
        components: {
            LineChart
        },
        data: function() {
            return {
                data: [],
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                axios.get('/start/random-chart').then((response) => {
                    this.data = response.data
                });
            }
        }
    }
</script>
