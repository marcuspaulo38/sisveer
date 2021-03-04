import {Picker, StyleSheet} from "react-native";

const css = StyleSheet.create({
    container: {
        flex: 1,
       /* padding: 20,*/
        backgroundColor: "#fff",
        alignItems: 'center',
        justifyContent: 'center'
    },
    container2: {
        flex: 1,
		flexDirection:'row',
        backgroundColor: '#fff',
        alignItems: 'center',
        justifyContent: 'center',
    },
    containerTop:{
    justifyContent:'flex-start'
    },

    textPage:{
      backgroundColor:'orange',
      padding: 20
    },
    title: {
        marginTop: 16,
        paddingVertical: 8,
        borderWidth: 4,
        borderColor: "#20232a",
        borderRadius: 6,
        backgroundColor: "#61dafb",
        color: "#20232a",
        textAlign: "center",
        fontSize: 30,
        fontWeight: "bold"
    },

    button__home:{
        marginBottom: 2

    },

    darkbg:{
        backgroundColor:'#333'
    },

    login__logomarca:{
      marginBottom: 10
    },

    login__msg:(text='none')=>({
        fontWeight: 'bold',
        fontSize: 22,
        color: 'red',
        marginTop: 5,
        marginBottom: 15,
        display:text
    }),

    login__form:{
        width:'80%'

    },

    login__input:{
        backgroundColor:'#fff',
        fontSize:19,
        padding: 7,
        marginBottom: 15

    },

    login__button:{
        padding: 12,
        backgroundColor:'#2B2B6B',
        alignSelf:'center',
        borderRadius: 5,
		
    },
	reservar__button:{
        padding: 12,
        backgroundColor:'#2B2B6B',
        alignSelf:'center',
        borderRadius: 10,
		
    },

    login__buttonText:{
        fontWeight: 'bold',
        fontSize: 22,
        color: '#333'
    },

    area__tab:{
        backgroundColor:'#333',
        fontSize:20,
        fontWeight:'bold',
        color:'#333'
    },

    area__menu: {
        flexDirection: 'row',
        paddingTop: 40,
        paddingBottom: 10,
        width: '100%',
        backgroundColor:'#111',
        alignItems:'center',
        justifyContent:'center'

   },
    button__home2:{
        textAlign: 'left'

    },

    area__title:{
        width:'80%',
        fontWeight:'bold',
        fontSize:20,
        color:'#fff',
        textAlign: 'center'

    },
    button__logout:{
        textAlign: 'right'

    },
    select__opcao:{
        alignItems: "center",
        height: 70,
        width: 300,
        marginTop: 1
    },
    select__text:{
        fontSize:20,
        textAlign: 'center',
        marginTop: 10
    },
	textareaContainer: {
		height: 70,
		width: 300,
	    backgroundColor: '#F5FCFF',
	    marginTop: 1
    },
	
    
   gride__text:{
	    fontSize:12,
        textAlign: 'left',
        marginTop: 10
	   
   },
   textoItem: {
    fontSize:12,
	color: '#34495e',
    padding: 10,
    borderBottomWidth:1,
    borderBottomColor:'#ccc'
  },
  scrollView: {
    backgroundColor: '#ccc',
    marginHorizontal: 20,
  },
   tanques:{
      height: 65,
      width: 65
      
    },
	itemF: {
    alignItems: "center",
    backgroundColor: "#fff",
    flexGrow: 1,
    margin: 4,
    padding: 20, 
  },
  MainContainer: {
    justifyContent: 'center',
    flex: 1,
    paddingTop: 30,
  },

  imageThumbnail: {
    justifyContent: 'center',
    alignItems: 'center',
    height: 100
  },


});
export {css};