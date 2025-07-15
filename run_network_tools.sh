#!/bin/bash

read -p "Enter IP address: " ip_address

cmd1="netstat -an | grep $ip_address"

echo "Executing commands for IP: $ip_address"
eval $cmd1
