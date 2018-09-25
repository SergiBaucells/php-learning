</v-flex>
</v-layout>
</v-container>
</v-content>
<v-footer color="indigo" app>
    <span class="white--text">Created by Sergi Baucells. &copy;2018 All right reserved</span>
</v-footer>
</v-app>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
<script>

</script>
<script>
    new Vue({
        el: '#app',
        data: () => ({
            drawer: null
        }),
        props: {
            source: String
        }
    })
</script>
</body>
</html>