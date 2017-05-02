module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    compass: {
      dist: {
        options: {
          sassDir: 'sass',
          cssDir: 'css'
        }
      }
    },
    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['compass']
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default',['watch']);
}

modernizr: {
  dist: {
  "crawl": false,
  "customTests": [],
  "dest": "javascript/modernizr-output.js",
  "tests": [
    "input",
    "svg",
    "backgroundcliptext",
    "bgpositionshorthand",
    "bgpositionxy",
    [
      "bgrepeatspace",
      "bgrepeatround"
    ],
    "backgroundsize",
    "borderimage",
    "ellipsis",
    "generatedcontent",
    "lastchild",
    "mediaqueries",
    "nthchild",
    "csspseudotransitions",
    "cssreflections",
    "cssremunit",
    "textalignlast",
    "csstransitions",
    "apng",
    "svgasimg"
  ],
    "options": [
      "setClasses"
    ],
    "uglify": true
  }
}