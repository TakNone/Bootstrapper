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
	count : 46,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'DMs9fRKckqVgTJWL',
			user_id : -6692437835394759696,
			giveaway_msg_id : 46,
			date : 44,
			expires : 60,
			used_gift_slug : '1QgK4NEiPbVuDlBJ',
			multiplier : 64,
			stars : 4881835600221836698,
		),
	),
	next_offset : 'QU5ojEYSkxeFaL9d',
	users : array(
		$client->userEmpty(
			id : 1001230000411118020,
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
			id : 4444923524691131352,
			access_hash : -7810185408964266584,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CNW3nxhMwFLKg0aE',
					reason : 'nvFmxpTDK6PCH4hW',
					text : 'FjGWt3mJ4BSDqcvw',
				),
			),
			bot_inline_placeholder : 'htKIWo1cpzkGZR3x',
			lang_code : 'lQkwV9hJDHzrZpqc',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 75,
			color : $client->peerColor(
				color : 6,
				background_emoji_id : 7782385914418867579,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : -3919488840184526001,
			),
			bot_active_users : 25,
			bot_verification_icon : 5968684457175988682,
			send_paid_messages_stars : 3858813397608654307,
		),
	),
);
```