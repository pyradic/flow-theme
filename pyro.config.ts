import { Builder } from '@anomaly/webpack';
import {resolve} from 'path'

export default function configure(builder:Builder){
    const {wp,env,addons} = builder

    wp.module.rule('scss')
        .use('postcss-loader')
        .loader('postcss-loader')
        .before('sass-loader')

        .options({
            // parser: 'postcss-scss',
            plugins: [
                require('tailwindcss')(resolve(__dirname,'./tailwind.config.js')),
                require('autoprefixer'),
            ],
        })

}