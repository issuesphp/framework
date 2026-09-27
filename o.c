/* esta es la libreria */
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



int main() {

	struct option nivel1;
	struct option op;

	struct migration mi;

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

				// dropTable(op.migrationName,conn);

				std::string baseQuery = "DROP TABLE IF EXISTS ";
				std::string query = baseQuery + op.migrationName;


				if (mysql_query(conn, query.c_str())) {
					fprintf(stderr, "%s\n", mysql_error(conn));
        // return 1;
				}

				res = mysql_store_result(conn);   


				mysql_free_result(res);


			}

		}
		// end


		break;
	case 'n':
		// printf("Role User: %c\n", roles[1]);
		break;
	default:
		printf("No options: \n");
	}



	return 0;
}