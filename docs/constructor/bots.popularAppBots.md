# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 216

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
	next_offset : 'FyN7Aqs8JTOU3o5i',
	users : array(
		$client->userEmpty(
			id : 8982835356750464724,
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
			id : -5466382834527093079,
			access_hash : -161884681483385168,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'M2Fi5yBWk6Xta4dO',
					reason : 'flQbCtasP8kEB1xM',
					text : 'p5ufeGNLKwb0IPXW',
				),
			),
			bot_inline_placeholder : 'J9VO5crzLntIQvhT',
			lang_code : 'U3KsVwFu2OvgcpkZ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 48,
			color : $client->peerColor(
				color : 93,
				background_emoji_id : 586627912695017356,
			),
			profile_color : $client->peerColor(
				color : 84,
				background_emoji_id : 7892159037014344166,
			),
			bot_active_users : 32,
			bot_verification_icon : 8414237242408196951,
			send_paid_messages_stars : -379086981964674537,
		),
	),
);
```