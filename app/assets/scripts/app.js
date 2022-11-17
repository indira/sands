import "../styles/styles.css";
import MobileMenu from "./modules/MobileMenu";
import StickyHeader from "./modules/StickyHeader";

let mobileMenu = new MobileMenu();
let stickyHeader = new StickyHeader();

if (module.hot) {
  module.hot.accept();
}
