import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DadABaseComponent } from './dad-a-base.component';

describe('DadABaseComponent', () => {
  let component: DadABaseComponent;
  let fixture: ComponentFixture<DadABaseComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [DadABaseComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(DadABaseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
