# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 225

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
	count : 70,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'tvXOjWELY1CDi9om',
			user_id : 4892549920049789045,
			giveaway_msg_id : 57,
			date : 0,
			expires : 54,
			used_gift_slug : 'dK0iaqWNstDX9HMR',
			multiplier : 65,
			stars : 1723555474772642589,
		),
	),
	next_offset : '6EpJKqUAQtgny1Ch',
	users : array(
		$client->userEmpty(
			id : 512297333468413977,
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
			id : -8114897646539903734,
			access_hash : -6934356269583131709,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TQpZsvcOzlNiGuge',
					reason : 'T3ISejaUknhAiXf2',
					text : '0VsorKbqTeaLgmyh',
				),
			),
			bot_inline_placeholder : 'UBkY9T3e5jy6bKso',
			lang_code : 'aHLQmMEZ8UxwqX5c',
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
				max_id : 13,
			),
			color : $client->peerColor(
				color : 21,
				background_emoji_id : 5403721849164259797,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : -5805687665115911859,
			),
			bot_active_users : 22,
			bot_verification_icon : -1953684291957148763,
			send_paid_messages_stars : 2659235284523801959,
		),
	),
);
```