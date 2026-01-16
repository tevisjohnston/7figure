document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu Logic
    var toggle = document.getElementById('mobile-menu-toggle');
    var menu = document.getElementById('mobile-menu');
  
    if (toggle && menu) {
      toggle.addEventListener('click', function () {
        var isOpen = menu.classList.contains('hidden');
        menu.classList.toggle('hidden');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      });
    }
    // Lead Magnet Form Logic
    var leadMagnetForm = document.getElementById('lead-magnet-form');
    if (leadMagnetForm) {
        leadMagnetForm.addEventListener('submit', async function (e) {
          e.preventDefault();

          const name = document.getElementById('lead-magnet-name').value;
          const email = document.getElementById('lead-magnet-email').value;
          const messageDiv = document.getElementById('lead-magnet-message');
          const button = this.querySelector('button');
      
            button.disabled = true;
            button.textContent = 'Sending...';
            messageDiv.textContent = '';
      
            try {
              const response = await fetch(themeData.apiUrl, {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json',
                  },
                  body: JSON.stringify({
                      name: name,
                      email: email
                  })
              });
              
              const data = await response.json();
      
              if (response.ok) {
                messageDiv.style.color = '#059669';
                messageDiv.textContent = '✓ ' + data.message;
                document.getElementById('lead-magnet-form').reset();
            } else {
                messageDiv.style.color = '#ef4444';
                messageDiv.textContent = '✗ ' + data.message;
            }
        } catch (error) {
            messageDiv.style.color = '#ef4444';
            messageDiv.textContent = '✗ Error submitting form. Please try again.';
            console.error('Error:', error);
            } finally {
                button.disabled = false;
                button.textContent = 'Blueprint to $5k/Month';
            }
        });
    }
});
