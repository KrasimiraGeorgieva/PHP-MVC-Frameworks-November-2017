<?php

namespace Database;


class PDOPreparedStatement implements StatementInterface
{
    /**
     * @var \PDOStatement
     */
    private $pdoStatement;

    public function __construct(\PDOStatement $pdoStatement)
    {
        $this->pdoStatement = $pdoStatement;
    }


    public function execute(...$params): ResultSetInterface
    {
        $this->pdoStatement->execute($params);

        return new PDOResultSet($this->pdoStatement);
    }
}