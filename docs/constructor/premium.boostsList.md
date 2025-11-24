# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 218

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
	count : 4,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'yCwKmeHFnhQjER8D',
			user_id : -4032958377699297276,
			giveaway_msg_id : 5,
			date : 50,
			expires : 57,
			used_gift_slug : 'jVuewKos65UFWQm3',
			multiplier : 60,
			stars : 4120815320561397890,
		),
	),
	next_offset : '7kuZB249TVMmJKbD',
	users : array(
		$client->userEmpty(
			id : 5360274861363813815,
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
			id : -7239205722030222259,
			access_hash : -3288923272043185182,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '0ehKVJZYLsXjzPp4',
					reason : '9Ojk8AK3SwuhmsQZ',
					text : '3BYfntud78xaSXcJ',
				),
			),
			bot_inline_placeholder : 'DoyJPOZ7XAtxLWKv',
			lang_code : 'Nh2zvJXYRnOdtlWy',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : 4508830591026424185,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : 6778285206031562889,
			),
			bot_active_users : 74,
			bot_verification_icon : -8885507853011232569,
			send_paid_messages_stars : 1726719457050884449,
		),
	),
);
```