import '../scss/theme/theme.scss'

import mt from 'mousetrap'
mt.bind('f', (e, combo) => {

})
import {FlowThemeServiceProvider} from './FlowThemeServiceProvider';
import {FlowThemeVuePlugin} from './FlowThemeVuePlugin';

export {FlowThemeVuePlugin, FlowThemeServiceProvider};