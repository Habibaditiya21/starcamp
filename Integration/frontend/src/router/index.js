import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import LoginView from "../views/LoginView.vue";
import AboutView from "../views/AboutView.vue";
import PesananView from "../views/PesananView.vue";
import KeranjangView from "../views/KeranjangView.vue";
import RegisterView from "../views/RegisterView.vue";
import ProfilView from "../views/ProfilView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "about",
      component: AboutView,
    },
    {
      path: "/login",
      name: "login",
      component: LoginView,
    },
    {
      path: "/register",
      name: "register",
      component: RegisterView,
    },
    {
      path: "/home",
      name: "home",
      component: HomeView,
    },
    {
      path: "/pesanan",
      name: "pesanan",
      component: PesananView,
    },
    {
      path: "/keranjang",
      name: "keranjang",
      component: KeranjangView,
    },
    {
      path: "/profil",
      name: "profil",
      component: ProfilView,
    },
  ],
});

export default router;
