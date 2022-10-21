public class BinarySearch{
  public static void main(String args[]){
    
    int[] arr={5,12,16,24,32,39,43,56,76};
    if(binarySearch(arr,56)){
      System.out.println("Target element present in the array");
    }
    else{
      System.out.println("Target element not present in the array");
    }
  }
  public boolean binarySearch(int[] arr,int target){
    int s=0;
    int e=arr.length -1;
    while(s<=e){
      int mid=s+(e-s)/2;
      if(arr[mid]>target){
        e=mid-1;
      }
      else if(arr[mid]<target){
        s=mid+1;
      }
      else{
        return true;
      }
    }
    return false;
  }
}
