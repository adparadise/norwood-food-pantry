var grunt = require('grunt');
var fs = require('fs');

grunt.initConfig({
    sass: {
        dist: {
            files: {
                'temp/foodpantry.css': 'source/css/foodpantry.scss',
                'temp/colors.css': 'source/css/colors.scss'
            }
        }
    },
    whitespace: {
        dist: {
            files: {
                'temp/foodpantry.css': 'public/css/foodpantry.css',
                'temp/colors.css': 'public/css/colors.css'
            }
        }
    },
    watch: {
        css: {
            files: "source/css/*.scss",
            tasks: ["sass", "whitespace"]
        }
    }
});


function cleanWhitespace (source, target) {
    var contents = fs.readFileSync(source).toString();
    contents = contents.replace(/; }/g, ";\n}");

    fs.writeFileSync(target, contents);
};

grunt.loadNpmTasks('grunt-contrib-watch');

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.registerMultiTask('whitespace', "clean up whitespace for SCSS output", function () {
    var source, target;
    var files = this.data.files;
    for (source in files) {
        if (!files.hasOwnProperty(source)) {
            continue;
        }
        target = files[source];

        cleanWhitespace(source, target);
    }
});

grunt.registerTask('default', ['sass', 'whitespace']);
