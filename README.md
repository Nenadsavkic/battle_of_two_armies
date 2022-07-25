
Bitka dve armije

Na pocetnoj strani nalaze se dva input polja za kreiranje vojnika 'Armije 1' i 'Armije 2'. Klikom na dugme 'Create Army1' ili 'Create army 2' kreirate vojnike,
za to je zaduzen kontroler 'ProjectController' i metoda 'createArmy1'  i  'CreateArmy2'. Ove dve metode prilikom kreiranja vojnika lupuju onoliko puta 
koliko je potrebno vojnika kreirati. Svaki vojnik ima tri osobine a to su 'power', 'health' i 'morality', i one su random za svakog vojnika, tako da dobijamo
kao u realnoj situaciji vojnike razlicitih karakteristika. Pored toga kreirao sam bazu zaspecijalne dogadjaje za obe vojske: 'special_event_army1' 
'special_event_army2', koje imaju opcije 'smrt generala' koja oduzima 50% ukupne snage vojske, 'motivacioni govor generala' koja dodaje 30% snage vojske, 
zatim pad motivacije koja oduzima 20% snage vojske, a pored toga postoje i opcije 'no event' koje ne uticu na ukupnu snagu vojske i ishod bitke, i svi ovi specijalni
dogadjaji se izvlace random.

Na kraju ukupna snaga vojske se racuna tako sto se uzme zbir (sum) svih vojnika, odnosno njihovih osobina: 'power' + 'health' + (morality * 0.3), tako sam ja zamislio
tu formulu, odnosno tu dodajemo i special_event pa onda ta formula izgleda ovako: ('power' + 'health' + morality * 0.3) * ($special_event->value).

Da malo pojasnim ovo gore ako je potrebno morality ili motivacija dodaje 30% snagu vojske a specijalni dogadjaj dodaje ili oduzima neki procenat od te snage.
Smrt generala u toku bitke oduzima 50%, motivacioni govor generala dodaje 30%, dok pad morala oduzima 20% ukupne snage vojske.

Kada popunite input polja i kreirate vojnike, videcete ispod ispis koliko vojnika je kreirano, mozete naknadno dodavati broj vojnika, i tek kada su obe vojske 
formirane pojavice se dugme 'Start battle', klikom na to dugme pokrece se bitka za koju je takodje zaduzen 'ProjectController' i metoda 'startBattle()'.
Zatim prelazite na stranicu 'battle-result' gde mozete videti rezultat bitke, tu ce biti ispis koja vojska prva pocinje napad (ona koja ima vise vojnika, ili 
Armiija 1 ako imaju isti broj vojnika), zatim specijalni dogadjaji u toku bitke ako ih ima i nakraju sam ishod bitke, koji zavisi od toga koja vojska ima 
ukupnu vecu snagu kreiranu na  osnovu formule koju sam opisao gore. Ako refreshujete stranicu dobicete razlicite verzije bitke u zavisnosti od speciijalnog 
dogadjaja koji se izvlaci nasumice (random) iz baze, takodje klikom na logo 'Battle of two armies' mozete se vratiti na pocetnu stranu i dodati jos vojnika ako zelite.
Klikom na dugme 'Start new battle', resetujete igru vracate se na pocetnu stranu i brisete sve vojnike iz baze da biste zapoceli novu bitku. 


 
