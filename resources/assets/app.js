/*
* This is the main JavaScript used by webpack to build the app.js file.
*/
import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'
import Tooltip from "@ryangjchandler/alpine-tooltip";

Alpine.plugin(Tooltip);
Alpine.plugin(collapse)

window.Alpine = Alpine
Alpine.start()