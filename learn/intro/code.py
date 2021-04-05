#!/usr/bin/env python3
import sys

def solve(n):
    return n ** 2

if __name__ == '__main__':
    print(globals()[sys.argv[1]](int(sys.argv[2])))