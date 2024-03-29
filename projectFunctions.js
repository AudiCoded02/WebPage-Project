function validateForm() {
    // Getting form field values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    
    // Simple email validation using regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    // Check if name field is empty
    if (name == "") {
        alert("Please enter your name.");
        return false;
    }
    
    // Check if email field is empty and validate format
    if (email == "") {
        alert("Please enter your email.");
        return false;
    } else if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }
    
    // Check if message field is empty
    if (message == "") {
        alert("Please enter your message.");
        return false;
    }
    
    // If all checks pass, return true to allow form submission
    return true;
}
function clearSearch() {
    document.getElementById('searchBar').value = '';
    searchTutorials();
}

function searchTutorials() {
    var filter = document.getElementById('searchBar').value.toUpperCase();
    var tutorials = document.getElementById('tutorials');
    var items = tutorials.getElementsByClassName('tutorialsItem');

    for (var i = 0; i < items.length; i++) {
        var title = items[i].getElementsByTagName('h3')[0];
        var description = items[i].getElementsByTagName('p')[0];
        
        var searchText = title.textContent || title.innerText;
        searchText += ' ' + (description.textContent || description.innerText);

        if (searchText.toUpperCase().indexOf(filter) > -1) {
            items[i].style.display = '';
        } else {
            items[i].style.display = 'none';
        }
    }
}