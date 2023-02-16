<?php


/*https://leetcode.com/problems/minimum-depth-of-binary-tree/description/*/


if($root == null)
     return 0;
 $left = $this->minDepth($root->left);
 $right = $this->minDepth($root->right);
 if($left != 0 && $right != 0)
     return min($left, $right)+1;
 elseif($left == 0)
     return $right+1;
 else
     return $left+1;  

?>