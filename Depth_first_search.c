#include<stdio.h>
#include<stdlib.h>

int adj_matrix[5][5]={{0,1,0,0,0},{0,0,1,0,0},{0,0,0,1,0},{0,0,0,0,1},{0,1,0,0,0}};
int visited[5];

int dfs(int i)
{
  visited[i]=1;
  printf("Visited vertex: %d\n",i);
  
  for(int j=0;j<5;j++)
  {
    if(!visited[j] && adj_matrix[i][j]==1)
    {
      dfs(j);
    }
  }
}
int main()
{
   int i,j;
   
   for(i=0;i<5;i++)
   {
     visited[i]=0;
   }
   dfs(0);
}
