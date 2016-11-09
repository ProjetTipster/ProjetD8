(function($, Drupal, drupalSettings){
    $('#edit-entity-follower').hide('true');
    $('#edit-entity-tipster').hide('true');

    $('#edit-profile-utilisateur-follower').click(function () {
        $('#edit-entity-follower').show('true');
        $('#edit-entity-tipster').hide('true');
    });

    $('#edit-profile-utilisateur-tipster').click(function () {
        $('#edit-entity-follower').hide('true');
        $('#edit-entity-tipster').show('true');
    });

})(jQuery, Drupal, drupalSettings);
