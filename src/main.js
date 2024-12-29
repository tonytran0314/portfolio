import Toast from "vue-toastification"
import "vue-toastification/dist/index.css"
import { createApp } from 'vue'
import './index.css'
import App from './App.vue'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faBars, faEnvelope, faCopy, faXmark} from '@fortawesome/free-solid-svg-icons'
import { faGithub, faLinkedin } from "@fortawesome/free-brands-svg-icons"

library.add(faBars, faEnvelope, faCopy, faGithub, faLinkedin, faXmark)

const app = createApp(App)

app.component('font-awesome-icon', FontAwesomeIcon)
app.mount('#app')
app.use(Toast)
