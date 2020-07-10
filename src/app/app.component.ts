import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, ParamMap } from '@angular/router'

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html'
})
export class AppComponent {
  title = 'ecommerce-angular';
  name = '';

  constructor( private route: ActivatedRoute) {
    
  }

  ngOnInit(){
    this.route.queryParams.subscribe(params => {
      this.name = params['name'];
      console.log(this.name)
    });
  }

}
