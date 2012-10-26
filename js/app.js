var Blog, BlogCollection, IndividualBlogView, ListOfBlogsView, Router,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };



var BlogItem = Backbone.Model.extend({
  urlRoot: '/blog',
  
  initialize: function() {
    //nothing right now
  }
});

var BlogCollection = Backbone.Collection.extend({
  model: BlogItem,
});

var BlogView = Backbone.View.extend({
  el: $('#blog'),
  
  initialize: function() {
    
  },
  
  render: function() {
    this.$el.html('lkjsdf');
  }
});

var Router = Backbone.Router({
  routes: {
    '' : 'index'
  },
  
  index: function() {
    this.BlogCollection.fetch()
  }
});


Backbone.history.start();