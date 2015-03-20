#!/bin/bash
echo "=== OpenClonk 6.0 ===";
echo "Installing dependencies";
sudo apt-get --yes --force-yes install git xterm build-essential cmake imagemagick libboost-dev libboost-regex-dev libfreetype6-dev libgl1-mesa-dev libglew-dev libgtk2.0-dev libjpeg-dev libpng-dev libsdl1.2-dev libsdl-mixer1.2-dev libupnp-dev libxrandr-dev x11proto-core-dev zlib1g-dev;
echo "Cloning repo";
git clone https://github.com/openclonk/openclonk.git;
echo "Changing directory";
cd "openclonk";
echo "Switching to 6.0 tag";
git checkout v6.0;
echo "runing cmake"
cmake .
make
make install