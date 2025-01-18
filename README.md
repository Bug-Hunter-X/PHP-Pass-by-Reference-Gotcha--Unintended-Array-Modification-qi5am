# PHP Pass-by-Reference Gotcha: Unintended Array Modification

This repository demonstrates a common, yet often overlooked, subtlety in PHP's pass-by-reference mechanism when dealing with arrays.  The example showcases how a seemingly innocuous function call can lead to unexpected modifications of the original array.

## The Problem

The `&$var` syntax in PHP is used for pass-by-reference. While this enables efficient modification of large data structures, it's crucial to understand that the function directly operates on the original variable.  Any changes made *inside* the function are reflected *outside* the function, potentially leading to unexpected behavior if not carefully considered.

## Solution

The provided solution demonstrates a safer approach by creating a copy of the array within the function to prevent unintended modifications of the original array.  This ensures that the function works with a local copy, leaving the original array unchanged.