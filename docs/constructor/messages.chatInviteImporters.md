# messages.chatInviteImporters

**Description** : *Info about the users that joined the chat using a specific chat invite*

**Layer** : 216

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
	count : 78,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : 7898853017010388088,
			date : 45,
			about : 'cGbSK2o01dErBV6w',
			approved_by : 7902694620812813531,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8621927202960357344,
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
			id : 2233656867663986772,
			access_hash : -2066874394074610644,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 14,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6IM02mGBRacxNSCu',
					reason : 'KoWxn1LsPjOrwcE3',
					text : '0TfWicVdvuwE3O1J',
				),
			),
			bot_inline_placeholder : 'i2GdveWtoExR1cXH',
			lang_code : 'SLFJRYaxw3XQNmpf',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 38,
			color : $client->peerColor(
				color : 51,
				background_emoji_id : -4648645158538620888,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 6450241551220654286,
			),
			bot_active_users : 32,
			bot_verification_icon : 5905560430451266523,
			send_paid_messages_stars : 8578833910210259313,
		),
	),
);
```