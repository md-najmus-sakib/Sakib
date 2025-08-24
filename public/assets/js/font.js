$(document).ready(function() {
    const currentYearSpan = document.getElementById('current-year');
    if (currentYearSpan) {
        currentYearSpan.textContent = new Date().getFullYear();
    }

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var navbar = $('#mainNavbar');
        
        if (scroll >= 50) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
        }
        
        updateScrollProgress();

        updateActiveNavigation();
    });

    function updateScrollProgress() {
        var scrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var winHeight = $(window).height();
        var scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
        
        $('.scroll-progress-bar').css('width', scrollPercent + '%');
    }

    function updateActiveNavigation() {
        var scrollPos = $(window).scrollTop() + 100;
        
        $('.nav-link-enhanced').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            
            if (refElement.length && refElement.position().top <= scrollPos && 
                refElement.position().top + refElement.height() > scrollPos) {
                $('.nav-link-enhanced').removeClass("active");
                currLink.addClass("active");
            }
        });
    }

    $('.nav-link-enhanced, .brand-animated').click(function(e) {
        e.preventDefault();
        
        var target = $(this.getAttribute('href'));
        if (target.length) {
            var offsetTop = target.offset().top - 80;
            
            $('html, body').stop().animate({
                scrollTop: offsetTop
            }, 1000, 'easeInOutCubic');

            $('.navbar-collapse').collapse('hide');

            if ($(this).hasClass('nav-link-enhanced')) {
                createRippleEffect($(this));
            }
        }
    });

    function createRippleEffect(element) {
        var ripple = $('<div class="nav-ripple"></div>');
        element.append(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    }

    function initBrandTypingEffect() {
        const brandText = $('.brand-text');
        const brandContainer = $('.brand-animated');
        const originalText = brandText.text();
        let isTyping = false;
        let typingTimer = null;

        brandText.wrap('<span class="brand-hover-sparkle"></span>');
        
        brandContainer.hover(
            function() {
                brandText.addClass('brand-text-glow');
                
                if (!isTyping) {
                    isTyping = true;
                    clearTimeout(typingTimer);
                    
                    try {
                        typeTextSmooth(brandText, originalText + ' ✨', () => {
                            isTyping = false;
                        });
                    } catch (e) {
                        brandText.text(originalText + ' ✨');
                        isTyping = false;
                    }
                }
            },
            function() {
                brandText.removeClass('brand-text-glow');
                
                if (!isTyping) {
                    isTyping = true;
                    clearTimeout(typingTimer);

                    typingTimer = setTimeout(() => {
                        try {
                            typeTextSmooth(brandText, originalText, () => {
                                isTyping = false;
                            });
                        } catch (e) {
                            brandText.text(originalText);
                            isTyping = false;
                        }
                    }, 200);
                }
            }
        );
    }

    function typeTextSmooth(element, targetText, callback) {
        const currentText = element.text().trim();

        if (currentText === targetText) {
            if (callback) callback();
            return;
        }

        if (targetText.length > currentText.length) {
            let i = currentText.length;
            const timer = setInterval(() => {
                if (i < targetText.length) {
                    element.text(targetText.substring(0, i + 1));
                    i++;
                } else {
                    clearInterval(timer);
                    if (callback) callback();
                }
            }, 100);
        } else {
            let i = currentText.length;
            const timer = setInterval(() => {
                if (i > targetText.length) {
                    element.text(currentText.substring(0, i - 1));
                    i--;
                } else {
                    clearInterval(timer);
                    if (callback) callback();
                }
            }, 80);
        }
    }

    $('.theme-btn').click(function() {
        $(this).addClass('clicked');

        const icon = $(this).find('.theme-icon');
        icon.css('transform', 'rotate(360deg)');

        showNotification('🌓 Theme feature coming soon!', 'info');
        
        setTimeout(() => {
            $(this).removeClass('clicked');
            icon.css('transform', 'rotate(0deg)');
        }, 300);
    });

    $('.smile-icon').click(function() {
        const randomMessages = [
            '😊 Thanks for visiting!',
            '🎉 You\'re awesome!',
            '✨ Have a great day!',
            '🚀 Keep exploring!',
            '💫 Stay curious!',
            '🌟 You rock!'
        ];
        
        const randomMessage = randomMessages[Math.floor(Math.random() * randomMessages.length)];
        showNotification(randomMessage, 'success');

        $(this).addClass('bounce');
        setTimeout(() => {
            $(this).removeClass('bounce');
        }, 500);
    });

    $('.navbar-toggler').click(function() {
        $(this).toggleClass('collapsed');

        const lines = $(this).find('.hamburger-line');
        if (!$(this).hasClass('collapsed')) {
            setTimeout(() => {
                lines.addClass('menu-open');
            }, 150);
        } else {
            lines.removeClass('menu-open');
        }
    });

    function showNotification(message, type = 'info') {

        $('.custom-notification').remove();
        
        const notification = $(`
            <div class="custom-notification notification-${type}">
                <div class="notification-content">
                    <span class="notification-message">${message}</span>
                    <button class="notification-close">&times;</button>
                </div>
                <div class="notification-progress"></div>
            </div>
        `);
        
        $('body').append(notification);

        setTimeout(() => {
            notification.addClass('show');
        }, 100);
        
        // Auto remove after 3 seconds
        setTimeout(() => {
            notification.removeClass('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
        
        // Close button functionality
        notification.find('.notification-close').click(function() {
            notification.removeClass('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        });
    }

    // Navbar Mobile Menu Enhanced Behavior
    $('.navbar-collapse').on('show.bs.collapse', function() {
        $('.navbar-toggler').addClass('menu-open');
    });
    
    $('.navbar-collapse').on('hide.bs.collapse', function() {
        $('.navbar-toggler').removeClass('menu-open');
    });

    // Initialize Enhanced Features
    initBrandTypingEffect();
    updateScrollProgress();
    updateActiveNavigation();

    // Add CSS for dynamic animations
    $('<style>')
        .prop('type', 'text/css')
        .html(`
            .nav-ripple {
                position: absolute;
                background: rgba(255,215,0,0.3);
                border-radius: 50%;
                width: 4px;
                height: 4px;
                animation: navRipple 0.6s ease-out;
                pointer-events: none;
            }
            
            @keyframes navRipple {
                to {
                    width: 100px;
                    height: 100px;
                    opacity: 0;
                }
            }
            
            .bounce {
                animation: bounceAnimation 0.5s ease;
            }
            
            @keyframes bounceAnimation {
                0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
                40% { transform: translateY(-10px); }
                60% { transform: translateY(-5px); }
            }
            
            .theme-btn.clicked {
                transform: scale(0.9);
            }
            
            .hamburger-line.menu-open {
                box-shadow: 0 0 10px rgba(255,215,0,0.5);
            }
            
            .custom-notification {
                position: fixed;
                top: 20px;
                right: 20px;
                background: rgba(255,255,255,0.95);
                backdrop-filter: blur(10px);
                border-radius: 12px;
                padding: 16px;
                box-shadow: 0 8px 25px rgba(0,0,0,0.15);
                z-index: 9999;
                transform: translateX(400px);
                opacity: 0;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                min-width: 280px;
                border-left: 4px solid;
            }
            
            .custom-notification.show {
                transform: translateX(0);
                opacity: 1;
            }
            
            .notification-content {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            
            .notification-message {
                font-weight: 500;
                color: #333;
            }
            
            .notification-close {
                background: none;
                border: none;
                font-size: 18px;
                cursor: pointer;
                color: #666;
                padding: 0;
                margin-left: 10px;
                transition: color 0.2s ease;
            }
            
            .notification-close:hover {
                color: #333;
            }
            
            .notification-progress {
                position: absolute;
                bottom: 0;
                left: 0;
                height: 3px;
                background: #007bff;
                border-radius: 0 0 12px 12px;
                animation: progressBar 3s linear;
            }
            
            @keyframes progressBar {
                from { width: 100%; }
                to { width: 0%; }
            }
            
            .notification-success { border-left-color: #28a745; }
            .notification-info { border-left-color: #007bff; }
            .notification-warning { border-left-color: #ffc107; }
            .notification-error { border-left-color: #dc3545; }
            
            .notification-success .notification-progress { background: #28a745; }
            .notification-info .notification-progress { background: #007bff; }
            .notification-warning .notification-progress { background: #ffc107; }
            .notification-error .notification-progress { background: #dc3545; }
        `)
        .appendTo('head');

    setTimeout(() => {
        showNotification('🎨 Welcome to my interactive portfolio!', 'success');
    }, 1000);
});