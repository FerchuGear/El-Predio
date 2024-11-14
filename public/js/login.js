
<<<<<<< HEAD
require('dotenv').config();

const SUPABASE_URL = process.env.SUPABASE_URL;
const SUPABASE_ANON_KEY = process.env.SUPABASE_ANON_KEY;
=======
import { SUPABASE_URL, SUPABASE_ANON_KEY } from './config.js';
>>>>>>> c6596b4 (Todo (o casi) lo de frontend)

async function loginUser(email, password) {
    try {
        const response = await fetch(`${SUPABASE_URL}/auth/v1/token?grant_type=password`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'apikey': SUPABASE_ANON_KEY,
                'Authorization': `Bearer ${SUPABASE_ANON_KEY}`
            },
            body: JSON.stringify({ email, password })
        });

        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.error_description || data.message);
        }

<<<<<<< HEAD
        console.log('Login successful:', data);
        return data; // Contiene el token y otros datos de la sesión
=======
        
        
        console.log('Login successful:', data);
        return data; 
>>>>>>> c6596b4 (Todo (o casi) lo de frontend)
    } catch (error) {
        console.error('Error logging in:', error.message);
    }
}

<<<<<<< HEAD
=======
async function login() {
    const email = document.getElementById('logemail').value;
    const password = document.getElementById('logpass').value;
    await loginUser(email, password);
}
>>>>>>> c6596b4 (Todo (o casi) lo de frontend)
