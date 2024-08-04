import{_,d as y,r as h,o as m,c as k,a as u,b as e,e as d,w as n,f,g as l,h as w,F as v,t as p,i as x,j as C,k as j,l as E}from"./vue-router-BSPNZMZz.js";const L=y({name:"app",watch:{$route:{immediate:!0,handler(a,t){document.title=a.meta.title||"app"}}}});function P(a,t,c,b,i,o){const s=h("router-view");return m(),k(s)}const B=_(L,[["render",P]]),F={data(){return{}},mounted(){},methods:{}},S={class:"w-100"},q={class:"container"},N={class:"row justify-content-center vh-100 align-items-center"},M={class:"col-11 col-sm-9 col-md-8 col-lg-7 col-xl-6 col-xxl-5"},U={class:"border p-5"};function A(a,t,c,b,i,o){const s=h("router-view");return m(),u("section",S,[e("div",q,[e("div",N,[e("div",M,[e("div",U,[d(s)])])])])])}const V=_(F,[["render",A]]),D={data(){return{}},mounted(){},methods:{}},z={class:"w-100"},H=f('<div class="h4 fw-bold"> Welcome to Npvider ! 👋🏻 </div><div class="text-secondary mb-3"> Please sign-in to your account and start the adventure </div><div class="form-group mb-3"><label for="user-email" class="form-label">Email</label><input id="user-email" type="email" name="email" class="form-control shadow-none" required autocomplete="off"></div><div class="form-group mb-3"><label for="user-password" class="form-label">Password</label><input id="user-password" type="password" name="password" class="form-control shadow-none" required autocomplete="off"></div>',4),R={class:"d-flex justify-content-between align-items-center mb-3"},T=e("label",{for:"remember-me",class:"form-label cursor-pointer"},[e("input",{id:"remember-me",type:"checkbox",class:"form-checkbox"}),l(" Remember me ")],-1),G=e("button",{type:"submit",class:"btn btn-theme",style:{width:"100px"}}," Login ",-1);function O(a,t,c,b,i,o){const s=h("router-link");return m(),u("form",z,[H,e("div",R,[T,d(s,{to:{name:"forgot"},class:"text-decoration-none text-danger"},{default:n(()=>[l(" Forgot password ")]),_:1})]),G])}const W=_(D,[["render",O]]),I={data(){return{tab:"forgot"}},mounted(){},methods:{}},J={key:0,class:"w-100"},K=f('<div class="h4 fw-bold"> Forgot Password? 🔒 </div><div class="text-secondary mb-3"> Enter your email and we&#39;ll send you instructions to reset your password </div><div class="form-group mb-3"><label for="user-email" class="form-label">Email</label><input id="user-email" type="email" name="email" class="form-control shadow-none" required autocomplete="off"></div>',3),Q={class:"mb-3"},X={class:"text-end"},Y=e("i",{class:"bi bi-caret-left-fill"},null,-1),Z={key:1,class:"w-100"},ee=f('<div class="h4 fw-bold"> Reset Password 🔒 </div><div class="text-secondary mb-3"> Enter your email and we&#39;ll send you instructions to reset your password </div><div class="form-group mb-3"><label for="user-email" class="form-label">Email</label><input id="user-email" type="email" name="email" class="form-control shadow-none" required autocomplete="off"></div><div class="form-group mb-3"><label for="user-code" class="form-label">Code</label><input id="user-code" type="text" name="code" class="form-control shadow-none" required autocomplete="off"></div><div class="form-group mb-3"><label for="user-password" class="form-label">Password</label><input id="user-password" type="password" name="password" class="form-control shadow-none" required autocomplete="off"></div><div class="form-group mb-3"><label for="user-password-confirmation" class="form-label">Confirm password</label><input id="user-password-confirmation" type="text" name="password-confirmation" class="form-control shadow-none" required autocomplete="off"></div><div class="mb-3"><button type="submit" class="btn btn-theme" style="width:100px;"> Reset </button></div>',7),te={class:"text-end"},se=e("i",{class:"bi bi-caret-left-fill"},null,-1);function oe(a,t,c,b,i,o){const s=h("router-link");return m(),u(v,null,[i.tab==="forgot"?(m(),u("form",J,[K,e("div",Q,[e("button",{type:"submit",class:"btn btn-theme",style:{width:"100px"},onClick:t[0]||(t[0]=r=>i.tab="reset")}," Forgot ")]),e("div",X,[d(s,{to:{name:"login"},class:"text-decoration-none text-theme-secondary"},{default:n(()=>[Y,l(" Back to login ")]),_:1})])])):w("",!0),i.tab==="reset"?(m(),u("form",Z,[ee,e("div",te,[d(s,{to:{name:"login"},class:"text-decoration-none text-theme-secondary"},{default:n(()=>[se,l(" Back to login ")]),_:1})])])):w("",!0)],64)}const ae=_(I,[["render",oe]]),ie={data(){return{}},mounted(){},methods:{sidebarClose(){document.querySelector(".admin-sidebar").classList.remove("active")}}},de={class:"admin-sidebar-header"},ne=e("img",{src:"/images/logo.png",class:"img-fluid",width:"30",alt:"logo"},null,-1),re=e("span",{class:"text-theme ms-1 fw-bold none-res-text"}," Npvider ",-1),le=e("i",{class:"bi bi-x-lg"},null,-1),ce=[le],me={class:"admin-sidebar-body"},pe=e("i",{class:"bi bi-speedometer"},null,-1),ue=e("span",{class:"none-res-text ms-1"}," Dashboard ",-1),be=e("i",{class:"bi bi-link-45deg"},null,-1),he=e("span",{class:"none-res-text ms-1"}," Category Management ",-1),_e=e("i",{class:"bi bi-book"},null,-1),ve=e("span",{class:"none-res-text ms-1"}," Blog Management ",-1),fe=e("i",{class:"bi bi-people"},null,-1),ge=e("span",{class:"none-res-text ms-1"}," User Management ",-1);function xe(a,t,c,b,i,o){const s=h("router-link");return m(),u(v,null,[e("div",de,[d(s,{to:{name:"dashboard"},class:"text-decoration-none d-flex justify-content-start align-items-center",onClick:t[0]||(t[0]=r=>o.sidebarClose())},{default:n(()=>[ne,re]),_:1}),e("button",{type:"button",class:"btn border-0 sidebar-close",onClick:t[1]||(t[1]=r=>o.sidebarClose())},ce)]),e("div",me,[d(s,{to:{name:"dashboard"},class:"admin-sidebar-link",onClick:t[2]||(t[2]=r=>o.sidebarClose())},{default:n(()=>[pe,ue]),_:1}),d(s,{to:{name:"categories"},class:"admin-sidebar-link",onClick:t[3]||(t[3]=r=>o.sidebarClose())},{default:n(()=>[be,he]),_:1}),d(s,{to:{name:"blogs"},class:"admin-sidebar-link",onClick:t[4]||(t[4]=r=>o.sidebarClose())},{default:n(()=>[_e,ve]),_:1}),d(s,{to:{name:"users"},class:"admin-sidebar-link",onClick:t[5]||(t[5]=r=>o.sidebarClose())},{default:n(()=>[fe,ge]),_:1})])],64)}const we=_(ie,[["render",xe]]),$e={components:{Sidebar:we},data(){return{profileName:"Mahi Bashar Akash"}},mounted(){},methods:{nameControl(a){let t=a.split(" ");return` ${t[0][0].toUpperCase()}${t[t.length-1][0].toUpperCase()}`},sidebarOpen(){document.querySelector(".admin-sidebar").classList.add("active")}}},ye={class:"admin-wrapper"},ke={class:"admin-sidebar"},Ce={class:"admin-content"},je={class:"admin-content-header d-flex justify-content-between align-items-center"},Ee=e("i",{class:"bi bi-justify-left"},null,-1),Le=[Ee],Pe={class:"nav-item dropdown"},Be={class:"nav-link p-0",href:"javascript:void(0)",role:"button","data-bs-toggle":"dropdown","aria-expanded":"false"},Fe={class:"rounded-circle bg-theme text-white d-flex justify-content-center align-items-center",style:{width:"40px",height:"40px"}},Se=e("ul",{class:"dropdown-menu dropdown-menu-end mt-2"},[e("li",null,[e("a",{href:"javascript:void(0)",class:"dropdown-item mb-1"}," Profile ")]),e("li",null,[e("button",{type:"button",class:"dropdown-item"}," Logout ")])],-1),qe={class:"admin-content-body"};function Ne(a,t,c,b,i,o){const s=h("Sidebar"),r=h("router-view");return m(),u("div",ye,[e("div",ke,[d(s)]),e("div",Ce,[e("div",je,[e("button",{type:"button",class:"btn border-0 sidebar-toggle",onClick:t[0]||(t[0]=Ss=>o.sidebarOpen())},Le),e("div",Pe,[e("a",Be,[e("div",Fe,p(o.nameControl(i.profileName)),1)]),Se])]),e("div",qe,[d(r)])])])}const Me=_($e,[["render",Ne]]),Ue={data(){return{}},mounted(){},methods:{numberFormat(a,t){const c=[{value:1,symbol:""},{value:1e3,symbol:"k"},{value:1e6,symbol:"M"},{value:1e9,symbol:"G"},{value:1e12,symbol:"T"},{value:1e15,symbol:"P"},{value:1e18,symbol:"E"}],b=new RegExp("\\.0+$|(?<=\\.[0-9]*[1-9])0+$"),i=c.findLast(o=>a>=o.value);return i?(a/i.value).toFixed(t).replace(b,"").concat(i.symbol):"0"}}},Ae={class:"w-100 py-3 px-4 bg-white shadow-lg"},Ve={style:{"--bs-breadcrumb-divider":`url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E")`},"aria-label":"breadcrumb"},De={class:"breadcrumb pb-0 mb-0"},ze={class:"breadcrumb-item pb-0 mb-0"},He=e("i",{class:"bi bi-speedometer me-2"},null,-1),Re={class:"w-100 px-1 mt-2"},Te={class:"row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3"},Ge={class:"p-2"},Oe={class:"card border-0 rounded-0 shadow-lg"},We=e("div",{class:"card-header border-0 rounded-0 p-4"}," Categories ",-1),Ie={class:"card-body border-0 rounded-0 text-center"},Je={class:"mb-3"},Ke=e("div",{class:"text-secondary"}," Summary ",-1),Qe={class:"card-footer border-0 rounded-0 text-end p-4"},Xe=e("i",{class:"bi bi-caret-right-fill ms-2"},null,-1),Ye={class:"p-2"},Ze={class:"card border-0 rounded-0 shadow-lg"},et=e("div",{class:"card-header border-0 rounded-0 p-4"}," Blogs ",-1),tt={class:"card-body border-0 rounded-0 text-center"},st={class:"mb-3"},ot=e("div",{class:"text-secondary"}," Summary ",-1),at={class:"card-footer border-0 rounded-0 text-end p-4"},it=e("i",{class:"bi bi-caret-right-fill ms-2"},null,-1),dt={class:"p-2"},nt={class:"card border-0 rounded-0 shadow-lg"},rt=e("div",{class:"card-header border-0 rounded-0 p-4"}," Users ",-1),lt={class:"card-body border-0 rounded-0 text-center"},ct={class:"mb-3"},mt=e("div",{class:"text-secondary"}," Summary ",-1),pt={class:"card-footer border-0 rounded-0 text-end p-4"},ut=e("i",{class:"bi bi-caret-right-fill ms-2"},null,-1);function bt(a,t,c,b,i,o){const s=h("router-link");return m(),u(v,null,[e("section",Ae,[e("div",Ve,[e("div",De,[e("div",ze,[d(s,{to:{name:"dashboard"},class:"text-decoration-none text-theme"},{default:n(()=>[He,l(" Dashboard ")]),_:1})])])])]),e("section",Re,[e("div",Te,[e("div",Ge,[e("div",Oe,[We,e("div",Ie,[e("div",Je,p(o.numberFormat(2e4)),1),Ke]),e("div",Qe,[d(s,{to:{name:"categories"},class:"text-decoration-none text-theme-secondary"},{default:n(()=>[l(" Explore "),Xe]),_:1})])])]),e("div",Ye,[e("div",Ze,[et,e("div",tt,[e("div",st,p(o.numberFormat(3e4)),1),ot]),e("div",at,[d(s,{to:{name:"blogs"},class:"text-decoration-none text-theme-secondary"},{default:n(()=>[l(" Explore "),it]),_:1})])])]),e("div",dt,[e("div",nt,[rt,e("div",lt,[e("div",ct,p(o.numberFormat(4e4)),1),mt]),e("div",pt,[d(s,{to:{name:"users"},class:"text-decoration-none text-theme-secondary"},{default:n(()=>[l(" Explore "),ut]),_:1})])])])])])],64)}const ht=_(Ue,[["render",bt]]),_t={data(){return{}},mounted(){},methods:{}},vt={class:"w-100 py-3 px-4 bg-white shadow-lg d-flex justify-content-between align-items-center"},ft=e("div",{class:"fw-bold text-theme"},[e("i",{class:"bi bi-link-45deg me-2"}),l(" Categories ")],-1),gt={style:{"--bs-breadcrumb-divider":`url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E")`},"aria-label":"breadcrumb"},xt={class:"breadcrumb pb-0 mb-0"},wt={class:"breadcrumb-item pb-0 mb-0"},$t={class:"breadcrumb-item pb-0 mb-0"},yt={class:"w-100 mt-3"},kt={class:"card border-0 rounded-0"},Ct=f('<div class="card-header border-0 rounded-0"><div class="py-3 ps-2 fs-6"> Category Listing </div><div class="px-2"><div class="row"><div class="col-12 col-xl-5 pb-3"><div class="position-relative"><input type="text" name="keyword" class="form-control shadow-none ps-5" required autocomplete="off" placeholder="Search Here"><div class="position-absolute top-0 start-0 d-flex justify-content-center align-items-center h-100 ps-3"><i class="bi bi-search"></i></div></div></div></div></div></div>',1),jt={class:"card-body card-list border-0 rounded-0 py-0 px-4"},Et={class:"table-responsive"},Lt={class:"table table-hover table-borderless align-middle"},Pt=e("thead",null,[e("tr",null,[e("th",{style:{"min-width":"100px"},class:"p-3"}," Sl. No. "),e("th",{style:{"min-width":"250px"},class:"p-3"}," Category Name "),e("th",{style:{"min-width":"150px"},class:"p-3 text-center"}," Action ")])],-1),Bt={style:{"min-width":"100px"},class:"p-3"},Ft={style:{"min-width":"250px"},class:"p-3"},St=e("td",{style:{"min-width":"150px"},class:"p-3"},[e("div",{class:"dropdown w-100 text-center"},[e("a",{class:"text-decoration-none text-theme fw-bold p-2",href:"javascript:void(0)",role:"button","data-bs-toggle":"dropdown","aria-expanded":"false"},[e("i",{class:"bi bi-three-dots-vertical"})]),e("ul",{class:"dropdown-menu dropdown-menu-end"},[e("li",null,[e("button",{type:"button",class:"dropdown-item mb-1"}," Block ")]),e("li",null,[e("button",{type:"button",class:"dropdown-item"}," View ")])])])],-1),qt=f('<div class="card-footer border-0 rounded-0"><div class="d-flex justify-content-center align-items-center py-3"><div aria-label="Page navigation example" class="front-pagination"><div class="pagination"><div class="page-item"><a class="page-link" href="javascript:void(0)"><i class="bi bi-chevron-left"></i></a></div><div class="page-item active"><a class="page-link" href="javascript:void(0)"> 1 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"> 2 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"> 3 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"><i class="bi bi-chevron-right"></i></a></div></div></div></div></div>',1);function Nt(a,t,c,b,i,o){const s=h("router-link");return m(),u(v,null,[e("section",vt,[ft,e("div",gt,[e("div",xt,[e("div",wt,[d(s,{to:{name:"dashboard"},class:"text-decoration-none text-theme"},{default:n(()=>[l(" Dashboard ")]),_:1})]),e("div",$t,[d(s,{to:{name:"categories"},class:"text-decoration-none text-theme"},{default:n(()=>[l(" Categories ")]),_:1})])])])]),e("section",yt,[e("div",kt,[Ct,e("div",jt,[e("div",Et,[e("table",Lt,[Pt,e("tbody",null,[(m(),u(v,null,x(19,r=>e("tr",null,[e("td",Bt,p(r),1),e("td",Ft," Category name "+p(r),1),St])),64))])])])]),qt])])],64)}const Mt=_(_t,[["render",Nt]]),Ut={data(){return{}},mounted(){},methods:{numberFormat(a,t){const c=[{value:1,symbol:""},{value:1e3,symbol:"k"},{value:1e6,symbol:"M"},{value:1e9,symbol:"G"},{value:1e12,symbol:"T"},{value:1e15,symbol:"P"},{value:1e18,symbol:"E"}],b=new RegExp("\\.0+$|(?<=\\.[0-9]*[1-9])0+$"),i=c.findLast(o=>a>=o.value);return i?(a/i.value).toFixed(t).replace(b,"").concat(i.symbol):"0"}}},At={class:"w-100 py-3 px-4 bg-white shadow-lg d-flex justify-content-between align-items-center"},Vt=e("div",{class:"fw-bold text-theme"},[e("i",{class:"bi bi-book me-2"}),l(" Blogs ")],-1),Dt={style:{"--bs-breadcrumb-divider":`url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E")`},"aria-label":"breadcrumb"},zt={class:"breadcrumb pb-0 mb-0"},Ht={class:"breadcrumb-item pb-0 mb-0"},Rt={class:"breadcrumb-item pb-0 mb-0"},Tt={class:"w-100 mt-3"},Gt={class:"card border-0 rounded-0"},Ot=f('<div class="card-header border-0 rounded-0"><div class="py-3 ps-2 fs-6"> Blog Listing </div><div class="px-2"><div class="row"><div class="col-lg-4 pb-3"><div class="position-relative"><input type="text" name="keyword" class="form-control shadow-none ps-5" required autocomplete="off" placeholder="Search Here"><div class="position-absolute top-0 start-0 d-flex justify-content-center align-items-center h-100 ps-3"><i class="bi bi-search"></i></div></div></div></div></div></div>',1),Wt={class:"card-body card-list border-0 rounded-0 py-0 px-4"},It={class:"table-responsive"},Jt={class:"table table-borderless table-hover align-middle"},Kt=e("thead",null,[e("tr",null,[e("th",{class:"p-3",style:{"min-width":"150px","max-width":"150px"}}," Photo or video "),e("th",{class:"p-3 text-start",style:{"min-width":"150px","max-width":"150px"}}," Title "),e("th",{class:"p-3 text-center",style:{"min-width":"150px","max-width":"100px"}}," Views "),e("th",{class:"p-3 text-center",style:{"min-width":"150px","max-width":"100px"}}," Like "),e("th",{class:"p-3 text-center",style:{"min-width":"150px","max-width":"100px"}}," Comment "),e("th",{class:"p-3 text-center",style:{"min-width":"150px","max-width":"100px"}}," Share "),e("th",{class:"p-3 text-center",style:{"min-width":"150px","max-width":"100px"}}," Action ")])],-1),Qt=e("td",{class:"p-3 text-start"},[e("img",{src:"/images/about-personal.webp",class:"img-fluid object-fit-cover rounded-2 width-150 height-150",alt:"picture"})],-1),Xt=e("td",{class:"p-3"},[e("div",{class:"text-truncate-3"}," Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt eligendi fuga laborum maiores minima perspiciatis quam quidem repellat rerum! ")],-1),Yt={class:"p-3 text-center"},Zt={class:"p-3 text-center"},es={class:"p-3 text-center"},ts={class:"p-3 text-center"},ss=e("td",{class:"p-3"},[e("div",{class:"dropdown w-100 text-center"},[e("a",{class:"text-decoration-none text-theme fw-bold p-2",href:"javascript:void(0)",role:"button","data-bs-toggle":"dropdown","aria-expanded":"false"},[e("i",{class:"bi bi-three-dots-vertical"})]),e("ul",{class:"dropdown-menu dropdown-menu-end"},[e("li",null,[e("button",{type:"button",class:"dropdown-item mb-1"}," Block ")]),e("li",null,[e("button",{type:"button",class:"dropdown-item"}," View ")])])])],-1),os=f('<div class="card-footer border-0 rounded-0"><div class="d-flex justify-content-center align-items-center py-3"><div aria-label="Page navigation example" class="front-pagination"><div class="pagination"><div class="page-item"><a class="page-link" href="javascript:void(0)"><i class="bi bi-chevron-left"></i></a></div><div class="page-item active"><a class="page-link" href="javascript:void(0)"> 1 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"> 2 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"> 3 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"><i class="bi bi-chevron-right"></i></a></div></div></div></div></div>',1);function as(a,t,c,b,i,o){const s=h("router-link");return m(),u(v,null,[e("section",At,[Vt,e("div",Dt,[e("div",zt,[e("div",Ht,[d(s,{to:{name:"dashboard"},class:"text-decoration-none text-theme"},{default:n(()=>[l(" Dashboard ")]),_:1})]),e("div",Rt,[d(s,{to:{name:"blogs"},class:"text-decoration-none text-theme"},{default:n(()=>[l(" Blogs ")]),_:1})])])])]),e("section",Tt,[e("div",Gt,[Ot,e("div",Wt,[e("div",It,[e("table",Jt,[Kt,e("tbody",null,[(m(),u(v,null,x(10,r=>e("tr",null,[Qt,Xt,e("td",Yt,p(o.numberFormat(1e3)),1),e("td",Zt,p(o.numberFormat(2e4)),1),e("td",es,p(o.numberFormat(3e5)),1),e("td",ts,p(o.numberFormat(4e6)),1),ss])),64))])])])]),os])])],64)}const is=_(Ut,[["render",as]]),ds={data(){return{}},mounted(){},methods:{}},ns={class:"w-100 py-3 px-4 bg-white shadow-lg d-flex justify-content-between align-items-center"},rs=e("div",{class:"fw-bold text-theme"},[e("i",{class:"bi bi-people me-2"}),l(" Users ")],-1),ls={style:{"--bs-breadcrumb-divider":`url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E")`},"aria-label":"breadcrumb"},cs={class:"breadcrumb pb-0 mb-0"},ms={class:"breadcrumb-item pb-0 mb-0"},ps={class:"breadcrumb-item pb-0 mb-0"},us={class:"w-100 mt-3"},bs={class:"card border-0 rounded-0"},hs=f('<div class="card-header border-0 rounded-0"><div class="py-3 ps-2 fs-6"> User Listing </div><div class="px-2"><div class="row"><div class="col-lg-4 pb-3"><div class="position-relative"><input type="text" name="keyword" class="form-control shadow-none ps-5" required autocomplete="off" placeholder="Search Here"><div class="position-absolute top-0 start-0 d-flex justify-content-center align-items-center h-100 ps-3"><i class="bi bi-search"></i></div></div></div></div></div></div>',1),_s={class:"card-body card-list border-0 rounded-0 py-0 px-4"},vs={class:"table-responsive"},fs={class:"table table-borderless table-hover align-middle"},gs=e("thead",null,[e("tr",null,[e("th",{class:"p-3",style:{"min-width":"45px","max-width":"45px"}},[e("input",{type:"checkbox",class:"form-checkbox",name:"checkbox"})]),e("th",{class:"p-3",style:{"min-width":"65px","max-width":"65px"}}," Picture "),e("th",{class:"p-3",style:{"min-width":"150px","max-width":"150px"}}," Name "),e("th",{class:"p-3",style:{"min-width":"150px","max-width":"100px"}}," Email "),e("th",{class:"p-3",style:{"min-width":"150px","max-width":"100px"}}," Phone Number "),e("th",{class:"p-3",style:{"min-width":"150px","max-width":"100px"}}," Address "),e("th",{class:"p-3 text-center",style:{"min-width":"150px","max-width":"100px"}}," Action ")])],-1),xs=e("td",{class:"p-3"},[e("input",{type:"checkbox",class:"form-checkbox",name:"checkbox"})],-1),ws=e("td",{class:"p-3"},[e("img",{src:"/images/avatar.png",class:"img-fluid object-fit-cover rounded-2 width-45 height-45",alt:"picture"})],-1),$s={class:"p-3"},ys={class:"p-3"},ks={class:"p-3"},Cs={class:"p-3"},js=e("td",{class:"p-3"},[e("div",{class:"dropdown w-100 text-center"},[e("a",{class:"text-decoration-none text-theme fw-bold p-2",href:"javascript:void(0)",role:"button","data-bs-toggle":"dropdown","aria-expanded":"false"},[e("i",{class:"bi bi-three-dots-vertical"})]),e("ul",{class:"dropdown-menu dropdown-menu-end"},[e("li",null,[e("button",{type:"button",class:"dropdown-item mb-1"}," Block ")]),e("li",null,[e("button",{type:"button",class:"dropdown-item"}," View ")])])])],-1),Es=f('<div class="card-footer border-0 rounded-0"><div class="d-flex justify-content-center align-items-center py-3"><div aria-label="Page navigation example" class="front-pagination"><div class="pagination"><div class="page-item"><a class="page-link" href="javascript:void(0)"><i class="bi bi-chevron-left"></i></a></div><div class="page-item active"><a class="page-link" href="javascript:void(0)"> 1 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"> 2 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"> 3 </a></div><div class="page-item"><a class="page-link" href="javascript:void(0)"><i class="bi bi-chevron-right"></i></a></div></div></div></div></div>',1);function Ls(a,t,c,b,i,o){const s=h("router-link");return m(),u(v,null,[e("section",ns,[rs,e("div",ls,[e("div",cs,[e("div",ms,[d(s,{to:{name:"dashboard"},class:"text-decoration-none text-theme"},{default:n(()=>[l(" Dashboard ")]),_:1})]),e("div",ps,[d(s,{to:{name:"users"},class:"text-decoration-none text-theme"},{default:n(()=>[l(" Users ")]),_:1})])])])]),e("section",us,[e("div",bs,[hs,e("div",_s,[e("div",vs,[e("table",fs,[gs,e("tbody",null,[(m(),u(v,null,x(10,r=>e("tr",null,[xs,ws,e("td",$s," User name "+p(r),1),e("td",ys," User email "+p(r),1),e("td",ks," User phone number "+p(r),1),e("td",Cs," User Address "+p(r),1),js])),64))])])])]),Es])])],64)}const Ps=_(ds,[["render",Ls]]),g=window.core.APP_NAME,$="/admin/",Bs=[{path:$+"auth/",name:"authLayout",component:V,children:[{path:"login",name:"login",component:W,meta:{title:g+" - login"}},{path:"forgot",name:"forgot",component:ae,meta:{title:g+" - forgot"}}]},{path:$,name:"adminLayout",component:Me,children:[{path:"dashboard",name:"dashboard",component:ht,meta:{title:g+" - dashboard"}},{path:"categories",name:"categories",component:Mt,meta:{title:g+" - categories"}},{path:"blogs",name:"blogs",component:is,meta:{title:g+" - blogs"}},{path:"users",name:"users",component:Ps,meta:{title:g+" - users"}}]}],Fs=C({history:j(),routes:Bs,scrollBehavior(a,t,c){return a.hash?{el:a.hash,behavior:"smooth"}:{top:0,behavior:"smooth"}}});E(B).use(Fs).mount("#app");
