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
	count : 41,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'q0gWoRbXi5umCwG4',
			user_id : 4781238967750587613,
			giveaway_msg_id : 73,
			date : 31,
			expires : 35,
			used_gift_slug : 'ZRhrMwtl7zjEI5uH',
			multiplier : 70,
			stars : 4303831705852301205,
		),
	),
	next_offset : 'am21NTVdAy4zbEQq',
	users : array(
		$client->userEmpty(
			id : -5179433844064836310,
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
			id : -1180194481046050258,
			access_hash : -3255462670293419112,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gH036qEJI5XwFWLa',
					reason : 'Z4HJ2AEgycxIo7lb',
					text : 'BpMa6PXeOHVFYtby',
				),
			),
			bot_inline_placeholder : 'C0u1IzjOqlDURNvX',
			lang_code : 'gDfUmzTe3iYFvBIK',
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
				max_id : 19,
			),
			color : $client->peerColor(
				color : 9,
				background_emoji_id : 6178055112718746313,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : -4140191964214258826,
			),
			bot_active_users : 88,
			bot_verification_icon : -860864095520276051,
			send_paid_messages_stars : -8381619371622515710,
		),
	),
);
```