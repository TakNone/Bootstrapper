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
	count : 84,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : -5882531514390595231,
			date : 54,
			about : 'iZFtKqTC9rVaGQyv',
			approved_by : 563177732045937696,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6099793341056797403,
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
			id : -1017135301181644244,
			access_hash : -154960769994246054,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fqiMnAow82VX73PI',
					reason : '1uirq4FyZc0ATWJo',
					text : 'SKgPMeGuAWnbLcdR',
				),
			),
			bot_inline_placeholder : 'GF4bLHQ3kV5tpdsP',
			lang_code : 'h9Wd13Tm5DZVapFy',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 52,
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 3893807131561466670,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -1158107908476016057,
			),
			bot_active_users : 2,
			bot_verification_icon : 8428459061993153265,
			send_paid_messages_stars : 2348225613174197984,
		),
	),
);
```