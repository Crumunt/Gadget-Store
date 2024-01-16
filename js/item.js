const PAGE = window.location.search.substring(1)
const URL = PAGE.split('=')

console.log(URL[1])