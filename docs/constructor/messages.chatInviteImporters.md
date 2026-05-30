# messages.chatInviteImporters

**Description** : *Info about the users that joined the chat using a specific chat invite*

**Layer** : 222

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
	count : 7,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : 7090128295522429338,
			date : 86,
			about : '8hyuVwHn7GjKb0WI',
			approved_by : 4536025024033561337,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1267678054940971211,
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
			id : -3348910959806514706,
			access_hash : 309270167725091523,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 90,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6S2ktD41zn0iEHVQ',
					reason : 'BtyHZjE5wRDUYzq9',
					text : 'fx6ABo3CWUKIqr2V',
				),
			),
			bot_inline_placeholder : 'oGKq4NM8kaAjBPJg',
			lang_code : 'bnG0ZWAeg6voXHsk',
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
				max_id : 32,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : 3517186386655895843,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 1971143796871541577,
			),
			bot_active_users : 50,
			bot_verification_icon : -5747617957421466312,
			send_paid_messages_stars : -2264409822010909485,
		),
	),
);
```