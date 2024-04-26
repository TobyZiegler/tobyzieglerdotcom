import { bootstrapApplication } from '@angular/platform-browser';
import { angularbaseConfig } from './angular-base.config';
import { AngularBaseComponent } from './angular-base.component';

bootstrapApplication(AngularBaseComponent, angularbaseConfig)
  .catch((err) => console.error(err));
