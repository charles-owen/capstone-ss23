const path = require('path');
const {merge} = require('webpack-merge');
const common = require('./webpack.common.js');
const site = require('./vendor/cl/site/webpack.site.prod');
const {WebpackManifestPlugin} = require('webpack-manifest-plugin');

module.exports = merge(common, site, {
	output: {
		path: path.resolve(__dirname, 'cl/dist')
	},
	plugins: [
		new WebpackManifestPlugin({
			fileName: 'manifest.min.json'
		})
	]
});
