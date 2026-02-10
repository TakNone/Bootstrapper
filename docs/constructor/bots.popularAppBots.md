# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 222

```tl
bots.popularAppBots#1991b13b flags:# next_offset:flags.0?string users:Vector<User> = bots.PopularAppBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |
| <mark>users</mark> | [`Vector<User>`](type/User) | The bots associated to each Main Mini App, see here » for more info |

---

## Type

[bots.PopularAppBots](type/bots.PopularAppBots)

---

## Example

```php
$botsPopularAppBots = $client->bots->popularAppBots(
	next_offset : 'uSyYizqJUsHMxfOD',
	users : array(
		$client->userEmpty(
			id : 5085907669141055449,
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
			id : -1602848123115482674,
			access_hash : -4473870964135169088,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lNHgwL50STROaK9v',
					reason : 'oeThWcFZwYH7rVdt',
					text : 'ulIKdaYxznTVMptN',
				),
			),
			bot_inline_placeholder : 'BIarCwp5G7tqivE9',
			lang_code : 'i61BtxWYUsfAMQo9',
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
				max_id : 0,
			),
			color : $client->peerColor(
				color : 19,
				background_emoji_id : -4129411286484281882,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 5494513747226048038,
			),
			bot_active_users : 85,
			bot_verification_icon : -8213793312557105439,
			send_paid_messages_stars : 7935235086707154038,
		),
	),
);
```