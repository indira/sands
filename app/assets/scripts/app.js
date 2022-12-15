import "../styles/styles.css";
import MobileMenu from "./modules/MobileMenu";
import StickyHeader from "./modules/StickyHeader";
import Search from "./modules/Search";

let mobileMenu = new MobileMenu();
let stickyHeader = new StickyHeader();
const search = new Search();

if (module.hot) {
  module.hot.accept();
}
