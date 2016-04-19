<?php

namespace DeadPoolCave\DAO;

use DeadPoolCave\Domain\Editor;

class EditorDAO extends DAO
{

    /**
     * Return a list of all editors.
     *
     * @return array A list of all editors.
     */
    public function findAll() {
        $sql = "select * from t_editor order by editor_name";
        $result = $this->getDb()->fetchAll($sql);
        // Convert query result to an array of domain objects
        $editors = array();
        foreach ($result as $row) {
            $editorName = $row['editor_name'];
            $editors[$editorName] = $this->buildDomainObject($row);
        }
        return $editors;
    }

     /**
     * Creates a Genre object based on a DB row.
     *
     * @param array $row The DB row containing Genre data.
     * @return \DeadPoolCave\Domain\Editor
     */
    protected function buildDomainObject($row) {
        $editor = new Editor();
        $editor->setName($row['editor_name']);
        return $editor;
    }

}
