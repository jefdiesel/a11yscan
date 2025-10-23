#!/bin/bash
cd /home/dh_62gw2k/a11yscan.xyz
git pull origin main
echo "[$(date '+%Y-%m-%d %H:%M:%S')] Deployed from GitHub" >> deploy.log
