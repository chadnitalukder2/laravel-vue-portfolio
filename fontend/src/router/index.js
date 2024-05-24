import { createRouter, createWebHistory } from "vue-router";
import axios from "axios";
import home from "../components/Home.vue";
import Admin from "../Admin/index.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: home,
  },
  {
    path: "/login",
    name: "login",
    component: () => import("../components/Login.vue"),
  },
  {
    path: "/register",
    name: "register",
    component: () => import("../components/Register.vue"),
  },
  {
    path: "/ForgotPassword",
    name: "ForgotPassword",
    component: () => import("../components/ForgotPassword.vue"),
  },
  {
    path: "/password-reset/:token",
    name: "password-reset",
    component: () => import("../components/ResetPassword.vue"),
  },

  //========================================================
  {
    path: "/admin/",
    component: Admin,
    name: "Admin",
    meta: { requiresAuth: true, adminAuthRequired: true },
    children: [
      {
        path: "/dashboard",
        name: "dashboard",
        component: () => import("../Admin/dashboard/dashboard.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
    ],
  },
  //===============================================
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});


router.beforeEach(async (to, from, next) => {
  if (to.meta.requiresAuth) {
    await axios
      .get("/api/user")
      .then((response) => {
        if (response.status == 200) {
          if (to.meta.adminAuthRequired && response.data.role != "admin") {
            next("/");
          } else {
            next();
          }
        } else {
          next("/login");
        }
      })
      .catch((error) => {
        next("/login");
      });
  } else {
    // No authentication required, proceed to the route
    next();
  }
});


export default router;




