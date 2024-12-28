<script setup>
    import { useToast } from "vue-toastification";
    
    const toast = useToast()

    const copyEmail = () => {
        navigator.clipboard.writeText('contact@htran.tech')
        toast.success('Copied Email Successfully')
    }
</script>

<template>
    <div class="space-y-6">
        <div class="text-2xl text-center font-bold">Contact</div>
        <div id="contact_body">
            <div class="hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35158.289338368464!2d-77.31350487315035!3d38.84200761495022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64e96394b91cd%3A0x72326e785448640!2sFairfax%2C%20VA!5e0!3m2!1sen!2sus!4v1714884050663!5m2!1sen!2sus" width="680" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="space-y-6">
                <div class="flex justify-center items-center space-x-2" @click="copyEmail">
                    <font-awesome-icon :icon="['fas', 'envelope']" size="xl" />
                    <div>contact@htran.tech</div>
                    <font-awesome-icon :icon="['fas', 'copy']" size="lg" />
                </div>
                <a href="https://github.com/tonytran0314" target="blank" class="flex justify-center items-center space-x-2">
                    <font-awesome-icon :icon="['fab', 'github']" size="xl" />
                    <div>tonytran0314</div>
                </a>
                <a href="https://www.linkedin.com/in/huytran-web-dev/" target="blank" class="flex justify-center items-center space-x-2">
                    <font-awesome-icon :icon="['fab', 'linkedin']" size="xl" />
                    <div>huytran-web-dev</div>
                </a>
            </div>
        </div>
    </div>
</template>
