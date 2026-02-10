# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 222

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
	count : 40,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'q52sZVkxne7QU89I',
			user_id : -2556560875620992550,
			giveaway_msg_id : 11,
			date : 42,
			expires : 61,
			used_gift_slug : 'phMeqTPwF0WCromI',
			multiplier : 77,
			stars : 8819263501354727260,
		),
	),
	next_offset : 'owS5JT4zDVk9cyAR',
	users : array(
		$client->userEmpty(
			id : 2457706929396482387,
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
			id : -3576207060580071682,
			access_hash : -629731685502608053,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'F6JWNguMzriv3GOY',
					reason : 'Z7XmOvoM9hWa3HJd',
					text : 'YZ0lEzXabJgMWVdU',
				),
			),
			bot_inline_placeholder : 'OZliM5WsCAD4jKuE',
			lang_code : 'FhCSJMqGZnAb4XpY',
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
				max_id : 63,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : -466902844177340665,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : 3354275296301957741,
			),
			bot_active_users : 78,
			bot_verification_icon : 8290805869362814219,
			send_paid_messages_stars : -1533180977877998975,
		),
	),
);
```