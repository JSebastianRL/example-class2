<template>
    <section>
        <div class="card">
            <div class="card-header text-center">
                <h1 class="text-center">Crear nuevas personas</h1>
                <a class="btn btn-success" @click.prevent="createPerson">Crear</a>
            </div>
            <div class="card-boddy">
                <person-table :people="person_new"></person-table>
                <person-form :person="person"></person-form>
            </div>
        </div>
    </section>
</template>

<script>
import PersonTable from './Table.vue'
import PersonForm from './Form.vue'
// import RickAndMorty from '../RickAndMorty.vue'
export default {
    props: ['people'],
    components: {
        PersonTable,
        PersonForm
    },
    data() {
        return {
            person: {},
            person_new: this.people
        }
    },
    methods: {
        createPerson() {
            this.person = {}
            $('#modalPerson').modal('show')
        }
    }
}
</script>
