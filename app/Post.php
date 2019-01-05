<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'content'];

    public function category()
    {
      return $this->hasOne(Category::class);
    }

    public function author()
    {
      return $this->hasOne(User::class);
    }

    public function tags()
    {
      return $this->belongsToMany(
          Tag::class,
          'post_tags',
          'post_id',
          'tag_id'
      );
    }

    public function sluggable()
    {
      return [
          'slug' => [
              'source' => 'title'
          ]
      ];
    }

    public function add($fields)
    {
      $post = new static;
      $post->fill([$fields]);
      $post->save();

      return $post;
    }

    public function edit($fields)
    {
     $this->fill($fields);
     $this->save();
    }

    public function remove()
    {
      // логика удаления картинки поста
      $this->delete();

    }

    public function uploadImage($image)
    {
      if ($image == null){ return; }

      Storage::delete('uploads/'.$this->image);
      $filename = str_random(10).'.'.$image->extension();
      $image->saveAs('uploads', $filename);
      $this->$image = $filename;
      $this->save();
    }

    public function setCategory($id)
    {
      if ($id == null){ return; }
//      $caterogy = Category::find($id);
//      $this->category()->save($caterogy);
      $this->category_id = $id;
      $this->save();
    }

    public function setTags($ids)
    {
      if ($ids == null){ return; }

      $this->tags()->sync($ids);
    }

    public function setDraft()
    {
      $this->status = 0;
      $this->save();
    }

    public function setPublic()
    {
      $this->status = 1;
      $this->save();
    }

    public function toggleStatus($value)
    {
      if ($value == null) {
        return $this->setDraft();
      }
      return $this->setPublic();
    }

    public function setFeatured()
    {
      $this->is_featured = 1;
      $this->save();
    }

    public function setStandart()
    {
      $this->is_featured = 0;
      $this->save();
    }

    public function toggleFeatured($value)
    {
      if ($value == null) {
        return $this->setStandart();
      }
      return $this->setFeatured();
    }

    public function getImage()
    {
      if ($this->image == null) {
        return '/img/no-image.png';
      }
      return '/uploads/' . $this->image;
    }
}
