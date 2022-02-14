/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BelajarMethod;

import java.util.Scanner;

/**
 *
 * @author petik
 */
public class MethodReturnValue {

    /**
     * @param args the command line arguments
     */
    
    public static int pangkatdua(int bil){
       return bil* bil;
    }
    
    public static float getdiskon(float harga, float persen){
        float diskon= harga* persen/ 100;
        return diskon;
    }
    
    public static void main(String[] args) {
        // TODO code application logic here
        
//        int bil2= pangkatdua(3);
//        System.out.println(bil2);
//        System.out.println(pangkatdua(4));
//        
//        System.out.println("");
        
    //langsung panggil
//        System.out.println("Cihuy, anda dapat potongan harga sebesar : " + getdiskon(80000, 35));
    //return value dari getdiskon disimpan dalam variabel    
//        float diskon= getdiskon(100000, 40);
//        System.out.println("Cihuy, anda dapat potongan harga sebesar : " + diskon);
        
       Scanner scanner= new Scanner(System.in);
       
        System.out.println("Masukkan harga barang : ");
        float harga= scanner.nextFloat();
        System.out.println("Masukkan diskon barang (persen) : ");
        float diskon= scanner.nextFloat();
        float total_diskon= getdiskon(harga, diskon);
        System.out.println("Anda mendapat total diskon sebesar : " + total_diskon + "\nAnda hanya perlu membayar sebesar " + (harga- total_diskon));
        
        
        System.out.println("======================================");
        
    //cara memanggil method dari lain kelas
    //namakelas.namamethod    
        MembuatJus.olahjus("kangguru");
        
    }
    
}
