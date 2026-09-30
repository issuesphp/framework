/* 
  Author: Jonathan Castro
  Email: joncastdev@gmail.com
  Script: Commanline IssuesPHP Framework  
*/

#include <stdio.h>

#include <string.h>

#include <stdlib.h>

#include <iostream>

#include <mysql.h>

struct option {
	int myNum;
	char question;
	char comandName[50];
	char migrationName[50];
	char seedName[50];
	// char migrationQuantity[50];
	int migrationRowQuantity[50];
};

struct database {
	int myNum;
	int id;
	// char migrationName[50];
	char databaseHost[50];
	char databaseUsername[50];
	char databasePassword[50];
	char databaseName[50];	
};

struct migration {
	int myNum;
	int id;
	// char migrationName[50];
	char migrationRowName[50];
	char migrationTypeName[50];
};

struct seed {
	int myNum;
	int id;
	// char migrationName[50];
	char seedRowName[50];
	char seedRowValue[50];
};

MYSQL *conn;
MYSQL_RES *res;
MYSQL_ROW row;	

	// conn = mysql_init(NULL);

void connection(std::string host,std::string username,std::string password,std::string database) {

	// MYSQL *conn;
	// MYSQL_RES *res;
	// MYSQL_ROW row;	

	conn = mysql_init(NULL);

	if (!mysql_real_connect(conn, host.c_str(), username.c_str(), password.c_str(), database.c_str(), 0, NULL, 0)) {
		fprintf(stderr, "%s\n", mysql_error(conn));
		// return 1;
	}


	res = mysql_store_result(conn);	

}

void createTable(std::string migrationName, std::string migrationRowName,std::string migrationTypeName) {	
	
	std::string baseQuery = "CREATE TABLE IF NOT EXISTS ";
	// std::string baseRow = "(id int AUTO_INCREMENT PRIMARY KEY,";
	std::string baseRow = "(id integer PRIMARY KEY,";
	// std::string seperator = ",";
	std::string space = " ";
	std::string baseRowEnd = ")";
	std::string query = baseQuery + migrationName + baseRow + migrationRowName + space + migrationTypeName + baseRowEnd;
	// std::string query = baseQuery + migrationName + baseRow + seperator + migrationRowName + migrationTypeName + baseRowEnd;


	// std::string query = "CREATE TABLE IF NOT EXISTS users(id integer,name char)";
 // std::string s0 = "DROP DATABASE IF NOT EXISTS `users`";
// std::string s0 = "CREATE TABLE IF NOT EXISTS `user`(`userID` INT AUTO_INCREMENT ,`name` varchar(100) NOT NULL, PRIMARY KEY(`userID`));";


	if (mysql_query(conn, query.c_str())) {
		fprintf(stderr, "%s\n", mysql_error(conn));
        // return 1;
	}

	res = mysql_store_result(conn);    


	mysql_free_result(res);
	

}

void dropTable(std::string migrationName) {

	
	std::string baseQuery = "DROP TABLE IF EXISTS ";
	std::string query = baseQuery + migrationName;


	if (mysql_query(conn, query.c_str())) {
		fprintf(stderr, "%s\n", mysql_error(conn));
        // return 1;
	}

	res = mysql_store_result(conn);   


	mysql_free_result(res);
	// mysql_close(conn);   

}

void insertTable(std::string seedName, std::string seedRowName,std::string seedRowValue) {	
	
	std::string baseQuery = "INSERT INTO ";
	std::string baseRow = "(";
	// std::string seperator = ",";
	std::string valuesName = "values(";
	// std::string space = " ";
	std::string baseRowEnd = ")";
	std::string query = baseQuery + seedName + baseRow + seedRowName + baseRowEnd + valuesName + seedRowValue + baseRowEnd;
	

	if (mysql_query(conn, query.c_str())) {
		fprintf(stderr, "%s\n", mysql_error(conn));
        // return 1;
	}

	res = mysql_store_result(conn);    


	mysql_free_result(res);
	

}



int main() {

	struct option nivel1;
	struct option op;

	struct migration mi;

	struct seed se;

	struct database da;

	char buffer[1024];
	size_t bytesLeidos;	


	std::cout << "Connect Database an press y / n: \n" << std::endl;

	scanf("%c", &nivel1.question);

	// printf("Answer: %c\n", nivel1.question);

	// printf("Answer: %c\n", nivel1.question);

	switch (nivel1.question) {
	case 'y':
		// printf("Role Admin: %c\n", roles[0]);

		scanf("%49s", da.databaseHost);

		printf("Answer: %s\n", da.databaseHost);

		scanf("%49s", da.databaseUsername);

		printf("Answer: %s\n", da.databaseUsername);

		scanf("%49s", da.databasePassword);

		printf("Answer: %s\n", da.databasePassword);

		scanf("%49s", da.databaseName);

		printf("Answer: %s\n", da.databaseName);

		

		connection(da.databaseHost,da.databaseUsername,da.databasePassword,da.databaseName);



		scanf("%49s", op.comandName);

		printf("Answer: %s\n", op.comandName);

		if (strcmp(op.comandName, "issuesphp:drop:one:migration") == 0)
		{

			scanf("%49s", op.migrationName);

			printf("Answer: %s\n", op.migrationName);

			if (op.migrationName != NULL)
			{

				dropTable(op.migrationName);

		// 		std::string baseQuery = "DROP TABLE IF EXISTS ";
		// 		std::string query = baseQuery + op.migrationName;


		// 		if (mysql_query(conn, query.c_str())) {
		// 			fprintf(stderr, "%s\n", mysql_error(conn));
        // // return 1;
		// 		}

		// 		res = mysql_store_result(conn);   


		// 		mysql_free_result(res);


			}

		}
		// end
		if (strcmp(op.comandName, "issuesphp:make:push:migration") == 0)
		{

			scanf("%49s", op.migrationName);

			printf("Answer: %s\n", op.migrationName);

			scanf("%49s", mi.migrationRowName);

			printf("Answer: %s\n", mi.migrationRowName);

			scanf("%49s", mi.migrationTypeName);

			printf("Answer: %s\n", mi.migrationTypeName);

			if (op.migrationName != NULL)
			{

				createTable(op.migrationName,mi.migrationRowName,mi.migrationTypeName);

			}

		}
		// end

		if (strcmp(op.comandName, "issuesphp:db:seed:one") == 0)
		{

			scanf("%49s", op.seedName);

			printf("Answer: %s\n", op.seedName);

			// scanf("%49s", mi.migrationName);

			// printf("Answer: %s\n", mi.migrationName);

			scanf("%49s", se.seedRowName);

			printf("Answer: %s\n", se.seedRowName);

			scanf("%49s", se.seedRowValue);

			printf("Answer: %s\n", se.seedRowValue);

			if (op.seedName != NULL)
			{

				insertTable(op.seedName,se.seedRowName,se.seedRowValue);

			}

		}
		// end


		break;
	case 'n':

		scanf("%49s", op.comandName);

		// printf("Answer: %s\n", op.comandName);		

		if (strcmp(op.comandName, "issuesphp:serve") == 0)
		{

			system("php -S localhost:8080");

		}
		// end
		break;
	default:
		printf("No options: \n");
	}



	return 0;
}