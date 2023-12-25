export const server = (done) => {
   app.plugins.browsersync.init({
      proxy: 'http://sitemain',
      host: 'sitemain',
      open: 'external'
   });
}