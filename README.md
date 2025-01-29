# PHP Loose Comparison Bug
This repository demonstrates a common error in PHP related to loose comparison (`==`) versus strict comparison (`===`).  Loose comparison can lead to unexpected type juggling and incorrect results.  The `bug.php` file contains the buggy code, and `bugSolution.php` shows the corrected version using strict comparison.

**Problem:**  PHP's loose comparison operator (`==`) performs type juggling before comparison. This can lead to situations where values that are not strictly equal are considered equal.  For instance, `0` and `'0'` are considered equal using loose comparison, but not with strict comparison.

**Solution:**  Always use strict comparison (`===`) when you need to ensure that both the value and type are the same.