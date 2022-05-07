<?php
class TreeNode {
    public $val; //节点值
    public $left; //左叶子节点
    public $right; //右叶子节点

    function __construct($v)
    {
        $this->val = $v;
    }

    /**
     * 二叉树深度
     *
     * @return void
     */
    function depth()
    {
        $queue = [];
        array_push($queue, $this);
        $depth = 0;
        $count = "";
        $val = "";
        $vals = "";
        while (!empty($queue)) {
            $depth++;
            $len = count($queue);
            for($i=0;$i<$len;$i++){
                $count .= count($queue) . '-';
                
                $node = array_shift($queue);
                
                $val .= $node->val . '-';
    
                $vals .= $node->val .'-';
                if ($node->left) {
                    array_push($queue, $node->left);
                }
                if ($node->right) {
                    array_push($queue, $node->right);
                }
            }
            
            $vals = rtrim($vals, '-');
            $vals .= ',';
            
            
        }
        $count = rtrim($count, "-");
        $val = rtrim($val, "-");
        $vals = rtrim($vals, ",");
        
        echo $count."<br>";
        echo $val."<br>";
        echo $vals."<br>";
        echo $depth;
    }
}

$node1=new TreeNode(1);
$node2=new TreeNode(2);
$node3=new TreeNode(3);
$node4=new TreeNode(4);
$node5=new TreeNode(5);
$node6=new TreeNode(6);
$node7=new TreeNode(7);


$tree=$node1;
$node1->left=$node2;
$node1->right=$node3;
$node2->left=$node4;
$node2->right=$node5;
$node4->right=$node6;
$node3->left=$node7;
echo $tree->depth();