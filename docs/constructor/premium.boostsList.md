# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 211

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
	count : 4,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'xZWJHV5kyCIO9T3f',
			user_id : 4350154857110928831,
			giveaway_msg_id : 33,
			date : 86,
			expires : 9,
			used_gift_slug : 'tRCLTh2wpx6JPGzQ',
			multiplier : 55,
			stars : -1243280057946758497,
		),
	),
	next_offset : 'ySzO8bnpK4Tu7Lqk',
	users : array(
		$client->userEmpty(
			id : -6076230512913579474,
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
			id : 4863782354175550490,
			access_hash : -5519276890059541484,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NIMBfhR6TEPszHFA',
					reason : 'Guwq7EBZTMyARL4K',
					text : 'rZIwdKHD2lu9EaiM',
				),
			),
			bot_inline_placeholder : 'u1cpeK4AbSmx5hFM',
			lang_code : 'ApxWXbQwJUNDnf8y',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 15,
			color : $client->peerColor(
				color : 87,
				background_emoji_id : -652125009854474763,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : 2670079075881864112,
			),
			bot_active_users : 29,
			bot_verification_icon : 8120342569606866809,
			send_paid_messages_stars : 2121820797704027343,
		),
	),
);
```