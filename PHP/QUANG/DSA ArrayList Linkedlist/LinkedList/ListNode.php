<?php

class ListNode{
    public ?string $data = null;

    public $next = null;

    public function __construct($data){
        $this->data = $data;
    }
}


class LinkedList{
    private object|null $_firstNode = null;
    private int $_totalNodes = 0;

    public function insert(String $data = null): bool{
        $newNode = new ListNode($data);
        if($this->_firstNode === null){
            // Có & và không & không có gì khác nhau
            $this->_firstNode = $newNode;
        }else{
            $currentNode  = $this->_firstNode;
            while($currentNode->next != null){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return true;
    }
    public function display(){
        echo "Total nodes: " . $this->_totalNodes;
        $currentNode = $this->_firstNode;
        while($currentNode!=null){
            echo "<br>". $currentNode->data;
            $currentNode = $currentNode->next;
        }
    }
    public function insertAtFirst(string $data = null): bool{
        $newNode = new ListNode($data);
        if($this->_firstNode == null){
            $this->_firstNode = $newNode;
        }else{
            $newNode->next = $this->_firstNode;
            $this->_firstNode = $newNode;
        }
        return true;
    }
}

$list = new LinkedList();

$list->insert("1");
$list->insert("2");
$list->insert("3");
$list->insert("4");
$list->insert("5");
$list->display();

$list->insertAtFirst("6");
echo "<br>" . "Insert first" . "<br>";
$list->display();

?>