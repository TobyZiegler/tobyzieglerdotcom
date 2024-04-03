import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-angular-base',
  standalone: true,
  imports: [RouterOutlet],
  templateUrl: './angular-base.component.html',
  styleUrl: './angular-base.component.css'
})
export class AngularBaseComponent {
  title = 'angular-base';

}
