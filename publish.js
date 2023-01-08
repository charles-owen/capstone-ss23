// This file is created automatically by cl-installer
// Do not edit!		
const path = require('path');

module.exports = {
	root: path.resolve(__dirname),
	components: {
        site: require('./vendor/cl/site/publish'),
        console: require('./vendor/cl/console/publish'),
        course: require('./vendor/cl/course/publish'),
        grades: require('./vendor/cl/grades/publish'),
        review: require('./vendor/cl/review/publish'),
        step: require('./vendor/cl/step/publish'),
        users: require('./vendor/cl/users/publish')
    }
}
