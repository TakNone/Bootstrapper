# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 227

```tl
premium.boostsList#86f8613c flags:# count:int boosts:Vector<Boost> next_offset:flags.0?string users:Vector<User> = premium.BoostsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 57,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : '5DvQ3cymrKjZzxVb',
			user_id : -9094862254751235710,
			giveaway_msg_id : 25,
			date : 86,
			expires : 36,
			used_gift_slug : 'MGAS7Utz59eNodyu',
			multiplier : 64,
			stars : -6673932161524680302,
		),
	),
	next_offset : 'tQUXzThrIZKx5as7',
	users : array(
		$client->userEmpty(
			id : 3513862788052860562,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 7359470442827887842,
			access_hash : -3704132360258329337,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5j6yMakPovQiHhgJ',
					reason : 'wJ15DCfqFTyBreoV',
					text : 'UvFRb352X194cOlG',
				),
			),
			bot_inline_placeholder : 'JguXMWoxGhqv63Qy',
			lang_code : 'oR5W0htDwd73GrTg',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : -7617146798942522268,
			),
			profile_color : $client->peerColor(
				color : 21,
				background_emoji_id : 6406296719467608663,
			),
			bot_active_users : 76,
			bot_verification_icon : 7981868576902206622,
			send_paid_messages_stars : 3647302344980270940,
		),
	),
);
```