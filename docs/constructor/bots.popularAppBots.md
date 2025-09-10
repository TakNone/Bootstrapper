# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 214

```tl
bots.popularAppBots#1991b13b flags:# next_offset:flags.0?string users:Vector<User> = bots.PopularAppBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |
| <mark>users</mark> | [`Vector<User>`](type/User) | The bots associated to each Main Mini App, see here » for more info |

---

## Type

[bots.PopularAppBots](type/bots.PopularAppBots)

---

## Example

```php
$botsPopularAppBots = $client->bots->popularAppBots(
	next_offset : 'SAb5fUtJqkT1ymwP',
	users : array(
		$client->userEmpty(
			id : -151087803803001652,
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
			id : 7471791573224398354,
			access_hash : 4564452094435472065,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 85,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gz4weU1fXxCmLWM0',
					reason : 'xAfeO5QIdoaVFMD0',
					text : '62DTwo1iEHFBn734',
				),
			),
			bot_inline_placeholder : 'OTcInKsNzMhVaykE',
			lang_code : 'HFAtQMlf1DVq06nN',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 77,
			color : $client->peerColor(
				color : 64,
				background_emoji_id : -6464752734655037377,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -6070044653395372238,
			),
			bot_active_users : 27,
			bot_verification_icon : 7703895476149530159,
			send_paid_messages_stars : -1150228087881412518,
		),
	),
);
```