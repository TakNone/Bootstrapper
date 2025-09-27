# messages.chatInviteImporters

**Description** : *Info about the users that joined the chat using a specific chat invite*

**Layer** : 214

```tl
messages.chatInviteImporters#81b6b00a count:int importers:Vector<ChatInviteImporter> users:Vector<User> = messages.ChatInviteImporters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of users that joined |
| <mark>importers</mark> | [`Vector<ChatInviteImporter>`](type/ChatInviteImporter) | The users that joined |
| <mark>users</mark> | [`Vector<User>`](type/User) | The users that joined |

---

## Type

[messages.ChatInviteImporters](type/messages.ChatInviteImporters)

---

## Example

```php
$messagesChatInviteImporters = $client->messages->chatInviteImporters(
	count : 96,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : 8735203085183932488,
			date : 74,
			about : 'GjC4BaM8XY21zDuA',
			approved_by : -8436207554052851158,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7908354325583322466,
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
			id : 4071738196160295461,
			access_hash : -5475917832856731540,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Cx6LfwOAW0BPZp45',
					reason : 'Ck6oBJ5bGcL2XZsm',
					text : 'ZNiecn0oYXku5fM1',
				),
			),
			bot_inline_placeholder : '6zT1cDKfoXps08iy',
			lang_code : 'q9GUEjsVQTBP7pI4',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 13,
			color : $client->peerColor(
				color : 95,
				background_emoji_id : -4932095427189972599,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : -4179874268241462166,
			),
			bot_active_users : 91,
			bot_verification_icon : -9209566825004591933,
			send_paid_messages_stars : -3180027217987075043,
		),
	),
);
```