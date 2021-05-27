// 3rd party packages from NPM
import $ from 'jquery';
//import slick from 'slick-carousel';

// Our modules / classes
import MobileMenu from './modules/MobileMenu'
import Search from './modules/Search'

// Instantiate a new object using our modules/classes
const mobileMenu = new MobileMenu();
const search = new Search();

//Allow new JS and CSS to load in browser without a traditional page
if (module.hot) {
    module.hot.accept();
}