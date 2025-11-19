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
	count : 87,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'YOBtKlJipWES5k2V',
			user_id : 7044695898913428524,
			giveaway_msg_id : 86,
			date : 67,
			expires : 51,
			used_gift_slug : 'eIAvmq1kwaxb6QOP',
			multiplier : 72,
			stars : 1406790391904603076,
		),
	),
	next_offset : 'MOtpaH9DxkJ3hU0R',
	users : array(
		$client->userEmpty(
			id : 5823758744370238871,
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
			id : 3380916404753569630,
			access_hash : -3900314698613867144,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cIxXMmp4b8vaRdPi',
					reason : 'vYcw07jnkMJdbZT6',
					text : '52duNanv4YICF7wh',
				),
			),
			bot_inline_placeholder : '8ldTYeHct5bG1OPu',
			lang_code : 'sSp39Heum2rgw58Z',
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
				max_id : 5,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : 5717621711419862517,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : 2653130515764989620,
			),
			bot_active_users : 72,
			bot_verification_icon : -8330972480020793263,
			send_paid_messages_stars : 3924966290343758253,
		),
	),
);
```