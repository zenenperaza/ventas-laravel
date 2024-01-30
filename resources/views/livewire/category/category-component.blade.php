<div>

    <x-card cardTitle="Listado categorias" cardFooter="" >
        <x-slot:cardTools>
            <a href="#" class="btn btn-primary">Crear categoria</a>
        </x-slot>
        <x-table>
            <x-slot:thead>
                <th> ID</th>
                <th> Nombre</th>
                <th width="3%"> ...</th>
                <th width="3%"> ...</th>
                <th width="3%"> ...</th>

            </x-slot>            
                <tr>
                    <td>...</td>
                    <td>...</td>
                    <td>
                        <a href="#" class="btn btn-success btn-sm" title="Ver">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        
                        <a href="#" class="btn btn-danger btn-sm" title="Eliminar">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
           
        </x-table> 
    </x-card>
</di
