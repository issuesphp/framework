/* esta es la libreria */
#include <stdio.h>

#include <string.h>

#include <stdlib.h>

// esta es funcion principal
int main() {

	// const int num = 7;

	int myNum;

	// num = 10;

	printf("Choice Option: \n");

// Get and save the number the user types
	scanf("%d", &myNum);

// Output the number the user typed
	// printf("Your number is: %d", myNum);

	switch (myNum) {
	case 1:
		// printf("Your number is: %d\n", myNum);

		FILE *archivo = fopen("test.php", "w");
		break;
	case 2:
		printf("Your number is: %d\n", myNum);
		break;
	default:
		printf("Nro incorrecto");
	}


	

	
	return 0;

	
	return 0;
}