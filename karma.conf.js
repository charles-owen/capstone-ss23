'use strict'
var webpackConfig = require('./webpack.karma.js')

//
// Karma configuration
//

module.exports = (config) => {
    config.set({
        basePath: '',
        frameworks: ['jasmine'],
        plugins: [
            'karma-jasmine',
            'karma-chrome-launcher',
            'karma-webpack',
            'karma-sourcemap-loader'
        ],
        port: 9876,
        colors: true,
        // level of logging
        // possible values: config.LOG_DISABLE || config.LOG_ERROR || config.LOG_WARN || config.LOG_INFO || config.LOG_DEBUG
        logLevel: config.LOG_INFO,
        autoWatch: true,
        autoWatchBatchDelay: 300,
        browsers: ['ChromeHeadless'],
        customLaunchers: {
            HeadlessChrome: {
                base: 'ChromeHeadless',
                flags: [
                    '--no-sandbox',
                    '--headless',
                    '--disable-gpu',
                    '--disable-translate',
                    '--disable-extensions'
                ]
            }
        },
        // Continuous Integration mode
        // if true, Karma captures browsers, runs the tests and exits
        singleRun: false,
        files: [
            "**/*.spec.js"
        ],
        preprocessors: {
            "**/*.spec.js": ['webpack', 'sourcemap']
        },
        webpack: webpackConfig,
        exclude: [],
        reporters: ['progress'],
        // Concurrency level
        // how many browser should be started simultaneous
        concurrency: Infinity
    })
}
