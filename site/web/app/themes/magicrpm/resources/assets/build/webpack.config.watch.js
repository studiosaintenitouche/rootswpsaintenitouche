const webpack = require('webpack');
const BrowserSyncPlugin = require('browsersync-webpack-plugin');
const WriteFilePlugin = require('write-file-webpack-plugin');

const config = require('./config');

module.exports = {
  devServer: {
    outputPath: config.paths.dist
  },
  output: {
    pathinfo: true,
    publicPath: config.proxyUrl + config.publicPath,
  },
  devtool: '#cheap-module-source-map',
  stats: false,
  plugins: [
    new webpack.optimize.OccurrenceOrderPlugin(),
    new webpack.HotModuleReplacementPlugin(),
    new webpack.NoEmitOnErrorsPlugin(),
    new BrowserSyncPlugin({
      target: config.devUrl,
      proxyUrl: config.proxyUrl,
      watch: config.watch,
      delay: 500,
    }),
    new WriteFilePlugin(),
  ],
};