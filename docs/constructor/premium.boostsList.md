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
	count : 68,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'gOio2QvbjBUH5pTJ',
			user_id : -3852506778441005204,
			giveaway_msg_id : 88,
			date : 61,
			expires : 49,
			used_gift_slug : 'XGN0HlgzJj6obIZr',
			multiplier : 24,
			stars : 7275452993230587355,
		),
	),
	next_offset : 'Hf6n9NFsOGyqXWQI',
	users : array(
		$client->userEmpty(
			id : 3996331388919508147,
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
			id : 8212902837643687635,
			access_hash : 124029747083278580,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'DFlLMXUkaymS3h5I',
					reason : '7dFpruj6gKsEO38N',
					text : 'Xh14YwfAyLUzi0nZ',
				),
			),
			bot_inline_placeholder : '8pJfuQgAacYtkFoK',
			lang_code : 'afxQlE9ZvIBACNtg',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 29,
			color : $client->peerColor(
				color : 39,
				background_emoji_id : 1245559426136776902,
			),
			profile_color : $client->peerColor(
				color : 28,
				background_emoji_id : 6098276309857318490,
			),
			bot_active_users : 84,
			bot_verification_icon : 8934521513897441261,
			send_paid_messages_stars : -4149430486320903620,
		),
	),
);
```