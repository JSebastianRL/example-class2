<template>
    <div class="modal" tabindex="-1" id="modalPerson">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nueva Persona</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="storePerson">
                        <div class="for,-group col-md-12">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Ingrese un Nombre:"
                                v-model="person.name" required>
                        </div>
                        <div class="col-md-12">
                            <label> Surname</label>
                            <input type="text" class="form-control" placeholder="Ingrese un Apellido:"
                                v-model="person.surname" required>
                        </div>
                        <div class="col-md-12">
                            <label>Age</label>
                            <input type="number" class="form-control" placeholder="Ingrese un Edad:"
                                v-model="person.age" required>
                        </div>
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" placeholder="Ingrese un Telefono:"
                                v-model="person.phone" required>
                        </div>
                        <div class="col-md-12">
                            <label> Email</label>
                            <input type="email" class="form-control"
                                placeholder="Ingrese una Direccion de correo electronico " v-model="person.email"
                                required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-sm" data-dismiss="modal">cancel</button>
                            <button type="submit" class="btn btn-success btn-sm">save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    props: ['person'],
    methods: {
        storePerson() {
            let url = `/Person/store`
            let res = null
            if (this.person.id == undefined) {
                res = axios.post(url, this.person)
            } else {
                url = `/Person/update/${this.person.id}`
                res = axios.put(url, this.person)
            }
            res.then(res => {
                if (res.data.saved) {
                    alert(`${res.data.message}`)
                    if (this.person.id == undefined) {
                        this.$parent.$parent.person_new.push(res.data.person)
                    }
                    $('#modalPerson').modal('hide')
                }
            })

        }
    }
}

</script>
