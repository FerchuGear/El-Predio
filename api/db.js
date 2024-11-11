
const supabaseUrl = 'https://ttwasvpagtcvpelqkhqo.supabase.co';
const supabaseAnonKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InR0d2FzdnBhZ3RjdnBlbHFraHFvIiwicm9sZSI6ImFub24iLCJpYXQiOjE3Mjg5OTAzNTgsImV4cCI6MjA0NDU2NjM1OH0.TlNeGg97jKnk_oHErD4NAm2y7moTmdAFBmqHBx8dgBk';

import { createClient } from 'https://cdn.jsdelivr.net/npm/@supabase/supabase-js/+esm'; 
const supabase = createClient(supabaseUrl, supabaseAnonKey);

export { supabase };