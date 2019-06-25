// Webpack - Home Configuration (Development)
'use strict';

// Module Imports
const path = require('path');
const merge = require('webpack-merge');
const commonConfig = require('./webpack.common.js');
const developmentConfig = require('./webpack.development.js');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const extractSass = new ExtractTextPlugin({
  filename: '../css/home.css',
});
const {
  CleanWebpackPlugin,
} = require('clean-webpack-plugin');
const {
  InjectManifest,
} = require('workbox-webpack-plugin');

// Module Exports
module.exports = merge(commonConfig, developmentConfig, {
  // Sources
  entry: [
    './js/index.js',
    './js/home/home.js',
  ],
  output: {
    filename: 'home.js',
    path: path.resolve(__dirname, './js'),
  },
  plugins: [
    // SASS - CSS
    extractSass,
    // Pulizia
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: [
        './css/home.css',
        './js/home.js',
      ],
    }),
    // PWA
    new InjectManifest({
      swSrc: path.join('./js', 'service-worker.js'),
      swDest: path.join('./', 'service-worker-dev.js'),
      importsDirectory: './lib/workbox',
      globPatterns: [
        'css/**/*',
        'img',
        'js/home.js',
        'js/refresh.js',
        'js/install.js',
        'php',
      ],
    }),
  ],
});
