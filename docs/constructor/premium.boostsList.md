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
	count : 12,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'jRtVPgxGnhqdNBbr',
			user_id : 4579634383773128079,
			giveaway_msg_id : 36,
			date : 86,
			expires : 41,
			used_gift_slug : '7ayjK1sNJIvVp9oD',
			multiplier : 16,
			stars : 1097785793752850794,
		),
	),
	next_offset : '4ioU6SWRmJF1uzg3',
	users : array(
		$client->userEmpty(
			id : -4772229834396093002,
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
			id : 8471096918460948073,
			access_hash : -1040927001370158610,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BTSoLy73uklR5hQz',
					reason : 't2mdMcuZbIrJafnw',
					text : 'o9vO0uUrYdJ4A7EW',
				),
			),
			bot_inline_placeholder : 'H2DfCjOJhplvTb4i',
			lang_code : 'WA7qwH1jdzXY5Qnv',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 44,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -2987437463620597994,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : -9207126660897199558,
			),
			bot_active_users : 10,
			bot_verification_icon : -5709963758878065613,
			send_paid_messages_stars : 3463073382929396069,
		),
	),
);
```