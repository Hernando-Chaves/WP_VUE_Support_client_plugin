import gql from 'graphql-tag'

export const CURSOS_ATC = gql`
  query MyQuery {
  cPTCursosATC(where: { status: PUBLISH }) {
    nodes {
      title
      id
      featuredImage {
        node {
          altText
          caption
          id
          srcSet
          sourceUrl
        }
      }
      configuracionCursosATC {
        fechaDeInicio
        valor
        modalidad
        sede
        duracion
        categoria
        certificadoOtorgado
        jornada
        descripcion
        miniatura {
          altText
          id
          srcSet
          sourceUrl
        }
        pdfDelPrograma {
          uri
        }
      }
    }
  }
  }
`