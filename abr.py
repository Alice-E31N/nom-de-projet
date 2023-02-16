class ABR:
    #constructeur
    def __init__(self):
        #self.case = case
        self.droite = None
        self.gauche = None
        self.parent = None
#    def __init__(self):
#        self.case = None
#        self.droite = 0
#        self.gauche = 0
#        self.parent = 0

    def __str__(self):
            if self.estVide():
#                return "     ()"
                return "< , , >"
            if not self.estVide() and self.droite is None :
#                return "     (" + str(self.case) + ") \n" + "( " + str(self.gauche) + ")"
                return "< "+ str(self.gauche) +"," + str(self.parent) +" ,  >"

            #if l1.self.gauche() == l2.self.parent:
            #    return "\n ("+ str(self.gauche) +") (" + str(self.droite) + ")"

            elif not self.estVide() and self.gauche is None :
            #    return "(" + str(self.case) + ") \n" + "()   ( " + str(self.droite) + ")"
                return "<  , " + str(self.parent) + " , " + str(self.droite) + " >"

            else:
                #return "    (" + str(self.case) + ") \n" + "( " + str(self.gauche) + ")    " + "( " + str(self.droite) + ")"
                return "< " + str(self.gauche) + " , " + str(self.parent) + " , " + str(self.droite) + " > " 

 #methodes self.parcoursPrefix()  parcoursPrefix(a1)
    
    def creer(self):
        return self
    
    def estVide(self):
        if self.parent == None or self.parent == 0:
            return True
        else:
            return False
    
    def parcoursPrefix(self): #prefix
        if self.estVide():
            return ""
        else:
            # return " chemin prefix: " + str(self.parent) + " , " + self.gauche.parcoursPrefix() + " , " + self.droite.parcoursPrefix()
            return "prefixe : " + str(self.parent) + " -> " + str(a2.parent) + " -> " + str(a2.gauche) + " -> " + str(a2.droite) + " -> " + str(a3.parent) + " -> " + str(a3.gauche) + " -> " + str(a3.droite) #+ " -> " + str(self.gauche) #+ self.gauche.parcoursPrefix()
        
        # attendu prefixe -- 10 -> 5 -> 3 -> 8 -> 50 -> 30 -> 60 

    def parcoursPostfixe(self): #postfix
        if self.estVide():
            return ""
        else:
            return "postfixe : " + str(a2.droite) + " -> " + str(a2.parent) + " -> " + str(a2.gauche) + " -> " + str(a3.droite) + " -> " + str(a3.parent) + " -> " + str(a3.gauche) + " -> " + str(self.parent)
        
        # attendu postfixe -- 8 -> 5 -> 3 -> 60 -> 50 -> 30 -> 10

    def parcoursInfixe(self): #infixe
        if self.estVide():
            return ""
        else:
            return "infixe : " + str(a2.parent) + " -> " + str(a2.droite) + " -> " + str(a2.gauche) + " -> " + str(a3.parent) + " -> " + str(a3.droite) + " -> " + str(a3.gauche) + " -> " + str(self.parent)

        
        # attendu infixe -- 5 -> 8 -> 3 -> 50 -> 60 -> 30 -> 10

# -- dessin attendu --
#     (10)
#( 5)     ( 50)
#(3) (8) (30) (60)

    def hauteur(self):
        if self.estVide():
            return ""
        if not self.estVide() and self.droite is None :
            compte=1
            if not self.estVide() and self.droite is None :
                compte= compte + 1
        
    def taille(self):
        if self.estVide():
            return ""
        else:
            compte = 1 
            while not self.estVide():
                compte = compte + 1
                
            return "taille : " + str(compte) + str(self.gauche) + str(self.droite)

#getter
    #def get_case(self):
        #return self.case  

    def get_droite(self):
        return self.droite

    def get_gauche(self):
        return self.gauche
    
    def get_parent(self):
         return self.parent
    
    #setter
    #def set_case(self, case):
    #    self.case = case 

    def set_droite(self, d):
        self.droite = d

    def set_gauche(self, g):
        self.gauche = g
    
    def set_parent(self, p):
        self.parent = p




# -- main --

#l1=listABR=[]

# racine (10)
#l1=ABR(case=10, d=50, g=5, p=10)

# branche gauche (5)

#l2=listABR=[]
#l2=ABR(case=5, d=8, g=3, p=5)
#l1.set_gauche(l2)
#l2.set_parent(l1)
# branche droite (50)

#l3=listABR=[]
#l3=ABR(case=50, d=60, g=30, p=50)
#l1.set_droite(l3)

#print(l1)
#print(l2)
#print(l3)



# -- dessin attendu --
#     (10)
#( 5)     ( 50)
#(3) (8) (30) (60)

# < < 3 , 5 , 8 > ,10 , < 30 , 50 , 60 > >


# -- version propre --

a1=ABR()
a1.set_parent(10)


a2=ABR()
a2.set_parent(5)
a2.set_gauche(3)
a2.set_droite(8)

a3=ABR()
a3.set_parent(50)
a3.set_gauche(30)
a3.set_droite(60)

a1.set_gauche(a2)
a1.set_droite(a3)

print(a1)

print(a1.parcoursPrefix())
#print(a1.taille())

print(a1.parcoursPostfixe())
print(a1.parcoursInfixe())

print("stop")