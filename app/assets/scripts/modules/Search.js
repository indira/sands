import $ from "jquery";

class Search {
  // 1. describe and create/initiate our object
  constructor() {
    this.addSearchHTML();
    this.resultsDiv = $("#search-overlay__results");
    this.openButton = $(".js-search-trigger");
    this.closeButton = $(".search-overlay__close");
    this.searchOverlay = $(".search-overlay");
    this.searchField = $("#search-term");
    this.events();
    this.isOverlayOpen = false;
    this.isSpinnerVisible = false;
    this.previousValue;
    this.typingTimer;
  }

  // 2. events
  events() {
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on("click", this.closeOverlay.bind(this));
    $(document).on("keydown", this.keyPressDispatcher.bind(this));
    this.searchField.on("keyup", this.typingLogic.bind(this));
  }

  // 3. methods (function, action...)
  typingLogic() {
    if (this.searchField.val() != this.previousValue) {
      clearTimeout(this.typingTimer);

      if (this.searchField.val()) {
        if (!this.isSpinnerVisible) {
          this.resultsDiv.html('<div class="spinner-loader"></div>');
          this.isSpinnerVisible = true;
        }
        this.typingTimer = setTimeout(this.getResults.bind(this), 750);
      } else {
        this.resultsDiv.html("");
        this.isSpinnerVisible = false;
      }
    }

    this.previousValue = this.searchField.val();
  }

  getResults() {
    $.getJSON(sandsData.root_url + "/wp-json/wp/v2/posts?search=" + this.searchField.val()),
      $.getJSON(sandsData.root_url + "/wp-json/sands/v1/search?term=" + this.searchField.val(), results => {
        this.resultsDiv.html(`
      <div class="page-section">
      <div class="wrapper">
      <div class="row">
        <div class="row__large-4 row--margin">
          <h2 class="search-overlay__section-title">General Information</h2>
          ${results.generalInfo.length ? '<ul class="link-list min-list">' : `<p>No general information matches that search.</p>`}
          ${results.generalInfo.map(item => `<li><a href="${item.permalink}">${item.title}</a>${item.postType == "post" ? ` by ${item.authorName}` : " "}</li>`).join("")}
          ${results.generalInfo.length ? "</ul>" : ""}
        </div>
        <div class="row__large-4 row--margin row--equal-height-at-large">
          <h2 class="search-overlay__section-title">Programs</h2>
          ${results.programs.length ? '<ul class="link-list min-list">' : `<p>No programs matches that search. <a href='${sandsData.root_url}/programs/'>View all programs</a></p>`}
          ${results.programs.map(item => `<li><a href="${item.permalink}">${item.title}</a></li>`).join("")}
          ${results.programs.length ? "</ul>" : ""}
          <h2 class="search-overlay__section-title">Professor</h2>
          ${results.professors.length ? '<ul class="professor-card">' : `<p>No programs matches that search.</p>`}
          ${results.professors
            .map(
              item => `
              <li class="professor-card__list-item">
                <a class="professor-card" href="${item.link}">
                  <img class="professor-card__image" src="${item.image}">
                  <span class="professor-card__name">${item.title}</span>
                </a>
              </li>
          `
            )
            .join("")}
          ${results.professors.length ? "</ul>" : ""}
        </div>
        <div class="row__large-4 row--margin">
          <h2 class="search-overlay__section-title">Events</h2>
          ${results.events.length ? "" : `<p>No events matches that search. <a href='${sandsData.root_url}/events/'>View all events</a></p>`}
          ${results.events
            .map(
              item => `
          
          <div class="event-summary">
          <a class="event-summary__date event-summary--blue event-summary--center" href="${item.permalink}">
            <span class="event-summary__month">${item.month}
            </span>
            <span class="event-summary__day">${item.day}</span>  
          </a>
          <h5 class="event-summary__title"><a href="${item.permalink}">${item.title}</a></h5>
          <p>${item.description}<a href="${item.permalink}" class="nu gray">Learn more</a>
          </p>
        </div>
          `
            )
            .join("")}
        </div>
      </div>
      </div>
      </div>
      `);
        this.isSpinnerVisible = false;
      });
  }

  keyPressDispatcher(e) {
    if (e.keyCode == 83 && !this.isOverlayOpen && !$("input, textarea").is(":focus")) {
      this.openOverlay();
    }

    if (e.keyCode == 27 && this.isOverlayOpen) {
      this.closeOverlay();
    }
  }

  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
    $("body").addClass("body-no-scroll");
    this.searchField.val("");
    setTimeout(() => this.searchField.focus(), 301);
    console.log("our open method just ran!");
    this.isOverlayOpen = true;
  }

  closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active");
    $("body").removeClass("body-no-scroll");
    console.log("our close method just ran!");
    this.isOverlayOpen = false;
  }

  addSearchHTML() {
    $("body").append(`
    <div class="search-overlay">
    <div class="search-overlay__top">
    <div class="container"> 
      <div class="generic-content-container">
          <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
          <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
          <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
      </div>
    </div>
    </div>
    <div class="container">
      <div id="search-overlay__results">
      </div>
    </div>
  </div>
    
    `);
  }
}

export default Search;
