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

	char buffer[1024];
    size_t bytesLeidos;

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

			FILE *fileCreate = fopen(finalPath.c_str(), "w");
			// FILE *file = fopen(finalPath.c_str(), "wb");

			//rb e ecritura
			FILE *fileOrigin = fopen("vendor/Issues/Database/Clone/Migrations/migration.php", "rb");

			FILE *fileDestiny = fopen(finalPath.c_str(), "wb");

			  // Copiar bloque por bloque
			while ((bytesLeidos = fread(buffer, 1, sizeof(buffer), fileOrigin)) > 0) {
				fwrite(buffer, 1, bytesLeidos, fileDestiny);
			}

    // Cerrar los archivos
			fclose(fileOrigin);
			fclose(fileDestiny);			
		}
		
	}

	

	
	return 0;
}