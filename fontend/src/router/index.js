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
      {
        path: "/all-header",
        name: "all-header",
        component: () => import("../Admin/Header/all_header.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/add-header",
        name: "add-header",
        component: () => import("../Admin/Header/add_header.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/edit-header/:id",
        name: "edit-header",
        component: () => import("../Admin/Header/Edit_header.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/All-about",
        name: "All-about",
        component: () => import("../Admin/About/All_about.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/Add-about",
        name: "Add-about",
        component: () => import("../Admin/About/Add_about.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/edit-about/:id",
        name: "edit-about",
        component: () => import("../Admin/About/edit_about.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/all-service",
        name: "all-service",
        component: () => import("../Admin/Service/all_service.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/add-service",
        name: "add-service",
        component: () => import("../Admin/Service/add_service.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/edit-service/:id",
        name: "edit-service",
        component: () => import("../Admin/Service/edit_service.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/all-portfolio",
        name: "all-portfolio",
        component: () => import("../Admin/portfolio/all_portfolio.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/add-portfolio",
        name: "add-portfolio",
        component: () => import("../Admin/portfolio/add_portfolio.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/edit-portfolio/:id",
        name: "edit-portfolio",
        component: () => import("../Admin/portfolio/edit_portfolio.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },

      {
        path: "/all-blog",
        name: "all-blog",
        component: () => import("../Admin/Blog/all_blog.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/add-blog",
        name: "add-blog",
        component: () => import("../Admin/Blog/add_blog.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/edit-blog/:id",
        name: "edit-blog",
        component: () => import("../Admin/Blog/edit_blog.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },

      {
        path: "/all-contact",
        name: "all-contact",
        component: () => import("../Admin/Contact/all_contact.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },

      {
        path: "/all-setting",
        name: "all-setting",
        component: () => import("../Admin/Setting/all_setting.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/add-setting",
        name: "add-setting",
        component: () => import("../Admin/Setting/add_setting.vue"),
        meta: { requiresAuth: true, adminAuthRequired: true },
      },
      {
        path: "/edit-setting/:id",
        name: "edit-setting",
        component: () => import("../Admin/Setting/edit_setting.vue"),
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





