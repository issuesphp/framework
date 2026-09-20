/* esta es la libreria */
#include <stdio.h>

#include <string.h>

#include <stdlib.h>

#include <iostream>

int main() {

	int myNum;

	char option[50];

	// std::string base = "base_table.php";


	// strcpy(option, "Options");


	// printf("Type a number and press enter: \n");

	 std::cout << "Type a number and press enter: \n" << std::endl;

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

		// if (strcmp(option, "customers") == 0)
		if (option != NULL)
		{
			std::string basePath = "database/migrations/";
			std::string extensionPath = "_table.php";
			std::string finalPath = basePath + option + extensionPath;

			// std::cout << finalPath << std::endl;

			FILE *file = fopen(finalPath.c_str(), "w");			

			// FILE *file = fopen("database/migrations/base_table.php", "w");		

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