
<html>
<head>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init({
appId:'531466397200033',
cookie:true,
status:true,
xfbml:true
});

function FacebookInviteFriends()
{
 FB.ui({
   method: 'share',
   href:'http://www.techwishes.com/'
  },function(response) {
   if (response) {
    alert('Successfully Invited'+JSON.stringify(response));
   } else {
    alert('Failed To Invite');
   }
  });
}

if (top.location!= self.location)
{
top.location = self.location
}

</script>
</head>

<body>
<div id="fb-root"></div>
<a href='#' onclick="FacebookInviteFriends();"> 
Facebook Invite Friends 
</a>
</body>
</html>