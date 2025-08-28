#!/bin/bash

echo "Starting CloudHost Pro Development Server..."
echo

# Check if PHP is installed
if ! command -v php &> /dev/null; then
    echo "Error: PHP is not installed or not in PATH"
    echo "Please install PHP and try again"
    exit 1
fi

# Make the script executable
chmod +x serve.php

# Start the server with optional port argument
php serve.php "$1"
