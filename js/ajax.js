$(function() {
    
    // Debug only
    $('#frmLogin').click(function() {
        
    });
    
    // Prevent submission of forms by clicking submit button
    $('form').submit(function() {
        event.preventDefault();
        return false;
    });
    
    // Submit login form
    $('#frmLogin').submit(function() {
        
        loader("show");
        
        $('#frmLogin input').prop('disabled', true);
        $('#wrapper').css('filter', 'brightness(0.8)');
        $('#frmLogin p.failed').slideUp();
        
        var user = $('#username').val();
        var pass = $('#password').val();
        var data = {'user': user, 'pass': pass};
        
        $.ajax({
            type: 'POST',
            url: '../scripts/login.php',
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data: {'data': data},
            success: function(data) {
                
                loader("hide");
                
                if(data.success == true) {
                    
                    // Reset form in case the user uses the back button
                    $('#frmLogin input').prop('disabled', false);
                    $('#wrapper').css('filter', 'brightness(1)');
                    
                    // Success, redirect to account page
                    window.location.href = "account.html";
                    
                } else {
                    
                    // Failed, display alert
                    $('#frmLogin input').prop('disabled', false);
                    $('#frmLogin input[type=text], #frmLogin input[type=password]').css('border', '1px solid #a51212');
                    $('#wrapper').css('filter', 'brightness(1)');
                    $('#frmLogin p.failed').slideDown();
                    
                }
            },
            error: function(e) {
                
                // Error
                console.log(e.message);
                
            }
        });
        
    });
    
    // Create account - course search
    $('#srchCourse').click(function() {
        
        loader("show");
        
        $('#frmCreate input').prop('disabled', true);
        $('#wrapper').css('filter', 'brightness(0.8)');
        $('#courseresults p.failed, #srchFailed').slideUp();
        $('#createSubmit').slideUp();
        
        var term = $('#course').val();
        var data = {'term': term};
        
        $.ajax({
            type: 'POST',
            url: '../scripts/srchcourse.php',
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            data: {'data': data},
            success: function(data) {
                
                loader("hide");
                
                if(data) {
                    
                    // Reset styles
                    $('#frmCreate input').prop('disabled', false);
                    $('#wrapper').css('filter', 'brightness(1)');
                    
                    // Clear previous list
                    $('#resultcontainer').empty();
                    
                    var result;
                    
                    // Populate list with results
                    $.each(data.results, function() {

                        result = '<li id="course-' + this.id + '"><p class="courseTitle">' + this.title + '</p><p class="courseDpt">' + this.department + '</p><div class="courseSelect"></div>';

                        $('#resultcontainer').append(result);
                        
                    });
                    
                    // Show the result list
                    $('#courseresults').slideDown();
                    
                    // Course selection
                    $('#resultcontainer li').click(function() {

                        // Remove old selection
                        $('#courseresults li.active').css('background', '#d6eeff');
                        $('#courseresults li.active div.courseSelect').css('background', 'none');
                        $('#courseresults li.active div.courseSelect').css('border', '2px solid #9ecced');
                        $('#courseresults li.active').removeClass('active');

                        // Style new selection
                        $(this).css('background', '#87cbff');
                        $(this).addClass('active');
                        $('#courseresults li.active div.courseSelect').css('background', '#5ea4d6');
                        $('#courseresults li.active div.courseSelect').css('border', '2px solid #a3d8ff');

                        // Show submit button
                        // No need to hide again because user cannot deselect an option
                        // Only hide when Find Course button is clicked again
                        $('#createSubmit').slideDown();

                    });
                    
                } else {
                    
                    // Failed, display alert
                    $('#frmCreate input').prop('disabled', false);
                    $('#wrapper').css('filter', 'brightness(1)');
                    $('#srchFailed').slideDown();
                    
                }
            },
            error: function(e) {
                
                // Error
                $('#frmCreate input').prop('disabled', false);
                $('#wrapper').css('filter', 'brightness(1)');
                $('#srchFailed').slideDown();
                
                console.log(e.message);
                
            }
        });
        
    });
    
});