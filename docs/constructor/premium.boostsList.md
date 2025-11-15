# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 216

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
	count : 9,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'wvYsFyJA1VjRDqld',
			user_id : 1670983101059581243,
			giveaway_msg_id : 2,
			date : 15,
			expires : 47,
			used_gift_slug : 'shzSuGP7AfXo2Ht5',
			multiplier : 14,
			stars : -649526708416621009,
		),
	),
	next_offset : '3nPG6tsbJjF8MyuL',
	users : array(
		$client->userEmpty(
			id : -4789319745063324385,
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
			id : 6731395632070596676,
			access_hash : 5733069258487802275,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CofK86IbaUg1hyBH',
					reason : '3xThf9lPrsnHF7jB',
					text : 'R6KGYUj3F2MnELJ1',
				),
			),
			bot_inline_placeholder : 'CMIQtpH9E3L5Y4BO',
			lang_code : 'Zy21ncBQJloksq5G',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 99,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -3536558709310196355,
			),
			profile_color : $client->peerColor(
				color : 55,
				background_emoji_id : -7172070255244425939,
			),
			bot_active_users : 12,
			bot_verification_icon : 6133640200439116489,
			send_paid_messages_stars : -5929648088547670409,
		),
	),
);
```