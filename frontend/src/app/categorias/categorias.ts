import { Component } from '@angular/core';
import { CategoriasService } from '../core/services/categorias.service';
import { CommonModule, NgForOf } from '@angular/common';

@Component({
  selector: 'app-categorias',
  imports: [CommonModule],
  templateUrl: './categorias.html',
  styleUrl: './categorias.scss'
})
export class Categorias {
  categorias:any[]=[];
item: any;
  /**
   *
   */
  constructor(private categoriaService:CategoriasService) {
    
  }
  ngOnInit(): void{
    this.listarCategorias();

  }
  listarCategorias()
  {
    this.categoriaService.listarCategorias().subscribe(
      {
        next:(rows)=>
        {
          this.categorias= rows;
          console.log(this.categorias);
        }
      }
    )
  }
}
