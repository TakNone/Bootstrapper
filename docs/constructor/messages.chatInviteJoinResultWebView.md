# messages.chatInviteJoinResultWebView

**Layer** : 233

```tl
messages.chatInviteJoinResultWebView#61ca29d3 bot_id:long query_id:long users:Vector<User> = messages.ChatInviteJoinResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>users</mark> | [`Vector<User>`](type/User) | NOTHING |

---

## Type

[messages.ChatInviteJoinResult](type/messages.ChatInviteJoinResult)

---

## Example

```php
$messagesChatInviteJoinResult = $client->messages->chatInviteJoinResultWebView(
	bot_id : 72552276056453808,
	query_id : 7171950426550251180,
	users : array(
		$client->userEmpty(
			id : -1942054226876449748,
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
			bot_forum_sidebar : true,
			id : -1124826574997551289,
			access_hash : 352908995320460924,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 65,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nct7RLswHaYiJvND',
					reason : 'CXzfthku5DVpwUOi',
					text : 'GPrJUenkXop45fyg',
				),
			),
			bot_inline_placeholder : 'JBL6vx17qEwsfZYd',
			lang_code : 'w1pmRPd6XLtIJWzQ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 77,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : 2730355156445415133,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -5538308185612641702,
			),
			bot_active_users : 83,
			bot_verification_icon : -5072765608299026031,
			send_paid_messages_stars : -8276639062183324951,
			linked_community_id : -5880218510260820339,
		),
	),
);
```