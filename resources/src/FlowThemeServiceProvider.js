import {ServiceProvider} from '@anomaly/streams-platform';
import {FlowThemeVuePlugin} from './FlowThemeVuePlugin';


export class FlowThemeServiceProvider extends ServiceProvider {
    async register() {
        this.vuePlugin(FlowThemeVuePlugin);
    }
}