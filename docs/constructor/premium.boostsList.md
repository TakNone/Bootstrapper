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
	count : 59,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'aN21ocFzURDhjYVb',
			user_id : 5818378351719854184,
			giveaway_msg_id : 68,
			date : 34,
			expires : 29,
			used_gift_slug : 'j4eKGhD32FgnLYIJ',
			multiplier : 76,
			stars : 3790122739058347665,
		),
	),
	next_offset : 'uvM39xIkG82l0OZW',
	users : array(
		$client->userEmpty(
			id : 4215841386966055927,
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
			id : 847764152858044484,
			access_hash : -4097619945653188700,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '2tcZYny8l1CSbs5E',
					reason : '6H2PntGCOcoamBf9',
					text : 'TeISFUkxKWLc8ful',
				),
			),
			bot_inline_placeholder : 'pbAxQJWysq6n1MUD',
			lang_code : 'PdQC8pgZEz79quIn',
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
				max_id : 42,
			),
			color : $client->peerColor(
				color : 90,
				background_emoji_id : 4444585610209262191,
			),
			profile_color : $client->peerColor(
				color : 22,
				background_emoji_id : 931321336850408230,
			),
			bot_active_users : 26,
			bot_verification_icon : 7032098205969959051,
			send_paid_messages_stars : -7451432635586737134,
		),
	),
);
```