/* esta es la libreria */
#include <stdio.h>

#include <string.h>

#include <stdlib.h>

#include <iostream>

struct option {
	int myNum;
	char comandName[50];
};

struct migration {
	int myNum;
	char migrationName[50];
};

int main() {

	struct option op;

	struct migration mi;

	// int myNum;

	// char option[50];

	// op.comandName

	

	std::cout << "Type a command and press enter: \n" << std::endl;

	// printf("Type a number: \n");

	// scanf("%d", &myNum);

	scanf("%49s", op.comandName);

	if (strcmp(op.comandName, "issuesphp:serve") == 0)
	{
		system("php -S localhost:8080");
	}

	if (strcmp(op.comandName, "issuesphp:make:migration") == 0)
	{

		printf("Choice Option: \n");

		scanf("%49s", mi.migrationName);

		if (mi.migrationName != NULL)
		{
			std::string basePath = "database/migrations/";
			std::string extensionPath = "_table.php";
			std::string finalPath = basePath + mi.migrationName + extensionPath;			

			FILE *file = fopen(finalPath.c_str(), "w");		
		}
		
	}

	

	
	return 0;
}