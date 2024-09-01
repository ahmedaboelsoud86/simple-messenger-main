<template>
    <h3>Comments:</h3>
    <div style="margin-bottom:50px;" >
      <textarea class="form-control" rows="3" name="body" placeholder="Leave a comment" ></textarea>
      <button class="btn btn-success" style="margin-top:10px" >Save Comment</button>
    </div>
    <div >
      <h4>You must be logged in to submit a comment!</h4> <a href="/login">Login Now &gt;&gt;</a>
    </div>
    <div class="media" style="margin-top:20px;">
      <div class="media-left">
      </div>
      <div class="media-body">
        <h4 class="media-heading">comment.user.name said...</h4>
        <p>
          comment.body
        </p>
        <span style="color: #aaa;">comment.created_at</span>
      </div>
    </div>
</template>
  
  <script>
  export default {
      name: 'HelloVue'
  }
  </script>