import gql from 'graphql-tag'

export const CURSOS_ATC = gql`
    query MyQuery {
  pages(where: {status: PUBLISH}) {
    nodes {
      title
      slug
    }
  }
}

`