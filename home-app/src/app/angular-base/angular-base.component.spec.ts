import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AngularBaseComponent } from './angular-base.component';

describe('AngularBaseComponent', () => {
  let component: AngularBaseComponent;
  let fixture: ComponentFixture<AngularBaseComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AngularBaseComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(AngularBaseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  // it('should create', () => {
  //   expect(component).toBeTruthy();
  // });

  it('should create the app', () => {
    const fixture = TestBed.createComponent(AngularBaseComponent);
    const app = fixture.componentInstance;
    expect(app).toBeTruthy();
  });

  it(`should have the 'angular-base' title`, () => {
    const fixture = TestBed.createComponent(AngularBaseComponent);
    const app = fixture.componentInstance;
    expect(app.title).toEqual('angular-base');
  });

  it('should render title', () => {
    const fixture = TestBed.createComponent(AngularBaseComponent);
    fixture.detectChanges();
    const compiled = fixture.nativeElement as HTMLElement;
    expect(compiled.querySelector('h1')?.textContent).toContain('Hello, home-app');
  });

});
