<template>
	<section>
		<table class="table table-borderless">
			<thead class="thead-dark">
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Surname</th>
					<th>Age</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(person, index) in people" :key="index">
					<td>{{ person.id }}</td>
					<td>{{ person.name }}</td>
					<td>{{ person.surname }}</td>
					<td>{{ person.age }}</td>
					<td>{{ person.phone }}</td>
					<td>{{ person.email }}</td>
					<td>
						<a class="btn btn-warning btn-sm" href="#" @click.prevent="editPerson(person)">Editar</a>
						<a class="btn btn-danger btn-sm" href="#" @click.prevent="deletePerson(person)">Borrar</a>
					</td>
				</tr>
			</tbody>
		</table>

		<person-form :person="person"></person-form>

	</section>
</template>

<script>
import PersonForm from './Form.vue'
export default {
	props: ['people'],
	components: {
		PersonForm
	},
	data() {
		return {
			person: {}
		}
	},
	methods: {
		editPerson(person) {
			this.person = person
			$('#modalPerson').modal('show')
		},
		async deletePerson(person) {
			this.person = person
			let url = `/Person/delete/${this.person.id}`
			await axios.delete(url)
		}
	}
}
</script>
