import $ from 'jquery'

class Test{
    constructor(){
        this.button = $('.test')
        this.events()
    }

    events(){
        this.button.on('click', this.test.bind(this))
    }

    test(){
        alert('test')
    }
}

export default Test