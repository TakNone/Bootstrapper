# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 229

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
	count : 65,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'o4fpRh3FNs5geHKM',
			user_id : 7736580617870312676,
			giveaway_msg_id : 53,
			date : 25,
			expires : 99,
			used_gift_slug : 'ycuZ8iCLrHb7jmA9',
			multiplier : 24,
			stars : -4429958566657108686,
		),
	),
	next_offset : 'IgNEWVSnXR6dh7BP',
	users : array(
		$client->userEmpty(
			id : 2888002685904487853,
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
			id : -8788753776578161016,
			access_hash : 4741960128975926647,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5EwVG7CnMrxaAmj9',
					reason : 'svOCzMhFQeAxLyTb',
					text : 'L9haCcpwIt4jrog5',
				),
			),
			bot_inline_placeholder : 'F2UK5Arv9WyMR8lP',
			lang_code : 'qm46fKibSnswtdTy',
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
				max_id : 15,
			),
			color : $client->peerColor(
				color : 43,
				background_emoji_id : 5765469491475193826,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : -1862867760193556201,
			),
			bot_active_users : 28,
			bot_verification_icon : -4897776433276580283,
			send_paid_messages_stars : 4357841834878540639,
			linked_community_id : -5552620320723148953,
		),
	),
);
```