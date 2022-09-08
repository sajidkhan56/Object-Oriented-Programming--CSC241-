<?php
//Create a class called IntegerSet. Each object of class IntegerSet can hold integers in the range 0 through 49.
//A set is represented internally as an array of ones and zeros. Array element a[ i ] is 1 if integer i is in the set.
//Array element a[ j ] is 0 if integer j is not in the set. 
//The default constructor initializes a set to the so-called “empty set,” i.e., 
//a set whose array representation contains all zeros. Provide member functions for the common set operations.
// For example,   
//1. Provide a unionOfIntegerSets member function that creates a third set which is the set-theoretic
//union of two existing sets (i.e., an element of the third set’s array is set to 1 if that
//element is 1 in either or both of the existing sets, and an element of the third set’s array is set to 0 if that element is 0 in each of the existing sets). 2. Provide an intersectionOfIntegerSets member function that creates a third set which is the set-theoretic intersection of two existing sets (i.e., an element of the third set’s array is set to 0 if that element is 0 in either or both of the existing sets, and an element of the third set’s array is set to 1 if that element is 1 in each of the existing sets). 3. Provide an insertElement member function that inserts a new integer k into a set (by setting a[k] to 1).   4. Provide a deleteElement member function that deletes integer m (by setting a[m] to 0). 5. Provide a setPrint member function that prints a set as a list of numbers separated by spaces. Print only those elements that are present in the set (i.e., their position in the array has a value of 1).   6. Provide an isEqualTo member function that determines if two sets are equal. Now write a driver program to test your IntegerSet class. Instantiate several IntegerSet objects. Test that all your member functions work properly.
class IntegerSet
{
    
}
?>