# messages.chatInviteJoinResultWebView

**Layer** : 229

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
	bot_id : -8764182396851043163,
	query_id : -1467759633881335105,
	users : array(
		$client->userEmpty(
			id : -6932970734051422423,
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
			id : 4373724765643011348,
			access_hash : 770386470421994328,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tbTcVjeLnlUQJkNS',
					reason : 'zDy0FPiTqdr2cV8a',
					text : 'eiAGzHbTa5Q8DXNc',
				),
			),
			bot_inline_placeholder : 'XUC1pfmtWIDHwkdN',
			lang_code : 'v8LVHi6FTIwJfPK4',
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
				max_id : 30,
			),
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 6179101146155110195,
			),
			profile_color : $client->peerColor(
				color : 7,
				background_emoji_id : -4898165872604841184,
			),
			bot_active_users : 47,
			bot_verification_icon : 997817052453021611,
			send_paid_messages_stars : 1049026085408967043,
			linked_community_id : -6574552034793657423,
		),
	),
);
```