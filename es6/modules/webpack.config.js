const path = require('path');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')

module.exports = {
    mode: 'production',
    devtool: 'source-map',
    entry: './app.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                options: {presets: ["@babel/preset-env"]},
                loader: "babel-loader"
            }
        ]
    },
    optimization: {
        minimizer: [new UglifyJsPlugin({
            sourceMap: true
        })]
    }
};