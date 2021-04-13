<?php
/**
 * Задача №1 (ООП)
 * @author Matvey_Vildanov <matveyssss@yandex.ru>
 *
 */

/**
 * Class Item
 */
final class Item {
    /**
     * Неизменяемое значение
     * @var int
     * @access private
     */
    private int $id;
    /**
     * Строковое значение, получено из БД. Может быть перезаписано.
     * @var string
     * @access private
     */
    private string $name;
    /**
     * Строковое значение, получено из БД. Может быть перезаписано.
     * @var int
     * @access private
     */
    private int $status;
    /**
     * Булево значение. Меняется на TRUE после внесения изменений в name или
     * @var bool
     * @access private
     */
    private bool $changed;

    /**
     * Item constructor.
     * Вызов в конструкторе метода init() заполняет из БД значения свойств $name и $status
     * @param integer $id неизменяемое уникальное значение.
     */
    function __construct(int $id) {
        $this->id = $id;
        $this->init($id);
    }

    /**
     * Вывод значения свойств с модификаторами private/protected
     * В качестве параметра используется имя свойства
     * property_exists() проверяет наличие свойства в классе
     * @param $var mixed
     * @return mixed
     */
    public function __get($var) {
        if (property_exists($this, $var)) {
            return $this->$var;
        }
    }

    /**
     * Изменение значения свойств с модификаторами private/protected с проверкой на соответствие типов и исключения ввода пустого значения
     * property_exists() проверяет наличие свойства в классе
     * При использовании метода значение changed изменяется на TRUE
     * @param $var mixed Имя свойства значение которого планируется изменить
     * @param $value mixed Новое значение свойства
     */
    public function __set($var, $value) {
        if (property_exists($this, $var) and $var !== ('id' or 'changed') and gettype($var) === gettype($value) and empty(!$value)) {
            $this->$var = $value;
            $this->changed = TRUE;
        }
    }

    /**
     * Запись изменений (если такие производились) в БД. Возвращает строку при выполнении изменений
     * Проверка на внесение изменений с помощью значения свойства $changed
     * @return string
     */
    public function save() {
        if ($this->changed) {
            /** Записываю изменения в БД используя такую же реализацию.
             * update object set status = {$this->status}, name = {$this->name} where id = {$this->id}
             */
            return 'Record successfully';
        }
    }

    /**
     * Метод получения значений status, name из БД и последующей записи в значения соответствующих свойств.
     * полученные значения остаются в static $query = array(name,status) для возможного дальнейшего использования
     * @param $id integer
     */
    private function init($id) {
        /** Предположим что на данном этапе программа выполняет запрос к БД по id (select name,status from object where id = {$id})
         * и возвращает массив static $query = array(name,status).
         * $this->name = $query[0];
         * $this->status = $query[1];
         * Т.к $query static, соответственно, локальное значение первоначального запроса сохраняется
         */
        $this->name = $query[0];
        $this->status = $query[1];
    }
}


