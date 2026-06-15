# messages.chatInviteJoinResultWebView

**Layer** : 227

```tl
messages.chatInviteJoinResultWebView#2f51c337 bot_id:long webview:WebViewResult users:Vector<User> = messages.ChatInviteJoinResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | NOTHING |
| <mark>webview</mark> | [`WebViewResult`](type/WebViewResult) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[messages.ChatInviteJoinResult](type/messages.ChatInviteJoinResult)

---

## Example

```php
$messagesChatInviteJoinResult = $client->messages->chatInviteJoinResultWebView(
	bot_id : 6301832259370506731,
	webview : $client->webViewResultUrl(
		fullsize : true,
		fullscreen : true,
		same_origin : true,
		query_id : -5699910755307257729,
		url : 'https://docs.liveproto.dev',
	),
	users : array(
		$client->userEmpty(
			id : 6236052002394483228,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 8756079714905851037,
			access_hash : -7355328455776439617,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'hmTZI4u1Hi6UkdP7',
					reason : 'GF081oYCNDuyU5Sm',
					text : 'u2cNy9iAYgQ4jsor',
				),
			),
			bot_inline_placeholder : 'EPWjti21wZakODUK',
			lang_code : '79NJEjOWYXUy2ish',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 71,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -6069338672807144428,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -5801378731532935014,
			),
			bot_active_users : 96,
			bot_verification_icon : 8746740145626887542,
			send_paid_messages_stars : 1022623366666760310,
		),
	),
);
```