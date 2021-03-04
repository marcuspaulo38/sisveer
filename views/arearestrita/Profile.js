import React, {useState,useEffect} from 'react';
import {Text, View, TextInput, TouchableOpacity, FlatList, Image, ScrollView, ActivityIndicator } from 'react-native';
import AsyncStorage from '@react-native-community/async-storage';
import MenuAreaRestrita from '../../assets/components/MenuAreaRestrita';
import config from '../../config/config';
import {css} from '../../assets/css/Css';
import {Button, Glyphicon} from 'react-bootstrap';
import Icon from 'react-native-vector-icons/FontAwesome';




export default function Cadastro({navigation}) {
	
    const [user,setUser]=useState(null);
    const [response,setResponse]=useState(null);


    const [isLoading, setLoading] = useState(true);
    const [data, setData] = useState([]);
    console.log(data);
    
    useEffect(()=>{
        getUser();
    },[]);


    useEffect(() => {
        fetch('http://martplore.com.br/pcm/pcm_mobile.php')
        .then((response) => response.json())
        .then((json) => setData(json))
        .catch((error) => console.error(error))
        .finally(() => setLoading(false));
    }, []);

    //Pegar o id do usuário
    async function getUser()
    {
        let response=await AsyncStorage.getItem('userData');
        let json=JSON.parse(response);
        setUser(json.id);
    }

    
	


    return (
        <View style={[css.containerTop]}>

            <MenuAreaRestrita title='Listagem' navigation={navigation} />     

            <View style={css.login__logomarca}>

                <Image source={require('../../assets/logoAulasTopListagem.png')} />
			
			</View>
			
			
			
			
			
			
             <Text style={css.textoItem}>POSTO STAR COSTA MENDES </Text>
			 
            <FlatList 
                data={data}
                keyExtractor={({ id }, index) => id}
				renderItem={
					         (
							   { item }) => (
							                <View style={{ flex: 2, flexDirection: 'column', margin: 1 }}>
                                              <Text>
											                        {item.dados1}<Image style={css.tanques} source={require('../../assets/img4_2.png')} />
											                        {item.dados2}<Image style={css.tanques} source={require('../../assets/img2_2.png')} />
																	
									  		  </Text>
											 </View> 
										    )
						   }
            />
			<FlatList 
                data={data}
                keyExtractor={({ id }, index) => id}
				renderItem={
					         (
							   { item }) => (
							                <View style={{ flex: 2, flexDirection: 'column', margin: 1 }}>
                                              <Text>
											                        {item.dados3}<Image style={css.tanques} source={require('../../assets/img3_3.png')} />
																	{item.dados4}<Image style={css.tanques} source={require('../../assets/img1_2.png')} />
									  		  </Text>
											 </View> 
										    )
						   }
            />
			<Text></Text>
			
			
			</View>
			
		


        
    ); 
}