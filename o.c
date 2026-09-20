/* esta es la libreria */
#include <stdio.h>

#include <string.h>

#include <stdlib.h>

#include <iostream>

int main() {

	int myNum;

	char option[50];

	std::string base = "base_table.php";


	// strcpy(option, "Options");


	printf("Choice Option: \n");

	scanf("%d", &myNum);

	// scanf("%s", &option);

	//leemos 48 characters
	// scanf("%49s", option);

// Output the number the user typed
	// printf("Your number is: %d", myNum);

	switch (myNum) {
		// no se puede usar string con switch 
	// case 'issuesphp:serve':
	case 1:
		// printf("Your number is: %d\n", myNum);

		system("php -S localhost:8080");

		break;
	case 2:

		printf("Choice Option: \n");

		scanf("%49s", option);

		if (strcmp(option, "customers") == 0)
		{
			// std::string base = "base_table.php";
		// std::string endpoint = baseUrl + segment;	

		FILE *file = fopen("database/migrations/base_table.php", "w");		

		// FILE *file = fopen("database/migrations/" + option.c_str() + "_table.php", "w");

			// FILE *file = fopen("database/migrations/" + base, "w");
		}



		break;
	default:
		printf("Choose an option from the list");

		return -1;
	}	
	

	
	return 0;
}