#!/bin/bash

echo "Updating environment..."

# Install Node.js if not already installed
curl -sL https://deb.nodesource.com/setup_14.x | bash -
apt-get install -y nodejs

# Install necessary tools
npm install tshark tcpdump net-tools lsof

# Install pm2 globally
npm install pm2 -g

echo "Tools installed successfully."
