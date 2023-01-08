// This file is created automatically by cl-installer
// Do not edit!		
const {merge} = require('webpack-merge');
const site = require('./vendor/cl/site/webpack.site.common');

const console = require('./vendor/cl/console/webpack.common');
const course = require('./vendor/cl/course/webpack.common');
const grades = require('./vendor/cl/grades/webpack.common');
const review = require('./vendor/cl/review/webpack.common');
const step = require('./vendor/cl/step/webpack.common');
const users = require('./vendor/cl/users/webpack.common');

module.exports = merge(site,
    console,
    course,
    grades,
    review,
    step,
    users
);
