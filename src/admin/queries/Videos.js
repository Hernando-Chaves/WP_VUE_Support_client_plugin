import gql from 'graphql-tag'

export const VIDEOS = gql`
query MyQuery {
  videosBWC(where: {search: "uniandes"}) {
    nodes {
      categoriasVideosBwc {
        nodes {
          id
        }
      }
      title
      videosCMB {
        idDelVideo
      }
    }
  }
}
`


