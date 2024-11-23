<template>
	<form class="consult__form d-flex">
		<input v-model="name" autocomplete="off" type="text" name="name" placeholder="Имя" class="consult__form-input input">
		<input required v-model="phone" @click.prevent="phoneNotSet  = false" v-mask="{mask: '+7 (NNN) NNN-NN-NN', model: 'cpf' }" autocomplete="off" :class="{ _error: phoneNotSet }" type="tel" name="phone" placeholder="Телефон*" class="consult__form-input input">

        <div class="form_wrapper">
            <button type="submit"  @click.prevent="sendMsg()" class="consult__form-btn btn">Отправить</button>
            <div v-show="showLoader" class="loader_svg"></div>
        </div>

	</form>
</template>

<script>
import { ref } from 'vue'
export default {
    props:{
        rout:String,
        redirect:String,
    },

    setup(props) {
        let name = ref('')
        let phone = ref('')
        const _token = document.querySelector('meta[name="_token"]').content
        let showLoader = ref(false)
        let phoneNotSet = ref(false)



        const sendMsg  = () => {
            showLoader = true;

            if (phone.value == "")
            {
                phoneNotSet.value = true
                return;
            }

            axios.post(props.rout, {
                _token: _token,
                name: name.value,
                phone: phone.value,
                review: "",
            })
            .then((response) => {
                showLoader = false
                console.log(response)
                document.location.href=props.redirect
            })
            .catch(error => console.log(error));
        }

        return {
            name,
            phone,
            showLoader,
            phoneNotSet,
            sendMsg
        }
    }
}
</script>

<style>

</style>
