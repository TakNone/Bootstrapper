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
	bot_id : -1803840274596242364,
	webview : $client->webViewResultUrl(
		fullsize : true,
		fullscreen : true,
		same_origin : true,
		query_id : -3643238208010733214,
		url : 'https://docs.liveproto.dev',
	),
	users : array(
		$client->userEmpty(
			id : 4391567419326170650,
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
			id : -9157731046249076297,
			access_hash : -8666145051742826705,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7e9m0JyuTvoNjtGq',
					reason : 'GV1ouzPpADtCjvEK',
					text : 'OCH0fcSqlPNpQvhe',
				),
			),
			bot_inline_placeholder : 'HwiTcyWQDLx7lpah',
			lang_code : 'tc5kIMxeNCjlZYhn',
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
				max_id : 19,
			),
			color : $client->peerColor(
				color : 36,
				background_emoji_id : -7581932724713214039,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 6146238607057709340,
			),
			bot_active_users : 25,
			bot_verification_icon : -3576015467580290817,
			send_paid_messages_stars : -5108042969077614918,
		),
	),
);
```