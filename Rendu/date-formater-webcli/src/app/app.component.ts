import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'date-formater-webcli';
  date = Date;
  xmlhttp = new XMLHttpRequest();
  URL = 'http://localhost:4200';

  sendAndDispDate(){
    alert(this.date);
    this.xmlhttp.open("GET", this.URL);
    this.xmlhttp.setRequestHeader("Content-type", "application/json;charset=UTF-8");
    this.xmlhttp.send(JSON.stringify(this.date));
  }

  getDate(event: any){
    this.date = event.target.value;
  }
}


/**
 * Requête post et get inutile puisqu'on a pas de BDD
 */