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
	count : 0,
	importers : array(
		$client->chatInviteImporter(
			requested : true,
			via_chatlist : true,
			user_id : -1576048652928859665,
			date : 42,
			about : 'BQrVgJEpMOeIzxvY',
			approved_by : -6574994193893940839,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1306716727079757312,
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
			id : 3354015004477314741,
			access_hash : -5750946213229721785,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ucTlJ8XVnNwsAPqZ',
					reason : 'LFMf7HrduESN3mOI',
					text : 'fYjhXMlFG2HK0WpV',
				),
			),
			bot_inline_placeholder : 'RZDuhB59ITeqX2yr',
			lang_code : 'CsZTO9xSaPVe02m6',
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
				max_id : 21,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : 4861552329250809937,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : -6443257548424288421,
			),
			bot_active_users : 4,
			bot_verification_icon : -6750561756631741396,
			send_paid_messages_stars : 7199813309886090208,
		),
	),
);
```