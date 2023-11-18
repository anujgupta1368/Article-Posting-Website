document.addEventListener("DOMContentLoaded", function () {
    // Get the search button and search box
    var searchButton = document.getElementById("search-button");
    var searchBox = document.getElementById("search-box");

    // Add an event listener to the search button
    searchButton.addEventListener("click", function () {
        // Get the value from the search box and convert to lowercase
        var searchTerm = searchBox.value.toLowerCase();

        // Split the search term into individual words
        var searchWords = searchTerm.split(" ");

        // Get all the articles
        var articles = document.querySelectorAll(".card");

        // Loop through each article
        articles.forEach(function (article) {
            // Get the article title
            var title = article.querySelector(".card-title").innerText.toLowerCase();

            // Check if all search words are present in the title (in any order)
            var allWordsPresent = searchWords.every(function (word) {
                return title.includes(word);
            });

            // Show or hide the article based on the search result
            if (allWordsPresent) {
                article.style.display = "block";
            } else {
                article.style.display = "none";
            }
        });
    });
});
