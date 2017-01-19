<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('auteurs')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('auteurs_publications', ['id' => false, 'primary_key' => ['auteur_id', 'publication_id']])
            ->addColumn('auteur_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => false,
            ])
            ->addColumn('publication_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => false,
            ])
            ->addIndex(
                [
                    'auteur_id',
                ]
            )
            ->addIndex(
                [
                    'publication_id',
                ]
            )
            ->create();

        $this->table('datations')
            ->addColumn('type_datation', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('code_reference', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('date_bp', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => true,
            ])
            ->addColumn('annee_prise_echantillon', 'integer', [
                'default' => null,
                //'limit' => 10,
                'null' => true,
            ])
            ->addColumn('discipline', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('laboratoire_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => true,
            ])
            ->addColumn('site_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => true,
            ])
            ->addColumn('detail_site_recolte', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('erreur_standard', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => true,
            ])
            ->addColumn('culture_associee', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('horizon_culturel', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('numero_structure', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('date_calibree', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('commentaire', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('origine', 'string', [
                'comment' => 'Soit Afrique centrale soit Amazonie pour le moment actuel.',
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addIndex(
                [
                    'laboratoire_id',
                ]
            )
            ->addIndex(
                [
                    'site_id',
                ]
            )
            ->create();

        $this->table('datations_materiels', ['id' => false, 'primary_key' => ['datation_id', 'materiel_id']])
            ->addColumn('datation_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => false,
            ])
            ->addColumn('materiel_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => false,
            ])
            ->addIndex(
                [
                    'datation_id',
                ]
            )
            ->addIndex(
                [
                    'materiel_id',
                ]
            )
            ->create();

        $this->table('datations_objets', ['id' => false, 'primary_key' => ['datation_id', 'objet_id']])
            ->addColumn('datation_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => false,
            ])
            ->addColumn('objet_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => false,
            ])
            ->addIndex(
                [
                    'datation_id',
                ]
            )
            ->addIndex(
                [
                    'objet_id',
                ]
            )
            ->create();

        $this->table('datations_publications', ['id' => false, 'primary_key' => ['datation_id', 'publication_id']])
            ->addColumn('datation_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => false,
            ])
            ->addColumn('publication_id', 'biginteger', [
                'default' => null,
                //'limit' => 20,
                'null' => false,
            ])
            ->addIndex(
                [
                    'datation_id',
                ]
            )
            ->addIndex(
                [
                    'publication_id',
                ]
            )
            ->create();

        $this->table('laboratoires')
            ->addColumn('code_laboratoire', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('description', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('datation_count', 'integer', [
                'default' => null,
                //'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('materiels')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('categorie', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('objets')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('categorie', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('publications')
            ->addColumn('annee', 'integer', [
                'default' => null,
                //'limit' => 10,
                'null' => true,
            ])
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('reference', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('sites')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('latitude', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('longitude', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('contry', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('province', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('created', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('datation_count', 'integer', [
                'default' => null,
                //'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('users')
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('role', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'time', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('auteurs_publications')
            ->addForeignKey(
                'auteur_id',
                'auteurs',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'publication_id',
                'publications',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('datations')
            ->addForeignKey(
                'laboratoire_id',
                'laboratoires',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'site_id',
                'sites',
                'id',
                [
                    'update' => 'CASCADE',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('datations_materiels')
            ->addForeignKey(
                'datation_id',
                'datations',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'materiel_id',
                'materiels',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('datations_objets')
            ->addForeignKey(
                'datation_id',
                'datations',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'objet_id',
                'objets',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('datations_publications')
            ->addForeignKey(
                'datation_id',
                'datations',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->addForeignKey(
                'publication_id',
                'publications',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();
    }

    public function down()
    {
        $this->table('auteurs_publications')
            ->dropForeignKey(
                'auteur_id'
            )
            ->dropForeignKey(
                'publication_id'
            );

        $this->table('datations')
            ->dropForeignKey(
                'laboratoire_id'
            )
            ->dropForeignKey(
                'site_id'
            );

        $this->table('datations_materiels')
            ->dropForeignKey(
                'datation_id'
            )
            ->dropForeignKey(
                'materiel_id'
            );

        $this->table('datations_objets')
            ->dropForeignKey(
                'datation_id'
            )
            ->dropForeignKey(
                'objet_id'
            );

        $this->table('datations_publications')
            ->dropForeignKey(
                'datation_id'
            )
            ->dropForeignKey(
                'publication_id'
            );

        $this->dropTable('auteurs');
        $this->dropTable('auteurs_publications');
        $this->dropTable('datations');
        $this->dropTable('datations_materiels');
        $this->dropTable('datations_objets');
        $this->dropTable('datations_publications');
        $this->dropTable('laboratoires');
        $this->dropTable('materiels');
        $this->dropTable('objets');
        $this->dropTable('publications');
        $this->dropTable('sites');
        $this->dropTable('users');
    }
}
