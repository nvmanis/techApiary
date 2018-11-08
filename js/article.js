function Article(articleTitle, source, imageTitle, description){
  this.articleTitle = articleTitle;
  this.source = source;
  this.imageTitle = imageTitle;
  this.description = description;
  this.outputArticle = function(){
    document.write("<article class=article-content><h3>"+articleTitle+"</h3><img src="+source+" alt="+imageTitle+" title="+imageTitle+"/><p>"+description+"</p><a href='./article.html'"+">Read More</a></article>");
  }
}

