const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const VueLoaderPlugin = require('vue-loader/lib/plugin');

module.exports = {
    'entry': './sources/loader.js',
    'output': {
        'path': path.resolve(__dirname),
        'filename': 'assets/js/application.js',
        'publicPath': './../',
        'libraryTarget': 'umd'
    },
    'module': {
        'rules': [{
            'test': /\.vue$/,
            'use': [{
                'loader': 'vue-loader'
            }],
            'type': 'javascript/auto'
        }, {
            'test': /\.css$/,
            'use': [{
                'loader': MiniCssExtractPlugin.loader,
                'options': {
                    'esModule': false
                }
            }, {
                'loader': 'css-loader',
                'options': {
                    'esModule': false
                }
            }],
            'type': 'javascript/auto'
        }, {
            'test': /\.scss$/,
            'use': [{
                'loader': MiniCssExtractPlugin.loader,
                'options': {
                    'esModule': false
                }
            }, {
                'loader': 'css-loader',
                'options': {
                    'esModule': false
                }
            }, {
                'loader': 'sass-loader',
                'options': {
                    'sassOptions': {
                        'outputStyle': 'expanded'
                    }
                }
            }],
            'type': 'javascript/auto'
        }, {
            'test': /\.(png|jpe?g|gif|bmp|svg)$/i,
            'use': [{
                'loader': 'file-loader',
                'options': {
                    'outputPath': 'resources/generated'
                }
            }],
            'type': 'javascript/auto'
        }]
    },
    'resolve': {
        'alias': {
            '~': path.resolve(__dirname, 'sources'),
            'components': '~/components',
            'classes': '~/classes',
            'mixins': '~/mixins',
            'modules': '~/modules',
            'plugins': '~/plugins',
            'resources': '~/resources',
            'styles': '~/styles'
        }
    },
    'plugins': [
        new MiniCssExtractPlugin({
            'filename': './assets/css/styles.css'
        }),
        new VueLoaderPlugin()
    ]
};
