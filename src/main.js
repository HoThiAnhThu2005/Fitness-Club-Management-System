import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Default from './layout/wrapper/index.vue'
import Toaster from '@meforma/vue-toaster'
import Client from './layout/wrapper/client.vue'
import Trainer from './layout/wrapper/trainer.vue'
const app = createApp(App)

app.use(router)
app.use(Toaster, {
  position: 'top-right', // vị trí hiển thị
  duration: 3000,        // thời gian tự ẩn (ms)
})
app.component("default-layout", Default);
app.component("client-layout", Client);
app.component("trainer-layout", Trainer);

app.mount("#app")