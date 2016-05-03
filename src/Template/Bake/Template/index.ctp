<%
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
    })
    ->take(7);
%>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <%= $pluralHumanName %>
        <?= $this->Html->link(__('New'), ['action' => 'add', <%= $pk %>], ['class'=>'btn btn-success btn-xs']) ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de <%= $pluralHumanName %></h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <% foreach ($fields as $field): %>
                                <th><?= $this->Paginator->sort('<%= $field %>') ?></th>
                            <% endforeach; %>
                            <th>Ações</th>
                        </tr>
                        <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
                            <tr>

                                <% foreach ($fields as $field) {
                                    $isKey = false;
                                    if (!empty($associations['BelongsTo'])) {
                                        foreach ($associations['BelongsTo'] as $alias => $details) {
                                            if ($field === $details['foreignKey']) {
                                                $isKey = true;
                                                %>
                                                <td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
                                                <%
                                                break;
                                            }
                                        }
                                    }

                                    if ($isKey !== true) {
                                        if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
                                            %>
                                            <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
                                            <%
                                        } else {
                                            %>
                                            <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
                                            <%
                                        }
                                    }
                                }
                                $pk = '$' . $singularVar . '->' . $primaryKey[0];
                                %>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', <%= $pk %>], ['class'=>'btn btn-default btn-xs']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', <%= $pk %>], ['class'=>'btn btn-primary btn-xs']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', <%= $pk %>], ['confirm' => __('Are you sure you want to delete # {0}?', <%= $pk %>), 'class'=>'btn btn-danger btn-xs']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<!-- /.content -->
