import random
def probability(a, b):
  return [round(100 * (a**2 / (a**2 + b**2)), 5), round(100 * (b**2 / (a**2 + b**2)), 5)]
  
a, b = random.randint(0, 100)/100, random.randint(0, 100)/100
print(f"\(ψ〉= {a} |0〉+ {b} |1〉\)\n")
print(f"\(P(|0〉): {probability(a, b)[0]}\)%")
print(f"\(P(|1〉): {probability(a, b)[1]}\)%")