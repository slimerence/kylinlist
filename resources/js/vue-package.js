import Vue from 'vue';
// 加载Element UI 库
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/en';
// import { Loading } from 'element-ui';
Vue.use(ElementUI,{ locale });
window.Vue = Vue;
