# messages.chatInviteImporters

**Description** : *Info about the users that joined the chat using a specific chat invite*

**Layer** : 227

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
	count : 81,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : -3954769365506864032,
			date : 78,
			about : 'SDaYUCvAQb581Lkt',
			approved_by : -921942837251731617,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4398842446219509020,
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
			id : 5953193219854589574,
			access_hash : -566434428497109634,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 74,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '05Qxu8WLmEw97kOz',
					reason : 'pJixmezNYF205ySj',
					text : 'N8TaDLnB1Si9JPoq',
				),
			),
			bot_inline_placeholder : 'kbjIdRQzYEAvVfGJ',
			lang_code : 'z3MUdOxWfVNSbJKG',
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
				max_id : 80,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : 6518264564187009850,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : -1619277162051082822,
			),
			bot_active_users : 83,
			bot_verification_icon : 7655768695469096434,
			send_paid_messages_stars : -1265933365143638998,
		),
	),
);
```