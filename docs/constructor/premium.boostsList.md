# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 214

```tl
premium.boostsList#86f8613c flags:# count:int boosts:Vector<Boost> next_offset:flags.0?string users:Vector<User> = premium.BoostsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>boosts</mark> | [`Vector<Boost>`](type/Boost) | Boosts |
| **next_offset** | [`flags.0?string`](type/string) | Offset that can be used for pagination |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[premium.BoostsList](type/premium.BoostsList)

---

## Example

```php
$premiumBoostsList = $client->premium->boostsList(
	count : 59,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : '6l2wu83teTMramF0',
			user_id : 4779036642125397852,
			giveaway_msg_id : 95,
			date : 11,
			expires : 39,
			used_gift_slug : 'GJzYioKkEFIMepHA',
			multiplier : 8,
			stars : -6658289224262917467,
		),
	),
	next_offset : 'NqlTsKGLUFk5MIeE',
	users : array(
		$client->userEmpty(
			id : -6901797795552451072,
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
			id : -2332030233701653605,
			access_hash : -4198044757791933089,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 44,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FO8X4WVnHSUAkhs9',
					reason : '6MToK21i0gXphYWS',
					text : 'hnmKaxz7Q3lYBV5r',
				),
			),
			bot_inline_placeholder : '8NRYfmaLbZVDhAtT',
			lang_code : 'SwHpYKWmeN6n3fTI',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 54,
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -4320509531581262211,
			),
			profile_color : $client->peerColor(
				color : 89,
				background_emoji_id : 7099568603753283949,
			),
			bot_active_users : 48,
			bot_verification_icon : 1496610845247757169,
			send_paid_messages_stars : -3669721652941647451,
		),
	),
);
```