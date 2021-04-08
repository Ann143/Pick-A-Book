$(document).ready(function(){
    var working = false;

    $('.login').on('submit'), function(e){
        e.preventDefault();
        if (working) return;
        working = true;
        var $this = $(this),
            $state = $this.find('button >  #btn');
        $this.addClass('loading');
        $state.html('Authenticating');
        setTimeout(function(){
            $this.addClass('ok');
            $state.html('Welcome back');
            setTimeout(function(){
                $state.html('Log in');
                $this.removeClass('ok loading');
            working = false;
            })
        })
    }
});

