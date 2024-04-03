import { ApplicationConfig } from '@angular/core';
import { provideRouter } from '@angular/router';

import { routes } from './angular-base.routes';

export const appConfig: ApplicationConfig = {
  providers: [provideRouter(routes)]
};
