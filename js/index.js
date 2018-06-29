const photos =[
{imag: 'images/1.jpg'},
{imag: 'images/2.jpg'},
{imag: 'images/3.jpg'},
{imag: 'images/4.jpg'},
{imag: 'images/5.jpg'}
]
const log = (text, date = new Date())=>({text, date})

new Vue({
  el: '#phot',
  data:{
  	photos: photos,
  	photo: photos[0],
  	logs: [],
  	selectPhotoIndex:0,
  	DCar: false,
  	TCar: false,
  	ModalVisibility: false,
  	SubmitForm: false
  },
  methods:{
  	SelectPhoto(index){
  		this.photo = photos[index]
  		this.selectPhotoIndex = index
  	},
  	newOrder(){
  		this.SubmitForm = false
  		this.ModalVisibility = false
  		this.logs.push(
  		  	log('Заявка успешно зарегистрирована')
  		  	)
  	}
  },
  filters: {
  	date(value){
  		return value.toLocaleString()
  	}
  }
})

