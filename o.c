/* esta es la libreria */
#include <stdio.h>

#include <string.h>

#include <stdlib.h>

#include <iostream>

#include <mysql.h>

void createTable() {

	MYSQL *conn;
	MYSQL_RES *res;
	MYSQL_ROW row;

	// int id;

	// std::string id;

	std::string name;

	// char name;

	conn = mysql_init(NULL);

	if (!mysql_real_connect(conn, "localhost", "jonathan", "123", "apruebas", 0, NULL, 0)) {
		fprintf(stderr, "%s\n", mysql_error(conn));
		// return 1;
	}

	//   if (mysql_query(conn, "SELECT id, character_name FROM characters")) {
    //     fprintf(stderr, "%s\n", mysql_error(conn));
    //     // return 1;
    // }

	// std::string query = "DROP TABLE IF EXISTS users";
	std::string query = "CREATE TABLE IF NOT EXISTS users(id integer,name char)";
 // std::string s0 = "DROP DATABASE IF NOT EXISTS `users`";
// std::string s0 = "CREATE TABLE IF NOT EXISTS `user`(`userID` INT AUTO_INCREMENT ,`name` varchar(100) NOT NULL, PRIMARY KEY(`userID`));";


	if (mysql_query(conn, query.c_str())) {
		fprintf(stderr, "%s\n", mysql_error(conn));
        // return 1;
	}

	res = mysql_store_result(conn);

    // ejemplo con row
    // while ((row = mysql_fetch_row(res)) != NULL) {
    //     printf("ID: %s, Character_name: %s\n", row[0], row[1]);
    // }   


	mysql_free_result(res);
	mysql_close(conn);
    // return 0;

    // no se puede usar return por que corta el script
       // return 0;

}

struct option {
	int myNum;
	char comandName[50];
	char migrationName[50];
	// char migrationQuantity[50];
	int migrationRowQuantity[50];
};

struct migration {
	int myNum;
	int id;
	// char migrationName[50];
	char migrationRowName[50];
	char migrationTypeName[50];
};

int main() {

	struct option op;

	struct migration mi;

	char buffer[1024];
	size_t bytesLeidos;

	// MYSQL *conn;
	// MYSQL_RES *res;
	// MYSQL_ROW row;

	// conn = mysql_init(NULL);


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

		scanf("%49s", op.migrationName);

		if (op.migrationName != NULL)
		{
			std::string basePath = "database/migrations/";
			std::string extensionPath = "_table.php";
			std::string finalPath = basePath + op.migrationName + extensionPath;			

			FILE *fileCreate = fopen(finalPath.c_str(), "w");
			// FILE *file = fopen(finalPath.c_str(), "wb");

			//rb e ecritura
			FILE *fileOrigin = fopen("core/Issues/Database/Clone/Migrations/migration.php", "rb");

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

	//otro
	if (strcmp(op.comandName, "issuesphp:make:push:migration") == 0)
	{

		printf("Migration Name Option: \n");

		scanf("%49s", op.migrationName);

		printf("Row Quantity Option: \n");

		scanf("%d", op.migrationRowQuantity);

		printf("Row Name Option: \n");

		scanf("%49s", mi.migrationRowName);

		printf("Type Name Option: \n");

		scanf("%49s", mi.migrationTypeName);

		if (op.migrationName != NULL)
		{

			createTable();

			
		}		

	}






	return 0;
}