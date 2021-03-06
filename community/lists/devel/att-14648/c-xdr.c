#include <stdio.h>
#include <rpc/xdr.h>

int main(int argc, char* argv[]) {
    FILE *fp;
    XDR xdr_output;
    char filename[] = "c-xdr.dat";
    printf("Output file: %s\n", filename);
    int i = -30;
    double d = 16.25;

    fp = fopen(filename, "w+");
    xdrstdio_create(&xdr_output, fp, XDR_ENCODE);
    xdr_int(&xdr_output, &i);
    xdr_double(&xdr_output, &d);
    return 0;
}
