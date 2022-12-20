<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plantilla;

class PlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plantilla::create(
            [
                'descripcion' => 'plantilla 1',
                'ruta' => 'prueba.jpg',
                'json' => '{"attrs": {"width": 417, "height": 417, "scaleX": 0.834, "scaleY": 0.834}, "children": [{"attrs": {}, "children": [{"attrs": {"id": "background", "name": "background", "width": 500, "height": 500}, "className": "Image"}], "className": "Layer"}, {"attrs": {}, "children": [{"attrs": {"x": 20, "y": 90, "id": "rectangulo_promocion", "fill": "white", "width": 260, "height": 330, "draggable": true}, "className": "Rect"}, {"attrs": {"x": 20, "y": 20, "id": "rectangulo_logo_promocion", "fill": "white", "width": 115, "height": 30, "draggable": true}, "className": "Rect"}, {"attrs": {"x": 65, "y": 230, "id": "productos_promocion", "fill": "black", "text": "", "align": "center", "width": 160, "fontSize": 15, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"x": 65, "y": 335, "id": "precio_promocion", "fill": "black", "text": "", "align": "center", "width": 160, "fontSize": 30, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"x": 50, "y": 150, "id": "texto_establecimiento", "fill": "black", "text": "", "align": "center", "width": 200, "fontSize": 15, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"id": "transformer", "rotationSnaps": [0, 90, 180, 270]}, "className": "Transformer"}, {"attrs": {"x": 100, "y": 375, "id": "logo_tarjeta_estilos", "width": 80, "height": 60, "draggable": true}, "className": "Image"}, {"attrs": {"x": 17, "y": 25, "id": "logo_estilos", "width": 100, "height": 20, "draggable": true}, "className": "Image"}, {"attrs": {"x": 115, "y": 120, "id": "logo_establecimiento", "width": 90, "height": 70, "draggable": true}, "className": "Image"}], "className": "Layer"}], "className": "Stage"}'
            ],
        );
        Plantilla::create(
            [
                'descripcion' => 'plantilla 2',
                'ruta' => 'prueba2.jpg',
                'json' => '{"attrs": {"width": 417, "height": 417, "scaleX": 0.834, "scaleY": 0.834}, "children": [{"attrs": {}, "children": [{"attrs": {"id": "background", "name": "background", "width": 500, "height": 500}, "className": "Image"}], "className": "Layer"}, {"attrs": {}, "children": [{"attrs": {"x": 50, "y": 90, "id": "rectangulo_promocion", "fill": "white", "width": 260, "height": 330, "draggable": true}, "className": "Rect"}, {"attrs": {"x": 50, "y": 20, "id": "rectangulo_logo_promocion", "fill": "white", "width": 115, "height": 30, "draggable": true}, "className": "Rect"}, {"attrs": {"x": 65, "y": 230, "id": "productos_promocion", "fill": "black", "text": "", "align": "center", "width": 160, "fontSize": 15, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"x": 65, "y": 335, "id": "precio_promocion", "fill": "black", "text": "", "align": "center", "width": 160, "fontSize": 30, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"x": 50, "y": 150, "id": "texto_establecimiento", "fill": "black", "text": "", "align": "center", "width": 200, "fontSize": 15, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"id": "transformer", "rotationSnaps": [0, 90, 180, 270]}, "className": "Transformer"}, {"attrs": {"x": 100, "y": 375, "id": "logo_tarjeta_estilos", "width": 80, "height": 60, "draggable": true}, "className": "Image"}, {"attrs": {"x": 17, "y": 25, "id": "logo_estilos", "width": 100, "height": 20, "draggable": true}, "className": "Image"}, {"attrs": {"x": 115, "y": 120, "id": "logo_establecimiento", "width": 90, "height": 70, "draggable": true}, "className": "Image"}], "className": "Layer"}], "className": "Stage"}'
            ],
        );
        Plantilla::create(
            [
                'descripcion' => 'plantilla 3',
                'ruta' => 'prueba2.jpg',
                'json' => '{"attrs": {"width": 417, "height": 417, "scaleX": 0.834, "scaleY": 0.834}, "children": [{"attrs": {}, "children": [{"attrs": {"id": "background", "name": "background", "width": 500, "height": 500}, "className": "Image"}], "className": "Layer"}, {"attrs": {}, "children": [{"attrs": {"x": 100, "y": 90, "id": "rectangulo_promocion", "fill": "white", "width": 260, "height": 330, "draggable": true}, "className": "Rect"}, {"attrs": {"x": 100, "y": 20, "id": "rectangulo_logo_promocion", "fill": "white", "width": 115, "height": 30, "draggable": true}, "className": "Rect"}, {"attrs": {"x": 65, "y": 230, "id": "productos_promocion", "fill": "black", "text": "", "align": "center", "width": 160, "fontSize": 15, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"x": 65, "y": 335, "id": "precio_promocion", "fill": "black", "text": "", "align": "center", "width": 160, "fontSize": 30, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"x": 50, "y": 150, "id": "texto_establecimiento", "fill": "black", "text": "", "align": "center", "width": 200, "fontSize": 15, "draggable": true, "fontStyle": ""}, "className": "Text"}, {"attrs": {"id": "transformer", "rotationSnaps": [0, 90, 180, 270]}, "className": "Transformer"}, {"attrs": {"x": 100, "y": 375, "id": "logo_tarjeta_estilos", "width": 80, "height": 60, "draggable": true}, "className": "Image"}, {"attrs": {"x": 17, "y": 25, "id": "logo_estilos", "width": 100, "height": 20, "draggable": true}, "className": "Image"}, {"attrs": {"x": 115, "y": 120, "id": "logo_establecimiento", "width": 90, "height": 70, "draggable": true}, "className": "Image"}], "className": "Layer"}], "className": "Stage"}'
            ],
        );
    }
}
