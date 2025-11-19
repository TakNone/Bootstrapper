# messages.chatInviteImporters

**Description** : *Info about the users that joined the chat using a specific chat invite*

**Layer** : 218

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
	count : 47,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : -2641306990658567156,
			date : 40,
			about : 'Uhn9u5eOVbDKE8to',
			approved_by : 5533643961337121284,
		),
	),
	users : array(
		$client->userEmpty(
			id : -3471556987551081559,
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
			id : -268336535194149165,
			access_hash : -3871049107927235983,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 50,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'j17uX4WMxFsOVC5A',
					reason : 'GCEdQwDfa2oLt7HJ',
					text : 'mtCSZQzOqFu0gwhI',
				),
			),
			bot_inline_placeholder : '4oSEnr7OjFN3y0iP',
			lang_code : 'DZfTj9vKO8GFXEoN',
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
				max_id : 78,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -7891583578028665465,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : 7408237838008442281,
			),
			bot_active_users : 73,
			bot_verification_icon : 2589074220157966368,
			send_paid_messages_stars : -1166893220378678385,
		),
	),
);
```