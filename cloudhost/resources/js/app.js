import './bootstrap';

// Add to Cart functionality for WHMCS integration
class CartManager {
    constructor() {
        this.cartEndpoint = 'https://www.cloudhost.bg/members/cart.php';
        this.init();
    }

    init() {
        // Add event listeners for cart buttons
        this.bindCartEvents();
    }

    bindCartEvents() {
        // Listen for clicks on elements with cart-related classes
        document.addEventListener('click', (e) => {
            // Check for add to cart buttons
            if (e.target.matches('[data-cart-action="add"]') || 
                e.target.closest('[data-cart-action="add"]')) {
                e.preventDefault();
                const button = e.target.matches('[data-cart-action="add"]') ? 
                    e.target : e.target.closest('[data-cart-action="add"]');
                this.handleAddToCart(button);
            }
        });
    }

    async addToCart(params) {
        try {
            const url = new URL(this.cartEndpoint);
            
            // Add action parameter to URL
            url.searchParams.set('a', 'add');

            // Make the request with the new POST format
            const response = await fetch(url.toString(), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                credentials: 'include', // Include cookies for WHMCS session
                body: this.buildFormData(params)
            });

            if (response.ok) {
                return {
                    success: true,
                    message: 'Продуктът е добавен в количката успешно!',
                    redirectUrl: response.url
                };
            } else {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
        } catch (error) {
            console.error('Cart error:', error);
            return {
                success: false,
                message: 'Възникна грешка при добавянето в количката. Моля, опитайте отново.'
            };
        }
    }

    buildFormData(params) {
        const formData = new URLSearchParams();
        
        // Add token (you may need to get this from your backend or a meta tag)
        const token = this.getToken();
        if (token) {
            formData.append('token', token);
        }
        
        // Domain option (register or transfer)
        formData.append('domainoption', params.domain || 'register');
        
        // Domain array format: domains[]=domainname
        if (params.query) {
            formData.append('domains[]', params.query);
            
            // Domain registration period: domainsregperiod[domainname]=1
            formData.append(`domainsregperiod[${params.query}]`, params.regPeriod || '1');
        }
        
        // Additional parameters
        if (params.productId) {
            formData.append('pid', params.productId);
        }
        if (params.billingcycle) {
            formData.append('billingcycle', params.billingcycle);
        }
        if (params.configoptions) {
            formData.append('configoptions', params.configoptions);
        }
        
        return formData;
    }

    getToken() {
        // Try to get token from meta tag first
        const tokenMeta = document.querySelector('meta[name="whmcs-token"]');
        if (tokenMeta) {
            return tokenMeta.getAttribute('content');
        }
        
        // Try to get from window object
        if (window.whmcsToken) {
            return window.whmcsToken;
        }
        
        // Default token (you should replace this with a proper token)
        return 'ef7d7dfc51bdbd40aadeab642cdf2255c9edb28e';
    }

    async handleAddToCart(button) {
        // Show loading state
        const originalContent = button.innerHTML;
        button.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Добавя...';
        button.disabled = true;

        try {
            // Extract parameters from button data attributes
            const params = {
                productId: button.dataset.productId || '64',
                domainSelect: button.dataset.domainSelect || '1',
                domain: button.dataset.domain || null,
                query: button.dataset.query || null,
                billingcycle: button.dataset.billingcycle || null,
                configoptions: button.dataset.configoptions || null
            };

            const result = await this.addToCart(params);

            if (result.success) {
                // Show success message
                this.showNotification(result.message, 'success');
                
                // If there's a redirect URL, redirect after a short delay
                if (result.redirectUrl) {
                    setTimeout(() => {
                        window.location.href = result.redirectUrl;
                    }, 1500);
                }
            } else {
                this.showNotification(result.message, 'error');
            }
        } catch (error) {
            console.error('Add to cart error:', error);
            this.showNotification('Възникна грешка при добавянето в количката.', 'error');
        } finally {
            // Restore button state
            button.innerHTML = originalContent;
            button.disabled = false;
        }
    }

    showNotification(message, type = 'info') {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full ${
            type === 'success' ? 'bg-green-500 text-white' :
            type === 'error' ? 'bg-red-500 text-white' :
            'bg-blue-500 text-white'
        }`;
        
        notification.innerHTML = `
            <div class="flex items-center gap-3">
                <i class="fa-solid ${
                    type === 'success' ? 'fa-check-circle' :
                    type === 'error' ? 'fa-exclamation-circle' :
                    'fa-info-circle'
                }"></i>
                <span>${message}</span>
                <button onclick="this.parentElement.parentElement.remove()" class="ml-2 text-white/80 hover:text-white">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
        `;

        document.body.appendChild(notification);

        // Animate in
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);

        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 300);
        }, 5000);
    }

    // Public method to add domain to cart
    async addDomainToCart(domain, action = 'register', regPeriod = '1') {
        const params = {
            productId: '64',
            domain: action,
            query: domain,
            regPeriod: regPeriod
        };
        
        return await this.addToCart(params);
    }

    // Public method to add product to cart
    async addProductToCart(productId, options = {}) {
        const params = {
            productId: productId,
            ...options
        };
        
        return await this.addToCart(params);
    }

    // Method to add multiple domains at once
    async addMultipleDomainsToCart(domains, action = 'register', regPeriod = '1') {
        const formData = new URLSearchParams();
        
        // Add token
        const token = this.getToken();
        if (token) {
            formData.append('token', token);
        }
        
        // Domain option
        formData.append('domainoption', action);
        
        // Add all domains
        domains.forEach(domain => {
            formData.append('domains[]', domain);
            formData.append(`domainsregperiod[${domain}]`, regPeriod);
        });
        
        try {
            const url = new URL(this.cartEndpoint);
            url.searchParams.set('a', 'add');
            
            const response = await fetch(url.toString(), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                credentials: 'include',
                body: formData
            });

            if (response.ok) {
                return {
                    success: true,
                    message: `${domains.length} домейна са добавени в количката успешно!`,
                    redirectUrl: response.url
                };
            } else {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
        } catch (error) {
            console.error('Cart error:', error);
            return {
                success: false,
                message: 'Възникна грешка при добавянето на домейните в количката.'
            };
        }
    }
}

// Initialize cart manager when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    window.cartManager = new CartManager();
});

// Export for use in other modules
export default CartManager;
