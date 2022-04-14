import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-seo-description', IndexField)
  app.component('detail-seo-description', DetailField)
  app.component('form-seo-description', FormField)
})
