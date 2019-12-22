import {VuePlugin} from '@anomaly/streams-platform';


export class FlowThemeVuePlugin extends VuePlugin {
    static install(Vue, options = {}) {
        this.prefixAndRegisterComponents(Vue, {
            // 'slug-field-type': () => import('./SlugFieldType')
        });
    }
}