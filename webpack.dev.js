const path = require('path');
const {merge} = require('webpack-merge');
const common = require('./webpack.common');
const site = require('./vendor/cl/site/webpack.site.dev');
const {WebpackManifestPlugin} = require('webpack-manifest-plugin');

module.exports = merge(common, site, {
	output: {
		path: path.resolve(__dirname, 'cl/dist'),
	},
	plugins: [
		new WebpackManifestPlugin({
			fileName: 'manifest.dev.json'
		})
	]
});
