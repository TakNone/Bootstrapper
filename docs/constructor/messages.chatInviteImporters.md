# messages.chatInviteImporters

**Description** : *Info about the users that joined the chat using a specific chat invite*

**Layer** : 229

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
	count : 49,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : -1019675337644073150,
			date : 42,
			about : 'y2ADfE9HthBM4sla',
			approved_by : -5931301564674671941,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8513452541171984215,
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
			id : 2531512799089028661,
			access_hash : 1196472684899860528,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'D1XExqUkBQdwiSlI',
					reason : 'GU1FeSN4pyzZ3Dwu',
					text : 'Mdtsp4RBjFm8ikvV',
				),
			),
			bot_inline_placeholder : 'Aq7cDSKpoL9wkemj',
			lang_code : 'hv3j9mfRBLOQEUs8',
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
				max_id : 29,
			),
			color : $client->peerColor(
				color : 50,
				background_emoji_id : -4068012164898220680,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : -6817947004828184893,
			),
			bot_active_users : 36,
			bot_verification_icon : 829501793083628419,
			send_paid_messages_stars : 4751437898820960033,
			linked_community_id : -7908497271526172892,
		),
	),
);
```